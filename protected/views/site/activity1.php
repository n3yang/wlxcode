<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>绢绢红_小火锅加盟_欢乐火锅加盟_吧台式小火锅加盟_魏老香餐饮管理（北京）有限公司</title>
	<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/jjh.css">
    
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
		var a = "<div class=\"base-line\"><img src=\"jjh-img/"+  i +".jpg\"></div>"
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

</head>

<body>
	<div id="top">
    	<div class="base-line">
            <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" style="margin:0 auto" align="middle" width="278" height="826">
            <param name="movie" value="jjh-img/food.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="transparent" />
            <param name="swfversion" value="6.0.65.0" />
            <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="jjh-img/food.swf" style="margin:0 auto" align="middle" width="278" height="826">
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
			<img src="jjh-img/1.jpg"></div>
		<div class="base-line">
			<img src="jjh-img/2.jpg"></div>
		<div class="base-line">
			<img src="jjh-img/3.jpg"></div>
		<div class="base-line">
			<img src="jjh-img/4.jpg"></div>
		<div class="base-line">
			<img src="jjh-img/5.jpg"></div>
		<div id="gdbg1" class="base-line">
        	<div id="gd1" class="gd">
                <ul class="base-clear gdul">
                    <li><img src="jjh-img/img/1.jpg" width="225" /></li>
                    <li><img src="jjh-img/img/2.jpg" width="106" /></li>
                    <li><img src="jjh-img/img/3.jpg" width="225" /></li>
                    <li><img src="jjh-img/img/4.jpg" width="106" /></li>
                    <li><img src="jjh-img/img/5.jpg" width="225" /></li>
                    <li><img src="jjh-img/img/6.jpg" width="106" /></li>
                    <li><img src="jjh-img/img/7.jpg" width="225" /></li>
                    <li><img src="jjh-img/img/8.jpg" width="106" /></li>
                    <li><img src="jjh-img/img/9.jpg" width="106" /></li>
                </ul>
            </div>
        </div>
		<div class="base-line">
			<img src="jjh-img/n.jpg"></div>
		<div class="base-line">
			<img src="jjh-img/7.jpg"></div>
		<div class="base-line">
			<img src="jjh-img/8.jpg"></div>
		<div class="base-line">
			<img src="jjh-img/9.jpg"></div>
		<div class="base-line">
			<img src="jjh-img/10.jpg"></div>
		<div  id="gdbg2" class="base-line">
        	<div id="gd2" class="gd">
                <ul class="base-clear gdul">
                    <li><img src="jjh-img/img2/1.jpg" width="200" /></li>
                    <li><img src="jjh-img/img2/2.jpg" width="226" /></li>
                    <li><img src="jjh-img/img2/3.jpg" width="200" /></li>
                    <li><img src="jjh-img/img2/4.jpg" width="226" /></li>
                    <li><img src="jjh-img/img2/5.jpg" width="226" /></li>
                    <li><img src="jjh-img/img2/6.jpg" width="226" /></li>
                    <li><img src="jjh-img/img2/7.jpg" width="226" /></li>
                    <li><img src="jjh-img/img2/8.jpg" width="226" /></li>
                    <li><img src="jjh-img/img2/9.jpg" width="226" /></li>
                </ul>
            </div>
		</div>
		<div class="base-line">
			<img src="jjh-img/12.jpg"></div>
		<div class="base-line">
			<img src="jjh-img/13.jpg"></div>
		<div class="base-line">
			<img src="jjh-img/14.jpg"></div>
        <div style="background:#870004; overflow:hidden">
        	<div class="menu dib-wrap">
            	<span class="dib active">加盟支持</span>
            	<span class="dib">回报周期分析</span>
            	<span class="dib">投资说明</span>
            	<span class="dib">最新招商政策</span>
            </div>
            <div class="box" style="padding:20px;">
            	<div style="display:block">
                	<h2 style="color:#fff; font-family:'微软雅黑'">让您放心的服务体系，完全解除您的后顾之忧</h2>
                    <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#FFFCE3" style="color: #000; height:24px; font-size:12px; line-height:24px;">
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">选址评估</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">协助加盟商对该地区商铺进行选址评估，商圈分析；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">店面VI设计</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">提供整套VI识别系统方案；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">店面规划</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">帮助加盟商对整体店面布局进行详细规划；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">装修指导</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">提供装修方案，协助加盟商进行整店装修；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">技术培训</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">所有总部产品免费进行培训指导，使之达到独立操作；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">高层管理培训</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">对连锁店管理层进行日常管理、服务规范等系统培训；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">人员培训</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">协助连锁店进行开业前期人员培训；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">开业策划方案</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">结合连锁店当地特点，制定开业策划方案及营销方案；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">代店指导</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">总部会派代店经理进行技术指导，协助连锁店开业；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">设备提供</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">总部提供专业的电磁炉及各种餐具、工装、桌椅等，保质保量；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">物流配送</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">总部与大型物流公司长期合作，保证货物运输能够及时准确的配送到加盟商所在地；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">核心原料供应</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">总部提供核心原料，保证连锁店产品口味统一；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">广告宣传支持</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">总部会不定期在各省乃至全国各大媒体投放广告宣传；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">营业额预估</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">总部会按照季节性变化，对连锁店进行详细的销售额预估；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">营运问题诊断</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">如连锁店在经营过程中出现营运问题，公司会派专人进行详细诊断，并且拿出整改方案，帮助连锁店解决难题；</td>
                      </tr>
                      <tr>
                        <td bgcolor="#870004" style="padding-left:5px; color:#fff">技术开发</td>
                        <td bgcolor="#fffce1" style="color: #870004; padding-left:5px">总部会不定期研发新产品，免费提供</td>
                      </tr>
                    </table>
                </div>
                <div>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1" style="font-size:12px; background:#333">
  <tr>
    <td colspan="5" align="center" bgcolor="#fffce1" style="padding:5px; font-size:14px;">娟娟红回报周期分析（150/200/300）㎡</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#fffce1" style="padding:5px">店铺类型</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">普通店</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">标准店</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">旗舰店</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#fffce1" style="padding:5px">店铺面积（㎡）</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">150㎡</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">200㎡</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">300㎡</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#fffce1" style="padding:5px">店铺投资（万元）</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">14</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">23</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">36</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#fffce1" style="padding:5px">预估餐位（个）</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">70--80</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">100-110</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">180--200</td>
  </tr>
  <tr>
    <td rowspan="2" align="center" bgcolor="#fffce1" style="padding:5px">上座率</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">上午</td>
    <td colspan="3" align="center" bgcolor="#fffce1" style="padding:5px">80%</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#fffce1" style="padding:5px">下午</td>
    <td colspan="3" align="center" bgcolor="#fffce1" style="padding:5px">110%</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#fffce1" style="padding:5px">人均消费（元）</td>
    <td colspan="3" align="center" bgcolor="#fffce1" style="padding:5px">40</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#fffce1" style="padding:5px">日营业额（元）</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">5400-6000</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">7600-8400</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">13600-15200</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#fffce1" style="padding:5px">月营业额（万元）</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">16.2-18</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">22．8-25.2</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">40.8-45.6</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#fffce1" style="padding:5px">年营业额（万元）</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">194.4-216</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">273.6-302.4</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">489.6-547.2</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#fffce1" style="padding:5px">利润率</td>
    <td colspan="3" align="center" bgcolor="#fffce1" style="padding:5px">20%</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#fffce1" style="padding:5px">年净利润（万元）</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">38.8-43.2</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">54.7-60.5</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">97.9-109.5</td>
  </tr>
  <tr>
    <td colspan="2" align="center" bgcolor="#fffce1" style="padding:5px">投资回报（月）</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">10--12</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">10--12</td>
    <td align="center" bgcolor="#fffce1" style="padding:5px">10--12</td>
  </tr>
  <tr>
    <td colspan="5" align="left" bgcolor="#fffce1" style="padding:5px">备注：<br />
      1、以上投资收益预算不含前期房屋押金及总部管理费用投入；<br />
    2、因火锅行业淡旺季销售略有差异，根据总部多年投资经验，正常投资回报期为10-12个月。</td>
  </tr>
</table>
                </div>
                <div>
<table width="100%" border="0" cellpadding="0" cellspacing="1" style="font-size:12px; background:#333">
  <tr>
    <td colspan="5" align="center" bgcolor="#fffce1" style="font-size:14px;padding:5px">娟娟红投资说明（150/200/300）㎡</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">项目</td>
    <td colspan="3" bgcolor="#fffce1" style="padding:5px">店铺标准</td>
    <td rowspan="2" bgcolor="#fffce1" style="padding:5px">说&nbsp;&nbsp;&nbsp;&nbsp;明</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">店型</td>
    <td bgcolor="#fffce1" style="padding:5px">普通店</td>
    <td bgcolor="#fffce1" style="padding:5px">标准店</td>
    <td bgcolor="#fffce1" style="padding:5px">旗舰店</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">总面积<br />
    （平方米）</td>
    <td bgcolor="#fffce1" style="padding:5px">150㎡</td>
    <td bgcolor="#fffce1" style="padding:5px">200㎡</td>
    <td bgcolor="#fffce1" style="padding:5px">300㎡</td>
    <td bgcolor="#fffce1" style="padding:5px">前厅、后厨、更衣间、卫生间</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">预估厨房面积<br />
    （平方米）</td>
    <td colspan="3" bgcolor="#fffce1" style="padding:5px">根据实际情况 30㎡&#8212;&#8212;60㎡</td>
    <td bgcolor="#fffce1" style="padding:5px">摘菜区、切配区、洗碗区、配锅区、炒鸡区、储藏区、小料区、凉菜区、垃圾间</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">预估座位数<br />
    （个）</td>
    <td bgcolor="#fffce1" style="padding:5px">70-80</td>
    <td bgcolor="#fffce1" style="padding:5px">100-110</td>
    <td bgcolor="#fffce1" style="padding:5px">180-200</td>
    <td bgcolor="#fffce1" style="padding:5px">按照房屋面积、格局情况而定</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">总部收取<br />
      连营合作费<br />
    （万元/年）</td>
    <td colspan="3" bgcolor="#fffce1" style="padding:5px">每年收取连营店 
      2万元 
    连锁经营费</td>
    <td bgcolor="#fffce1" style="padding:5px">总部将魏老香鸡火锅店经营权授予连营商，并许可连营商使用魏老香商标、标示、整套VI识别系统、经营模式、所有经营产品及技术，并颁发：授权书、商标使用证明、开店资格证、授权铜牌及各行业协会颁发的荣誉铜牌。</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">店面设计费<br />
    （万元）</td>
    <td colspan="3" bgcolor="#fffce1" style="padding:5px">总部免费提供设计方案</td>
    <td bgcolor="#fffce1" style="padding:5px">餐厅门头设计图|平面布置图|局部施工图</td>
  </tr>
  <tr>
    <td rowspan="2" bgcolor="#fffce1" style="padding:5px">装修金额<br />
    （万元）</td>
    <td bgcolor="#fffce1" style="padding:5px">5万&#8212;10万</td>
    <td bgcolor="#fffce1" style="padding:5px">10万&#8212;20万</td>
    <td bgcolor="#fffce1" style="padding:5px">20万&#8212;40万</td>
    <td bgcolor="#fffce1" style="padding:5px">天花、地面、墙面、水电安装、桌椅等</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#fffce1" style="padding:5px">高、中、低三种装修模式自由选择，按照投资能力大小进行装修预算。 
      普通型：要求：干净、明亮、简洁。一般费用在：5万&#8212;10万之间。 
      标准型：要求：时尚、新颖、前卫。一般费用在：10万&#8212;20万之间。 
    旗舰型：要求：与总部统一风格。一般费用在：20万&#8212;40万之间。</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">设备及杂件<br />
    （万元）</td>
    <td bgcolor="#fffce1" style="padding:5px">6万</td>
    <td bgcolor="#fffce1" style="padding:5px">8万</td>
    <td bgcolor="#fffce1" style="padding:5px">10万</td>
    <td bgcolor="#fffce1" style="padding:5px">包括：（空调、冰箱、排风、厨房设备、餐厨具、收银系统、物料、办公用品等）。</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">&nbsp;开办费<br />
    （万元）</td>
    <td colspan="3" bgcolor="#fffce1" style="padding:5px">1万</td>
    <td bgcolor="#fffce1" style="padding:5px">含开店前办理证照费、交际费、其他杂费</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">流动资金<br />
    （万元）</td>
    <td bgcolor="#fffce1" style="padding:5px">2万</td>
    <td bgcolor="#fffce1" style="padding:5px">3万</td>
    <td bgcolor="#fffce1" style="padding:5px">5万</td>
    <td bgcolor="#fffce1" style="padding:5px">开业第一批食材准备金。</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">总投资<br />
      （万元） 
    不含房租</td>
    <td bgcolor="#fffce1" style="padding:5px">14万</td>
    <td bgcolor="#fffce1" style="padding:5px">23万</td>
    <td bgcolor="#fffce1" style="padding:5px">36万</td>
    <td bgcolor="#fffce1" style="padding:5px">含：装修金额、厨房设备金额、桌椅餐具、开办费的总投资。（此费用是在北京地区投资参考，在其他城市或多或少增减）。</td>
  </tr>
  <tr>
    <td bgcolor="#fffce1" style="padding:5px">投资回报期</td>
    <td colspan="3" bgcolor="#fffce1" style="padding:5px">预计</td>
    <td bgcolor="#fffce1" style="padding:5px">10-12个月根据实际情况，略有不同</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#fffce1" style="padding:5px">以上投资金额为连营店的投资预估参考，实际金额由餐厅设备、装修及运营筹备实际需求而定。</td>
  </tr>
</table>
                </div>
                <div>
                	<img src="jhg-img/222.gif" width="950"/>
                </div>
            </div>
        </div>
<script>
$(document).ready(function(e) {
	$(".menu span").click(function(){
		$(".menu span").removeClass("active");
		$(this).addClass("active");
		$(".box div").hide().eq($(this).index()).show();
	})
})
</script>

		<div class="base-line img-pic">
        	<a id="a1" href="jjh-img/big/1.jpg" title="点击放大"></a>
            <a id="a2" href="jjh-img/big/2.jpg" title="点击放大"></a>
            <a id="a3" href="jjh-img/big/3.jpg" title="点击放大"></a>
            <a id="a4" href="jjh-img/big/4.jpg" title="点击放大"></a>
            <a id="a5" href="jjh-img/big/5.jpg" title="点击放大"></a>
            <a id="a6" href="jjh-img/big/6.jpg" title="点击放大"></a>
            <a id="a7" href="jjh-img/big/7.jpg" title="点击放大"></a>
            <a id="a8" href="jjh-img/big/8.jpg" title="点击放大"></a>
            <a id="a9" href="jjh-img/big/9.jpg" title="点击放大"></a>
		</div>
		<div class="base-line">
			<img src="jjh-img/16.jpg"></div>
		<div id="gdbg3" class="base-line">
        	<div id="gd3" class="gd">
                <ul class="base-clear gdul">
                    <li><img src="jjh-img/img3/1.jpg" width="200" /></li>
                    <li><img src="jjh-img/img3/2.jpg" width="226" /></li>
                    <li><img src="jjh-img/img3/3.jpg" width="200" /></li>
                    <li><img src="jjh-img/img3/4.jpg" width="226" /></li>
                    <li><img src="jjh-img/img3/5.jpg" width="226" /></li>
                    <li><img src="jjh-img/img3/6.jpg" width="226" /></li>
                    <li><img src="jjh-img/img3/7.jpg" width="226" /></li>
                </ul>
            </div>
        </div>
		<div class="base-line">
			<img src="jjh-img/18.jpg"></div>
		<div class="base-line">
			<img src="jjh-img/19.jpg"></div>
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
					<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200,'class'=>'inputText')); ?>
					<?php echo $form->error($model,'name'); ?>
				</div>
				<div class="line2">
					<?php echo $form->labelEx($model,'电话'); ?>
					<?php echo $form->textField($model,'mobile',array('size'=>20,'maxlength'=>20,'class'=>'inputText')); ?>
					<?php echo $form->error($model,'mobile'); ?>
				</div>
				<div class="line2">
					<?php echo $form->labelEx($model,'邮箱'); ?>
					<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100,'class'=>'inputText')); ?>
					<?php echo $form->error($model,'email'); ?>
				</div>
				<div class="line2">
					<?php echo $form->labelEx($model,'地址'); ?>
					<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>200,'class'=>'inputText')); ?>
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
					<?php echo $form->labelEx($model,'验证码<span class="required">*</span>'); ?>
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

            <div class="lyf"></div>
		</div>
		<div class="base-line">
			<img src="jjh-img/21.jpg"></div>
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



<a class="backToTop">
<embed align="middle" src="http://static.youku.com/v1.0.0212/v/swf/loader.swf?VideoIDS=XNTQ2MjYzNzky=&amp;isAutoPlay=true&amp;embedid=MTExLjE5Ni4xNzMuMTk4Ajg1OTAxMDc4AgI%3D" allowscriptaccess="never" allownetworking="all" width="300" height="250" allowfullscreen="true" type="application/x-shockwave-flash" allowcriptaccess="sameDomain" quality="high" isautoplay="true">
</a>

<script language="JavaScript" src= http://float2006.tq.cn/floatcard?adminid=9085047&sort=0 ></script>
</body>
</html>