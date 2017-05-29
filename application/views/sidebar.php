<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="<?php echo template_url('img/uesr.png'); ?>" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['name']; ?></strong>
                            </span> </span> </a>

                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="<?php echo ($this->router->fetch_class() == 'home') ? 'active' : '' ?>">
                <a href="<?php echo site_url('home.html'); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li class="<?php echo ($this->router->fetch_class() == 'user') ? 'active' : '' ?>">
                <a href="<?php echo site_url('user.html'); ?>"><i class="fa fa-user"></i> <span class="nav-label">User</span></a>
            </li>
            <li class="<?php echo ($this->router->fetch_class() == 'customer') ? 'active' : '' ?>">
                <a href="<?php echo site_url('customer.html'); ?>"><i class="fa fa-users"></i> <span class="nav-label">Customers</span></a>
            </li>
            <li class="<?php echo ($this->router->fetch_class() == 'delivery') ? 'active' : '' ?>">
                <a href="<?php echo site_url('delivery.html'); ?>"><i class="fa fa-truck"></i> <span class="nav-label">Delivery</span></a>
            </li>
            <li class="<?php echo ($this->router->fetch_class() == 'history_delivery') ? 'active' : '' ?>">
                <a href="<?php echo site_url('history-delivery.html'); ?>"><i class="fa fa-history"></i> <span class="nav-label">History Delivery</span></a>
            </li>
        </ul>

    </div>
</nav>