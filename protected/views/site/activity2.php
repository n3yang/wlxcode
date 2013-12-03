<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>火锅加盟_火锅店加盟_鸡火锅加盟_魏老香餐饮管理（北京）有限公司</title>
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />

	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/jhg.css">
	<script>

// document.oncontextmenu=new Function("event.returnValue=false;");
// document.onselectstart=new Function("event.returnValue=false;");

</script>
<script>
$(document).ready(function(e) {
	
	$(".img-pic a").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic',
				'titleShow'		: false
			});
	/*
	var c = '';
	
	for(var i = 0; i<23; i++){
		var a = "<div class=\"base-line\"><img src=\"jhg-img/"+  i +".jpg\"></div>"
		c += a
		$("#wrap").html(c)
	}
	*/

var duilian = $("div.duilian");
var duilian_close = $("a.duilian_close");

var screen_w = screen.width;
if(screen_w>1024){duilian.show();}
$(window).scroll(function(){
	var scrollTop = $(window).scrollTop();
	duilian.stop().animate({top:scrollTop+260});
});




function getRolling(rollDiv){
	var myImg=$("#"+rollDiv);      
	  
	myImg.direction=0;
	
	var ul = myImg.find("ul");
	var li = ul.find("li");
	myImg.w = 0;
	
	li.each(function(){
		myImg.w += ($(this).width() + 15 )
	})
	
	
	ul.html(ul.html() + ul.html())

	ul.css("width",myImg.w*2)


	function to(){
		myImg.direction += -2;
				
		if(parseInt(ul.css("left"))*-1 >= myImg.w){
			ul.css("left",0)
			myImg.direction = 0;
		}else{
			ul.css("left", myImg.direction);
		}
	}
	
	myImg.timer=setInterval(to,30);     
	
	myImg.mouseover(function(){
		clearInterval(myImg.timer)
	})
	                           
	myImg.mouseout(function(){
		myImg.timer=setInterval(to,30)
	})
	                    
}

getRolling("gd1")
getRolling("gd2")
getRolling("gd3")


	function aa() {
	    var $backToTopEle = $('.backToTop')
		$backToTopFun = function() {
	        var st = $(document).scrollTop(), winh = $(window).height();
	        (st > 0)? $backToTopEle.show(): $backToTopEle.hide();    
	        if (!window.XMLHttpRequest) {
	            $backToTopEle.css("top", st + winh - 166);    
	        }
	    };
	    $(window).bind("scroll", $backToTopFun);
	    $(function() { $backToTopFun(); });
	};
	
	aa()
});
</script>
<?php if ($_GET['success']) { echo '<script>alert("留言成功，感谢您的留言，我们将尽快与您取得联系")</script>'; } ?>
</head>

<body>
	<div id="top">
    	<div class="base-line">
            <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" style="margin-left:230px;" align="middle" width="278" height="826">
            <param name="movie" value="jhg-img/food.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="transparent" />
            <param name="swfversion" value="6.0.65.0" />
            <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="jhg-img/food.swf" style="margin:0 auto" align="middle" width="278" height="826">
            <!--<![endif]-->
            <param name="quality" value="high" />
            <param name="wmode" value="transparent" />
            <param name="swfversion" value="6.0.65.0" />
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
            <div>
            <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取 Adobe Flash Player" width="112" height="33" /></a></p>
            </div>
            <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
            </object>
      </div>
    </div>
	<div id="wrap">
		<div class="base-line">
			<img src="jhg-img/1.jpg"></div>
		<div class="base-line">
			<img src="jhg-img/2.jpg"></div>
		<div class="base-line">
			<img src="jhg-img/3.jpg"></div>
		<div class="base-line">
			<img src="jhg-img/4.jpg"></div>
        <div style="padding-right:1px; width:999px" class="base-line">
        	<div style="height:20px; background:#f5f5f5"></div>
        </div>
		<div id="gdbg1" class="base-line">
        	<div id="gd1" class="gd">
                <ul class="base-clear gdul">
                    <li><img src="jhg-img/img/1.jpg" width="226" /></li>
                    <li><img src="jhg-img/img/2.jpg" width="226" /></li>
                    <li><img src="jhg-img/img/3.jpg" width="226" /></li>
                    <li><img src="jhg-img/img/4.jpg" width="226" /></li>
                    <li><img src="jhg-img/img/5.jpg" width="226" /></li>
                    <li><img src="jhg-img/img/6.jpg" width="226" /></li>
                    <li><img src="jhg-img/img/7.jpg" width="226" /></li>
                    <li><img src="jhg-img/img/8.jpg" width="226" /></li>
                    <li><img src="jhg-img/img/9.jpg" width="226" /></li>
                    <li><img src="jhg-img/img/10.jpg" width="226" /></li>
                    <li><img src="jhg-img/img/11.jpg" width="226" /></li>
                </ul>
            </div>
        </div>
        <div style="padding-right:1px; width:999px" class="base-line">
        	<div style="height:20px; background:#f5f5f5"></div>
        </div>
		<div class="base-line">
			<img src="jhg-img/5.jpg"></div>
		<div class="base-line">
			<img src="jhg-img/6.jpg"></div>
		<div class="base-line">
			<img src="jhg-img/7.jpg"></div>
		<div class="base-line">
			<img src="jhg-img/8.jpg"></div>
		<div id="gdbg2" class="base-line">
        	<div id="gd2" class="gd">
                <ul class="base-clear gdul">
                    <li><img src="jhg-img/img2/1.jpg" width="200" /></li>
                    <li><img src="jhg-img/img2/2.jpg" width="225" /></li>
                    <li><img src="jhg-img/img2/3.jpg" width="278" /></li>
                    <li><img src="jhg-img/img2/4.jpg" width="200" /></li>
                    <li><img src="jhg-img/img2/5.jpg" width="200" /></li>
                    <li><img src="jhg-img/img2/6.jpg" width="200" /></li>
                    <li><img src="jhg-img/img2/7.jpg" width="200" /></li>
                    <li><img src="jhg-img/img2/8.jpg" width="251" /></li>
                    <li><img src="jhg-img/img2/9.jpg" width="200" /></li>
                    <li><img src="jhg-img/img2/10.jpg" width="226" /></li>
                    <li><img src="jhg-img/img2/11.jpg" width="226" /></li>
                    <li><img src="jhg-img/img2/12.jpg" width="113" /></li>
                    <li><img src="jhg-img/img2/13.jpg" width="200" /></li>
                    <li><img src="jhg-img/img2/14.jpg" width="225" /></li>
                    <li><img src="jhg-img/img2/15.jpg" width="225" /></li>
                    <li><img src="jhg-img/img2/16.jpg" width="200" /></li>
                    <li><img src="jhg-img/img2/17.jpg" width="201" /></li>
                    <li><img src="jhg-img/img2/18.jpg" width="266" /></li>
                    <li><img src="jhg-img/img2/19.jpg" width="200" /></li>
                </ul>
            </div>
        </div>
        <div style="padding-right:1px; width:999px" class="base-line">
        	<div style="height:20px; background:#f5f5f5"></div>
        </div>
		<div class="base-line">
			<img src="jhg-img/10.jpg"></div>
		<div class="base-line">
			<img src="jhg-img/11.jpg"></div>
		<div class="base-line img-pic">
        	<a id="a1" href="jhg-img/big/1.jpg" title="点击放大"></a>
            <a id="a2" href="jhg-img/big/2.jpg" title="点击放大"></a>
            <a id="a3" href="jhg-img/big/3.jpg" title="点击放大"></a>
            <a id="a4" href="jhg-img/big/4.jpg" title="点击放大"></a>
            <a id="a5" href="jhg-img/big/5.jpg" title="点击放大"></a>
            <a id="a6" href="jhg-img/big/6.jpg" title="点击放大"></a>
            <a id="a7" href="jhg-img/big/7.jpg" title="点击放大"></a>
            <a id="a8" href="jhg-img/big/8.jpg" title="点击放大"></a>
            <a id="a9" href="jhg-img/big/9.jpg" title="点击放大"></a>
		</div>
		<div id="gdbg3" class="base-line">
        	<div id="gd3" class="gd">
                <ul class="base-clear gdul">
                    <li><img src="jhg-img/img3/1.jpg" width="200" /></li>
                    <li><img src="jhg-img/img3/2.jpg" width="226" /></li>
                    <li><img src="jhg-img/img3/3.jpg" width="200" /></li>
                    <li><img src="jhg-img/img3/4.jpg" width="226" /></li>
                    <li><img src="jhg-img/img3/5.jpg" width="226" /></li>
                    <li><img src="jhg-img/img3/6.jpg" width="226" /></li>
                    <li><img src="jhg-img/img3/7.jpg" width="226" /></li>
                </ul>
            </div>
        </div>
		<div class="base-line">
			<img src="jhg-img/14.jpg"></div>
		<div class="base-line ly">




        	<div class="lyt">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true),

)); ?>

				<p class="note"></p>
				<div class="line1">
					<?php echo $form->labelEx($model,'姓名'); ?>
					<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200,'class'=>'inputText')); ?>
					<?php echo $form->error($model,'name'); ?>
				</div>
				<div class="line1">
					<?php echo $form->labelEx($model,'电话'); ?>
					<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20,'class'=>'inputText')); ?>
					<?php echo $form->error($model,'mobile'); ?>
				</div>
				<div class="line1">
					<?php echo $form->labelEx($model,'邮箱'); ?>
					<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100,'class'=>'inputText')); ?>
					<?php echo $form->error($model,'email'); ?>
				</div>
				<div class="line1">
					<?php echo $form->labelEx($model,'地址'); ?>
					<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>200,'class'=>'inputText')); ?>
					<?php echo $form->error($model,'address'); ?>
				</div>
				<div class="line1">
					<?php echo $form->labelEx($model,'留言'); ?>
					<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50, 'style'=>"vertical-align:top", 'class'=>"inputTextarea")); ?>
					<?php echo $form->error($model,'content'); ?>
				</div>
				<?php if(CCaptcha::checkRequirements()): ?>
				<div class="line1">
					<?php echo $form->labelEx($model,'验证码'); ?>
					<?php echo $form->textField($model,'verifyCode', array('class'=>'inputText','style'=>'width:80px')); ?>
					<?php $this->widget('CCaptcha'); ?>
					<?php echo $form->error($model,'verifyCode'); ?>
				</div>
				<?php endif; ?>
				<div class="line1 buttons">
					<?php echo CHtml::submitButton('', array('class'=>'btn')); ?>
				</div>

<?php $this->endWidget(); ?>

            </div>
        </div>
		<div class="base-line">
			<img src="jhg-img/16.jpg"></div>
  <div class="base-line bq">
        	<p>
            	魏老香餐饮管理（北京）有限公司
            </p>
        	<p>
            	地址：北京市亦庄开发区 全国免费热线：400-6678-982  官方网站：<a href="http://www.weilaoxiang.com/" target="_blank">www.weilaoxiang.com</a>
</p>
        	<p>
            	版权声明：以上图片均为 魏老香餐饮管理（北京）有限公司 所有 不得盗用，违者必究
            </p>
            <p>
                <script type="text/javascript">
                var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F837270db8e7fe5d35eb093033c1a9128' type='text/javascript'%3E%3C/script%3E"));
                </script>
            </p>
        </div>
	</div>


<!--sp-->

<a class="backToTop">
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" height="250" width="400"><param name="quality" value="high"><param name="movie" value="http://player.youku.com/player.php/sid/XNTQ2MjYzNzky/v.swf"><embed height="250" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="http://player.youku.com/player.php/sid/XNTQ2MjYzNzky/v.swf" type="application/x-shockwave-flash" width="400"></object>
</a>

<SCRIPT LANGUAGE="JavaScript" src= http://float2006.tq.cn/floatcard?adminid=9085047&sort=0 ></SCRIPT>

</body>
</html>