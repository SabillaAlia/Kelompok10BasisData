<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "membeli".
 *
 * @property int $Harga_produk
 * @property int $Total_pembelian
 * @property string $Metode_pembelian
 * @property int $Pelanggan_Id_Pelanggan
 * @property int $Produk_Id_Produk
 *
 * @property Pelanggan $pelangganIdPelanggan
 * @property Produk $produkIdProduk
 */
class Membeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'membeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Harga_produk', 'Total_pembelian', 'Metode_pembelian', 'Pelanggan_Id_Pelanggan', 'Produk_Id_Produk'], 'required'],
            [['Harga_produk', 'Total_pembelian', 'Pelanggan_Id_Pelanggan', 'Produk_Id_Produk'], 'integer'],
            [['Metode_pembelian'], 'string', 'max' => 45],
            [['Produk_Id_Produk'], 'unique'],
            [['Pelanggan_Id_Pelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['Pelanggan_Id_Pelanggan' => 'Id_Pelanggan']],
            [['Produk_Id_Produk'], 'exist', 'skipOnError' => true, 'targetClass' => Produk::className(), 'targetAttribute' => ['Produk_Id_Produk' => 'Id_Produk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Harga_produk' => 'Harga Produk',
            'Total_pembelian' => 'Total Pembelian',
            'Metode_pembelian' => 'Metode Pembelian',
            'Pelanggan_Id_Pelanggan' => 'Pelanggan Id Pelanggan',
            'Produk_Id_Produk' => 'Produk Id Produk',
        ];
    }

    /**
     * Gets query for [[PelangganIdPelanggan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPelangganIdPelanggan()
    {
        return $this->hasOne(Pelanggan::className(), ['Id_Pelanggan' => 'Pelanggan_Id_Pelanggan']);
    }

    /**
     * Gets query for [[ProdukIdProduk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdukIdProduk()
    {
        return $this->hasOne(Produk::className(), ['Id_Produk' => 'Produk_Id_Produk']);
    }
}
