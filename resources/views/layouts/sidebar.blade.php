<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("img/logo.svg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="buscar..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <ul class="sidebar-menu">
            <li class="header">MENÚ</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Terceros</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user text-red"></i> <span>Empleado</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="{!!URL::to('/empleado')!!}"><i class="fa fa-circle-o text-red"></i>Listar Empleados</a></li>
                            <li class="active"><a href="{!!URL::to('/empleado/create')!!}"><i class="fa fa-circle-o text-red"></i>Agregar empleado </a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user text-yellow"></i> <span>Cliente</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="{!!URL::to('/cliente')!!}"><i class="fa fa-circle-o text-yellow"></i>Listar Cliente</a></li>
                            <li class="active"><a href="{!!URL::to('/cliente/create')!!}"><i class="fa fa-circle-o text-yellow"></i>Agregar cliente </a></li>
                            <li class="active"><a href="{!!URL::to('/vehiculo')!!}"><i class="fa fa-circle-o text-yellow"></i>Listar vehiculos </a></li>
                            <li class="active"><a href="{!!URL::to('/vehiculo/create')!!}"><i class="fa fa-circle-o text-yellow"></i>Agregar vehiculo </a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user text-light-blue"></i> <span>Proveedores</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="{!!URL::to('/proveedor')!!}"><i class="fa fa-circle-o text-blue"></i>Listar Proveedores</a></li>
                            <li class="active"><a href="{!!URL::to('/proveedor/create')!!}"><i class="fa fa-circle-o text-blue"></i>Agregar Proveedor </a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user text-green"></i> <span>Socios</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="{!!URL::to('/socio')!!}"><i class="fa fa-circle-o text-green"></i>Listar Socios</a></li>
                            <li class="active"><a href="{!!URL::to('/socio/create')!!}"><i class="fa fa-circle-o text-green"></i>Agregar Socio </a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--<li class="treeview">
                <a href="#">
                    <i class="fa fa-calculator"></i> <span>Facturación</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="javascript:void(0);" onclick="cargarformulario(1);" ><i class="fa fa-circle-o"></i>Agregar usuario </a></li>
                    <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(1);" ><i class="fa fa-circle-o"></i>Listado Usuarios</a></li>
                </ul>
            </li>-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Ingresos</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{!!URL::to('/ingreso/create')!!}" ><i class="fa fa-circle-o"></i>Comprobante de ingreso </a></li>
                    <li class="active"><a href="{!!URL::to('/ingreso')!!}" ><i class="fa fa-circle-o"></i>Listar Ingresos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-university"></i> <span>Egresos</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{!!URL::to('/egreso/create')!!}" ><i class="fa fa-circle-o"></i>Comprobante de egreso </a></li>
                    <li class="active"><a href="{!!URL::to('/egreso')!!}" ><i class="fa fa-circle-o"></i>Listar Egresos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-usd"></i> <span>Prestamos</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="javascript:void(0);" onclick="cargarformulario(1);" ><i class="fa fa-circle-o"></i>Agregar usuario </a></li>
                    <li class="active"><a href="javascript:void(0);" onclick="cargarlistado(1);" ><i class="fa fa-circle-o"></i>Listado Usuarios</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart"></i> <span>Informes</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
        </ul>
    </section>
</aside>