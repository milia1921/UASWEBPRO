<section class="content pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-center">Daftar Assets</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a class="btn btn-success btn-sm mb-1" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i>Tambah</a>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Photo</th>
                                    <th class="text-center">Kode Barang</th>
                                    <th class="text-center">Nama Barang</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Kualitas</th>
                                    <th class="text-center">Pengadaan</th>
                                    <th class="text-center">Letak</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($daftar_assets as $assets) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td class="text-center">
                                            <img src="<?= base_url() ?>img_up/<?= $assets->photo; ?>" alt="" height="100px">
                                        </td>
                                        <td class="text-center"><?= $assets->kode_barang; ?></td>
                                        <td class="text-center"><?= $assets->nama_barang; ?></td>
                                        <td class="text-center"><?= $assets->nama_kategori; ?></td>
                                        <td class="text-center"><?= $assets->kwalitas; ?></td>
                                        <td class="text-center"><?= $assets->pengadaan; ?></td>
                                        <td class="text-center"><?= $assets->letak; ?></td>
                                        <td class="text-center"><?= $assets->qty; ?></td>
                                        <td>
                                            <!-- Modal Edit -->
                                            <section class="content">
                                                <div class="modal fade" id="modal-edit<?= $assets->id_assets; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Data Aset</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form name="frmassets" enctype="multipart/form-data" method="post" action="<?php base_url() ?>/dataassets/simpan_edit">
                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label for="">Kode Barang</label>
                                                                            <input type="text" class="form-control" id="" name="kode_barang" value="<?= $assets->kode_barang ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Nama Barang</label>
                                                                            <input type="text" class="form-control" id="" name="nama_barang" value="<?= $assets->nama_barang ?>">
                                                                        </div>

                                                                        <div class="">
                                                                            <label for="Pilih Kategori">Kategori</label>
                                                                            <select name="kategori" id="" class="form-control">
                                                                                <option value="">Pilih</option>
                                                                                <?php
                                                                                foreach ($kategori as $kat) { ?>
                                                                                    <option value="<?= $kat->id_kategori; ?>" <?php if (
                                                                                                                                    $assets->kategori == $kat->id_kategori
                                                                                                                                ) echo "selected"; ?>>
                                                                                        <?= $kat->nama_kategori; ?>
                                                                                    </option>

                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="">
                                                                            <label for="Pilih Kualitas">Kualitas</label>
                                                                            <select name="kwalitas" id="" class="form-control" required>
                                                                                <option value="">Pilih</option>
                                                                                <option value="Sangat Baik">Sangat Baik</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Kurang Baik">Kurang Baik</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Tahun Pengadaan</label>
                                                                            <input type="text" class="form-control" id="" name="pengadaan" value="<?= $assets->pengadaan; ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Letak Aset</label>
                                                                            <input type="text" class="form-control" id="" name="letak" value="<?= $assets->letak; ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Jumlah Banyaknya</label>
                                                                            <input type="number" class="form-control" id="" name="qty" value="<?= $assets->qty ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="">Foto Aset</label>
                                                                            <input type="file" class="form-control" id="" name="photo" placeholder="Lampirkan JPG/JPEG/PNG">
                                                                        </div>
                                                                        <br>
                                                                    </div>
                                                                    <!-- /.card-body -->
                                                                    <div class="box-footer col-12 pb-3 d-flex justify-content-between float-right">
                                                                        <button type="button" class="btn btn-danger ml-3" data-dismiss="modal">BATAL</button>
                                                                        <button id="simpan" type="submit" class="btn  btn-primary mr-3">SIMPAN</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                            </section>
                                            <div class="text-center">
                                                <a href="" data-toggle="modal" data-target="#modal-edit<?= $assets->id_assets; ?>" class="btn btn-warning edit"><i class="fa fa-edit" title="Edit"></i> </a>
                                                <a href="dataassets/hapus/<?php echo $assets->id_assets; ?>" onclick="return confirm('Hapus Data  <?php echo $assets->nama_barang; ?> ?')" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i> </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>

<!-- Modal Tambah -->
<section class="content">
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Aset</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="frmassets" method="post" enctype="multipart/form-data" action="<?php base_url() ?>/dataassets/simpan">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Kode Barang</label>
                                <input type="text" class="form-control" id="" name="kode_barang" placeholder="Kode Barang" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <input type="text" class="form-control" id="" name="nama_barang" placeholder="Nama Barang" required>
                            </div>

                            <div class="">
                                <label for="Pilih Kategori">Kategori</label>
                                <select name="kategori" id="" class="form-control">
                                    <option value="">Pilih</option>
                                    <?php
                                    foreach ($kategori as $kat) { ?>
                                        <option value="<?= $kat->id_kategori; ?>" <?php if (
                                                                                        $assets->kategori == $kat->id_kategori
                                                                                    ) echo "selected"; ?>>
                                            <?= $kat->nama_kategori; ?>
                                        </option>

                                    <?php } ?>
                                </select>
                            </div>

                            <div class="">
                                <label for="Pilih Kualitas">Kualitas</label>
                                <select name="kwalitas" id="" class="form-control" required>
                                    <option value="">Pilih</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Kurang Baik">Kurang Baik</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tahun Pengadaan</label>
                                <input type="text" class="form-control" id="" name="pengadaan" placeholder="Tahun Pengadaan" required>
                            </div>
                            <div class="form-group">
                                <label for="">Letak Aset</label>
                                <input type="text" class="form-control" id="" name="letak" placeholder="Penempatan Aset" required>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Banyaknya</label>
                                <input type="number" class="form-control" id="" name="qty" placeholder="Jumlah Banyaknya" required>
                            </div>
                            <div class="form-group">
                                <label for="">Foto Aset</label>
                                <input type="file" class="form-control" id="" name="photo" placeholder="Lampirkan JPG/JPEG/PNG">
                            </div>



                            <br>
                        </div>
                        <!-- /.card-body -->
                        <div class="box-footer col-12 pb-3 d-flex justify-content-between float-right">
                            <button type="button" class="btn btn-danger ml-3" data-dismiss="modal">BATAL</button>
                            <button id="simpan" type="submit" class="btn  btn-primary mr-3">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>