<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Organization;

/**
 * OrganizationSearch represents the model behind the search form about `app\models\Organization`.
 */
class OrganizationSearch extends Organization
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'raion', 'parent', 'type', 'deleted', 'ege_code', 'archiver', 'ppe'], 'integer'],
            [['name', 'name_short', 'name_rod', 'ldap_name', 'forma', 'ogrn', 'aindex', 'adres', 'inn', 'kpp', 'rschet', 'lschet', 'descr', 'bank', 'tel_code', 'tel', 'fax', 'email1', 'email2', 'status', 'f1p1_2', 'date_obr', 'date_lic', 'site_addr', 'uchred', 'lic_num', 'lic_end', 'akkr_num', 'akkr_date', 'akkr_end', 'name_dat', 'add_prikaz', 'add_prikaz_date', 'add_type', 'add_date_prov', 'add_yur_addr', 'add_date_egrul'], 'safe'],
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
        $query = Organization::find();

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
            'raion' => $this->raion,
            'parent' => $this->parent,
            'type' => $this->type,
            'deleted' => $this->deleted,
            'ege_code' => $this->ege_code,
            'date_obr' => $this->date_obr,
            'date_lic' => $this->date_lic,
            'archiver' => $this->archiver,
            'ppe' => $this->ppe,
            'lic_end' => $this->lic_end,
            'akkr_date' => $this->akkr_date,
            'akkr_end' => $this->akkr_end,
            'add_prikaz_date' => $this->add_prikaz_date,
            'add_date_prov' => $this->add_date_prov,
            'add_date_egrul' => $this->add_date_egrul,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'name_short', $this->name_short])
            ->andFilterWhere(['like', 'name_rod', $this->name_rod])
            ->andFilterWhere(['like', 'ldap_name', $this->ldap_name])
            ->andFilterWhere(['like', 'forma', $this->forma])
            ->andFilterWhere(['like', 'ogrn', $this->ogrn])
            ->andFilterWhere(['like', 'aindex', $this->aindex])
            ->andFilterWhere(['like', 'adres', $this->adres])
            ->andFilterWhere(['like', 'inn', $this->inn])
            ->andFilterWhere(['like', 'kpp', $this->kpp])
            ->andFilterWhere(['like', 'rschet', $this->rschet])
            ->andFilterWhere(['like', 'lschet', $this->lschet])
            ->andFilterWhere(['like', 'descr', $this->descr])
            ->andFilterWhere(['like', 'bank', $this->bank])
            ->andFilterWhere(['like', 'tel_code', $this->tel_code])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email1', $this->email1])
            ->andFilterWhere(['like', 'email2', $this->email2])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'f1p1_2', $this->f1p1_2])
            ->andFilterWhere(['like', 'site_addr', $this->site_addr])
            ->andFilterWhere(['like', 'uchred', $this->uchred])
            ->andFilterWhere(['like', 'lic_num', $this->lic_num])
            ->andFilterWhere(['like', 'akkr_num', $this->akkr_num])
            ->andFilterWhere(['like', 'name_dat', $this->name_dat])
            ->andFilterWhere(['like', 'add_prikaz', $this->add_prikaz])
            ->andFilterWhere(['like', 'add_type', $this->add_type])
            ->andFilterWhere(['like', 'add_yur_addr', $this->add_yur_addr]);

        return $dataProvider;
    }
}
