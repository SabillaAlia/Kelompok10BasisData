<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MembeliSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="membeli-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Harga_produk') ?>

    <?= $form->field($model, 'Total_pembelian') ?>

    <?= $form->field($model, 'Metode_pembelian') ?>

    <?= $form->field($model, 'Pelanggan_Id_Pelanggan') ?>

    <?= $form->field($model, 'Produk_Id_Produk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
