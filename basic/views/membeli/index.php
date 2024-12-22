<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MembeliSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Membelis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="membeli-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Membeli', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Harga_produk',
            'Total_pembelian',
            'Metode_pembelian',
            'Pelanggan_Id_Pelanggan',
            'Produk_Id_Produk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
