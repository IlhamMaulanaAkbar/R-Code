<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
$id = dapatkan_id();

$sql1 = "select * from tutors where id = '$id'";
$q1 = mysqli_query($koneksi, $sql1);
$n1 = mysqli_num_rows($q1);
$r1 = mysqli_fetch_array($q1);

$nama = $r1['nama'];
?>

<?php include_once("inc_header.php") ?>

<?php
if ($nama  == '') {
    echo "<div><P>Maaf data yang kamu cari tidak ditemukan</P></div>";
} else {
?>
    <style>
        .lokasi_foto {
            float: left;
            width: 20%;
            margin-top: 20px;
        }

        .lokasi_foto img {
            width: 100%;
            border-radius: 50%;
        }

        .lokasi_deskripsi {
            margin-top: 20px;
            float: right;
            width: 75%;
        }
    </style>
    <div class="lokasi_foto">
        <img src="<?php echo url_dasar() . "/gambar/" . tutors_foto($r1['id']) ?>" />
    </div>
    <div class="lokasi_deskripsi">
        <h1><?php echo $r1['nama'] ?></h1>
        <?php echo set_isi($r1['isi']) ?>
    </div>
    <br style="clear:both">

<?php
}
?>

<?php include_once("inc_footer.php") ?>