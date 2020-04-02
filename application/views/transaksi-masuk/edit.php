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
                                        <h2>Edit Transaksi Masuk</h2>
                                        <p>Mengubah data <span class="bread-ntd">Transaksi Masuk</span></p>
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
                            <h2>Transaksi Masuk</h2>
                            <p>Mengubah data transaksi masuk.</p>
                        </div>
                        <div class="row">
                            <form method="post" action="<?php echo base_url('transaksi_masuk/processEdit');?>" enctype="multipart/form-data"> 
                                <input type="hidden" class="form-control" name="idTransaksiMasuk" value="<?php echo $transaksi->idTransaksiMasuk;?>">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="nk-int-mk">
                                        <select class="form-control" style="margin: 15px 0px;" name="idDonatur">
                                            <option value="">Pilih Nama Donatur</option>
                                            <?php
                                                foreach ($donatur as $key => $value) {
                                                    if($value->idDonatur == $transaksi->idDonatur){
                                            ?>
                                            <option value="<?php echo $value->idDonatur;?>" selected><?php echo $value->nama;?></option>
                                            <?php 
                                                }else{
                                            ?>
                                            <option value="<?php echo $value->idDonatur;?>"><?php echo $value->nama;?></option>
                                            <?php 
                                                    } 
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Jumlah" name="jumlah" value="<?php echo $transaksi->jumlah;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Deskripsi" name="description" value="<?php echo $transaksi->description;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Tanggal Buat" name="createdBy" value="<?php echo $transaksi->createdBy;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Bank Transfer" name="bankTransfer" value="<?php echo $transaksi->bankTransfer;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Tanggal Transfer" name="transferDate" value="<?php echo $transaksi->transferDate;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Jenis Transaksi" name="jenisTransaksi" value="<?php echo $transaksi->jenisTransaksi;?>">
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label>Bukti Bayar</label>
                                    <img src="<?php echo base_url('gambar/' . $transaksi->buktiBayar);?>">
                                    <div class="form-group">
                                        <div class="nk-int-st">
                                            <input type="file" name="buktiBayar" style="margin:15px 0px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-success notika-btn-success" style="margin: 15px 0px;">Simpan</button>
                                    <a href="<?php echo base_url('transaksi_masuk/index');?>"><button class="btn btn-default notika-btn-default" style="margin: 15px 0px;" type="button">Kembali</button></a>
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