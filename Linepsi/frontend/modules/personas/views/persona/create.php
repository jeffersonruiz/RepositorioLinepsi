<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\personas\models\Persona */

$this->title = 'Registrar Persona';
$this->params['breadcrumbs'][] = ['label' => 'Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
