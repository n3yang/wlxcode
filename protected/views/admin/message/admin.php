<?php
$this->breadcrumbs=array(
	'Messages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'添加', 'url'=>array('create')),
	array('label'=>'导出', 'url'=>array('export')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('message-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理留言</h1>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'message-grid',
	'dataProvider'=>$model->search(),

	'columns'=>array(
		array('name'=>'name', 'headerHtmlOptions'=>array('style'=>'width:40px')),
		'mobile',
		/*
		'email',
		'address',
		*/
		'content',
		array('name'=>'type', 
			'value'=>'$data->getTypeName($data->type)',
			'headerHtmlOptions'=>array('style'=>'width:40px')
			),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
