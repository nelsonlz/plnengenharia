<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Entrada')); ?>:</b>
	<?php echo CHtml::encode($data->Entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoProjeto')); ?>:</b>
	<?php echo CHtml::encode($data->tipoProjeto); ?>
	<br />


</div>