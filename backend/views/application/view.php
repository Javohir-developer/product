<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Application */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="application-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'yuridik_name',
            'organization_form',
            'inn',
            'legal_address',
            'region',
            'legal_tell',
            'legal_email:email',
            'tourist_destination',
            'manager_name',
            'passport_data',
            'actual_address',
            'manager_phone',
            'birth_date',
            'reference',
            'site_name',
            'site_link',
            'copy_document',
            'certificate_conformity',
            'ninfl',
            'summa',
            'sugirta_policy',
            'certificate',
            'status',
            'user_id',
        ],
    ]) ?>

</div>
