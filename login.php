<?php
    include_once("controller.php");
    if($_POST['submit'] = "Login"){
        dologin($_POST['login'], $_POST['password']);
    }



?>

<html xmlns="http://www.w3.org/1999/xhtml"><meta style="visibility: hidden !important; display: block !important; width: 0px !important; height: 0px !important; border-style: none !important;"></meta><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Login | Eass Inventory System</title>

<?php include_once("controller_css.php"); ?>
<?php include_once("controller_js.php"); ?>

<body>

    <!-- Style switcher -->
<!-- <div class="switcher">
    <a href="#" title="" class="pat1"><img src="images/switcher/2.png" alt=""></a>
    <a href="#" title="" class="pat2"><img src="images/switcher/3.png" alt=""></a>
    <a href="#" title="" class="pat3"><img src="images/switcher/4.png" alt=""></a>
    <a href="#" title="" class="pat4"><img src="images/switcher/5.png" alt=""></a>
    <a href="#" title="" class="pat5"><img src="images/switcher/6.png" alt=""></a>
    <a href="#" title="" class="pat6"><img src="images/switcher/7.png" alt=""></a>
    <a href="#" title="" class="pat7"><img src="images/switcher/8.png" alt=""></a>
    <a href="#" title="" class="pat8"><img src="images/switcher/9.png" alt=""></a>
    <a href="#" title="" class="pat10"><img src="images/switcher/10.png" alt=""></a>
    <a href="#" title="" class="pat9"><img src="images/switcher/1.png" alt=""></a>
</div> -->


<!-- Top line begins -->
<div id="top">
	<div class="wrapper">
    	<a href="#" title="" class="logo"><img src="images/logo2.png" alt="" width="132px" height="35px"></a>
        
        <div class="topNav2">
            <div class="clock">
                <div id="clock"></div>
            </div>
        </div>
        <!-- Right top nav -->
        <div class="topNav">
            <ul class="userNav">
                <li><a href="#" title="" class="screen"></a></li>
                <li><a href="#" title="" class="settings"></a></li>
                <li><a href="#" title="" class="logout"></a></li>
            </ul>
        </div>

    </div>
</div>
<!-- Top line ends -->


<!-- Login wrapper begins -->
<div class="loginWrapper">
	<!-- Current user form -->
    <form action="loginvalidate.php" id="login" method="post">
        <div class="loginPic">
            <a href="#" title=""><img src="images/userLogin.png" alt=""></a>
            <span>Nephelium Mutabile</span>
            <div class="loginActions">
                <div><a href="#" title="Change user" class="logleft flip" style="left: 0px; opacity: 0;"></a></div>
                <div><a href="#" title="Forgot password?" class="logright" style="right: 0px; opacity: 0;"></a></div>
            </div>
        </div>
        
        <input type="text" name="login" placeholder="Confirm your email" class="loginEmail">
        <input type="password" name="password" placeholder="Password" class="loginPassword">
        
        <div class="logControl">
            <div class="memory"><div class="checker" id="uniform-remember1"><span class="checked"><input type="checkbox" checked="checked" class="check" id="remember1" style="opacity: 0;"></span></div><label for="remember1">Remember me</label></div>
            <input type="submit" name="submit" value="Login" class="buttonM bBlue">
        </div>
    </form>
    
    <!-- New user form -->
    <form action="loginvalidate.php" id="recover" method="post">
        <div class="loginPic">
            <a href="#" title=""><img src="images/userLogin2.png" alt=""></a>
            <div class="loginActions">
                <div><a href="#" title="" class="logback flip" style="left: 0px; opacity: 0;"></a></div>
                <div><a href="#" title="Forgot password?" class="logright" style="right: 0px; opacity: 0;"></a></div>
            </div>
        </div>
            
        <input type="text" name="login" placeholder="Your username" class="loginUsername">
        <input type="password" name="password" placeholder="Password" class="loginPassword">
        
        <div class="logControl">
            <div class="memory"><div class="checker" id="uniform-remember2"><span class="checked"><input type="checkbox" checked="checked" class="check" id="remember2" style="opacity: 0;"></span></div><label for="remember2">Remember me</label></div>
            <input type="submit" name="submit" value="Login" class="buttonM bBlue">
        </div>
    </form>

</div>
<!-- Login wrapper ends -->



<div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div></body></html>