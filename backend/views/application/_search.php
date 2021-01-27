<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ApplicationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="application-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'yuridik_name') ?>

    <?= $form->field($model, 'organization_form') ?>

    <?= $form->field($model, 'inn') ?>

    <?= $form->field($model, 'legal_address') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'legal_tell') ?>

    <?php // echo $form->field($model, 'legal_email') ?>

    <?php // echo $form->field($model, 'tourist_destination') ?>

    <?php // echo $form->field($model, 'manager_name') ?>

    <?php // echo $form->field($model, 'passport_data') ?>

    <?php // echo $form->field($model, 'actual_address') ?>

    <?php // echo $form->field($model, 'manager_phone') ?>

    <?php // echo $form->field($model, 'birth_date') ?>

    <?php // echo $form->field($model, 'reference') ?>

    <?php // echo $form->field($model, 'site_name') ?>

    <?php // echo $form->field($model, 'site_link') ?>

    <?php // echo $form->field($model, 'copy_document') ?>

    <?php // echo $form->field($model, 'certificate_conformity') ?>

    <?php // echo $form->field($model, 'ninfl') ?>

    <?php // echo $form->field($model, 'summa') ?>

    <?php // echo $form->field($model, 'sugirta_policy') ?>

    <?php // echo $form->field($model, 'certificate') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
