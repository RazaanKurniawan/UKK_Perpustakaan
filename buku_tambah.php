<div class="card">
    <div class="card-header">
        <h4 class="mt4">Buku</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <?php
                    if (isset($_POST['submit'])) {
                        $id_kategori = $_POST['id_kategori'];
                        $judul = $_POST['judul'];
                        $penulis = $_POST['penulis'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $deskripsi = $_POST['deskripsi'];
                        $query = mysqli_query($koneksi, "INSERT INTO buku(id_kategori,judul,penulis,penerbit,tahun_terbit,deskripsi) VALUES('$id_kategori','$judul','$penulis','$penerbit','$tahun_terbit','$deskripsi')");

                        if ($query) {
                            echo '<script>alert("Tambah data berhasil!"); location.href="?page=buku";</script>';
                        } else {
                            echo '<script>alert("Tambah data gagal, Coba lagi"); location.href="?page=buku_tambah"</script>';
                        }
                    }
                    ?>
                    <div class="row form-group">
                        <div class="col-md-2">Kategori</div>
                        <div class="col-md-8">
                            <select name="id_kategori" id="id_kategori" class="form-control">
                                <?php
                                $kat = mysqli_query($koneksi, "SELECT * FROM kategori ");
                                while ($kategori = mysqli_fetch_array($kat)) {
                                ?>
                                    <option value="<?php echo $kategori['id_kategori'] ?>"><?php echo $kategori['kategori'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Judul</div>
                        <div class="col-md-8"><input type="text" required name="judul" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Penulis</div>
                        <div class="col-md-8"><input type="text" required name="penulis" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Penerbit</div>
                        <div class="col-md-8"><input type="text" required name="penerbit" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Tahun Terbit</div>
                        <div class="col-md-8"><input type="text" required name="tahun_terbit" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Deskripsi</div>
                        <div class="col-md-8"><textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"></textarea></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-danger" name="reset" value="reset">Reset</button>
                            <a href="?page=kategori" class="btn btn-warning" name="back" value="back">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>