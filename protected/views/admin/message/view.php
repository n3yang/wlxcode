<?php
$this->breadcrumbs=array(
	'Messages'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'添加', 'url'=>array('create')),
	array('label'=>'更新', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除此条记录吗？')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>查看留言 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'mobile',
		'email',
		'address',
		'content',
		'time_create',
		array('label'=>'类型', 'value'=>$model->getTypeName($model->type)),
	),
)); ?>
