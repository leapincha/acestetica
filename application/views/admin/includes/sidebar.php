<div id="sidebar">
    <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

        <h1 id="sidebar-title"><a href="#">Admin</a></h1>

        <!-- Sidebar Profile links -->
        <div id="profile-links">
            <a href="http://www.acestetica.com.ar" title="Ver el sitio" target="_blank">Ver el sitio</a> | <a href="<?= base_url(); ?>admin/login/signout" title="Logout">Logout</a>
        </div>

        <ul id="main-nav">  <!-- Accordion Menu -->
            <li>
                <a href="<?= base_url(); ?>admin/inicio" class="nav-top-item no-submenu <?= ($active == "Inicio") ? "current" : "" ?>"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                    Inicio
                </a>
            </li>

            <li>
                <a href="#" class="nav-top-item <?= ($active == "Blog") ? "current" : "" ?>">
                    Blog
                </a>
                <ul>
                    <li><a href="<?= base_url(); ?>admin/blog/agregar" class="<?= ($sub_active == "Blog_add") ? "current" : "" ?>">Nueva Entrada de Blog</a></li>
                    <li><a href="<?= base_url(); ?>admin/blog" class="<?= ($sub_active == "Blog_list") ? "current" : "" ?>">Listado de Entradas</a></li>
                </ul>
            </li>

         <!--   <li>
                <a href="#" class="nav-top-item <?= ($active == "Espectaculos") ? "current" : "" ?>">
                    Espectáculos
                </a>
                <ul>
                    <li><a href="<?= base_url(); ?>admin/espectaculo/agregar" class="<?= ($sub_active == "Espectaculos_add") ? "current" : "" ?>">Agregar nuevo espectáculo</a></li>
                    <li><a href="<?= base_url(); ?>admin/espectaculo" class="<?= ($sub_active == "Espectaculos_list") ? "current" : "" ?>">Listado de espectáculos</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-top-item <?= ($active == "Tickets") ? "current" : "" ?>">
                    Tickets
                </a>
                <ul>
                    <li><a href="<?= base_url(); ?>admin/ticket" class="<?= ($sub_active == "Tickets_list") ? "current" : "" ?>">Listado de tickets</a></li>
                </ul>
            </li>
            
            <li>
                <a href="#" class="nav-top-item <?= ($active == "Pagos") ? "current" : "" ?>">
                    Pagos
                </a>
                <ul>
                    <li><a href="<?= base_url(); ?>admin/pago" class="<?= ($sub_active == "Pagos_list") ? "current" : "" ?>">Listado de pagos</a></li>
                </ul>
            </li>
        -->
        </ul> <!-- End #main-nav -->

    </div>
</div> <!-- End #sidebar -->