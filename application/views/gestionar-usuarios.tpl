{include file='site/header-general.tpl'}
<!-- Page content STEVE -->
<div id="page-content">
    <!-- Forms General Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-notes_2"></i>Usuarios<br>
            </h1>
        </div>
    </div>
    <div class="content">
        <button class="btn btn-primary" onclick="modalParaAgregar()">Crear nuevo</button><br><br>
    <div class="table-responsive" >
    <table id="table" class="table table-vcenter table-hover table-bordered table-striped table-condensed">
        <thead align="center" >
            <tr> 
                <th>Id</th>
                <th>Username</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Mail</th>
                <th>Perfil</th>
                <th>-</th>
            </tr>
        </thead>
        <tbody>
            {if $usuarioActual->tenesPerfilDe(1)}
                {foreach from=$usuarios item=unUsuario}
                <tr>
                    <td>{$unUsuario->getId()}</td>
                    <td>{$unUsuario->getNombreDeUsuario()}</td>
                    <td>{$unUsuario->getNombre()}</td>
                    <td>{$unUsuario->getApellido()}</td>
                    <td>{$unUsuario->getMail()}</td>
                    <td>{$unUsuario->getPerfil()->getNombre()}</td>
                    <td>
                        <button class="btn btn-primary" onclick="modalEditar('{$unUsuario->getId()}');">Editar</button>
                    </td>
                </tr>
                {/foreach}
            {else}
                {foreach from=$usuarios item=unUsuario}
                    {if !$unUsuario->tenesPerfilDe(1)}
                        <tr>
                            <td>{$unUsuario->getId()}</td>
                            <td>{$unUsuario->getNombreDeUsuario()}</td>
                            <td>{$unUsuario->getNombre()}</td>
                            <td>{$unUsuario->getApellido()}</td>
                            <td>{$unUsuario->getMail()}</td>
                            <td>{$unUsuario->getPerfil()->getNombre()}</td>
                            <td>
                                <button class="btn btn-primary" onclick="modalEditar('{$unUsuario->getId()}');">Editar</button>
                            </td>
                        </tr>
                    {/if}
                {/foreach}
            {/if}      
        </tbody>
    </table>
    </div>
    </div>
    <!--<div id="dinamico" style="display: none;">
    	
    </div><-->
</div>
<div id="modal" class="modal fade" role="dialog"></div>

<!-- END Page Content -->
<script src="{site_url()}js/funcionesGenerales.js"></script>
<script src="{site_url()}js/usuario.js"></script>
<script src="{site_url()}public/DataTables/datatables.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
        $("#table").DataTable();
    });
</script>
{include file='site/footer-general.tpl'}

