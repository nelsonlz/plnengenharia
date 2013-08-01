<?php
$this->breadcrumbs=array(
	'Tipo Projetos'=>array('index'),
	'Manage',
);

$this->menu=array(
    array('label'=>'Novo Tipo de Projeto','icon'=>'pencil','url'=>array('create'),'active'=>true),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('tipo-projeto-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Gerenciar Tipos de Projetos</h2>

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
'id'=>'tipo-projeto-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'descricao',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
