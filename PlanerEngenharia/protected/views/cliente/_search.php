<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nome',array('class'=>'span5','maxlength'=>40)); ?>

		<?php echo $form->textFieldRow($model,'cpf',array('class'=>'span5','maxlength'=>24)); ?>

		<?php echo $form->textFieldRow($model,'cep',array('class'=>'span5','maxlength'=>14)); ?>

		<?php echo $form->textFieldRow($model,'endereco',array('class'=>'span5','maxlength'=>40)); ?>

		<?php echo $form->textFieldRow($model,'bairro',array('class'=>'span5','maxlength'=>40)); ?>

		<?php echo $form->textFieldRow($model,'complemento',array('class'=>'span5','maxlength'=>40)); ?>

		<?php echo $form->textFieldRow($model,'cidade',array('class'=>'span5','maxlength'=>40)); ?>

		<?php echo $form->textFieldRow($model,'Estado',array('class'=>'span5','maxlength'=>40)); ?>

		<?php echo $form->textFieldRow($model,'Telefone',array('class'=>'span5','maxlength'=>24)); ?>

		<?php echo $form->textFieldRow($model,'Telefone2',array('class'=>'span5','maxlength'=>24)); ?>

		<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
