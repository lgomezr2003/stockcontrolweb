<?php
$this->breadcrumbs=array(
	'Venta Detalles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VentaDetalle', 'url'=>array('index')),
	array('label'=>'Create VentaDetalle', 'url'=>array('create')),
	array('label'=>'Update VentaDetalle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VentaDetalle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VentaDetalle', 'url'=>array('admin')),
);
?>

<h1>View VentaDetalle #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idVenta',
		'idProducto',
		'cantidad',
		'precioUnitario',
		'eliminado',
	),
)); ?>
