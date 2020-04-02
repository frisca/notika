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
                                        <h2>Tambah Donatur Tidak Rutin</h2>
                                        <p>Menambahkan data <span class="bread-ntd">Donatur Tidak Rutin</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
     <!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Donatur Tidak Rutin</h2>
                            <p>Menambahkan data donatur tidak rutin.</p>
                        </div>
                        <div class="row">
                            <form method="post" action="<?php echo base_url('donatur_no_rutin/processAdd');?>"> 
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Nama" name="nama">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Nomor Handphone" name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Tanggal Join" name="joinDate">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Username" name="username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Angkatan" name="angkatan">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Tanggal Lahir" name="birthDate">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="nk-int-mk">
                                        <select class="form-control" style="margin: 15px 0px;" name="gender">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Perempuan">Perempuan</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-success notika-btn-success" style="margin: 15px 0px;">Simpan</button>
                                    <a href="<?php echo base_url('donatur_no_rutin/index');?>"><button class="btn btn-default notika-btn-default" style="margin: 15px 0px;" type="button">Kembali</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Element area End-->
    <?php echo $this->load->view('footer');?>
<?php $this->load->view('script_footer');;?>