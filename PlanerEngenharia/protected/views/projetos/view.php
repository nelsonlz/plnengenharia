<?php
$this->breadcrumbs=array(
	'Projetoses'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Projetos','url'=>array('index')),
array('label'=>'Create Projetos','url'=>array('create')),
array('label'=>'Update Projetos','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Projetos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Projetos','url'=>array('admin')),
);
?>

<h1>View Projetos #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'id_cliente',
		'Entrada',
		'tipoProjeto',
),
)); ?>
