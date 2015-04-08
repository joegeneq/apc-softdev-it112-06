<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Services1;

/**
 * Services1Search represents the model behind the search form about `common\models\Services1`.
 */
class Services1Search extends Services1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_id', 'user_id', 'slist_id'], 'integer'],
            [['service_dateapplied', 'service_status'], 'safe'],
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
        $query = Services1::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'service_id' => $this->service_id,
            'user_id' => $this->user_id,
            'slist_id' => $this->slist_id,
            'service_dateapplied' => $this->service_dateapplied,
        ]);

        $query->andFilterWhere(['like', 'service_status', $this->service_status]);

        return $dataProvider;
    }
}
