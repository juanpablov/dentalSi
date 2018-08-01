<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-01 18:48:56
         compiled from "C:\xampp\htdocs\dentalSi\application\views\header-general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10405b61e4782ea688-82283059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b9494de0c564d817f4c58c40fa4687376fc483d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dentalSi\\application\\views\\header-general.tpl',
      1 => 1533060806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10405b61e4782ea688-82283059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'encabezadoDePagina' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b61e478305623_84538228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b61e478305623_84538228')) {function content_5b61e478305623_84538228($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body class="hold-transition skin-blue sidebar-mini" xmlns="http://www.w3.org/1999/html">
<div class="wrapper">
<?php echo $_smarty_tpl->getSubTemplate ('leftBarGeneral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="content-wrapper">
		<?php if (isset($_smarty_tpl->tpl_vars['encabezadoDePagina']->value)) {?>
		<section class="content-header">
            <h1 id="pageTitle">
                <?php echo $_smarty_tpl->tpl_vars['encabezadoDePagina']->value;?>

            </h1>
        </section>
        <?php }?>
    <div><?php }} ?>
