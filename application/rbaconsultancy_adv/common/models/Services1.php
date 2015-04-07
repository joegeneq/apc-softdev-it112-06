<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $service_id
 * @property integer $user_id
 * @property integer $slist_id
 * @property string $service_dateapplied
 * @property string $service_status
 *
 * @property RequirementsPerUser[] $requirementsPerUsers
 * @property User $user
 * @property ServiceList $slist
 */
class Services1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'slist_id'], 'required'],
            [['user_id', 'slist_id'], 'integer'],
            [['service_dateapplied'], 'safe'],
            [['service_status'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'service_id' => 'Service ID',
            'user_id' => 'User ID',
            'slist_id' => 'Slist ID',
            'service_dateapplied' => 'Service Dateapplied',
            'service_status' => 'Service Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequirementsPerUsers()
    {
        return $this->hasMany(RequirementsPerUser::className(), ['service_id' => 'service_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlist()
    {
        return $this->hasOne(ServiceList::className(), ['slist_id' => 'slist_id']);
    }
}
