<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model istt\wp\models\Usermeta */

$this->title = Yii::t('sakila', 'Update {modelClass}: ', [
    'modelClass' => 'Usermeta',
]) . ' ' . $model->umeta_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('sakila', 'Usermetas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->umeta_id, 'url' => ['view', 'id' => $model->umeta_id]];
$this->params['breadcrumbs'][] = Yii::t('sakila', 'Update');
?>
<div class="usermeta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
