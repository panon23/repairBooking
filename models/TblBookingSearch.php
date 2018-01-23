<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblBooking;

/**
 * TblBookingSearch represents the model behind the search form of `app\models\TblBooking`.
 */
class TblBookingSearch extends TblBooking
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Cus_id', 'Technic_id', 'Status', 'User_id'], 'integer'],
            [['Date', 'Creare_Date', 'Update_Date'], 'safe'],
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
        $query = TblBooking::find();

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
            'ID' => $this->ID,
            'Cus_id' => $this->Cus_id,
            'Technic_id' => $this->Technic_id,
            'Date' => $this->Date,
            'Status' => $this->Status,
            'Creare_Date' => $this->Creare_Date,
            'Update_Date' => $this->Update_Date,
            'User_id' => $this->User_id,
        ]);

        return $dataProvider;
    }
}
