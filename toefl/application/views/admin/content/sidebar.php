        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="nav-item start <?php echo ($this->uri->segment(2) == 'main') ? 'active open': '' ?>">
                            <a href="<?php echo base_url().'admin'?>" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <?php echo ($this->uri->segment(2) == 'main') ? '<span class="selected"></span>': '' ?>
                            </a>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">ADMIN MENU</h3>
                        </li>
                       <li class="nav-item start <?php echo ($this->uri->segment(2) == 'manage_data') ? 'active open': '' ?>">
                            <a href="<?php echo base_url().'admin/manage_data'?>" class="nav-link nav-toggle">
                                <i class="icon-note"></i>
                                <span class="title">Kelola Data</span>
                                <?php echo ($this->uri->segment(2) == 'manage_data') ? '<span class="selected"></span>': '' ?>
                            </a>
                        </li>
                        <li class="nav-item start <?php echo ($this->uri->segment(2) == 'manage_schedule') ? 'active open': '' ?>">
                            <a href="<?php echo base_url().'admin/manage_schedule'?>" class="nav-link nav-toggle">
                                <i class="icon-calendar"></i>
                                <span class="title">Atur Jadwal</span>
                                <?php echo ($this->uri->segment(2) == 'manage_schedule') ? '<span class="selected"></span>': '' ?>
                            </a>
                        </li>
                        <li class="nav-item start <?php echo ($this->uri->segment(2) == 'manage_score') ? 'active open': '' ?>">
                            <a href="<?php echo base_url().'admin/manage_score'?>" class="nav-link nav-toggle">
                                <i class="fa fa-trophy"></i>
                                <span class="title">Masukkan Nilai</span>
                                <?php echo ($this->uri->segment(2) == 'manage_score') ? '<span class="selected"></span>': '' ?>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
