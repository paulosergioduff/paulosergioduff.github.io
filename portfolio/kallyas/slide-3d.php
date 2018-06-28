<!DOCTYPE html>
<!-- saved from url=(0069)http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/ -->
<html lang="en-US" class=" oldie ie isie js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link type="text/css" media="all" href="./slide-3d_files/autoptimize_c73cec7ce1bd11546f4725e3bab6ac2b.css" rel="stylesheet"><link type="text/css" media="only screen and (max-width: 768px)" href="./slide-3d_files/autoptimize_d8c778c28be383aee578e9e0243b3007.css" rel="stylesheet"><title>3D Cute Slider | Kallyas Wordpress Theme</title><link rel="profile" href="http://gmpg.org/xfn/11"><link rel="pingback" href="http://hogash-demos.com/kallyas_wp/xmlrpc.php"><link rel="canonical" href="./slide-3d_files/slide-3d.html"><link rel="alternate" type="application/rss+xml" title="Kallyas Wordpress Theme » Feed" href="http://hogash-demos.com/kallyas_wp/feed/"><link rel="alternate" type="application/rss+xml" title="Kallyas Wordpress Theme » Comments Feed" href="http://hogash-demos.com/kallyas_wp/comments/feed/"><link rel="alternate" type="application/rss+xml" title="Kallyas Wordpress Theme » 3D Cute Slider Comments Feed" href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/feed/"> <script async="" src="./slide-3d_files/analytics.js"></script><link href="./slide-3d_files/slider-style.css" rel="stylesheet" type="text/css"><script src="./slide-3d_files/cute.css3d.module.js"></script><script type="text/javascript">window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/hogash-demos.com\/kallyas_wp\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.2.4"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);</script><script src="./slide-3d_files/wp-emoji-release.min.js" type="text/javascript"></script> <link rel="stylesheet" id="Lato_default-css" href="./slide-3d_files/css" type="text/css" media="screen"><link rel="stylesheet" id="Open+Sans_default-css" href="./slide-3d_files/css(1)" type="text/css" media="screen"><link rel="stylesheet" id="zn_all_g_fonts-css" href="./slide-3d_files/css(2)" type="text/css" media="all"> <script type="text/javascript" src="./slide-3d_files/modernizr.min.js"></script> <script type="text/javascript">/*  */
var CSSettings = {"pluginPath":"http:\/\/hogash-demos.com\/kallyas_wp\/wp-content\/plugins\/CuteSlider"};
/*  */</script> <script type="text/javascript" src="./slide-3d_files/cute.slider.js"></script> <script type="text/javascript" src="./slide-3d_files/cute.transitions.all.js"></script> <script type="text/javascript" src="./slide-3d_files/respond.min.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery-migrate.min.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.themepunch.tools.min.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.themepunch.revolution.min.js"></script> <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://hogash-demos.com/kallyas_wp/xmlrpc.php?rsd"><link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://kallyaswp.hogashstudio.netdna-cdn.com/kallyas_wp/wp-includes/wlwmanifest.xml"><meta name="generator" content="WordPress 4.2.4"><meta name="generator" content="WooCommerce 2.3.8"><link rel="shortlink" href="http://hogash-demos.com/kallyas_wp/?p=427"> <script type="text/javascript">jQuery(document).ready(function() {
				// CUSTOM AJAX CONTENT LOADING FUNCTION
				var ajaxRevslider = function(obj) {
				
					// obj.type : Post Type
					// obj.id : ID of Content to Load
					// obj.aspectratio : The Aspect Ratio of the Container / Media
					// obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content
					
					var content = "";

					data = {};
					
					data.action = 'revslider_ajax_call_front';
					data.client_action = 'get_slider_html';
					data.token = '9402cec365';
					data.type = obj.type;
					data.id = obj.id;
					data.aspectratio = obj.aspectratio;
					
					// SYNC AJAX REQUEST
					jQuery.ajax({
						type:"post",
						url:"http://hogash-demos.com/kallyas_wp/wp-admin/admin-ajax.php",
						dataType: 'json',
						data:data,
						async:false,
						success: function(ret, textStatus, XMLHttpRequest) {
							if(ret.success == true)
								content = ret.data;								
						},
						error: function(e) {
							console.log(e);
						}
					});
					
					 // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
					 return content;						 
				};
				
				// CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
				var ajaxRemoveRevslider = function(obj) {
					return jQuery(obj.selector+" .rev_slider").revkill();
				};

				// EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
				var extendessential = setInterval(function() {
					if (jQuery.fn.tpessential != undefined) {
						clearInterval(extendessential);
						if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined') {
							jQuery.fn.tpessential.defaults.ajaxTypes.push({type:"revslider",func:ajaxRevslider,killfunc:ajaxRemoveRevslider,openAnimationSpeed:0.3});   
							// type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
							// func: the Function Name which is Called once the Item with the Post Type has been clicked
							// killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
							// openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
						}
					}
				},30);
			});</script> <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-62562526-1', 'auto');
	  ga('send', 'pageview');</script> <link rel="shortcut icon" href="http://kallyaswp.hogashstudio.netdna-cdn.com/kallyas_wp/wp-content/uploads/2013/01/favicon.png"> <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://kallyaswp.hogashstudio.netdna-cdn.com/kallyas_wp/wp-content/themes/kallyas/css/fixes.css"/> <![endif]--> <!--[if lte IE 8]> <script src="http://kallyaswp.hogashstudio.netdna-cdn.com/kallyas_wp/wp-content/themes/kallyas/js/respond.js"></script> <script type="text/javascript">var $buoop = {
					vs: {
						i: 8, f: 6, o: 10.6, s: 4, n: 9
					}
				};

				$buoop.ol = window.onload;

				window.onload = function ()
				{

					try {

						if ($buoop.ol) $buoop.ol();

					}
					catch (e) {
					}

					var e = document.createElement("script");

					e.setAttribute("type", "text/javascript");

					e.setAttribute("src", "http://browser-update.org/update.js");

					document.body.appendChild(e);

				};</script> <![endif]--><!--[if lt IE 9]> <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]--><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><style type="text/css" id="theme_color"></style><style type="text/css"></style></head><body class="page page-id-427 page-child parent-pageid-944 page-template-default res1170 kos_no"><div id="options_panel"><div class="options"><table><tbody><tr><td><h5>Header type:</h5> <select name="header_style" id="header_style"><option value="1">Style 1</option><option value="2" selected="selected">Style 2 (default)</option><option value="3">Style 3</option><option value="4">Style 4</option><option value="5">Style 5</option><option value="6">Style 6</option> </select></td></tr><tr><td><h5>Theme Colors:</h5> <input type="text" name="color1" class="color-picker miniColors" size="7" autocomplete="off" value="#cd2122" maxlength="7"><span class="miniColors-triggerWrap"><a class="miniColors-trigger" style="background-color: #cd2122" href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#"></a></span></td></tr><tr><td><h5>Color suggestions *</h5><ul class="color_suggestions"><li style="background-color:#B71010;" title="#B71010"></li><li style="background-color:#74AB00;" title="#74AB00"></li><li style="background-color:#363636;" title="#363636"></li><li style="background-color:#1592CC;" title="#1592CC"></li><li style="background-color:#C72647;" title="#C72647"></li><li style="background-color:#BAA507;" title="#BAA507"></li><li style="background-color:#13D7FD;" title="#13D7FD"></li><li style="background-color:#51106B;" title="#51106B"></li><li style="background-color:#157A13;" title="#157A13"></li><li style="background-color:#EB540A;" title="#EB540A"></li><li style="background-color:#091A57;" title="#091A57"></li><li style="background-color:#700808;" title="#700808"></li></ul><div class="clear"></div></td></tr><tr><td><h5>Theme:</h5> <select name="theme_switcher" id="theme_switcher"><option value="0" selected="selected">Light (Default)</option><option value="1">Dark</option> </select></td></tr></tbody></table><div class="note">* May not have full accuracy! You will have more specific color options inside the admin panel</div></div><h3><span class="icon-wrench icon-white"></span></h3><div class="demo_tooltip hideme">Check out my options!</div></div><div class="support_panel" id="sliding_panel" style="background: #F0F0F0;"><div class="container"><div id="text-2" class="widget widget_text"><div class="textwidget"><div class="row"><div class="span9"><h4 class="m_title">HOW TO SHOP</h4><div class="m_content how_to_shop"><div class="row"><div class="span3"> <span class="number">1</span> Login or create new account.</div><div class="span3"> <span class="number">2</span> Review your order.</div><div class="span3"> <span class="number">3</span> Payment &amp; <strong>FREE</strong> shipment</div></div><p>If you still have problems, please let us know, by sending an email to support@website.com . Thank you!</p></div></div><div class="span3"><h4 class="m_title">SHOWROOM HOURS</h4><div class="m_content"> Mon-Fri 9:00AM - 6:00AM<br> Sat - 9:00AM-5:00PM<br> Sundays by appointment only!</div></div></div></div></div></div></div><div class="login_register_stuff hide"><div id="login_panel"><div class="inner-container login-panel"><h3 class="m_title">SIGN IN YOUR ACCOUNT TO HAVE ACCESS TO DIFFERENT FEATURES</h3><form id="login_form" name="login_form" method="post" class="zn_form_login_demo" action="http://hogash-demos.com/kallyas_wp/wp-login.php"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" class="create_account" onclick="ppOpen(&#39;#register_panel&#39;, &#39;280&#39;);">CREATE ACCOUNT</a><input type="text" id="username" name="log" class="inputbox" placeholder="Username"> <input type="password" id="password" name="pwd" class="inputbox" placeholder="Password"> <label class="zn_remember"><input type="checkbox" name="rememberme" id="rememberme" value="forever"> Remember Me</label> <input type="submit" id="login" name="submit_button" class="zn_sub_button" value="LOG IN"> <input type="hidden" value="login" class="" name="zn_form_action"> <input type="hidden" value="zn_do_login" class="" name="action"> <input type="hidden" value="/kallyas_wp/index.php" class="zn_login_redirect" name="submit"><div class="links"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" onclick="ppOpen(&#39;#forgot_panel&#39;, &#39;350&#39;);">FORGOT YOUR PASSWORD?</a></div></form></div></div><div id="register_panel"><div class="inner-container register-panel"><h3 class="m_title">CREATE ACCOUNT</h3><form id="register_form" name="login_form" method="post" class="zn_form_login_demo" action="http://hogash-demos.com/kallyas_wp/wp-login.php?action=register"><p> <input type="text" id="reg-username" name="user_login" class="inputbox" placeholder="Username"></p><p> <input type="text" id="reg-email" name="user_email" class="inputbox" placeholder="Your email"></p><p> <input type="password" id="reg-pass" name="user_password" class="inputbox" placeholder="Your password"></p><p> <input type="password" id="reg-pass2" name="user_password2" class="inputbox" placeholder="Verify password"></p><p> <input type="submit" id="signup" name="submit" class="zn_sub_button" value="CREATE MY ACCOUNT"></p> <input type="hidden" value="register" class="" name="zn_form_action"> <input type="hidden" value="zn_do_login" class="" name="action"> <input type="hidden" value="/kallyas_wp/index.php" class="zn_login_redirect" name="submit"><div class="links"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" onclick="ppOpen(&#39;#login_panel&#39;, &#39;800&#39;);">ALREADY HAVE AN ACCOUNT?</a></div></form></div></div><div id="forgot_panel"><div class="inner-container forgot-panel"><h3 class="m_title">FORGOT YOUR DETAILS?</h3><form id="forgot_form" name="login_form" method="post" class="zn_form_login_demo" action="http://hogash-demos.com/kallyas_wp/wp-login.php?action=lostpassword"><p> <input type="text" id="forgot-email" name="user_login" class="inputbox" placeholder="Username or E-mail"></p><p> <input type="submit" id="recover" name="submit" class="zn_sub_button" value="SEND MY DETAILS!"></p><div class="links"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" onclick="ppOpen(&#39;#login_panel&#39;, &#39;800&#39;);">AAH, WAIT, I REMEMBER NOW!</a></div></form></div></div></div><div class="buybtn-panel"> <span class="buybtn-close" id="buybtn-close">×</span> <a href="http://themeforest.net/item/kallyas-responsive-multipurpose-wordpress-theme/4091658?ref=hogash" class="buybtn-cta">BUY KALLYAS</a></div> <script>jQuery(document).ready(function($) {
				var closeBtn = jQuery('#buybtn-close');
				closeBtn.on('click', function(){
					closeBtn.parent().addClass('is-hidden');
				})
			});</script> <div id="page_wrapper"> <header id="header" class="style2 cta_button "><div class="container"><div class="logo-container hasInfoCard"><h3 id="logo"><a href="http://hogash-demos.com/kallyas_wp/"><img src="./slide-3d_files/logo.png" alt="Kallyas Wordpress Theme" title="Ultra premium wordpress theme"></a></h3><div id="infocard" style="background: #cd2122;"><div class="custom "><div class="row-fluid "><div class="span5"><p>&nbsp;</p><p style="text-align: center;"><img src="./slide-3d_files/kallyas_icon.png" border="0" alt=""></p><p style="text-align: center;">Kallyas is an ultra-premium, responsive theme built for today websites.</p></div><div class="span7"><div class="custom contact-details"><p><strong>T (212) 555 55 00</strong><br>Email:&nbsp;<a href="mailto:sales@yourwebsite.com">sales@yourwebsite.com</a></p><p>Your Company LTD<br>Street nr 100, 4536534, Chicago, US</p><a href="http://goo.gl/maps/1OhOu" target="_blank" class="map-link"><span class="icon-map-marker icon-white"></span> <span>Open in Google Maps</span></a></div><div style="height:20px;"></div><ul class="social-icons normal"><li class="title">GET SOCIAL</li><li class="social-twitter"><a title="Twitter" href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_self">Twitter</a></li><li class="social-facebook"><a title="Facebook" href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_self">Facebook</a></li><li class="social-dribbble"><a title="Dribbble" href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_self">Dribbble</a></li><li class="social-gplus"><a title="Google Plus" href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_blank">Google Plus</a></li></ul></div></div></div></div></div><div class="header-links-container "><ul class="topnav navLeft"><li class="drop"><a id="mycartbtn" href="http://hogash-demos.com/kallyas_wp/cart/" title="View your shopping cart">MY CART </a><div class="pPanel"><div class="inner">
			<span class="cart_details">0 items Total of <span class="amount">$0.00</span>
				<a href="http://hogash-demos.com/kallyas_wp/cart/" title="View your shopping cart" class="checkout">Checkout <span class="icon-chevron-right"></span></a></span>

			</div></div></li></ul><ul class="topnav navLeft"><li class="languages drop"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#"><span class="icon-globe icon-white"></span> LANGUAGES</a><div class="pPanel"><ul class="inner"><li class="active"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#">English <span class="icon-ok"></span></a></li><li><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#">French</a></li><li><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#">German</a></li></ul></div></li></ul><ul class="topnav navRight"><li><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#login_panel" data-rel="prettyPhoto[login_panel]">LOGIN</a></li></ul><ul class="topnav navRight"><li><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" id="open_sliding_panel"><span class="icon-remove-circle icon-white"></span> SUPPORT </a></li></ul></div><div id="search"> <a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" class="searchBtn"><span class="icon-search icon-white"></span></a><div class="search"><form id="searchform" action="http://hogash-demos.com/kallyas_wp" method="get"> <input name="s" maxlength="20" class="inputbox" type="text" size="20" value="SEARCH ..." onblur="if (this.value==&#39;&#39;) this.value=&#39;SEARCH ...&#39;;" onfocus="if (this.value==&#39;SEARCH ...&#39;) this.value=&#39;&#39;;"> <input type="submit" id="searchsubmit" value="go" class="icon-search"></form></div></div> <a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" id="ctabutton" class="" title="GET A FREE QUOTE" target="_self"><strong>FREE</strong>QUOTE<svg version="1.1" class="trisvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" preserveAspectRatio="none" width="14px" height="5px" viewBox="0 0 14.017 5.006" enable-background="new 0 0 14.017 5.006" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.016,0L7.008,5.006L0,0H14.016z"></path></svg></a> <nav id="main_menu" class="smooth_menu"><div class="zn_menu_trigger"><a href="">Menu</a></div><ul id="menu-main-menu" class="sf-menu nav clearfix sf-js-enabled"><li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-27"><a href="http://hogash-demos.com/kallyas_wp/" class="sf-with-ul">INÍCIO<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homepage-2/" style="float: none; width: auto;">Homepage 2</a></li><li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-261" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homepage-3/" style="float: none; width: auto;">Homepage 3</a></li><li id="menu-item-284" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-284" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homepage-4/" style="float: none; width: auto;">Homepage 4</a></li><li id="menu-item-283" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-283" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homepage-5/" style="float: none; width: auto;">Homepage 5</a></li><li id="menu-item-302" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-302" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homepage-6/" style="float: none; width: auto;">Homepage 6</a></li><li id="menu-item-365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-365" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homapage-all/" style="float: none; width: auto;">Homapage All</a></li></ul></li><li id="menu-item-957" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-957 active"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/" class="sf-with-ul">BLOG<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-956" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-956" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/main-slider/" class="sf-with-ul" style="float: none; width: auto;">Main Slider<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="left: 12em; float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-373" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-373" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/main-slider/default-style/" style="float: none; width: auto;">Default style</a></li><li id="menu-item-426" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-426" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/with-thumbs/" style="float: none; width: auto;">With Thumbs</a></li><li id="menu-item-425" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-425" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/faded/" style="float: none; width: auto;">Faded</a></li><li id="menu-item-424" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-424" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fixed-width-slider/" style="float: none; width: auto;">Fixed Width Slider</a></li><li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fixed-position-scroll/" style="float: none; width: auto;">Fixed Position (Scroll)</a></li></ul></li><li id="menu-item-878" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-878" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/creative-slider/" style="float: none; width: auto;">Creative Slider</a></li><li id="menu-item-385" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-385" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fixed-slider/" class="sf-with-ul" style="float: none; width: auto;">Fixed Slider<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="left: 12em; float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-386" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fixed-slider/" class="sf-with-ul" style="float: none; width: auto;">Style 1 ( flex slider )<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="left: 12em; float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-387" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fixed-slider/" style="float: none; width: auto;">Default</a></li><li id="menu-item-390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-390" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/with-thumbnails/" style="float: none; width: auto;">With thumbnails</a></li></ul></li><li id="menu-item-393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-393" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-2-nivo-slider/" style="float: none; width: auto;">Style 2 ( Nivo Slider )</a></li><li id="menu-item-396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-396" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-3-wow-slider/" class="sf-with-ul" style="float: none; width: auto;">Style 3 ( Wow Slider )<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="left: 12em; float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-403" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-403" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-3-wow-slider/" style="float: none; width: auto;">Blast Effect</a></li><li id="menu-item-404" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-404" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/blur-effect/" style="float: none; width: auto;">Blur Effect</a></li><li id="menu-item-405" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-405" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fly-effect/" style="float: none; width: auto;">Fly Effect</a></li><li id="menu-item-406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-406" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/blinds-effect/" style="float: none; width: auto;">Blinds Effect</a></li></ul></li></ul></li><li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-427 current_page_item menu-item-794 active" style="white-space: normal; float: left; width: 100%;"><a href="./slide-3d_files/slide-3d.html" style="float: none; width: auto;">3D Cute Slider</a></li><li id="menu-item-820" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-820" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fancy-slider/" style="float: none; width: auto;">Fancy Slider</a></li><li id="menu-item-478" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-478" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/static-content/" class="sf-with-ul" style="float: none; width: auto;">Static Content<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="left: 12em; float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/static-content/" style="float: none; width: auto;">Style 1</a></li><li id="menu-item-508" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-508" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-2-boxes/" style="float: none; width: auto;">Style 2 / Boxes</a></li><li id="menu-item-524" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-524" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-3-video/" style="float: none; width: auto;">Style 3 / Video</a></li><li id="menu-item-547" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-547" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-2-boxes-2/" style="float: none; width: auto;">Style 4 / Maps</a></li><li id="menu-item-546" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-546" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-5-text-pop/" style="float: none; width: auto;">Style 5 / Text Pop</a></li><li id="menu-item-545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-545" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-6-product-loupe/" style="float: none; width: auto;">Style 6 / Product Loupe</a></li><li id="menu-item-587" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-587" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-7-event-countdown/" style="float: none; width: auto;">Style 7 / Event Countdown</a></li><li id="menu-item-595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-595" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-6-video-background/" style="float: none; width: auto;">Style 8 / Video Background</a></li><li id="menu-item-613" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-613" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-9-text-login/" style="float: none; width: auto;">Style 9 / Text &amp; Register</a></li><li id="menu-item-972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-972" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-10-simple-text/" style="float: none; width: auto;">Style 10 / Simple Text</a></li></ul></li><li id="menu-item-819" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-819" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/portfolio-slider-devices/" style="float: none; width: auto;">Portfolio Slider Devices</a></li><li id="menu-item-472" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-472" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/circular-content-default-style/" class="sf-with-ul" style="float: none; width: auto;">Circular Content<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="left: 12em; float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-473" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-473" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/circular-content-default-style/" style="float: none; width: auto;">Alternative Style</a></li><li id="menu-item-474" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-474" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/circular-content/" style="float: none; width: auto;">Default Style</a></li></ul></li><li id="menu-item-523" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-523" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/portfolio-slider-frames/" class="sf-with-ul" style="float: none; width: auto;">Portfolio Slider Frames<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="left: 12em; float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-522" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-522" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/sliding-vertically/" style="float: none; width: auto;">Sliding Vertically</a></li><li id="menu-item-521" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-521" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/sliding-horizontally/" style="float: none; width: auto;">Sliding Horizontally</a></li></ul></li><li id="menu-item-442" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-442" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/laptop-slider/" style="float: none; width: auto;">Laptop Slider</a></li><li id="menu-item-490" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-490" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/icarousel/" style="float: none; width: auto;">iCarousel</a></li><li id="menu-item-466" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-466" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/css3-panels/" style="float: none; width: auto;">CSS3 Panels</a></li></ul></li><li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><a href="http://hogash-demos.com/kallyas_wp/about-us/">QUEM SOMOS</a></li><li id="menu-item-53" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-53"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" class="sf-with-ul">SOLUÇÕES<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-1439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1439" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/page-builder/" style="float: none; width: auto;">Page builder</a></li><li id="menu-item-1447" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1447" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/theme-options/" style="float: none; width: auto;">Theme admin panel</a></li><li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/blog/" style="float: none; width: auto;">Blog</a></li><li id="menu-item-1587" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1587" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/blog-2/" style="float: none; width: auto;">Blog – Style 2</a></li><li id="menu-item-227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-227" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/" class="sf-with-ul" style="float: none; width: auto;">Portfolio<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="left: 12em; float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-226" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-226" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/category-layout/" class="sf-with-ul" style="float: none; width: auto;">Category Layout<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="left: 12em; float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-1182" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1182" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/portfolio-one-column/" style="float: none; width: auto;">One Column</a></li><li id="menu-item-1179" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1179" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/portfoliotwo-columns/" style="float: none; width: auto;">Two Columns</a></li><li id="menu-item-1178" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1178" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/portfoliothree-columns/" style="float: none; width: auto;">Three Columns</a></li><li id="menu-item-1177" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1177" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/portfolio-four-columns/" style="float: none; width: auto;">Four Columns</a></li></ul></li><li id="menu-item-225" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-225" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/sortable-layout/" style="float: none; width: auto;">Sortable Portfolio</a></li><li id="menu-item-224" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-224" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/carousels-layout/" style="float: none; width: auto;">Carousels Layout</a></li></ul></li><li id="menu-item-1317" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1317" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/photo-gallery/" style="float: none; width: auto;">Photo Gallery</a></li><li id="menu-item-55" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-55" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" class="sf-with-ul" style="float: none; width: auto;">Holiday Slides<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="left: 12em; float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/page-header-for-christmas/" style="float: none; width: auto;">Christmas</a></li><li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/page-header-for-easter/" style="float: none; width: auto;">Easter</a></li></ul></li><li id="menu-item-983" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-983" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/sitemap/" style="float: none; width: auto;">Sitemap</a></li><li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/full-width-page-2/" style="float: none; width: auto;">Animated Header</a></li></ul></li><li id="menu-item-629" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-629"><a href="http://hogash-demos.com/kallyas_wp/shop-page/">CURSOS</a></li><li id="menu-item-954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-954"><a href="http://hogash-demos.com/kallyas_wp/pages-2/" class="sf-with-ul">PAGES<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-627" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-627" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/faq/" style="float: none; width: auto;">FAQ</a></li><li id="menu-item-639" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-639" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/process-page/" style="float: none; width: auto;">Process Page</a></li><li id="menu-item-695" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-695" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/contact-us/" style="float: none; width: auto;">Contact Us</a></li><li id="menu-item-694" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-694" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/full-width-page/" style="float: none; width: auto;">Full Width Page</a></li><li id="menu-item-692" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-692" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/left-sidebar-page/" style="float: none; width: auto;">Left Sidebar Page</a></li><li id="menu-item-690" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-690" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/right-sidebar-page/" style="float: none; width: auto;">Right Sidebar Page</a></li><li id="menu-item-693" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-693" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/coming-soon-page/" style="float: none; width: auto;">Coming Soon page</a></li><li id="menu-item-795" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-795" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/historic-page/" style="float: none; width: auto;">Historic page</a></li><li id="menu-item-724" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-724" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/testimonials/" style="float: none; width: auto;">Testimonials</a></li><li id="menu-item-796" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-796" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/?page_id=1787678" style="float: none; width: auto;">404 Error Page</a></li><li id="menu-item-797" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-797" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/our-team/" style="float: none; width: auto;">Team</a></li><li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/services/" style="float: none; width: auto;">Services</a></li><li id="menu-item-935" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-935" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/careers/" style="float: none; width: auto;">Careers</a></li></ul></li><li id="menu-item-898" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-898"><a href="http://hogash-demos.com/kallyas_wp/typography/" class="sf-with-ul">CONTATO<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: 12em; display: none; visibility: hidden;"><li id="menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-899" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/typography/" style="float: none; width: auto;">Typography</a></li><li id="menu-item-911" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-911" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/table-styles/" style="float: none; width: auto;">Table Styles</a></li><li id="menu-item-921" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-921" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/button-designs/" style="float: none; width: auto;">Button Designs</a></li><li id="menu-item-1079" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1079" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pricing-tables-designs/" style="float: none; width: auto;">Pricing Tables Designs</a></li><li id="menu-item-1102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1102" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/tabs-designs/" style="float: none; width: auto;">Tabs Designs</a></li><li id="menu-item-1114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1114" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/accordions-designs/" style="float: none; width: auto;">Accordions Designs</a></li></ul></li></ul> </nav></div> </header><div class="clearfix"></div><div id="slideshow" class="uh_cute_slider"><div class="bgback"></div><div data-images="http://hogash-demos.com/kallyas_wp/wp-content/themes/kallyas/images/" id="sparkles"></div><div class="container zn_slideshow"><div id="cuteslider_2_wrapper" class="cs-kallyas"><div id="cuteslider_2" class="cute-slider" data-width="1170" data-height="465" data-overpause="true" data-shuffle="false" style="width: 1170px; height: 465px; visibility: visible; overflow: visible;"><div class="br-controls" style="visibility: visible; width: 100%; height: 100%;"><div class="br-captions" style="width: 100%; height: 100%; position: absolute;"><div class="caption_slider2_layer3_sublayer1" style="overflow: hidden; opacity: 1;"><div class="br-caption-content" style="position: relative;">HIGHLY CUSTOMIZABLE</div></div></div><div class="br-link" style="position: absolute; width: 100%; height: 100%; cursor: pointer; display: none;"></div><div class="br-video" style="position: absolute; width: 100%; height: 100%; opacity: 0; display: none;"><div class="play-btn"></div><div class="video-cont" style="display: none; opacity: 0;"><div class="close-btn"></div></div></div><div class="br-slideinfo" style="overflow: hidden; position: absolute;"><div class="" style="position: relative;"></div></div><div class="br-circle-timer" style="opacity: 1; cursor: pointer;"><canvas width="28" height="28" class="br-timer-stroke" style="position: absolute;"></canvas><div class="br-timer-dot" style="position: relative; left: 9px; top: 8px;"></div></div><div class="br-next" style="opacity: 1; cursor: pointer;"></div><div class="br-previous" style="opacity: 1; cursor: pointer;"></div><div class="br-slidecontrol" style="cursor: pointer; opacity: 1;"><ul><li><div class="br-thumb-bottom" style="opacity: 0; top: 24px; display: none;"><div class="br-thumb-img" style="overflow: hidden;"><img src="./slide-3d_files/slide1.jpg" style="position: absolute; filter: inherit;"></div><div class="br-thumb-frame" style="position: absolute; z-index: 1; filter: inherit;"></div></div><span class="br-control-selected" style="display: none;"></span></li><li><div class="br-thumb-bottom" style="opacity: 0; top: 24px; display: none;"><div class="br-thumb-img" style="overflow: hidden;"><img src="./slide-3d_files/slide2.jpg" style="position: absolute; filter: inherit;"></div><div class="br-thumb-frame" style="position: absolute; z-index: 1; filter: inherit;"></div></div><span class="br-control-selected" style="display: none;"></span></li><li><div class="br-thumb-bottom" style="opacity: 0; top: 24px; display: none;"><div class="br-thumb-img" style="overflow: hidden;"><img src="./slide-3d_files/slide3.jpg" style="position: absolute; filter: inherit;"></div><div class="br-thumb-frame" style="position: absolute; z-index: 1; filter: inherit;"></div></div><span class="br-control-selected" style="display: block;"></span></li><li><div class="br-thumb-bottom" style="opacity: 0; top: 24px; display: none;"><div class="br-thumb-img" style="overflow: hidden;"><img src="./slide-3d_files/slide4.jpg" style="position: absolute; filter: inherit;"></div><div class="br-thumb-frame" style="position: absolute; z-index: 1; filter: inherit;"></div></div><span class="br-control-selected"></span></li></ul></div><div class="br-bar-timer" style="width: 100%; overflow: hidden; opacity: 1;"><div class="br-timer-glow" style="position: relative; left: 807.136101839198px;"></div><div class="br-timer-bar" style="width: 906.136101839198px;"></div></div></div><div class="br-loading" style="display: none;"><div class="img"></div></div><div style="position: relative;"><div style="width: 100%; height: auto; overflow: hidden; position: absolute; z-index: 1; opacity: 1;"><img src="./slide-3d_files/slide3.jpg" style="width: 100%; height: auto;"></div></div></div><div class="cute-shadow"><img src="./slide-3d_files/shadow.png" alt="shadow"></div></div><script type="text/javascript">var cuteslider2 = new Cute.Slider();cuteslider2.setup("cuteslider_2" , "cuteslider_2_wrapper", "http://kallyaswp.hogashstudio.netdna-cdn.com/kallyas_wp/wp-content/plugins/CuteSlider/skins/kallyas/style/slider-style.css");cuteslider2.api.addEventListener(Cute.SliderEvent.CHANGE_START, function(event) { });cuteslider2.api.addEventListener(Cute.SliderEvent.CHANGE_END, function(event) { });cuteslider2.api.addEventListener(Cute.SliderEvent.WATING, function(event) { });cuteslider2.api.addEventListener(Cute.SliderEvent.CHANGE_NEXT_SLIDE, function(event) { });cuteslider2.api.addEventListener(Cute.SliderEvent.WATING_FOR_NEXT, function(event) { });</script> </div><div class="zn_header_bottom_style"></div></div><div class="clearfix"></div><div id="action_box" data-arrowpos="center"><div class="container"><div class="row"><div class="span8"><h4 class="text">FOCO! PORQUE ALÉM DE COMEÇAR, É PRECISO PERSISTIR!</h4></div><div class="span4 align-center"><a class="btn btn-lined" href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_blank">JOIN OUR NEWSLETTER</a></div></div></div></div> <section id="content"><div class="container"><div class="row zn-row-0 "><div class="span4 box image-boxes imgboxes_style1"><a class="hoverBorder" href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_self"><span class="hoverBorderWrapper"><img src="./slide-3d_files/img1.jpg" width="370" height="0" alt="MULTIPURPOSE TEMPLATE" title="MULTIPURPOSE TEMPLATE"><span class="theHoverBorder"></span></span><h6>Read more +</h6></a><h3 class="m_title">MULTIPURPOSE TEMPLATE</h3>Deseja contratar Talentos Humanos? Sua empresa encontra-se com grande rotatividade de colaboradores? Temos a satisfação de otimizar sua empresa na Seleção de Pessoal.</div><div class="span4 box image-boxes imgboxes_style1"><a class="hoverBorder" href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_self"><span class="hoverBorderWrapper"><img src="./slide-3d_files/img2.jpg" width="370" height="0" alt="WELL DOCUMENTED" title="WELL DOCUMENTED"><span class="theHoverBorder"></span></span><h6>Read more +</h6></a><h3 class="m_title">WELL DOCUMENTED</h3>Deseja contratar Talentos Humanos? Sua empresa encontra-se com grande rotatividade de colaboradores? Temos a satisfação de otimizar sua empresa na Seleção de Pessoal.</div><div class="span4 box image-boxes imgboxes_style1"><a class="hoverBorder" href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_self"><span class="hoverBorderWrapper"><img src="./slide-3d_files/img3.jpg" width="370" height="0" alt="GREAT SUPPORT" title="GREAT SUPPORT"><span class="theHoverBorder"></span></span><h6>Read more +</h6></a><h3 class="m_title">GREAT SUPPORT</h3>Deseja contratar Talentos Humanos? Sua empresa encontra-se com grande rotatividade de colaboradores? Temos a satisfação de otimizar sua empresa na Seleção de Pessoal.</div></div><div class="row zn-row-3 "><div class="span4 services_box"><div class="box fixclear"><div class="icon"><img src="./slide-3d_files/ico-01.png" alt=""></div><h4 class="title">WEB DESIGN SERVICES</h4><ul class="list-style1"><li>Implantação de RH</li><li>Treinamentos</li><li>Palestras</li><li>Cargos e Salários</li><li>Portal systems</li><li>Mapeamento por Competência</li><li>Cliente Misterioso (oculto)</li></ul></div></div><div class="span4 services_box"><div class="box fixclear"><div class="icon"><img src="./slide-3d_files/ico-02.png" alt=""></div><h4 class="title">AVALIAÇÕES</h4><ul class="list-style1"><li>Desempenho</li><li>Potenciais</li><li>Psicológicas</li><li>Grafológicas</li><li>Powerpoint presentation</li><li>Print Ads / Magazine</li><li>Banners</li></ul></div></div><div class="span4 services_box"><div class="box fixclear"><div class="icon"><img src="./slide-3d_files/ico-03.png" alt=""></div><h4 class="title">CURSOS LIVRES</h4><ul class="list-style1"><li>Presencial</li><li>Vip</li><li>On-line</li><li>Para empresas</li></ul></div></div></div><div class="row zn-row-6 "><div class="recentwork_carousel default-style"><div class="span3"><h3 class="m_title">PRATIQUE</h3><p>Quando penso que cheguei ao meu limite descubro que tenho forças de ir  Sed cursus ante dapibus diam.</p><div class="controls"> <a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" class="prev" style="display: inline;"><span class="icon-chevron-left"></span></a> <a href="http://hogash-demos.com/kallyas_wp/features/portfolio/sortable-layout/" class="complete"><span class="icon-th"></span></a> <a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" class="next" style="display: inline;"><span class="icon-chevron-right"></span></a></div></div><div class="span9"><div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 870px; height: 235px; margin: 0px; overflow: hidden;"><ul id="recent_works1" class="recent_works1 fixclear" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 9570px; height: 235px;"><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/quam-semper-libero-2/"><span class="hover"><img src="./slide-3d_files/ptf6-270x169.jpg" width="270" height="169" alt="business cards"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>Por que contratar nossos serviços</h4> <span>Logo</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/ultricies-nisi-vel-augue/"><span class="hover"><img src="./slide-3d_files/ptf1-270x169.jpg" width="270" height="169" alt="business cards"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>Ultricies nisi vel augue</h4> <span>Logo</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/phasellus-viverra-nulla/"><span class="hover"><img src="./slide-3d_files/img111-270x169.jpg" width="270" height="169" title="Amazing Stationary"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>The amazing stationary</h4> <span>Logo</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/quam-semper-libero/"><span class="hover"><img src="./slide-3d_files/ptf5-270x169.jpg" width="270" height="169" alt="minicards"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>Por que contratar nossos serviços</h4> <span>Print</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/sed-fringilla-mauris/"><span class="hover"><img src="./slide-3d_files/img12-270x169.jpg" width="270" height="169" title="img12"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>Sketching around</h4> <span>Print</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/libero-venenatis/"><span class="hover"><img src="./slide-3d_files/img24-270x169.jpg" width="270" height="169" title="img24"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>Devicing my mockup</h4> <span>Print</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/blandit-luctus-pulvinar-2/"><span class="hover"><img src="./slide-3d_files/img25-270x169.jpg" width="270" height="169" title="img25"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>Almost done!</h4> <span>Websites</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/nullam-dictum-felis-2/"><span class="hover"><img src="./slide-3d_files/img26-270x169.jpg" width="270" height="169" title="img26"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>The news feed!</h4> <span>Websites</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/etiam-ultricies-nisi/"><span class="hover"><img src="./slide-3d_files/img27-270x169.jpg" width="270" height="169" title="img27"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>Oh! My desk.</h4> <span>Print</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/blandit-luctus-pulvinar/"><span class="hover"><img src="./slide-3d_files/ptf7-270x169.jpg" width="270" height="169" alt="Collis Ta&#39;eed business cards" title="ptf7"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>Blandit luctus pulvinar</h4> <span>Websites</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/maecenas-tempus/"><span class="hover"><img src="./slide-3d_files/img28-270x169.jpg" width="270" height="169" title="img28"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>That’s my business!</h4> <span>Print</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/nullam-dictum-felis/"><span class="hover"><img src="./slide-3d_files/img29-270x169.jpg" width="270" height="169" title="img29"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>Nullam dictum felis</h4> <span>Print</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/video-portfolio/"><span class="hover"><img src="./slide-3d_files/img29-270x169.jpg" width="270" height="169" title="img29"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>Video portfolio</h4> <span>Websites</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/image-portfolio/"><span class="hover"><img src="./slide-3d_files/img30-270x169.jpg" width="270" height="169" title="img30"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>My daily reading</h4> <span>Print</span></div></a></li><li style="width: 270px;"><a href="http://hogash-demos.com/kallyas_wp/portfolio/combined-portfolio-media/"><span class="hover"><img src="./slide-3d_files/ptf2-270x169.jpg" width="270" height="169" alt="business cards" title="ptf2"><span class="hov"></span></span><div class="details"> <span class="bg"></span><h4>Combined portfolio media</h4> <span>Websites</span></div></a></li></ul></div></div></div></div><div class="row zn-row-7 "><div class="clearfix callout-banner"><div class="span10 "><h3 class="m_title">Kallyas Theme is one of the <strong>most amazing Wordpress themes ever</strong>. It's full of goodies<br> and features, demonstrating its truly multi-puropse layout.</h3><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p></div><div class="span2"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" class="circlehover with-symbol" data-size="" data-position="top-left" data-align="right" target="_blank"><span class="text">FIND OUT MORE</span><span class="symbol"><img src="./slide-3d_files/ok.png" alt=""></span></a></div></div></div><div class="row zn-row-8 "><div class="span12"><div class="row noMargin"><div class="span12"><h4 class="smallm_title centered bigger"><span>DICAS</span></h4></div><div class="span3 feature_box style2"><div class="box"><span class="icon"><img src="./slide-3d_files/ico-011.png" alt="CUSTOMER SUPPORT"></span><h4 class="title">SUPORTE</h4><p>PORQUE ALÉM DE COMEÇAR, É PRECISO PERSISTIR.</p></div></div><div class="span3 feature_box style2"><div class="box"><span class="icon"><img src="./slide-3d_files/ico-021.png" alt="WELL DOCUMENTED"></span><h4 class="title">WELL DOCUMENTED</h4><p>DESENVOLVA O HÁBITO DE ATINGIR METAS..</p></div></div><div class="span3 feature_box style2"><div class="box"><span class="icon"><img src="./slide-3d_files/ico-031.png" alt="UNLIMITED COLORS"></span><h4 class="title">TENTAR</h4><p>NÃO TENHA MEDO DE FRACASSAR, TENHA MEDO DE NÃO TENTAR...</p></div></div><div class="span3 feature_box style2"><div class="box"><span class="icon"><img src="./slide-3d_files/ico-04.png" alt="CUSTOM SHORTCODES"></span><h4 class="title">TEMPO</h4><p>TEMPO NÃO SE TEM, TEMPO SE FAZ. SAIBA O VALOR DE CADA MINUTO. </p></div></div><div class="span3 feature_box style2"><div class="box"><span class="icon"><img src="./slide-3d_files/ico-05.png" alt="RESPONSIVE"></span><h4 class="title">VENCER</h4> <p>VENCEDORES FAZEM O QUE PERDEDORES NÃO QUEREM FAZER...</p></div></div><div class="span3 feature_box style2"><div class="box"><span class="icon"><img src="./slide-3d_files/ico-06.png" alt="MULTILANGUAGE READY"></span><h4 class="title">CORAGEM</h4><p>VENCEDORES FAZEM O QUE PERDEDORES NÃO QUEREM FAZER...</p></div></div><div class="span3 feature_box style2"><div class="box"><span class="icon"><img src="./slide-3d_files/ico-07.png" alt="HTML5 &amp; CSS3"></span><h4 class="title">SÁBIO</h4><p>PESSOAS SÁBIAS OUVEM MAIS E FALAM MENOS…</p></div></div><div class="span3 feature_box style2"><div class="box"><span class="icon"><img src="./slide-3d_files/ico-08.png" alt="HIGHLY CUSTOMIZABLE"></span><h4 class="title">FÉ</h4><p>SUBA O PRIMEIRO DEGRAU COM FÉ. NÃO É NECESSÁRIO QUE VOCÊ VEJA </p></div></div></div></div></div><div class="row zn-row-9 "><div class="span12"><div class="latest_posts acc-style"><h3 class="m_title">DEPOIMENTOS DOS CURSOS</h3> <a href="http://hogash-demos.com/kallyas_wp/features/blog/" class="viewall">VIEW ALL -</a><div class="css3accordion"><ul><li><div class="inner-acc"><a href="http://hogash-demos.com/kallyas_wp/2013/04/qui-dolorem-est/" class="thumb hoverBorder
plus"><span class="hoverBorderWrapper"><img class="shadow" src="./slide-3d_files/blond-boxing-woman-in-black-punching-bag.jpg" alt=""><span class="theHoverBorder"></span></span></a><div class="content"><em>02 April 2013 by admin, in Tech</em><h5 class="m_title"><a href="http://hogash-demos.com/kallyas_wp/2013/04/qui-dolorem-est/">Qui dolorem est</a></h5><div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mo...</div><a href="http://hogash-demos.com/kallyas_wp/2013/04/qui-dolorem-est/">READ MORE +</a></div></div></li><li><div class="inner-acc"><a href="http://hogash-demos.com/kallyas_wp/2013/04/neque-porro-quisquam/" class="thumb hoverBorder
plus"><span class="hoverBorderWrapper"><img class="shadow" src="./slide-3d_files/target-businessman.jpg" alt=""><span class="theHoverBorder"></span></span></a><div class="content"><em>02 April 2013 by admin, in Tech</em><h5 class="m_title"><a href="http://hogash-demos.com/kallyas_wp/2013/04/neque-porro-quisquam/">Neque porro quisquam</a></h5><div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mo...</div><a href="http://hogash-demos.com/kallyas_wp/2013/04/neque-porro-quisquam/">READ MORE +</a></div></div></li><li class="last"><div class="inner-acc"><a href="http://hogash-demos.com/kallyas_wp/2013/02/aliquam-lorem-ante-olsa/" class="thumb hoverBorder
plus"><span class="hoverBorderWrapper"><img class="shadow" src="./slide-3d_files/tribal-face-and-arms-hands.jpg" alt=""><span class="theHoverBorder"></span></span></a><div class="content"><em>06 February 2013 by Dani, in Entertainment</em><h5 class="m_title"><a href="http://hogash-demos.com/kallyas_wp/2013/02/aliquam-lorem-ante-olsa/">Aliquam lorem ante olsa</a></h5><div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mo...</div><a href="http://hogash-demos.com/kallyas_wp/2013/02/aliquam-lorem-ante-olsa/">READ MORE +</a></div></div></li></ul></div></div></div></div></div><div class="gray-area "><div class="container"><div class="row zn-row-0 "><div class="span8 box image-boxes imgboxes_style1 zn_ib_style2"><h3 class="m_title">WELCOME TO KALLYAS TEMPLATE</h3><a class="hoverBorder alignright" href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_blank"><span class="hoverBorderWrapper"><img src="./slide-3d_files/img6.jpg" width="220" height="156" alt="WELCOME TO KALLYAS TEMPLATE" title="WELCOME TO KALLYAS TEMPLATE"><span class="theHoverBorder"></span></span></a><p>Trabalhamos  com a cultura de cada cliente, analisamos, estudamos , elaboramos e </p><p>Nullam facilisis mattis lacus, ut dapibus risus congue vitae. Suspendisse potenti.</p><p>Lapidantos Talentos Humanos e sua empresa.</p></div><div class="span4"><h3 class="m_title">TEXT ACCORDION</h3><div class="acc-group default-style"><button data-toggle="collapse" data-target="#acc55e5eb0cc3b6c1" class="collapsed">Vivamus ut molestie nulla. Aenean vel tortor velit.</button><div id="acc55e5eb0cc3b6c1" class="collapse "><div class="content"><p>Vivamus ut molestie nulla. Aenean vel tortor velit. Morbi quis varius tortor. Quisque sit amet leo purus, eget accumsan lorem. <br> Curabitur fringilla ipsum id quam lacinia venenatis.</p></div></div></div><div class="acc-group default-style"><button data-toggle="collapse" data-target="#acc55e5eb0cc3b6c2" class="collapsed">Duis aute irure dolor in reprehenderit in voluptate.</button><div id="acc55e5eb0cc3b6c2" class="collapse "><div class="content"><p>Trabalhamos  com a cultura de cada cliente, analisamos, estudamos , elaboramos e </p></div></div></div><div class="acc-group default-style"><button data-toggle="collapse" data-target="#acc55e5eb0cc3b6c3" class="collapsed">Neque porro quisquam est qui dolorem.</button><div id="acc55e5eb0cc3b6c3" class="collapse "><div class="content"><p>Trabalhamos  com a cultura de cada cliente, analisamos, estudamos , elaboramos e </p></div></div></div><div class="acc-group default-style"><button data-toggle="collapse" data-target="#acc55e5eb0cc3b6c4" class="collapsed">At vero eos et accusamus et iusto odio dignissimos.</button><div id="acc55e5eb0cc3b6c4" class="collapse "><div class="content"><p>Trabalhamos  com a cultura de cada cliente, analisamos, estudamos , elaboramos e </p></div></div></div><div class="acc-group default-style"><button data-toggle="collapse" data-target="#acc55e5eb0cc3b6c5" class="collapsed">Curabitur fringilla ipsum id quam lacinia venenatis.</button><div id="acc55e5eb0cc3b6c5" class="collapse "><div class="content"><p>Trabalhamos  com a cultura de cada cliente, analisamos, estudamos , elaboramos e </p></div></div></div></div></div><div class="row zn-row-2 "><div class="span4"><div class="testimonial_box" data-align="left" data-theme="light"><div class="details"> <img src="./slide-3d_files/testimonial_logo.png" width="60" height="60" alt=""><h6><strong>Paul Simon </strong>General Manager</h6></div><blockquote>CADA VEZ QUE VOCÊ DESISTE, É UM PEDAÇO DO SEU FUTURO DE DEIXA DE EXISTIR.</blockquote></div></div><div class="span8"><div class="testimonial_box" data-align="top" data-theme="dark"><div class="details"> <img src="./slide-3d_files/testimonial_logo.png" width="60" height="60" alt=""><h6><strong>Andrew Smith</strong>Strategic Coordinator</h6></div><blockquote>#CITAÇÃO NÚMERO 2</blockquote></div></div></div></div></div><div class="container"><div class="row zn-row-0 "><div class="span12"><div class="process_steps fixclear"><div class="step intro"><h3>our working process <strong>in 3 steps</strong></h3><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_blank">MORE ABOUT US +</a></div><div class="step step1"><div class="icon" data-animation="tada"><img src="./slide-3d_files/ico-plan.png" alt=""></div><h3>planning &amp; strategy</h3><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p></div><div class="step step2"><div class="icon" data-animation="pulse"><img src="./slide-3d_files/ico-designdev.png" alt=""></div><h3>design &amp; develop</h3><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p></div><div class="step step3"><div class="icon" data-animation="fadeOutRightBig"><img src="./slide-3d_files/ico-launch.png" alt=""></div><h3>test &amp; deliver</h3><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p></div></div></div></div><div class="row zn-row-1 "><div class="span2 partners_carousel"><h5 class="title"><span>Acompanhe nossa agenda nas redes sociais e também nos siga-nos.</span></h5><div class="controls"> <a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" class="prev" style="display: inline;"><span class="icon-chevron-left"></span></a> <a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" class="next" style="display: inline;"><span class="icon-chevron-right"></span></a></div></div><div class="span10 partners_carousel"><div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 968px; height: 74px; margin: 0px; overflow: hidden;"><ul id="partners_carousel" class="fixclear partners_carousel_trigger" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 3872px; height: 74px;"><li style="width: 232px;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#"><img src="./slide-3d_files/wordpress.png"></a></li><li style="width: 232px;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#"><img src="./slide-3d_files/themeforest.png"></a></li><li style="width: 232px;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#"><img src="./slide-3d_files/css3.png"></a></li><li style="width: 232px;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#"><img src="./slide-3d_files/html5.png"></a></li><li style="width: 232px;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#"><img src="./slide-3d_files/jquery.png"></a></li><li style="width: 232px;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#"><img src="./slide-3d_files/joomla.png"></a></li></ul></div></div></div><div class="row zn-row-2 "><div class="span12"><div class="keywordbox">Se o Mercado exige mais, seja Triangular RH.</div></div></div></div></section><div class="container"></div><footer id="footer"><div class="container"><div class="row"><div class="span5"><div id="sbs_nav_menu-2" class="widget widget_sbs_nav_menu"><h3 class="widgettitle title m_title">FOOTER MENU</h3><div class="zn_sbs"><div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu"><li id="menu-item-325" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-325"><a href="http://hogash-demos.com/kallyas_wp/about-us/">Curabitur iaculis</a></li><li id="menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-326"><a href="http://hogash-demos.com/kallyas_wp/pages-2/testimonials/">Parturient montes</a></li><li id="menu-item-327" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-327"><a href="http://hogash-demos.com/kallyas_wp/pages-2/historic-page/">Vulputate magna</a></li><li id="menu-item-328" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-328"><a href="http://hogash-demos.com/kallyas_wp/pages-2/coming-soon-page/">Cum sociis natoque</a></li><li id="menu-item-329" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-329"><a href="http://hogash-demos.com/kallyas_wp/pages-2/left-sidebar-page/">Nulla varius commodo</a></li><li id="menu-item-330" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-330"><a href="http://hogash-demos.com/kallyas_wp/pages-2/full-width-page/">Parturient montes</a></li><li id="menu-item-331" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-331"><a href="http://hogash-demos.com/kallyas_wp/pages-2/contact-us/">Vulputate magna</a></li><li id="menu-item-333" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-333"><a href="http://hogash-demos.com/kallyas_wp/pages-2/process-page/">Cum sociis natoque</a></li><li id="menu-item-334" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-334"><a href="http://hogash-demos.com/kallyas_wp/pages-2/faq/">Nulla varius commodo</a></li></ul></div></div></div></div><div class="span4"><div id="zn_mailchimp-2" class="widget widget_zn_mailchimp"><div class="newsletter-signup"><h3 class="widgettitle title m_title">NEWSLETTER SIGNUP</h3><p>By subscribing to our mailing list you will always be update with the latest news from us.</p><form method="post" class="newsletter_subscribe newsletter-signup" data-url="http://hogash-demos.com/kallyas_wp/" name="newsletter_form"> <input type="text" name="zn_mc_email" class="nl-email" value="" placeholder="your.address@email.com"> <input type="hidden" name="zn_list_class" class="nl-lid" value="69c75c8a90"> <input type="submit" name="submit" class="nl-submit" value="JOIN US"></form> <span class="zn_mailchimp_result"></span><p>We never spam!</p></div></div></div><div class="span3"><div id="text_contact-2" class="widget widget_text_contact"><h3 class="widgettitle title m_title">GET IN TOUCH</h3><div class="textwidget contact-details"><p><strong>T (212) 555 55 00</strong><br> Email: <a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#">sales@yourwebsite.com</a></p><p>Your Company LTD<br> Street nr 100, 4536534, Chicago, US</p><p><a href="http://goo.gl/maps/1OhOu" target="_blank"><i class="icon-map-marker icon-white"></i> Open in Google Maps</a></p></div></div></div></div><div class="row"><div class="span6"><div id="tp_widget_recent_tweets-2" class="widget widget_tp_widget_recent_tweets"><script type="text/javascript">jQuery(window).load(function () { jQuery.getScript('http://platform.twitter.com/widgets.js'); });</script><div class="twitter-feed"><div class="tweets" id="twitterFeed"><div style="display: block;"><a class="twTime" target="_blank" href="http://twitter.com/themefuzz/statuses/622604825667088384"><span>44 days ago</span></a>The Uniqueness of the History of Singapore <a href="http://t.co/NQVJ82nqUI" title="http://t.co/NQVJ82nqUI" target="_blank">http://t.co/NQVJ82nqUI</a></div></div><iframe id="twitter-widget-i144113239958474606" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" src="./slide-3d_files/follow_button.e5e892aa8b44a208190cd018a89499d8.en.html" style="position: static; visibility: visible; width: 130px; height: 20px;" data-screen-name="themefuzz"></iframe></div></div></div><div class="span6"><div id="text-3" class="widget widget_text"><div class="textwidget"><div class="social-share"><img src="./slide-3d_files/share.jpg" alt="social sharing"></div></div></div></div></div><div class="row"><div class="span12"><div class="bottom fixclear"><ul class="social-icons  fixclear"><li class="title">GET SOCIAL</li><li class="social-facebook"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_blank">Facebook</a></li><li class="social-twitter"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_blank">Twitter</a></li><li class="social-dribbble"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_blank">Dribble</a></li><li class="social-envato"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" target="_blank">Envato</a></li></ul><div class="copyright"> <a href="http://hogash-demos.com/kallyas_wp"><img src="./slide-3d_files/logo2.png" alt="Kallyas Wordpress Theme"></a><p>© 2015 KALLYAS Wordpress Theme. All Rights Reserved. <a href="http://themeforest.net/item/kallyas-responsive-multipurpose-wordpress-theme/4091658?ref=zauan" target="_blank">Click here to buy it</a>.<br> Designed by Hogash Studio &amp; Developed by Zauan (ThemeFuzz)</p></div></div></div></div></div> </footer></div><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" id="totop">TOP</a> <script type="text/javascript">/*  */
var wc_add_to_cart_params = {"ajax_url":"\/kallyas_wp\/wp-admin\/admin-ajax.php","i18n_view_cart":"View Cart","cart_url":"http:\/\/hogash-demos.com\/kallyas_wp\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/*  */</script> <script type="text/javascript" src="./slide-3d_files/add-to-cart.min.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.blockUI.min.js"></script> <script type="text/javascript">/*  */
var woocommerce_params = {"ajax_url":"\/kallyas_wp\/wp-admin\/admin-ajax.php"};
/*  */</script> <script type="text/javascript" src="./slide-3d_files/woocommerce.min.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.cookie.min.js"></script> <script type="text/javascript">/*  */
var wc_cart_fragments_params = {"ajax_url":"\/kallyas_wp\/wp-admin\/admin-ajax.php","fragment_name":"wc_fragments"};
/*  */</script> <script type="text/javascript" src="./slide-3d_files/cart-fragments.min.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.miniColors.min.js"></script> <script type="text/javascript" src="./slide-3d_files/demo_panel.js"></script> <script type="text/javascript" src="./slide-3d_files/znscript.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.carouFredSel-6.0.4-packed.js"></script> <script type="text/javascript" src="./slide-3d_files/comment-reply.min.js"></script> <script type="text/javascript" src="./slide-3d_files/bootstrap.min.js"></script> <script type="text/javascript" src="./slide-3d_files/plugins.js"></script> <script type="text/javascript" src="./slide-3d_files/superfish_menu.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.iosslider.min.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.iosslider.kalypso.js"></script> <script type="text/javascript" src="./slide-3d_files/css3panels.js"></script> <script type="text/javascript" src="./slide-3d_files/icarousel.packed.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.mousewheel.js"></script> <script type="text/javascript" src="./slide-3d_files/raphael-min.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.flexslider-min.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.prettyPhoto.js"></script> <script type="text/javascript" src="./slide-3d_files/jquery.countdown.js"></script> <script type="text/javascript">/*  */
var zn_do_login = {"ajaxurl":"http:\/\/hogash-demos.com\/kallyas_wp\/wp-admin\/admin-ajax.php","add_to_cart_text":"Item Added to cart!"};
/*  */</script> <script type="text/javascript" src="./slide-3d_files/znscript(1).js"></script> <script type="text/javascript">(function ($){// PREPARE THE NEWSLETTER AND SEND DATA TO MAILCHIMP

					jQuery('.nl-submit').click(function()

					{

						ajax_url = jQuery(this).parent().attr('data-url');

						result_placeholder = jQuery(this).parent().next('span.zn_mailchimp_result');

						jQuery.ajax({

							url: ajax_url,

							type: 'POST',

							data: {

								zn_mc_email: jQuery(this).prevAll('.nl-email').val(),

								zn_mailchimp_list: jQuery(this).prev('.nl-lid').val(),

								zn_ajax: '' // Change here with something different

							},

							success: function(data){

								result_placeholder.html(data);
							},

							error: function() {

								result_placeholder.html('ERROR.').css('color', 'red');

							}

						});

						return false;

					});

				


							var doc = $(document),
								win = $(window), chaser, forch,
								forchBottom, visible;

							function shown() { visible = true; }
							function hidden() { visible = false; }

							var chaser = $('#main_menu ul.sf-menu').clone().hide()
								.appendTo(document.body).wrap('<div class="chaser"><div class="container"><div class="row"><div class="span12"></div></div></div></div>');
							if ( $('#content').length > 0 ) {
								forch = $('#content').first();
								forchBottom = forch.offset().top + 2;
								hidden();
								win.on('scroll', function () {
									var top = doc.scrollTop();
									if (!visible && top > forchBottom) {
										chaser.fadeIn(300, shown);
									} else if (visible && top < forchBottom) {
										chaser.fadeOut(200, hidden);
									}
								});
							}

							/* Activate Superfish Menu for Chaser */
							$('.chaser ul.sf-menu').supersubs({ minWidth: 12, maxWidth: 27, extraWidth: 1}).superfish({delay:250, dropShadows:false, autoArrows:true, speed:300});

				


							/* Activate Superfish Menu */

							var sfDelay = 600;

							if($('html').hasClass('isie')){

								sfDelay = 300;

							}

							$('#main_menu > ul')

							.supersubs({

								minWidth:    12,   // minimum width of sub-menus in em units

								maxWidth:    27,   // maximum width of sub-menus in em units

								extraWidth:  1     // extra width can ensure lines don't sometimes turn over

							}).superfish({

								delay:sfDelay,

								dropShadows:false,

								autoArrows:true,

								speed:300

							});



						$(window).resize(function() {

							$('#main_menu > ul').supersubs({

								minWidth:    12,   // minimum width of sub-menus in em units

								maxWidth:    27,   // maximum width of sub-menus in em units

								extraWidth:  1     // extra width can ensure lines don't sometimes turn over

							});

						});


				

					if(typeof jQuery.fn.flexslider !== 'undefined')
					jQuery('.twitter-feed').flexslider({

						selector: '.tweets > div',

						controlNav:false,

						directionNav:false

					});

				


					;(function($) {

						var counter = {

							init: function (d)

							{
								if(typeof jQuery.fn.countdown !== 'undefined')
									jQuery('#Counter').countdown({

										until: new Date(d),

										layout: counter.layout(),

										labels: ['years', 'months', 'weeks', 'days', 'hours', 'min', 'sec'],

										labels1: ['year', 'month', 'week', 'day', 'hour', 'min', 'sec']

									});

							},

							layout: function ()

							{

								return '<li>{dn}<span>{dl}</span></li>' +

										'<li>{hnn}<span>{hl}</span></li>' +

										'<li>{mnn}<span>{ml}</span></li>' +

										'<li>{snn}<span>{sl}</span></li>';

							}

						}

						// initialize the counter fnc

						jQuery(document).ready(function() {

							counter.init("10/24/2013 01:30");

						});

					})(jQuery);

				
jQuery(window).load(function(){
			// ** recent works
			if(typeof jQuery.fn.carouFredSel !== 'undefined')
			jQuery('.recent_works1').carouFredSel({
				responsive: true,
				scroll: 1,
				auto: false,
				items: {
					width: 300,
					visible: {
						min: 3,
						max: 10
					}
				},
				prev	: {
					button	: function(){return jQuery(this).closest('.recentwork_carousel').find('.prev');},
					key		: "left"
				},
				next	: {
					button	: function(){return jQuery(this).closest('.recentwork_carousel').find('.next');},
					key		: "right"
				}
			});
			// *** end recent works carousel
		});
jQuery(window).load(function(){
			// ** partners carousel
			if(typeof jQuery.fn.carouFredSel !== 'undefined')
			jQuery('.partners_carousel_trigger').carouFredSel({
				responsive: true,
				scroll: 1,
				auto: false,
				items: {
					width: 250,
					visible: {
						min: 3,
						max: 10
					}
				},
				prev	: {
					button	: function(){return jQuery(this).closest('.row,.row-fluid').find('.prev');},
					key		: "left"
				},
				next	: {
					button	: function(){return jQuery(this).closest('.row,.row-fluid').find('.next');},
					key		: "right"
				}
			});
			// *** end partners carousel
		});

			jQuery(window).load(function(){
				if(typeof jQuery.fn.carouFredSel !== 'undefined')
				jQuery('.recent_works2').carouFredSel({
					responsive: true,
					scroll: 1,
					auto: false,
					items: {
						width: 400,
						visible: {
							min: 4,
							max: 10
						}
					},
					prev	: {
						button	: function(){return jQuery(this).closest('.recentwork_carousel').find('.prev');},
						key		: "left"
					},
					next	: {
						button	: function(){return jQuery(this).closest('.recentwork_carousel').find('.next');},
						key		: "right"
					}
				});
			});
			// *** end recent works carousel

				// ** Testimonials fader
				if(typeof jQuery.fn.carouFredSel !== 'undefined')
				jQuery('.testimonials_fader_trigger').carouFredSel({
					responsive:true,
					auto:{timeoutDuration:5000},
					scroll: { fx: "fade", duration: "1500" }
				});
				// *** end testimonials fader
			;

						;(function($) {
							$(window).load(function(){

								function slideCompletezn_normal_flex(args) {
									var caption = $(args.container).find('.flex-caption').attr('style', ''),
										thisCaption = $('.flexslider.zn_normal_flex .slides > li.flex-active-slide').find('.flex-caption');
									thisCaption.animate({left:20, opacity:1}, 500, 'easeOutQuint');
								}

								if ( jQuery('.flexslider.zn_normal_flex').hasClass('zn_has_thumbs') ) {
									thumbs = 'thumbnails';
								}
								else {
									thumbs = true;
								}

								transition = jQuery(".flexslider.zn_normal_flex").attr('data-transition');

								if(typeof jQuery.fn.flexslider !== 'undefined')
								$(".flexslider.zn_normal_flex").flexslider({
									animation: transition,			//String: Select your animation type, "fade" or "slide"
									slideDirection: "horizontal",	//String: Select the sliding direction, "horizontal" or "vertical"
									slideshow: true,				//Boolean: Animate slider automatically
									slideshowSpeed: 7000,			//Integer: Set the speed of the slideshow cycling, in milliseconds
									animationDuration: 600,			//Integer: Set the speed of animations, in milliseconds
									directionNav: true,				//Boolean: Create navigation for previous/next navigation? (true/false)
									controlNav: thumbs,				//Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
									keyboardNav: true,				//Boolean: Allow slider navigating via keyboard left/right keys
									mousewheel: false,				//{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
									smoothHeight: true,
									randomize: false,				//Boolean: Randomize slide order
									slideToStart: 0,				//Integer: The slide that the slider should start on. Array notation (0 = first slide)
									animationLoop: true,			//Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
									pauseOnAction: true,			//Boolean: Pause the slideshow when interacting with control elements, highly recommended.
									pauseOnHover: false,			//Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
									start: slideCompletezn_normal_flex,
									after: slideCompletezn_normal_flex
								});
							});
						})(jQuery);

			jQuery('.iosSlider').each(function(){
				if(typeof jQuery.fn.iosSlider !== 'undefined')
				jQuery(this).iosSlider({
					snapToChildren: true,
					desktopClickDrag: true,
					keyboardControls: true,
					autoSlideTimer: 5000,
					navNextSelector: jQuery(this).closest('.iosSlider').find('.next'),
					navPrevSelector: jQuery(this).closest('.iosSlider').find('.prev'),
					navSlideSelector: jQuery('.selectors .item'),
					scrollbar: true,
					scrollbarContainer: '#slideshow .scrollbarContainer',
					scrollbarMargin: '0',
					scrollbarBorderRadius: '4px',
					onSlideComplete: slideComplete,
					onSliderLoaded: function(args){
						var otherSettings = {
							hideControls : true, // Bool, if true, the NAVIGATION ARROWS will be hidden and shown only on mouseover the slider
							hideCaptions : false  // Bool, if true, the CAPTIONS will be hidden and shown only on mouseover the slider
						}
						sliderLoaded(args, otherSettings);
					},
					onSlideChange: slideChange,
					keyboardControls: true,
					infiniteSlider: true,
					autoSlide: true
				});
			});

		;(function($){
			$(window).load(function() {
				// latest & bestsellers carousels
				if(typeof jQuery.fn.carouFredSel !== 'undefined')
				jQuery('.zn_limited_offers').carouFredSel({
					responsive: true,
					width: '92%',
					scroll: 1,
					/*auto: true,*/
					items: {width:190, visible: { min: 2, max: 4 } },
					prev	: {
						button	: function(){return jQuery(this).closest('.limited-offers-carousel').find('.prev');},
						key		: "left"
					},
					next	: {
						button	: function(){return jQuery(this).closest('.limited-offers-carousel').find('.next');},
						key		: "right"
					}
				});
			});
		})(jQuery);

			;(function($){
				$(window).load(function(){
					// settings
					var sortBy = '', 			// SORTING: date / name
						sortAscending = true, 		// SORTING ORDER: true = Ascending / false = Descending
						theFilter = '';	// DEFAULT FILTERING CATEGORY

					$('#sortBy li a').each(function(index, element) {
						var t = $(this);
						if(t.attr('data-option-value') == sortBy)
							t.addClass('selected');
					});
					$('#sort-direction li a').each(function(index, element) {
						var t = $(this);
						if(t.attr('data-option-value') == sortAscending.toString())
							t.addClass('selected');
					});
					$('#portfolio-nav li a').each(function(index, element) {
						var t = $(this),
							tpar = t.parent();
						if(t.attr('data-filter') == theFilter) {
							$('#portfolio-nav li a').parent().removeClass('current');
							tpar.addClass('current');
						}
					});

					// don't edit below unless you know what you're doing
					if ($("ul#thumbs").length > 0){
						var container = $("ul#thumbs");
						if(typeof jQuery.fn.isotope !== 'undefined')
						container.isotope({
						  itemSelector : ".item",
						  animationEngine : "jquery",
						  animationOptions: {
							  duration: 250,
							  easing: "easeOutExpo",
							  queue: false
						  },
						  filter: theFilter,
						  sortAscending : sortAscending,
						  getSortData : {
							  name : function ( elem ) {
								  return elem.find("span.name").text();
							  },
							  date : function ( elem ) {
								  return elem.attr("data-date");
							  }
						  },
						  sortBy: sortBy
						});

					}
				});
			})(jQuery);
jQuery(window).load(function() {
				// ** Screenshots carousel
			if(typeof jQuery.fn.carouFredSel !== 'undefined')
				jQuery('.zn_screenshot-carousel').carouFredSel({
					responsive: true,
					scroll: { fx: "crossfade", duration: "1500" },
					items: {
						width: 580
					},
					auto: true,
					prev	: {
						button	: function(){return jQuery(this).closest('.thescreenshot').find('.prev');},
						key		: "left"
					},
					next	: {
						button	: function(){return jQuery(this).closest('.thescreenshot').find('.next');},
						key		: "right"
					}
				});
				// *** end Screenshots carousel
			});

			jQuery(window).load(function() {
			// ** Testimonials carousel
			if(typeof jQuery.fn.carouFredSel !== 'undefined')
			jQuery('.zn_testimonials_carousel').carouFredSel({
				responsive: true,
				items: {
					width: 300
				},
				auto:{timeoutDuration:2500},
				prev	: {
					button	: function(){return jQuery(this).closest('.testimonials-carousel').find('.prev');},
					key		: "left"
				},
				next	: {
					button	: function(){return jQuery(this).closest('.testimonials-carousel').find('.next');},
					key		: "right"
				}
			});
			// *** end testimonials carousel
		});

				;(function($){
				jQuery(window).load(function() {
					// load flicker photos

					var ff_container = jQuery('.flickr_feeds'),
						ff_limit = (ff_container.attr('data-limit')) ?  ff_container.attr('data-limit') : 6;

					ff_container.parent().removeClass('loading');
						// ff_limit = if data-limit attribute is set, the limit is user defined, if not, default is 6

					if(typeof jQuery.fn.jflickrfeed !== 'undefined')
					ff_container.jflickrfeed({
						limit: ff_limit,
						qstrings: {
							id: '52617155@N08'
						},
						itemTemplate: '<li><a href="{{image_b}}" data-rel="prettyPhoto"><img src="{{image_s}}" alt="{{title}}" /><span class="theHoverBorder "></span></a></li>'
					}, function(data) {
						jQuery(".flickr_feeds a[data-rel^='prettyPhoto']").prettyPhoto({theme:'pp_kalypso',social_tools:false, deeplinking:false});
						//jQuery(".flickr_feeds li:nth-child(3n)").addClass("last");
					});

				});
				})(jQuery);

						if(typeof jQuery.fn.iCarousel !== 'undefined')
							jQuery('#icarousel').iCarousel({
								easing: 'easeInOutQuint',
								slides: 7,
								animationSpeed: 700,
								pauseTime: 5000,
								perspective: 75,
								slidesSpace: 300,
								pauseOnHover: true,
								direction: "ltr",
								timer: "Bar",
								timerOpacity: 0.4,
								timerDiameter: 220,
								keyboardNav: true,
								mouseWheel: true,
								timerPadding: 3,
								timerStroke: 4,
								timerBarStroke: 0,
								timerColor: "#FFF",
								timerPosition: "bottom-center",
								timerX: 15,
								timerY: 30
							});
						;
})(jQuery)</script><div class="chaser"><div class="container"><div class="row"><div class="span12"><ul id="menu-main-menu" class="sf-menu nav clearfix sf-js-enabled" style="display: none;"><li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-27"><a href="http://hogash-demos.com/kallyas_wp/" class="sf-with-ul">INÍCIO<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homepage-2/" style="float: none; width: auto;">Homepage 2</a></li><li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-261" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homepage-3/" style="float: none; width: auto;">Homepage 3</a></li><li id="menu-item-284" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-284" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homepage-4/" style="float: none; width: auto;">Homepage 4</a></li><li id="menu-item-283" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-283" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homepage-5/" style="float: none; width: auto;">Homepage 5</a></li><li id="menu-item-302" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-302" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homepage-6/" style="float: none; width: auto;">Homepage 6</a></li><li id="menu-item-365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-365" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/homapage-all/" style="float: none; width: auto;">Homapage All</a></li></ul></li><li id="menu-item-957" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-957 active"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/" class="sf-with-ul">BLOG<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-956" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-956" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/main-slider/" class="sf-with-ul" style="float: none; width: auto;">Main Slider<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-373" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-373" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/main-slider/default-style/" style="float: none; width: auto;">Default style</a></li><li id="menu-item-426" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-426" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/with-thumbs/" style="float: none; width: auto;">With Thumbs</a></li><li id="menu-item-425" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-425" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/faded/" style="float: none; width: auto;">Faded</a></li><li id="menu-item-424" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-424" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fixed-width-slider/" style="float: none; width: auto;">Fixed Width Slider</a></li><li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fixed-position-scroll/" style="float: none; width: auto;">Fixed Position (Scroll)</a></li></ul></li><li id="menu-item-878" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-878" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/creative-slider/" style="float: none; width: auto;">Creative Slider</a></li><li id="menu-item-385" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-385" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fixed-slider/" class="sf-with-ul" style="float: none; width: auto;">Fixed Slider<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-386" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fixed-slider/" class="sf-with-ul" style="float: none; width: auto;">Style 1 ( flex slider )<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-387" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fixed-slider/" style="float: none; width: auto;">Default</a></li><li id="menu-item-390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-390" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/with-thumbnails/" style="float: none; width: auto;">With thumbnails</a></li></ul></li><li id="menu-item-393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-393" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-2-nivo-slider/" style="float: none; width: auto;">Style 2 ( Nivo Slider )</a></li><li id="menu-item-396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-396" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-3-wow-slider/" class="sf-with-ul" style="float: none; width: auto;">Style 3 ( Wow Slider )<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-403" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-403" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-3-wow-slider/" style="float: none; width: auto;">Blast Effect</a></li><li id="menu-item-404" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-404" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/blur-effect/" style="float: none; width: auto;">Blur Effect</a></li><li id="menu-item-405" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-405" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fly-effect/" style="float: none; width: auto;">Fly Effect</a></li><li id="menu-item-406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-406" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/blinds-effect/" style="float: none; width: auto;">Blinds Effect</a></li></ul></li></ul></li><li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-427 current_page_item menu-item-794 active" style="white-space: normal; float: left; width: 100%;"><a href="./slide-3d_files/slide-3d.html" style="float: none; width: auto;">3D Cute Slider</a></li><li id="menu-item-820" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-820" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/fancy-slider/" style="float: none; width: auto;">Fancy Slider</a></li><li id="menu-item-478" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-478" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/static-content/" class="sf-with-ul" style="float: none; width: auto;">Static Content<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-502" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/static-content/" style="float: none; width: auto;">Style 1</a></li><li id="menu-item-508" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-508" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-2-boxes/" style="float: none; width: auto;">Style 2 / Boxes</a></li><li id="menu-item-524" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-524" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-3-video/" style="float: none; width: auto;">Style 3 / Video</a></li><li id="menu-item-547" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-547" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-2-boxes-2/" style="float: none; width: auto;">Style 4 / Maps</a></li><li id="menu-item-546" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-546" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-5-text-pop/" style="float: none; width: auto;">Style 5 / Text Pop</a></li><li id="menu-item-545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-545" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-6-product-loupe/" style="float: none; width: auto;">Style 6 / Product Loupe</a></li><li id="menu-item-587" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-587" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-7-event-countdown/" style="float: none; width: auto;">Style 7 / Event Countdown</a></li><li id="menu-item-595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-595" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-6-video-background/" style="float: none; width: auto;">Style 8 / Video Background</a></li><li id="menu-item-613" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-613" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-9-text-login/" style="float: none; width: auto;">Style 9 / Text &amp; Register</a></li><li id="menu-item-972" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-972" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/style-10-simple-text/" style="float: none; width: auto;">Style 10 / Simple Text</a></li></ul></li><li id="menu-item-819" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-819" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/portfolio-slider-devices/" style="float: none; width: auto;">Portfolio Slider Devices</a></li><li id="menu-item-472" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-472" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/circular-content-default-style/" class="sf-with-ul" style="float: none; width: auto;">Circular Content<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-473" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-473" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/circular-content-default-style/" style="float: none; width: auto;">Alternative Style</a></li><li id="menu-item-474" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-474" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/circular-content/" style="float: none; width: auto;">Default Style</a></li></ul></li><li id="menu-item-523" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-523" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/portfolio-slider-frames/" class="sf-with-ul" style="float: none; width: auto;">Portfolio Slider Frames<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-522" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-522" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/sliding-vertically/" style="float: none; width: auto;">Sliding Vertically</a></li><li id="menu-item-521" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-521" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/sliding-horizontally/" style="float: none; width: auto;">Sliding Horizontally</a></li></ul></li><li id="menu-item-442" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-442" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/laptop-slider/" style="float: none; width: auto;">Laptop Slider</a></li><li id="menu-item-490" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-490" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/icarousel/" style="float: none; width: auto;">iCarousel</a></li><li id="menu-item-466" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-466" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/css3-panels/" style="float: none; width: auto;">CSS3 Panels</a></li></ul></li><li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><a href="http://hogash-demos.com/kallyas_wp/about-us/">QUEM SOMOS</a></li><li id="menu-item-53" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-53"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" class="sf-with-ul">SOLUÇÕES<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-1439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1439" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/page-builder/" style="float: none; width: auto;">Page builder</a></li><li id="menu-item-1447" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1447" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/theme-options/" style="float: none; width: auto;">Theme admin panel</a></li><li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-228" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/blog/" style="float: none; width: auto;">Blog</a></li><li id="menu-item-1587" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1587" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/blog-2/" style="float: none; width: auto;">Blog – Style 2</a></li><li id="menu-item-227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-227" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/" class="sf-with-ul" style="float: none; width: auto;">Portfolio<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-226" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-226" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/category-layout/" class="sf-with-ul" style="float: none; width: auto;">Category Layout<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-1182" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1182" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/portfolio-one-column/" style="float: none; width: auto;">One Column</a></li><li id="menu-item-1179" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1179" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/portfoliotwo-columns/" style="float: none; width: auto;">Two Columns</a></li><li id="menu-item-1178" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1178" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/portfoliothree-columns/" style="float: none; width: auto;">Three Columns</a></li><li id="menu-item-1177" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1177" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/portfolio-four-columns/" style="float: none; width: auto;">Four Columns</a></li></ul></li><li id="menu-item-225" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-225" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/portfolio/sortable-layout/" style="float: none; width: auto;">Sortable Portfolio</a></li><li id="menu-item-224" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-224" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/carousels-layout/" style="float: none; width: auto;">Carousels Layout</a></li></ul></li><li id="menu-item-1317" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1317" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/photo-gallery/" style="float: none; width: auto;">Photo Gallery</a></li><li id="menu-item-55" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-55" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/sliders-2/3d-cute-slider-sliderul/#" class="sf-with-ul" style="float: none; width: auto;">Holiday Slides<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/page-header-for-christmas/" style="float: none; width: auto;">Christmas</a></li><li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/page-header-for-easter/" style="float: none; width: auto;">Easter</a></li></ul></li><li id="menu-item-983" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-983" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/sitemap/" style="float: none; width: auto;">Sitemap</a></li><li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-993" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/features/full-width-page-2/" style="float: none; width: auto;">Animated Header</a></li></ul></li><li id="menu-item-629" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-629"><a href="http://hogash-demos.com/kallyas_wp/shop-page/">CURSOS</a></li><li id="menu-item-954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-954"><a href="http://hogash-demos.com/kallyas_wp/pages-2/" class="sf-with-ul">PAGES<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-627" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-627" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/faq/" style="float: none; width: auto;">FAQ</a></li><li id="menu-item-639" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-639" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/process-page/" style="float: none; width: auto;">Process Page</a></li><li id="menu-item-695" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-695" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/contact-us/" style="float: none; width: auto;">Contact Us</a></li><li id="menu-item-694" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-694" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/full-width-page/" style="float: none; width: auto;">Full Width Page</a></li><li id="menu-item-692" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-692" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/left-sidebar-page/" style="float: none; width: auto;">Left Sidebar Page</a></li><li id="menu-item-690" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-690" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/right-sidebar-page/" style="float: none; width: auto;">Right Sidebar Page</a></li><li id="menu-item-693" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-693" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/coming-soon-page/" style="float: none; width: auto;">Coming Soon page</a></li><li id="menu-item-795" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-795" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/historic-page/" style="float: none; width: auto;">Historic page</a></li><li id="menu-item-724" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-724" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/testimonials/" style="float: none; width: auto;">Testimonials</a></li><li id="menu-item-796" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-796" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/?page_id=1787678" style="float: none; width: auto;">404 Error Page</a></li><li id="menu-item-797" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-797" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/our-team/" style="float: none; width: auto;">Team</a></li><li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-793" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/services/" style="float: none; width: auto;">Services</a></li><li id="menu-item-935" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-935" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pages-2/careers/" style="float: none; width: auto;">Careers</a></li></ul></li><li id="menu-item-898" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-898"><a href="http://hogash-demos.com/kallyas_wp/typography/" class="sf-with-ul">CONTATO<span class="sf-sub-indicator"> »</span></a><ul class="sub-menu" style="float: none; width: auto; display: none; visibility: hidden;"><li id="menu-item-899" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-899" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/typography/" style="float: none; width: auto;">Typography</a></li><li id="menu-item-911" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-911" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/table-styles/" style="float: none; width: auto;">Table Styles</a></li><li id="menu-item-921" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-921" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/button-designs/" style="float: none; width: auto;">Button Designs</a></li><li id="menu-item-1079" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1079" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/pricing-tables-designs/" style="float: none; width: auto;">Pricing Tables Designs</a></li><li id="menu-item-1102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1102" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/tabs-designs/" style="float: none; width: auto;">Tabs Designs</a></li><li id="menu-item-1114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1114" style="white-space: normal; float: left; width: 100%;"><a href="http://hogash-demos.com/kallyas_wp/accordions-designs/" style="float: none; width: auto;">Accordions Designs</a></li></ul></li></ul></div></div></div></div>
<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/

Page Caching using disk: enhanced
Object Caching 4080/4095 objects using disk
Content Delivery Network via kallyaswp.hogashstudio.netdna-cdn.com

 Served from: hogash-demos.com @ 2015-09-01 18:14:37 by W3 Total Cache --></body></html>