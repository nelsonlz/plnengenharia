<?php
$this->breadcrumbs=array(
	'Tipo Projetos'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List TipoProjeto','url'=>array('index')),
array('label'=>'Create TipoProjeto','url'=>array('create')),
array('label'=>'Update TipoProjeto','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete TipoProjeto','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage TipoProjeto','url'=>array('admin')),
);
?>

<h1>View TipoProjeto #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'descricao',
),
)); ?>
