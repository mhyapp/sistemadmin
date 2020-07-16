<ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Master</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="<?php echo base_url('admin/nasabah') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Nasabah</span></a>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Jaminan</span></a>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Notaris</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Transaction</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="<?php echo base_url('admin/tkeluar') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Transaksi Keluar</span></a>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Transaksi Masuk</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Report</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="<?php echo base_url('admin/tkeluar') ?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Transaksi</span></a>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Jaminan</span></a>
                    </li>
                    <?php
                        if ($this->session->userdata('idleveluser') == "1"){
                        
                        ?>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Settings</label>
                        </li>
                        <li data-username="Authentication Sign up Sign in reset password Change password Personal information profile settings map form subscribe" class="nav-item pcoded-hasmenu">
                            <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">User</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="<?php echo base_url('admin/user') ?>">Akun</a></li>
                                <li class=""><a href="<?php echo base_url('admin/level') ?>">Level</a></li>
                            </ul>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                            <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Backup Database</span></a>
                        </li>
                    <?php } ?>
                </ul>