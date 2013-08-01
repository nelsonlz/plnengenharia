<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Gerenciar Clientes','icon'=>'book','url'=>array('admin'),'active'=>true),
array('label'=>'Novo Cliente','icon'=>'pencil','url'=>array('create')),
array('label'=>'Atualizar Cliente','icon'=>'cog','url'=>array('update','id'=>$model->id)),
array('label'=>'Deletar Cliente','icon'=>'remove','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Projetos'),
array('label'=>'Gerenciar Projeto','icon'=>'book','url'=>array('projetos/admin')),
);
?>

<h2>Cliente <?php echo $model->nome; ?></h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nome',
		'cpf',
		'cep',
		'endereco',
		'bairro',
		'complemento',
		'cidade',
		'Estado',
		'Telefone',
		'Telefone2',
		'email',
),
)); ?>
