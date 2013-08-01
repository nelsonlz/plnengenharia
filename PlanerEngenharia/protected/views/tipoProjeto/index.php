<?php
$this->breadcrumbs=array(
	'Tipo Projetos',
);

$this->menu=array(
array('label'=>'Create TipoProjeto','url'=>array('create')),
array('label'=>'Manage TipoProjeto','url'=>array('admin')),
);
?>

<h1>Tipo Projetos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
