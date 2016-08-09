<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organizationType".
 *
 * @property integer $id
 * @property string $name
 * @property string $descr
 * @property integer $parent
 */
class OrganizationType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organizationType';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'descr'], 'required'],
            [['parent'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['descr'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'descr' => 'Descr',
            'parent' => 'Parent',
        ];
    }

    public function getNameById($id)
    {
        return $this->findOne($id)->name;
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::className(),['id' => 'type']);
    }
}
