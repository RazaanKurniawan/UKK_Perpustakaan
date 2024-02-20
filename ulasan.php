<div class="card">
    <div class="card-header">
        <h3 class="mt-3">Ulasan Buku</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=ulasan_tambah" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Buku</th>
                        <th>Ulasan</th>
                        <th>Rating</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM ulasan LEFT JOIN user on user.id_user = ulasan.id_user LEFT JOIN buku on buku.id_buku = ulasan.id_buku");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['judul']; ?></td>
                                <td><?php echo $data['ulasan']; ?></td>
                                <td><?php echo $data['rating']; ?></td>
                                <td>
                                    <a href="?page=ulasan_edit&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-primary">Edit</a>
                                    <a onclick="return confirm('Apakah anda yakin untuk menghapus kategori ini?')" href="?page=ulasan_hapus&&id=<?php echo $data['id_ulasan']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>