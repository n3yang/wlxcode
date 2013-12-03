<div class="view">

<ul style="list-style-type:none;line-height: 150%">
	<li>
		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	</li>
	<li>
		<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
		<?php echo CHtml::encode($data->name); ?>
	</li>
	<li>
		<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
		<?php echo CHtml::encode($data->mobile); ?>
	</li>
	<li>
		<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
		<?php echo CHtml::encode($data->email); ?>
	</li>
	<li>
		<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
		<?php echo CHtml::encode($data->address); ?>
	</li>
	<li>
		<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
		<?php echo CHtml::encode($data->content); ?>
	</li>
	<li>
		<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
		<?php echo $data->getTypeName($data->type); ?>
	</li>

</ul>
</div>