<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>home_style.css" >
<script type="text/javascript" src="<?php echo JS_PATH?>jq/jquery-2.0.3.js"></script>

<script type="text/javascript" src="<?php echo JS_PATH?>jq/jquery.quickflip.source.js"></script>

<link href="<?php echo CSS_PATH;?>amazon_scroller.css" rel="stylesheet" type="text/css"></link>
<script type="text/javascript" src="<?php echo JS_PATH?>jq/amazon_scroller.js"></script>

<script type="text/javascript">
$(function() {
    $('.quickFlip').quickFlip();
    
    $('.quickFlip3').quickFlip({
        vertical : true
    });
    
    $('.quickFlip2').quickFlip();
});
</script>
 <script language="javascript" type="text/javascript">

            $(function() {
                $("#amazon_scroller1").amazon_scroller({
                    scroller_title_show: 'disable',
                    scroller_time_interval: '3000',
                    scroller_window_background_color: "none",
                    scroller_window_padding: '10',
                    scroller_border_size: '0',
                    scroller_border_color: '#CCC',
                    scroller_images_width: '100',
                    scroller_images_height: '80',
                    scroller_title_size: '12',
                    scroller_title_color: 'black',
                    scroller_show_count: '2',
                    directory: 'images'
                });
				$("#amazon_scroller2").amazon_scroller({
                    scroller_title_show: 'disable',
                    scroller_time_interval: '3000',
                    scroller_window_background_color: "none",
                    scroller_window_padding: '10',
                    scroller_border_size: '0',
                    scroller_border_color: '#CCC',
                    scroller_images_width: '100',
                    scroller_images_height: '80',
                    scroller_title_size: '12',
                    scroller_title_color: 'black',
                    scroller_show_count: '2',
                    directory: 'images'
                });
				
				$(".viewPreview").click(function (){
		 			$("html, body").animate({ scrollTop: 0 }, 2500);
        		});
				
				
            });
        </script>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>basic-quickflips.css"/>
<style>
        .black_overlay{
            display: none;
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index:1001;
            -moz-opacity: 0.8;
            opacity:.80;
            filter: alpha(opacity=80);
        }
        .white_content {
            display: none;
            position: absolute;
            top: 25%;
            left: 25%;
            width: 50%;
            height: 50%;
            padding: 16px;
            border: 16px solid orange;
            background-color: white;
            z-index:1002;
            overflow: auto;
			
        }
    </style>
		<!-- stylesheets -->
  	<link rel="stylesheet" href="<?php echo CSS_PATH;?>regd_style.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="<?php echo CSS_PATH;?>slide.css" type="text/css" media="screen" />
	
  	<!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
	<![endif]-->
	 
    <!-- jQuery - the core -->
	<!-- Sliding effect -->
	<script src="<?php echo JS_PATH?>jq/slide.js" type="text/javascript"></script>
	   <style>
       
        a.back{
            width:256px;
            height:73px;
            position:fixed;
            bottom:15px;
            right:15px;
            background:#fff url(codrops_back.png) no-repeat top left;
        }
        .scroll{
            width:133px;
            height:61px;
            position:fixed;
            bottom:15px;
            left:150px;
           /* background:#fff url(scroll.png) no-repeat top left;*/
        }
        .info{
            text-align:right;

        }
    </style>
	<style type="text/css">
<!--

#fl_menu{position:absolute; top:100px; left:-130px; z-index:9999; width:150px; height:50px;}
#fl_menu:hover{position:absolute; top:100px; left:0px; z-index:9999; width:150px; height:50px;}
#fl_menu .label{padding-left:20px; line-height:50px; font-family:"Arial Black", Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background:#000; color:#fff; letter-spacing:7px;}
#fl_menu .menu{display:none;}
#fl_menu .menu .menu_item{display:block; background:#000; color:#bbb; border-top:1px solid #333; padding:10px 20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-decoration:none;}
#fl_menu .menu a.menu_item:hover{background:#333; color:#fff;}
.content{width:520px; margin:50px auto;}
-->
</style>
<!--<script type="text/javascript" src="jsfiles/jq/jquery.easing.1.3.js"></script>-->
 <link rel="stylesheet" href="<?php echo CSS_PATH;?>style_dialogs.css" />
</head>
<body>
<!--<div id="dialog" title="Basic dialog">
<p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>-->
<div id="fl_menu">
	<div class="label">MENU</div>
	<div class="menu">
    	<a href="#" class="menu_item">Facebook</a>
        <a href="#" class="menu_item">Youtube</a>
        <a href="#" class="menu_item">Twitter</a>
        <a href="#" class="menu_item">Blog</a>
        <a href="#" class="menu_item">FAQ</a>
        <a href="#" class="menu_item">Search</a>
        <a href="#" class="menu_item">iWish</a>
    </div>
</div> 
<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			
			<div class="left">
				<h1>Welcome to LearnerBay</h1>
				<p class="grey" align="justify">
We, at Learnerbay, are constantly trying to bridge the gap between learning and its relevance in the real world, for our learners. With that vision in mind, we bring to you an innovative event focused at bridging this gap between what happens in the classroom and how it works in the real-world.</p>
				
			</div>
			<div class="left">
			
				<!-- Login Form -->
				<form class="clearfix" action="#" method="post">
					<div id="loginScr" style="display:block;"><h1>Member Login</h1>
					<label class="grey" for="log">Email Id:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" placeholder="Requires an Email Id" required/>
					<label class="grey" for="pwd">Password:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" placeholder="Requires an Password" required/>
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" onClick="home4_loggedin.html" target="_self" />
					<a class="lost-pwd" id="linkPwd">Lost your password?</a>
					</div>
					
				</form>
			</div>
			<div class="left right">
					
				<!-- Register Form -->
				<form action="#" method="post">
					<h1>Not a member yet? Sign Up!</h1>	
					<label class="grey" for="email">Email Id:</label>
					<input class="field" type="text" name="signup" id="frm_emailid" value="" size="23" required/>
					<label class="grey" for="password">Password:</label>
					<input class="field" type="text" name="email" id="email" size="23" required/>
					<label class="grey" for="conf_password">Confirm Password:</label>
					<input class="field" type="text" name="email" id="email" size="23" required/>
					<a class="lost-pwd" id="linkPwd"><input type="checkbox" name="chk_terms" checked>Terms & Conditions</a>
					<input type="button" name="submit" value="Register" class="bt_register" id="btn_regd" />
				</form>
			</div>
		</div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello Guest!</li>
			<li class="sep1">|</li>
			<!--<li class="sep1"><a href="user_profile.html" target="_self">Click for Profile</a></li>
			<li class="sep1">|</li> -->
			<li id="toggle">
				<a id="open" class="open" href="#">Log In | Register</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->
<div id="main_div">

<!--<div id="light" class="white_content">This is the lightbox content. <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></div>
        <div id="fade" class="black_overlay"></div>
	<div id="floats" style="position:fixed;top:100px;margin-right:20px;z-index:99999;background-color:#666666;opacity:0.8;font-family:'Courier New';font-size:14px;left:-75px;">
	<table width="90px" cellpadding="0" cellspacing="0" border="0">
	<tr><td><a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Facebook</a></td><td rowspan="6" valign="middle" align="center" bgcolor="#FFFFFF"><a href="javascript:onClick='openIt()'" ><img src="images/arrow.png" id="arr_open"></a><a href="#" onClick=""><img src="images/arrow_.png" id="arr_close"></a></td></tr>
	<tr><td><a href="#" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Blog</a></td></tr>
	<tr><td><a href="#" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Twitter</a></td></tr>
	<tr><td><a href="#" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Youtube</a></td></tr>
	<tr><td><a href="#" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">FAQ</a></td></tr>
	<tr><td><a href="#" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Search</a></td></tr>
	</table>		
	</div> -->
	<div id="header">
		<div id="logo_hd">
				<img src="images/logo.png" id="lbay_logo_img">
		</div>
		
	</div>
	<div id="content_container">
				<table cellpadding="10" cellspacing="0" border="0" align="center">
				<tr><td width="30%" valign="middle"><div class="quickFlip">
        <div class="blackPanel">
            <h2 class="thetitle">How Do I Make My Million</h2>
            <span class="txt_hd">Language</span><span class="other_txt"> English, French</span><br>
			<span class="txt_hd">Starting</span><span class="other_txt">  Anytime</span><br>
			<span class="txt_hd">Pre-Requisites</span><span class="other_txt">  None</span><br>
			<span class="txt_hd">Duration</span><span class="other_txt">  15 mints</span><br>
			<span class="txt_hd">Certification</span><span class="other_txt">  Yes</span><br>
			<span class="txt_hd">Price</span><span class="other_txt">  Free</span>
			<br>
            <a href="#" class="quickFlipCta">Click for Author Details</a>
            </p>

        </div>
        <div class="redPanel">
            <h2 class="thetitle">Mr. Sumit Kati</h2>
			<span class="txt_hd">Certified Financial Planner</span><br>
			<span class="other_txt1">Engineering Graduate, MBA, Author of 2 Engineering Books</span>
			
            			<br><br>
            <a href="#" class="quickFlipCta">Click for Course Details</a> | <a href="author_profile_page.html" target="_self">View Profile File Page</a>
        </div>
    </div></td><td align="center"><video width="478" height="257" controls>
  				<source src="vdo/bp3.mp4" type="video/webm">
				Your browser does not support the video tag.
				</video></td><td width="400px" valign="top"><div id="course_brief">We all desire to have lots of money, and we have our own reasons... but do we really know how much we need or want. All of us have different dreams and the size of our dreams are unique as well. So, how does one figure out how much one exactly needs...<br>
<br>
<br>
<a href="course_detail_page.html" target="_self">more...</a></div></td>
				</tr><tr><td colspan="4" height="100">
				<div id="amazon_scroller1" class="amazon_scroller">
                   <div class="amazon_scroller_mask">
                       <ul>
                           <li><a href="link1" title="title1"><img src="images/scroller_large_1.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link2" title="title2"><img src="images/scroller_large_2.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link3" title="title3"><img src="images/scroller_large_3.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link4" title="title4"><img src="images/scroller_large_4.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link1" title="title5"><img src="images/scroller_large_1.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link2" title="title6"><img src="images/scroller_large_2.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link3" title="title7"><img src="images/scroller_large_3.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link4" title="title8"><img src="images/scroller_large_4.jpg" width="60" height="60" alt="title"/></a></li>
                       </ul>
                   </div>
                   <ul class="amazon_scroller_nav">
                       <li></li>
                       <li></li>
                   </ul>
                   <div style="clear: both"></div>
    </div>
	<div id="amazon_scroller2" class="amazon_scroller">
                   <div class="amazon_scroller_mask">
                       <ul>
                           <li><a href="link1" title="title1"><img src="images/scroller_large_1.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link2" title="title2"><img src="images/scroller_large_2.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link3" title="title3"><img src="images/scroller_large_3.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link4" title="title4"><img src="images/scroller_large_4.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link1" title="title5"><img src="images/scroller_large_1.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link2" title="title6"><img src="images/scroller_large_2.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link3" title="title7"><img src="images/scroller_large_3.jpg" width="60" height="60" alt="title"/></a></li>
                           <li><a href="link4" title="title8"><img src="images/scroller_large_4.jpg" width="60" height="60" alt="title"/></a></li>
                       </ul>
                   </div>
                   <ul class="amazon_scroller_nav">
                       <li></li>
                       <li></li>
                   </ul>
                   <div style="clear: both"></div>
    </div>
    </td></tr></table>
				
				<div id="sep2">
				<table width="90%" cellpadding="10" cellspacing="0" border="0" align="center">
				<tr><td width="30%"><hr width="100%"></td><td align="center"><span class="mostpopular">All Courses</span></td><td width="30%"><hr width="100%"></td></tr>
				<tr><td colspan="3" height="20"></td></tr>
				<tr class="courseBG"><td><img src="images/courses_thumbs/test-img.jpg" class="img_border"></td><td><span class="preview_course_title">ECONOMIC STRATEGIES</span><br><br><br>

				<span class="preview_course_subhd">Brief</span><p class="preview_course_txt">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<a href="javascript:void(0);" class="viewPreview" >Preview</a> | <a href="#">Enrol</a>
				</td><td><span class="preview_course_title">Mr. Sumit Kati</span><br><br><br>
<span class="preview_course_subhd">Credentials</span><p class="preview_course_txt">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p></td></tr>
				<tr class="courseBG"><td><img src="images/courses_thumbs/test-img.jpg" class="img_border"></td><td><span class="preview_course_title">BUSINESS VISION</span><br><br>
<br><span class="preview_course_subhd">Brief</span><p class="preview_course_txt">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p><a href="javascript:void(0);" class="viewPreview" >Preview</a> | <a href="#">Enrol</a></td><td><span class="preview_course_title">Mr. Pratapaditya Chakravarty</span><br>
<br>
<br><span class="preview_course_subhd">Credentials</span><p class="preview_course_txt">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</td></tr>
				<tr class="courseBG"><td><img src="images/courses_thumbs/test-img.jpg" class="img_border"></td><td><span class="preview_course_title">BUSINESS WORLD</span><br>
<br><br>
<span class="preview_course_subhd">Brief</span><p class="preview_course_txt">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p><a href="javascript:void(0);" class="viewPreview" >Preview</a> | <a href="#">Enrol</a></td><td><span class="preview_course_title">Mr. Venugopal J</span><br>
<br><br>
<span class="preview_course_subhd">Credentials</span><p class="preview_course_txt">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p></td></tr>
				<tr class="courseBG"><td><img src="images/courses_thumbs/test-img.jpg" class="img_border"></td><td><span class="preview_course_title">GOALS GOALS GOALS!!</span><br>
<br><br>
<span class="preview_course_subhd">Brief</span><p class="preview_course_txt">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p><a href="javascript:void(0);" class="viewPreview" >Preview</a> | <a href="#">Enrol</a></td><td><span class="preview_course_title">Mr. Shreenath</span><br>
<br><br>
<span class="preview_course_subhd">Credentials</span><p class="preview_course_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
</td></tr>
				<tr class="courseBG"><td><img src="images/courses_thumbs/test-img.jpg" class="img_border"></td><td><span class="preview_course_title">ENTREPRENEUR ARE HERE TO STAY!!</span><br>
<br><br>
<span class="preview_course_subhd">Brief</span><p class="preview_course_txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
</td><td><span class="preview_course_title">Mr. T M Modi</span><br>
<br><br>
<span class="preview_course_subhd">Credentials</span><p class="preview_course_txt">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p></td></tr>
				<tr class="courseBG"><td><img src="images/courses_thumbs/test-img.jpg" class="img_border"></td><td></td><td></td></tr>
				<tr class="courseBG"><td><img src="images/courses_thumbs/test-img.jpg" class="img_border"></td><td></td><td></td></tr>
				<tr class="courseBG"><td><img src="images/courses_thumbs/test-img.jpg" class="img_border"></td><td></td><td></td></tr>
				<tr class="courseBG"><td><img src="images/courses_thumbs/test-img.jpg" class="img_border"></td><td></td><td></td></tr>
				</table>
				
			</div>
	</div>
	
	<div id="footer"><div id="privacy">Privacy Policy | Disclaimer </div><div id="otherlinks">iWish | Courses | The Brains | The Brawns | Lighthouse | Contact Us</div>
	<div id="sep1" class="sep"></div>
	
	</div>
</div>
<script>
//config
$float_speed=1500; //milliseconds
$float_easing="easeOutQuint";
$menu_fade_speed=500; //milliseconds
$closed_menu_opacity=0.75;

//cache vars
$fl_menu=$("#fl_menu");
$fl_menu_menu=$("#fl_menu .menu");
$fl_menu_label=$("#fl_menu .label");

$(window).load(function() {
	menuPosition=$('#fl_menu').position().top;
	FloatMenu();
	$fl_menu.hover(
		function(){ //mouse over
			$fl_menu_label.fadeTo($menu_fade_speed, 1);
			$fl_menu_menu.fadeIn($menu_fade_speed);
		},
		function(){ //mouse out
			$fl_menu_label.fadeTo($menu_fade_speed, $closed_menu_opacity);
			$fl_menu_menu.fadeOut($menu_fade_speed);
		}
	);
});

$(window).scroll(function () { 
	FloatMenu();
});

function FloatMenu(){
	var scrollAmount=$(document).scrollTop();
	var newPosition=menuPosition+scrollAmount;
	if($(window).height()<$fl_menu.height()+$fl_menu_menu.height()){
		$fl_menu.css("top",menuPosition);
	} else {
		$fl_menu.stop().animate({top: newPosition}, $float_speed, $float_easing);
	}
}
</script>
</body>
</html>
