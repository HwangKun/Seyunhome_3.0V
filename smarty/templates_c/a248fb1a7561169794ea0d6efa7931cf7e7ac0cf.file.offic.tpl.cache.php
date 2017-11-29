<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-03 14:00:04
         compiled from "themes\offic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2322655e7e017c5ef52-52250326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a248fb1a7561169794ea0d6efa7931cf7e7ac0cf' => 
    array (
      0 => 'themes\\offic.tpl',
      1 => 1443848401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2322655e7e017c5ef52-52250326',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e7e017cee466_98748043',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e7e017cee466_98748043')) {function content_55e7e017cee466_98748043($_smarty_tpl) {?><html>
<head>
    <title>SEYUN Official HOME</title>

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/assets/css/jquery.fullPage.css" rel="stylesheet"/>
    <link href="/assets/css/scrolling.css" rel="stylesheet"/>

    <!-- [if eq IE 7]>
    <link href="/assets/css/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet"/>
    <![endif]-->

    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/js/jquery.fullPage.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/js/scrolling.js"><?php echo '</script'; ?>
>

    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="/assets/js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/assets/js/respond.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <style type="text/css">
        html, body{  height: 100%;  }
        body{  font-size: 14px;  }
        h1{  font-size: 38px;  }
        h2{  font-size: 34px;  }
        h3{  font-size: 30px;  }
        h4{  font-size: 26px;  }
        h5{  font-size: 22px;  }
        h6{  font-size: 18px;  }

        /* Style for our header texts
	* --------------------------------------- */
        h1{
            font-size: 5em;
            font-family: arial,helvetica;
            color: #fff;
            margin:0;
            padding:0;
        }

        /* Centered texts in each section
        * --------------------------------------- */
        .section{
            text-align:center;
            overflow: hidden;
        }

        #myVideo{
            position: absolute;
            right: 0;
            bottom: 0;
            top:0;
            right:0;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            background-color: black; /* in case the video doesn't fit the whole page*/
            background-image: /* our video */;
            background-position: center center;
            background-size: contain;
            object-fit: cover; /*cover video background */
            z-index:3;
        }

        .layer{
            position: relative;
            -webkit-animation-name: d-arrow; /* Chrome, Safari, Opera */
            -webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
            -webkit-animation-iteration-count: infinite; /* Chrome, Safari, Opera */
            animation-name: d-arrow;
            animation-duration: 4s;
            animation-iteration-count: infinite;
        }

        .layer > img {
            width: 70px;
            opacity: 0.5
        }

        /* Chrome, Safari, Opera */
        @-webkit-keyframes d-arrow {
            0%   { top: 87%; }
            25%  { top: 90%; }
            50%  { top: 87%; }
            75%  { top: 90%; }
            100% { top: 87%; }
        }

        /* Standard syntax */
        @keyframes d-arrow {
            0%   { top: 87%; }
            25%  { top: 90%; }
            50%  { top: 87%; }
            75%  { top: 90%; }
            100% { top: 87%; }
        }

        /* Layer with position absolute in order to have it over the video
        * --------------------------------------- */
        #section0 .layer{
            position: absolute;
            z-index: 4;
            width: 100%;
            left: 0;
        }

        /*solves problem with overflowing video in Mac with Chrome */
        #section0{
            overflow: hidden;
        }


        /* Bottom menu
        * --------------------------------------- */
        #infoMenu li a {
            color: #fff;
        }
    </style>

    <!--[if IE]>
    <?php echo '<script'; ?>
 type="text/javascript">
        var console = { log: function() {} };
    <?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body>
<div id="fullpage">
    <div class="section " id="section0">
        <video autoplay loop muted id="myVideo">
            <source src="#" type="video/mp4">
            <!--<source src="#" type="video/webm">-->
        </video>
        <div class="layer">
            <img src="assets/img/arrow-down.png"></img>
        </div>
    </div>
    <div class="section" id="section1">

    </div>
    <div class="section" id="section2">
        <div class="slide" id="slide1"><h1>Slide Backgrounds</h1></div>
        <div class="slide" id="slide2"><h1>Totally customizable</h1></div>
        <div class="slide" id="slide3"><h1>Totally customizable</h1></div>
    </div>
    <div class="section" id="section3"><h1>Lovely images <br />for a lovely page</h1></div>
    <div class="section" id="section4"><h1>One Image = One thousand words</h1></div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            verticalCentered: true,
            sectionsColor: [ '#1bbc9b', '#ffffff', '#ffa500', '#4BBFC3', '#7BAABE' ],
            afterRender: function(){


                //playing the video
                $('video').get(0).play();
            }
        });
    });
<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
