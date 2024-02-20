<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
            <div class="inner">
                <h3><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori")); ?></h3>
                <p>Total Kategori</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-folder-open"></i>
            </div>
            <a href="?page=kategori" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
            <div class="inner">
                <h3><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku")); ?></h3>
                <p>Total Buku</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-book"></i>
            </div>
            <a href="?page=buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ulasan")); ?></h3>
                <p>Total Ulasan</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-chat"></i>
            </div>
            <a href="?page=ulasan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?php echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user")); ?></h3>
                <p>Total User</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-contact"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM user where id_user=" . $_SESSION['user']['id_user']);
            $data = mysqli_fetch_array($query)
            ?>
            <tr>
                <td width="200">Nama</td>
                <td width="1">:</td>
                <td><?php echo $data['nama']; ?></td>
            </tr>
            <tr>
                <td width="200">Level User</td>
                <td width="1">:</td>
                <td><?php echo $data['level']; ?></td>
            </tr>
            <tr>
                <td width="200">Tanggal Login</td>
                <td width="1">:</td>
                <td><?php echo date('d-M-Y'); ?></td>
            </tr>

        </table>
    </div>
</div>