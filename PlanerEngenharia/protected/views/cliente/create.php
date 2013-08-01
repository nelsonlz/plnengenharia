<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);



$this->menu=array(
    array('label'=>'Gerenciar Clientes','icon'=>'book','url'=>array('admin'),'active'=>true),
);
?>

<h1>Novo Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>