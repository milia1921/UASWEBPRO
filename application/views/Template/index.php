<?php
$query = $this->db->get('user');
if ($query->num_rows() > 0) {
    $tuser = $query->num_rows();
} else {
    $tuser = 0;
}

?>

<?php
$query = $this->db->get('assets');
if ($query->num_rows() > 0) {
    $tassets = $query->num_rows();
} else {
    $tuser = 0;
}

?>

<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2>Dashboard</h2>
            </div>
        </div>
    </div>
    <div class="row column1">
        <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                    <div>
                        <i class="fa fa-users yellow_color"></i>
                    </div>
                </div>
                <div class="counter_no">
                    <div>
                        <p class="total_no"><?= $tuser ?></p>
                        <p class="head_couter">Pengguna</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                    <div>
                        <i class="fa fa-archive blue1_color"></i>
                    </div>
                </div>
                <div class="counter_no">
                    <div>
                        <p class="total_no"><?= $tassets; ?></p>
                        <p class="head_couter">Data Aset</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                    <div>
                        <i class="fa fa-exchange red_color"></i>
                    </div>
                </div>
                <div class="counter_no">
                    <div>
                        <p class="total_no">0</p>
                        <p class="head_couter">Aset Dipinjam</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                    <div>
                        <i class="fa fa-check-square-o green_color "></i>
                    </div>
                </div>
                <div class="counter_no">
                    <div>
                        <p class="total_no">0</p>
                        <p class="head_couter">Dikembalikan</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                    <div>
                        <i class="fa fa-folder blue1_color "></i>
                    </div>
                </div>
                <div class="counter_no">
                    <div>
                        <p class="total_no">0</p>
                        <p class="head_couter">Kategori</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->