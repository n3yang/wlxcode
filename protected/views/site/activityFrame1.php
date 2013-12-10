<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<link rel="stylesheet" href="css/base.css">
<style type="text/css">
.ly{
	width: 1000px;
	margin:0 anto;
	background:url(jjh-img/lybg2.gif) repeat-y;
}
.lyt{
	padding:50px 200px 0px 200px;
	background:url(jjh-img/lybg.gif) top center no-repeat;
}
.lyt .line1{
	margin:30px 0 0 0;
}
.lyt .line1 label{
	display:inline-block;
	font-size:14px;
	color:#000;
	margin-right:5px;
	vertical-align: middle;
	text-align:right;
	width:50px;
}
.lyt .line1 .inputText{
	padding:3px 8px;
	font-size:12px;
	line-height:12px;
	width:200px;
	vertical-align: middle;
	-moz-border-radius: 5px;      
    -webkit-border-radius: 5px;    
    border-radius:5px;     	background:#fff;
	border:1px solid #999;       
}
.lyf{
	height:78px;
	background:url(jjh-img/lybg3.gif) center no-repeat;
}
.labelTextarea{
	vertical-align: middle
}
.inputTextarea{
	vertical-align: middle;
	padding:3px 5px;
	font-size:12px;
	line-height:20px;
	width:500px;
	height:100px;
	background:#fff;
	border:1px solid #999;
	-moz-border-radius: 5px;     
    -webkit-border-radius: 5px;  
    border-radius:5px;   
}
.btn{
	width:207px;
	height:27px;
	cursor:pointer;
	border:none;
	background:url(jjh-img/btn.gif) no-repeat;
}
</style>
<?php if ($_GET['success']) { echo '<script>alert("留言成功，感谢您的留言，我们将尽快与您取得联系")</script>'; } ?>
</head>

<body>
		<div class="base-line ly">
        	<div class="lyt">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true),

)); ?>

				<p class="note"></p>
				<div class="line2">
					<?php echo $form->labelEx($model,'姓名'); ?>
					<?php echo $form->textField($model,'name',array('size'=>25,'maxlength'=>200,'class'=>'inputText')); ?>
					<?php echo $form->error($model,'name'); ?>
				</div>
				<div class="line2">
					<?php echo $form->labelEx($model,'电话'); ?>
					<?php echo $form->textField($model,'mobile',array('size'=>25,'maxlength'=>20,'class'=>'inputText')); ?>
					<?php echo $form->error($model,'mobile'); ?>
				</div>
				<div class="line2">
					<?php echo $form->labelEx($model,'邮箱'); ?>
					<?php echo $form->textField($model,'email',array('size'=>25,'maxlength'=>100,'class'=>'inputText')); ?>
					<?php echo $form->error($model,'email'); ?>
				</div>
				<div class="line2">
					<?php echo $form->labelEx($model,'地址'); ?>
					<?php echo $form->textField($model,'address',array('size'=>25,'maxlength'=>200,'class'=>'inputText')); ?>
					<?php echo $form->error($model,'address'); ?>
				</div>
                <div class="base-clear"></div>
				<div class="line1">
					<?php echo $form->labelEx($model,'留言'); ?>
					<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50, 'style'=>"vertical-align:top", 'class'=>"inputTextarea")); ?>
					<?php echo $form->error($model,'content'); ?>
				</div>
			<!--
				<?php if(CCaptcha::checkRequirements()): ?>
				<div class="line1">
					<?php echo $form->labelEx($model,'验证码'); ?>
					<?php echo $form->textField($model,'verifyCode', array('class'=>'inputText','style'=>'width:80px')); ?>
					<?php $this->widget('CCaptcha'); ?>
					<?php echo $form->error($model,'verifyCode'); ?>
				</div>
				<?php endif; ?>
			-->
				<div class="line1 buttons">
					<?php echo CHtml::submitButton('', array('class'=>'btn')); ?>
				</div>

<?php $this->endWidget(); ?>
	</div>
</div>
</body>
</html>