<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'org', 'count', 'theme', 'active', 'field_set', 'config'], 'integer'],
            [['name', 'nik', 'pas', 'data_reg', 'icon', 'email', 'ip_addr', 'last_log', 'type', 'addon'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = User::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'org' => $this->org,
            'count' => $this->count,
            'data_reg' => $this->data_reg,
            'theme' => $this->theme,
            'last_log' => $this->last_log,
            'active' => $this->active,
            'field_set' => $this->field_set,
            'config' => $this->config,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'pas', $this->pas])
            ->andFilterWhere(['like', 'icon', $this->icon])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'ip_addr', $this->ip_addr])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'addon', $this->addon]);

        return $dataProvider;
    }
}
