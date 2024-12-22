<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Membeli;

/**
 * MembeliSearch represents the model behind the search form of `app\models\Membeli`.
 */
class MembeliSearch extends Membeli
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Harga_produk', 'Total_pembelian', 'Pelanggan_Id_Pelanggan', 'Produk_Id_Produk'], 'integer'],
            [['Metode_pembelian'], 'safe'],
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
        $query = Membeli::find();

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
            'Harga_produk' => $this->Harga_produk,
            'Total_pembelian' => $this->Total_pembelian,
            'Pelanggan_Id_Pelanggan' => $this->Pelanggan_Id_Pelanggan,
            'Produk_Id_Produk' => $this->Produk_Id_Produk,
        ]);

        $query->andFilterWhere(['like', 'Metode_pembelian', $this->Metode_pembelian]);

        return $dataProvider;
    }
}
