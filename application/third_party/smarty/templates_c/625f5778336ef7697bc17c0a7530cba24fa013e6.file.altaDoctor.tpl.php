<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-07-31 21:03:31
         compiled from "C:\xampp\htdocs\dentalSi\application\views\altaDoctor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45635b60b283bc3d98-30233695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '625f5778336ef7697bc17c0a7530cba24fa013e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dentalSi\\application\\views\\altaDoctor.tpl',
      1 => 1533063794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45635b60b283bc3d98-30233695',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b60b283c0d416_44556086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b60b283c0d416_44556086')) {function content_5b60b283c0d416_44556086($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header-general.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page content -->
<div id="page-content">
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-notes_2"></i>Alta de Doctor<br>
            </h1>
        </div>
    </div>
    <div class="content">
        <div class="form well well-sm">
        <form  action="<?php echo site_url();?>
" method="post"   class="form-horizontal form-bordered" onsubmit="return false;">
            <div class="form-group">
                <label class="col-md-3 control-label" style="text-align: left;"><i class="fa fa-user"></i> Nombre</label>
                <div class="col-md-9">
                        <input type="text" class="form-control" id="nombre" name="nombre" class="form-control input-lg" placeholder="Escriba su nombre" value="">
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-default">Crear</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<div id="modal" class="modal fade" role="dialog"></div>

<!-- END Page Content -->
<?php echo $_smarty_tpl->getSubTemplate ('footer-general.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
