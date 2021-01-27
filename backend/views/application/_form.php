<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Application */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="application-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'yuridik_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_form')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'legal_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'legal_tell')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'legal_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tourist_destination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'manager_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'passport_data')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actual_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'manager_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <?= $form->field($model, 'reference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'copy_document')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate_conformity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ninfl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'summa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sugirta_policy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
