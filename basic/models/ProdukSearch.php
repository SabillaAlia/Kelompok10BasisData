<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Produk;

/**
 * ProdukSearch represents the model behind the search form of `app\models\Produk`.
 */
class ProdukSearch extends Produk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Produk', 'Id_pnjual', 'Harga'], 'integer'],
            [['Nama_produk'], 'safe'],
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
        $query = Produk::find();

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
            'Id_Produk' => $this->Id_Produk,
            'Id_pnjual' => $this->Id_pnjual,
            'Harga' => $this->Harga,
        ]);

        $query->andFilterWhere(['like', 'Nama_produk', $this->Nama_produk]);

        return $dataProvider;
    }
}