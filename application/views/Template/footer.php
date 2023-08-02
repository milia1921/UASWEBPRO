<!-- end dashboard Content -->
</div>
</div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-8 my-2 mx-auto">
            <div class="footer ">
                <p class="pl-5">Copyright © 2023 - STMIK Antar Bangsa. <br> <br>
                    Anjasmara | Misbah Zain | Imroatul Afifah

                </p>
            </div>
        </div>
    </div>
</div>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- wow animation -->
<script src="<?= base_url() ?>assets/js/animate.js"></script>
<!-- select country -->
<script src="<?= base_url() ?>assets/js/bootstrap-select.js"></script>
<!-- owl carousel -->
<script src="<?= base_url() ?>assets/js/owl.carousel.js"></script>
<!-- chart js -->
<script src="<?= base_url() ?>assets/js/Chart.min.js"></script>
<script src="<?= base_url() ?>assets/js/Chart.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/utils.js"></script>
<script src="<?= base_url() ?>assets/js/analyser.js"></script>
<!-- sweetalert2 -->
<script src="<?= base_url() ?>assets/sweetalert2/sweetalert2.min.js"></script>

<script>
  <?php
  /* simpan */
  if ($this->session->flashdata('flash') == "Tersimpan") {
    echo 'swal.fire("Tersimpan", "Data Berhasil Tersimpan", "success")';
  } elseif ($this->session->flashdata('flashGagal') == "Gagal Tersimpan") {
    echo 'swal.fire("Gagal", "Data Gagal Tersimpan", "error")';
  }
/* Edit */
  if ($this->session->flashdata('flashUpdate') == "Terupdate") {
    echo 'swal.fire("Tersimpan", "Data Berhasil Terupdate", "success")';
  } elseif ($this->session->flashdata('fUpdateGagal') == "Gagal Terupdate") {
    echo 'swal.fire("Gagal", "Data Gagal Tersimpan", "error")';
  }
  /* Hapus */
  if ($this->session->flashdata('flashHapus') == "Terhapus") {
    echo 'swal.fire("Terhapus", "Data Berhasil Terhapus", "success")';
  } elseif ($this->session->flashdata('fGagalTerhapus') == "Gagal Terhapus") {
    echo 'swal.fire("Gagal", "Data Gagal Terhapus", "error")';
  }
  ?>
  
</script>
<!-- nice scrollbar -->
<script src="<?= base_url() ?>assets/js/perfect-scrollbar.min.js"></script>
<script>
    var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- custom js -->
<script src="<?= base_url() ?>assets/js/chart_custom_style1.js"></script>
<script src="<?= base_url() ?>assets/js/custom.js"></script>

</body>

</html>