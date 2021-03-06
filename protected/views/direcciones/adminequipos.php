<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */

$this->breadcrumbs=array(
	'Direcciones'=>array('index'),
	'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#direcciones-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>EQUIPOS</h1>


<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'direcciones-grid',
	'dataProvider'=>$model->search(),
        'type' => 'striped bordered condensed',
	'filter'=>$model,
	'columns'=>array(
		array(
                    'name' =>'IP',
                    'value'=>'$data->pkficha->ip',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),
                array(
                    'name' =>'MAC',
                    'value'=>'$data->pkficha->mac',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),
		array(
                    'name' =>'TERMINAL',
                    'value'=>'$data->pkficha->responsable',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),
                array(
                    'name' =>'USUARIO',
                    'value'=>'$data->pkficha->pkusuario->nomusu',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),
                array(
                    'name' =>'DEPARTAMENTO',
                    'value'=>'$data->pkficha->pkdepartamento->nomdepar',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
