    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <!--<li><a class="menu-top-active" href="?v=dashboard">Dashboard</a></li>-->
                            <?php 
                                switch ($_SESSION["role_id"]) {
                                    case 1:
                            ?>
                                <li><a href="?v=dashboard">Dashboard</a></li>
                                <li><a href="?v=role">Roles</a></li>
                                <li><a href="?v=user">Users</a></li>
                                <li><a href="?v=web">Web Sites</a></li>
                            <?php
                                    break;
                                    
                                    case 2:
                            ?>
                                <li><a href="?v=dashboard">Dashboard</a></li>
                                <li><a href="?v=web">Web Sites</a></li>
                            <?php
                                    break;
                                }
                            ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->