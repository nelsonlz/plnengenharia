<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'cliente-form',
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

	<?php echo $form->textFieldRow($model,'nome',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'cpf',array('class'=>'span5','maxlength'=>24)); ?>
        <?php echo CHtml::activeLabel($model,'cep'); ?>
        <?php
            $this->widget('CMaskedTextField', array(
                'model' => $model,
                'attribute' => 'cep',
                'mask' => '99999-999',
                'htmlOptions' => array('size' => 10)
            ));
        ?>

        <!-- Início da chamada da extensão -->
        <?php $this->widget('ext.BuscaEnderecoViaCEP', array(
                //'tipo'=>'link',
                //'label'=>'Consultar',
                'model'=>$model,
                'mapeamento'=>array('cep'=>'cep',
                                    'endereco'=>'endereco',
                                    'cidade'=>'cidade',
                                    'bairro'=>'bairro',
                                    'uf'=>'Estado'),
        )); ?>
        <!-- Fim da chamada da extensão -->

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
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Criar' : 'Salvar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
