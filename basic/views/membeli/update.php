<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Membeli */

$this->title = 'Update Membeli: ' . $model->Produk_Id_Produk;
$this->params['breadcrumbs'][] = ['label' => 'Membelis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Produk_Id_Produk, 'url' => ['view', 'id' => $model->Produk_Id_Produk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="membeli-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
