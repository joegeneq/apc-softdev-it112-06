<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "service_list".
 *
 * @property integer $slist_id
 * @property string $slist_name
 * @property string $slist_desc
 * @property string $slist_type
 * @property string $slist_dateadded
 *
 * @property PriceList[] $priceLists
 * @property RequirementsList[] $requirementsLists
 * @property Services[] $services
 */
class ServiceList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slist_name', 'slist_type'], 'required'],
            [['slist_desc'], 'string'],
            [['slist_dateadded'], 'safe'],
            [['slist_name'], 'string', 'max' => 255],
            [['slist_type'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'slist_id' => 'Slist ID',
            'slist_name' => 'Slist Name',
            'slist_desc' => 'Slist Desc',
            'slist_type' => 'Slist Type',
            'slist_dateadded' => 'Slist Dateadded',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPriceLists()
    {
        return $this->hasMany(PriceList::className(), ['slist_id' => 'slist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequirementsLists()
    {
        return $this->hasMany(RequirementsList::className(), ['slist_id' => 'slist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Services::className(), ['slist_id' => 'slist_id']);
    }
}
