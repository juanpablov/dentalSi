{include file='site/header-general.tpl'}
<!-- Page content -->
<div id="page-content">
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-notes_2"></i>Doctor<br>
            </h1>
        </div>
    </div>
    <div class="content">
        <div class="form well well-sm">
        <form  action="" method=""   class="form-horizontal form-bordered" onsubmit="return false;">
            <div class="form-group">
                <label class="col-md-3 control-label" style="text-align: left;"><i class="fa fa-user"></i> Nombre</label>
                <div class="col-md-9">
                        <input type="text" class="form-control" id="usuario-nombre" name="perfil-nombre" class="form-control input-lg" placeholder="Escriba su nombre" value="{$unUsuario->getNombre()}">
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <label type="" class="btn btn-sm btn-primary" onclick="modalCambiarContrasenia('{$unUsuario->getId()}');">Cambiar contraseña</label>
                     <label type="" class="btn btn-sm btn-primary" onclick="editarUsuario('{$unUsuario->getId()}');">Guardar cambios</label>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<div id="modal" class="modal fade" role="dialog"></div>

<!-- END Page Content -->
<script src="{site_url()}js/funcionesGenerales.js"></script>
<script src="{site_url()}js/usuario.js"></script>
{include file='site/footer-general.tpl'}

