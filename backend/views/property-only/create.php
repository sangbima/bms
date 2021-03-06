<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Property */

$this->title = 'Create Property';
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="property-create">

    <div class="box-header with-border">
    	<h3 class="box-title" style="margin-left:10px;"><?= Html::encode($this->title) ?></h3>
    <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
