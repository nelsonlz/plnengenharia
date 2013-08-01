<?php
$this->breadcrumbs=array(
	'Projetoses',
);

$this->menu=array(
array('label'=>'Create Projetos','url'=>array('create')),
array('label'=>'Manage Projetos','url'=>array('admin')),
);
?>

<h1>Projetoses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
