<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Manage',
);

$this->menu=array(
    array('label'=>'Novo Cliente','url'=>'pencil','url'=>array('create'),'active'=>'true'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('cliente-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Gerenciar Clientes</h1>

<p>
    <?php
        Yii::app()->user->setFlash('info', 'Para uma busca mais precisa você pode digitar os seguintes caracteres de comparação<strong>(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>)</strong> antes do valor do filtro');
        $this->widget('bootstrap.widgets.TbAlert', array(
            'block'=>true, // display a larger alert block?
            'fade'=>true, // use transitions?
            'closeText'=>'×', // close link text - if set to false, no close link is displayed
            'alerts'=>array( // configurations per alert type
            'info'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
            ),
        ));
    ?>

<?php echo CHtml::link('Busca Avançada','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'cliente-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'nome',
//		'cpf',
//		'cep',
//		'endereco',
//		'bairro',
//		'complemento',
		'cidade',
		'Estado',
		'Telefone',
		'Telefone2',
		'email',
		
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
