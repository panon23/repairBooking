<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblTechnician;

/**
 * TblTechnicianSearch represents the model behind the search form of `app\models\TblTechnician`.
 */
class TblTechnicianSearch extends TblTechnician
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Status', 'User_id'], 'integer'],
            [['Name', 'Address', 'Email', 'Tel', 'Img', 'Create_Date', 'Update_Date'], 'safe'],
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
        $query = TblTechnician::find();

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
            'User_id' => $this->User_id,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Tel', $this->Tel])
            ->andFilterWhere(['like', 'Img', $this->Img]);

        return $dataProvider;
    }
}
