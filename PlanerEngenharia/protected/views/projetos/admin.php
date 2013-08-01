<?php
$this->breadcrumbs=array(
	'Projetoses'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'Gerenciar Cliente','icon'=>'heart','url'=>array('cliente/view/1'),'active'=>true),
array('label'=>'Novo Projeto','icon'=>'pencil','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('projetos-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Gerenciar Projetos</h1>

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
'id'=>'projetos-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
//		'id_cliente',
		'Entrada',
		'tipoProjeto',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
