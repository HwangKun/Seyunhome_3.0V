<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-19 15:40:34
         compiled from "themes\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16455332cd02c5be6-91484718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4da1f21d04cabbf885cc2f4e23e8debb8c7fb2c3' => 
    array (
      0 => 'themes\\header.tpl',
      1 => 1429425632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16455332cd02c5be6-91484718',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55332cd058fde9_27813294',
  'variables' => 
  array (
    'pagetitle' => 0,
    'metakeywords' => 0,
    'site_name' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55332cd058fde9_27813294')) {function content_55332cd058fde9_27813294($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ko">
<head>
    <title>Ttitick - 아이디어 공유플랫폼</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="description" content="아이디어 공유 플랫폼 Ttitick">

    <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value!=null) {
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
,<?php }
if ($_smarty_tpl->tpl_vars['metakeywords']->value!=null) {
echo $_smarty_tpl->tpl_vars['metakeywords']->value;?>
,<?php }
echo $_smarty_tpl->tpl_vars['site_name']->value;?>
">
    <meta name="author" content="">

    <link rel="shortcut icon" href="">

    <link href="/frontool/css/jquery-ui.css" rel="stylesheet">
    <link href="/frontool/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontool/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/frontool/css/ttitick.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="/frontool/js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/frontool/js/respond.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="/frontool/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>

<body>
<nav class="navbar">
    <div class="navbar-ttitick container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">TtiTick</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <!--<form class="navbar-form navbar-left" role="search">-->
                <!--<div class="form-group">-->
                    <!--<input type="text" class="form-control" placeholder="Search">-->
                <!--</div>-->
                <!--<button type="submit" class="btn btn-default">Submit</button>-->
            <!--</form>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">로그인</a></li>
                <li style="border-right: 1px #ffffff solid; height: 20px;"></li>
                <li><a href="#">회원가입</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
님 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php }} ?>
