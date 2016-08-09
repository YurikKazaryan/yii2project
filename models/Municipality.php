<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "municipality".
 *
 * @property integer $id
 * @property integer $parent
 * @property string $descr
 * @property string $name
 * @property string $name_short
 */
class Municipality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'municipality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent'], 'integer'],
            [['descr', 'name', 'name_short'], 'required'],
            [['descr'], 'string', 'max' => 25],
            [['name'], 'string', 'max' => 150],
            [['name_short'], 'string', 'max' => 75],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent' => 'Parent',
            'descr' => 'Descr',
            'name' => 'Name',
            'name_short' => 'Name Short',
        ];
    }

    public function getMunicipalitiesForIndex(){
        return $this->find()->where('id != 67')->orderBy('name')->all();
    }

}
