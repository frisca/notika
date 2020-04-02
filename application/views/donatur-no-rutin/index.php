<?php $this->load->view('script_header');?>
    <?php $this->load->view('menu');?>
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li>
                            <a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li  class="active">
                            <a data-toggle="tab" href="#donatur"><i class="notika-icon notika-support"></i> Donatur</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#transaksi"><i class="notika-icon notika-form"></i > Transaksi</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#datapenerimabeasiswa"><i class="notika-icon notika-edit"></i> Data Penerima Beasiswa</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?php echo base_url('home/dashborad');?>">Dashboard </a>
                                </li>
                            </ul>
                        </div>
                        <div id="donatur" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?php echo base_url('donatur_rutin/index')?>">Donatur Rutin</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('donatur_wajib/index')?>">Donatur Berkewajiban</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('donatur_no_rutin/index')?>">Donatur Tidak Rutin</a>
                                </li>
                            </ul>
                        </div>
                        <div id="transaksi" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?php echo base_url('transaksi_masuk/index');?>">Transaksi Masuk</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('transaksi_keluar/index');?>">Transaksi Keluar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Donatur Tidak Rutin</h2>
                                        <p>Daftar <span class="bread-ntd">Donatur Tidak Rutin</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <!-- <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button> -->
                                    <a href="<?php echo base_url('donatur_no_rutin/add');?>"><button class="btn notika-btn-primary">Tambah</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Daftar Donatur Tidak Rutin</h2>
                            <!-- <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p> -->
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Alamat</th>
                                        <th>Nomor Handphone</th>
                                        <th>Tanggal Join</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($donatur as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $value->nama;?></td>
                                            <td><?php echo $value->alamat;?></td>
                                            <td><?php echo $value->phone;?></td>
                                            <td><?php echo $value->joinDate;?></td>
                                            <td>
                                                <a href="<?php echo base_url('donatur_no_rutin/edit/' . $value->idDonatur)?>">
                                                    <button class="btn btn-warning notika-btn-warning">Ubah</button>
                                                </a>
                                                <a href="<?php echo base_url('donatur_no_rutin/delete/' . $value->idDonatur . '/' . $value->idUser)?>">
                                                    <button class="btn btn-danger notika-btn-danger">Hapus</button>
                                                </a>
                                                <a href="<?php echo base_url('donatur_no_rutin/view/' . $value->idDonatur)?>">
                                                    <button class="btn btn-info notika-btn-info">Lihat</button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php                          }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->    
    <?php echo $this->load->view('footer');?>
<?php $this->load->view('script_footer');;?>