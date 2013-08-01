<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
            array('label'=>'Gerenciar Clientes','icon'=>'book','url'=>array('admin'),'active'=>true),
            array('label'=>'Novo Cliente','icon'=>'pencil','url'=>array('create')),
	);
	?>

	<h1>Atualizar Cliente <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>