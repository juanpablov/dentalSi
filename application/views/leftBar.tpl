
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!--<div class="user-panel">
            <div class="pull-left image">
            </div>
            <div class="pull-left info">
                <p>
                    {$usuario->getNombre()}
                </p>    
            </div>
        </div>-->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menú</li>
            <!-- Home -->
            <li id="home-lb">
                <a href="inicio">
                    <i class="fa fa-home"></i> <span>Inicio</span>
                </a>
            </li>
            <li id="home-lb">
                <a href="#" id="btnMenuConsolidado" data-btnMenuFuente>
                    <i class="fa fa-file-excel-o"></i> <span>Consolidado</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Usuario</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="#" onclick="cambiarPassword()"><i class="fa fa-circle-o"></i>Cambiar
                            contraseña</a></li>
                    <li class=""><a href="logout"><i class="fa fa-circle-o"></i>Salir</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>