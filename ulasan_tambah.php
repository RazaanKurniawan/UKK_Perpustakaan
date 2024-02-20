<div class="card">
    <div class="card-header">
        <h4 class="mt4">Ulasan Buku</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <?php
                    if (isset($_POST['submit'])) {
                        $id_buku = $_POST['id_buku'];
                        $id_user = $_SESSION['user']['id_user'];
                        $ulasan = $_POST['ulasan'];
                        $rating = $_POST['rating'];
                        $query = mysqli_query($koneksi, "INSERT INTO ulasan(id_buku,id_user,ulasan,rating) VALUES('$id_buku','$id_user','$ulasan','$rating')");

                        if ($query) {
                            echo '<script>alert("Tambah data berhasil!"); location.href="?page=ulasan";</script>';
                        } else {
                            echo '<script>alert("Tambah data gagal, Coba lagi"); location.href="?page=ulasan_tambah"</script>';
                        }
                    }
                    ?>
                    <div class="row form-group">
                        <div class="col-md-2">Buku</div>
                        <div class="col-md-8">
                            <select name="id_buku" id="id_kategori" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($kategori = mysqli_fetch_array($buk)) {
                                ?>
                                    <option value="<?php echo $kategori['id_buku'] ?>"><?php echo $kategori['judul'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Ulasan</div>
                        <div class="col-md-8"><textarea name="ulasan" id="ulasan" style="resize: none;" class="form-control" cols="30" rows="7"></textarea></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Rating</div>
                        <div class="col-md-8">
                            <select name="rating" id="rating" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
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