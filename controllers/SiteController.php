<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Municipality;
use app\models\Organization;
use app\models\OrganizationType;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Municipality();
        return $this->render('index', [
            'model' => $model->getMunicipalitiesForIndex(),
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionOrganizationsByMunicipality($id)
    {
        $organizationModel = new Organization();
        $title = new Municipality();
        $availableTypes = $organizationModel->find()->select('ot.id, ot.name')
            ->join('JOIN','organizationType ot','`ot`.`id`=`type`')
            ->where(['raion' => $id])->distinct(true)->orderBy('ot.id')->all();
        $availableTypes = ArrayHelper::toArray($availableTypes);
        $i = 0;
        foreach ($availableTypes as $availableType) {
            $organizationsByType = $organizationModel->find()->select('id, name')
                ->where(['type' => $availableType['id'], 'raion' => $id])->orderBy('name')->all();
            $organizationsByType = ArrayHelper::toArray($organizationsByType);
            $availableTypes[$i]['id'] = $availableType['id'];
            $availableTypes[$i]['name'] = $availableType['name'];
            $availableTypes[$i]['organizations'] = $organizationsByType;
            unset($organizationsByType);
            $i++;
        }
        /*$organizationTypeAttributes = [];
        $organizationsByType = [];
        $organizationType = new OrganizationType();
        $organization = new Organization();
        $organizationTypeArray = $organizationType->find()->all();
        foreach ($organizationTypeArray as $item)
        {
            $organizationTypeAttributes[$item->attributes['id']] = $item->attributes['name'];
            $organizations = $organization->find()->where(['type' => $item->attributes['id'], 'raion' => $id])
                ->orderBy('name')->all();
            foreach ($organizations as $singleOrganization)
            {
                $organizationsByType[$singleOrganization->attributes['id']] = $singleOrganization->attributes['name'];
            }
            $organizationTypeAttributes[$item->attributes['id']] = $organizationsByType;
        }*/
        return $this->render('organizationbymunicipality',[
            'model' => $availableTypes,
            'municipality' => $title->find()->where(['id' => $id])->one()
        ]);
    }
}
