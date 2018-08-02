<?php /* Smarty version Smarty-3.1.19-dev, created on 2018-08-02 21:11:07
         compiled from "C:\xampp\htdocs\dentalSi\application\views\sucursales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72595b63574b5417a9-51762858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a159a5a5e13f4154ebcadc0fdac44ff8bb6b08a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dentalSi\\application\\views\\sucursales.tpl',
      1 => 1533232506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72595b63574b5417a9-51762858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sucursales' => 0,
    'unaSucursal' => 0,
    'especialidades' => 0,
    'unaEspecialidad' => 0,
    'doctores' => 0,
    'unDoctor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5b63574b596606_87033917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b63574b596606_87033917')) {function content_5b63574b596606_87033917($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header-general.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- Page content -->
<div id="page-content">
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-notes_2"></i>Consulta de sucursales<br>
            </h1>
        </div>
    </div>
    <div class="content">
        <div class="form well well-sm">
        <form  action="<?php echo site_url();?>
" method="post"   class="form-horizontal form-bordered" onsubmit="return false;">
            <div class="form-group">
                <label class="col-md-3 control-label" style="text-align: left;">Sucursales</label>
                <div class="col-md-9">
                        <select name="Sucursal">
                            <?php  $_smarty_tpl->tpl_vars['unaSucursal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unaSucursal']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sucursales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unaSucursal']->key => $_smarty_tpl->tpl_vars['unaSucursal']->value) {
$_smarty_tpl->tpl_vars['unaSucursal']->_loop = true;
?>
                                <option id="<?php echo $_smarty_tpl->tpl_vars['unaSucursal']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['unaSucursal']->value->getNombre();?>
</option>
         
                            <?php } ?>

                  
                            </select>
                </div>

                <label class="col-md-3 control-label" style="text-align: left;">Especialidades</label>
                <div class="col-md-9">
                        <select name="Especialidad" onchange="buscarDoctores()" id="select-especialidad">
                            <?php  $_smarty_tpl->tpl_vars['unaEspecialidad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unaEspecialidad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['especialidades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unaEspecialidad']->key => $_smarty_tpl->tpl_vars['unaEspecialidad']->value) {
$_smarty_tpl->tpl_vars['unaEspecialidad']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['unaEspecialidad']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['unaEspecialidad']->value->getNombre();?>
</option>
         
                            <?php } ?>

                  
                            </select>
                </div>
                
                <label class="col-md-3 control-label" style="text-align: left;">Doctores</label>
                <div class="col-md-9">
                        <select name="Doctor" id="select-doctores">
                            <?php  $_smarty_tpl->tpl_vars['unDoctor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unDoctor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['doctores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unDoctor']->key => $_smarty_tpl->tpl_vars['unDoctor']->value) {
$_smarty_tpl->tpl_vars['unDoctor']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['unDoctor']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['unDoctor']->value->getNombre();?>
</option>
         
                            <?php } ?>

                  
                            </select>
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
<script src="<?php echo site_url();?>
public/js/sucursales.js">
<!-- END Page Content -->
<?php echo $_smarty_tpl->getSubTemplate ('footer-general.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
