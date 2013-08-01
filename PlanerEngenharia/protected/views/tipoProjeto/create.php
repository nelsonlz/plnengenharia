<?php
$this->breadcrumbs=array(
	'Tipo Projetos'=>array('index'),
	'Novo',
);

$this->menu=array(
array('label'=>'Gerenciar Tipos','icon'=>'book','url'=>array('admin'),'active'=>true),
);
?>

<h2>Novo Tipo de Projeto</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>