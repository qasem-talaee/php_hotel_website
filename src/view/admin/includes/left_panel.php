<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo ($base_url); ?>admin/"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Rooms</li><!-- /.menu-title -->
                <li><a href="<?php echo ($base_url); ?>admin/room-type/"> <i class="menu-icon ti-email"></i>Room Type </a></li>
                <li><a href="<?php echo ($base_url); ?>admin/bed/"> <i class="menu-icon ti-email"></i>Bed </a></li>
                <li><a href="<?php echo ($base_url); ?>admin/room/"> <i class="menu-icon ti-email"></i>Room </a></li>
                <!----      -->
                <li class="menu-title">Booking</li><!-- /.menu-title -->
                <li><a href="<?php echo ($base_url); ?>admin/book/"> <i class="menu-icon ti-email"></i>Book </a></li>
                <!----      -->
                <li class="menu-title">Contact</li><!-- /.menu-title -->
                <?php
                if ($flag_admin == 1){ ?>
                    <li><a href="<?php echo ($base_url); ?>admin/contact-info/"> <i class="menu-icon ti-email"></i>Contact Info </a></li>
                <?php   }
                ?>
                <li><a href="<?php echo ($base_url); ?>admin/user-contact/"> <i class="menu-icon ti-email"></i>User Contact </a></li>
                <!----      -->
                <li class="menu-title">Users</li><!-- /.menu-title -->
                <?php
                if ($flag_admin == 1){ ?>
                    <li><a href="<?php echo ($base_url); ?>admin/user/"> <i class="menu-icon ti-email"></i>User </a></li>
                <?php   }
                ?>
                <li><a href="<?php echo ($base_url); ?>admin/profile/"> <i class="menu-icon ti-email"></i>Profile </a></li>
                <!----      -->
                <li class="menu-title">Restaurant</li><!-- /.menu-title -->
                <li><a href="<?php echo ($base_url); ?>admin/menu/"> <i class="menu-icon ti-email"></i>Menu </a></li>
                <!----      -->
                <li class="menu-title">Blog</li><!-- /.menu-title -->
                <li><a href="<?php echo ($base_url); ?>admin/blog/"> <i class="menu-icon ti-email"></i>Blog </a></li>
                <!----      -->
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>