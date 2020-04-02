<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#"><img src="<?php echo base_url();?>assets/img/logo/logo.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li>
                                <a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                <ul class="collapse dropdown-header-top">
                                    <li>
                                        <a href="<?php echo base_url('home/dashboard');?>">Dashboard</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a data-toggle="collapse" data-target="#demoevent" href="#">Donatur</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li>
                                        <a href="<?php echo base_url('donatur_rutin/index');?>">Donatur Rutin</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('donatur_wajib/index');?>">Donatur Berkewajiban</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('donatur_no_rutin/index');?>">Donatur Tidak Rutin</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a data-toggle="collapse" data-target="#demoevent" href="#">Transaksi</a>
                                <ul id="demoevent" class="collapse dropdown-header-top">
                                    <li>
                                        <a href="<?php echo base_url('transaksi_masuk/index');?>">Transaksi Masuk</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('transaksi_keluar/index');?>">Transaksi Keluar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a data-toggle="collapse" data-target="#demoevent" href="#">Data Penerima Beasiswa</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->