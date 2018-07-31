<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-07-31 21:03:32
         compiled from "C:\xampp\htdocs\dentalSi\application\views\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94985b60b28412fbc2-31863813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f22a92a4b020f8cb132d2fbf8c03cff4680d1335' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dentalSi\\application\\views\\footer.tpl',
      1 => 1533062941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94985b60b28412fbc2-31863813',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b60b28413c8c3_89482448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b60b28413c8c3_89482448')) {function content_5b60b28413c8c3_89482448($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('modalDinamico.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <style>
        .ajaxLoading {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(255, 255, 255, .8) url('../../dentalSi/img/ajax-loader.gif') 50% 50% no-repeat;
        }

        body.loading {
            overflow: hidden;
        }

        body.loading .ajaxLoading {
            display: block;
        }
    </style>

    <div class="ajaxLoading"></div>

    <script>

        $(document).ready(function () {

        });
    </script><?php }} ?>
