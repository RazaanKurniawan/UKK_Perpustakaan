<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
$query = mysqli_query($koneksi, "SELECT * FROM user");
$data = mysqli_fetch_array($query);
?>
<div class="wrapper">
    <div class="profile">
        <div class="overlay">
            <div class="about d-flex flex-column">
                <h4><?php echo $data['nama'] ?></h4> <span>Software Developer</span>
            </div>
            <ul class="social-icons">
                <li><i class="fa fa-facebook"></i></li>
                <li><i class="fa fa-linkedin"></i></li>
                <li><i class="fa fa-twitter"></i></li>
                <li><i class="fa fa-instagram"></i></li>
            </ul>
        </div>
    </div>
</div>