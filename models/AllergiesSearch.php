<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Allergien;

/**
 * AllergiesSearch represents the model behind the search form of `app\models\Allergien`.
 */
class AllergiesSearch extends Allergien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'created_by', 'updated_at'], 'integer'],
            [['titel', 'symtomps', 'causes', 'further_informations'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Allergien::find();

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
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'titel', $this->titel])
            ->andFilterWhere(['like', 'symtomps', $this->symtomps])
            ->andFilterWhere(['like', 'causes', $this->causes])
            ->andFilterWhere(['like', 'further_informations', $this->further_informations]);

        return $dataProvider;
    }
}
