<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblCustomer;

/**
 * TblCustomerSearch represents the model behind the search form of `app\models\TblCustomer`.
 */
class TblCustomerSearch extends TblCustomer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Status'], 'integer'],
            [['Name', 'Address', 'Plat', 'Plong', 'Email', 'Tel', 'Img', 'FacebookLogin', 'Create_Date', 'Update_Date'], 'safe'],
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
        $query = TblCustomer::find();

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
            'Status' => $this->Status,
            'Create_Date' => $this->Create_Date,
            'Update_Date' => $this->Update_Date,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Plat', $this->Plat])
            ->andFilterWhere(['like', 'Plong', $this->Plong])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Tel', $this->Tel])
            ->andFilterWhere(['like', 'Img', $this->Img])
            ->andFilterWhere(['like', 'FacebookLogin', $this->FacebookLogin]);

        return $dataProvider;
    }
}
