{include file='header-general.tpl'}
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
        <form  action="{site_url()}" method="post"   class="form-horizontal form-bordered" onsubmit="return false;">
            <div class="form-group">
                <label class="col-md-3 control-label" style="text-align: left;"><i class="fa fa-user"></i> Nombre</label>
                <div class="col-md-9">
                        <input type="text" class="form-control" id="nombre" name="nombre" class="form-control input-lg" placeholder="Escriba su nombre" value="">
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-default" onclick="crear_doctor()">Crear</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<div id="modal" class="modal fade" role="dialog"></div>

<!-- END Page Content -->
<script src="{site_url()}public/js/funcionesGenerales.js"></script>
<script src="{site_url()}public/js/ajaxFunction.js"></script>
{include file='footer-general.tpl'}

