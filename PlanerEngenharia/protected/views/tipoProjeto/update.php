<?php
$this->breadcrumbs=array(
	'Tipo Projetos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
            array('label'=>'Gerenciar Tipos de Projeto','icon'=>'book','url'=>array('admin'),'active'=>true),
            array('label'=>'Novo Tipo de Projeto','icon'=>'pencil','url'=>array('create')),
            array('label'=>'Ver Tipo de Projeto','icon'=>'eye-open','url'=>array('view','id'=>$model->id)),
	);
	?>

	<h1>Atualizar Tipo de Projeto <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>