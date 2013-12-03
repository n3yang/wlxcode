<?php
$this->breadcrumbs=array(
	'Messages',
);

$this->menu=array(
	array('label'=>'添加', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>留言</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
