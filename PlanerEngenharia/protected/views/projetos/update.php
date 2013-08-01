<?php
$this->breadcrumbs=array(
	'Projetoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
        array('label'=>'Gerenciar Projetos','icon'=>'book','url'=>array('admin'),'active'=>true),
	array('label'=>'Novo Projeto','icon'=>'pencil','url'=>array('create')),
	array('label'=>'Gerenciar Projeto','icon'=>'heart','url'=>array('view','id'=>$model->id)),
	);
	?>

	<h1>Atualizar Projeto #<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>