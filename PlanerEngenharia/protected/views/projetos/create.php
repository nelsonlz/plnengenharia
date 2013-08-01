<?php
$this->breadcrumbs=array(
	'Projetoses'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Gerenciar Projetos','icon'=>'book','url'=>array('admin'),'active'=>true),
);
?>

<h2>Novo Projeto</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>