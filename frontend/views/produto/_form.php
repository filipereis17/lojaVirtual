<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
    	<div class="col-sm-3">
    		<?= $form->field($model, 'codigo')->textInput(['maxlength' => true]) ?>
    	</div>
    	<div class="col-sm-6">
    		<?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
    	</div>
    	<div class="col-sm-3">
    		<?= $form->field($model, 'preco')->textInput() ?>
    	</div>	
	</div>
	<div class="row">
		<div class="col-lg-12">
			<?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>
		</div>
	</div>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Voltar', ['index'], ['class' => 'btn btn-danger btn-bottom']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
