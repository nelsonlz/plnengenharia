<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'projetos-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php
        Yii::app()->user->setFlash('info', 'Campos com <strong>*</strong> São obrigatórios');
        $this->widget('bootstrap.widgets.TbAlert', array(
            'block'=>true, // display a larger alert block?
            'fade'=>true, // use transitions?
            'closeText'=>'×', // close link text - if set to false, no close link is displayed
            'alerts'=>array( // configurations per alert type
            'info'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
            ),
        ));
    ?>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'id_cliente',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'Entrada',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'tipoProjeto',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Criar' : 'Salvar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
