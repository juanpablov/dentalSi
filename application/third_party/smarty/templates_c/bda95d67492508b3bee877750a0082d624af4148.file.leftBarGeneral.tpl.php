<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-01 18:48:56
         compiled from "C:\xampp\htdocs\dentalSi\application\views\leftBarGeneral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207965b61e478608642-21279809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bda95d67492508b3bee877750a0082d624af4148' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dentalSi\\application\\views\\leftBarGeneral.tpl',
      1 => 1533061912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207965b61e478608642-21279809',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b61e47860ffc1_27143403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b61e47860ffc1_27143403')) {function content_5b61e47860ffc1_27143403($_smarty_tpl) {?><aside class="main-sidebar">
    <section class="sidebar">
    	<ul class="sidebar-menu">
            <li class="header">Menú</li>
            <li id="home-lb">
                <a href="<?php echo site_url();?>
inicio">
                    <i class="fa fa-home"></i> <span>Inicio</span>
                </a>
            </li>
            <li id="home-lb">
                <a href="<?php echo site_url();?>
logout">
                    <i class="fa fa-power-off"></i> <span class="arrow">Salir</span>
                </a>
            </li>
    </section>
</aside>
<?php }} ?>
