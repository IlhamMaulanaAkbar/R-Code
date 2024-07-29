<?php include_once("inc_header.php") ?>
<!-- untuk home -->
<section id="home">
    <!-- <img src="<?php echo ambil_gambar('4') ?>" /> --> <!-- <<< ini benar -->
    <img src="https://img.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161" /> <!-- <<< ini salah -->
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('4') ?></p>
        <h2><?php echo ambil_judul('4') ?></h2>
        <?php echo maximum_kata(ambil_isi('4'), 255) ?>
        <p><a href="<?php echo buat_link_halaman('4') ?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
    </div>
</section>

<!-- untuk courses -->
<section id="courses">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('4') ?></p>
        <h2><?php echo ambil_judul('4') ?></h2>
        <?php echo maximum_kata(ambil_isi('4'), 255) ?>
        <p><a href="<?php echo buat_link_halaman('4') ?>" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
    </div>
    <img src="https://img.freepik.com/free-vector/online-learning-isometric-concept_1284-17947.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161" />
    <!-- <img src="<?php echo ambil_gambar('4') ?>" /> --> <!-- <<< ini benar -->
</section>

<!-- untuk tutors -->
<section id="tutors">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our Top Tutors</p>
            <h2>Tutors</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, optio!</p>
        </div>

        <div class="tutor-list">
            <?php
            $sql1 = "select * from tutors order by id desc";
            $q1 = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
            ?>
                <div class="kartu-tutor">
                    <a href="<?php echo buat_link_tutors($r1['id']) ?>">
                        <!-- <img src="https://dfu1k3y1rami2.cloudfront.net/wp-content/uploads/2014/07/26195109/2020_cb.jpg" /> -->
                        <img src="<?php echo url_dasar() . "/gambar/" . tutors_foto($r1['id']) ?>" />
                        <p><?php echo $r1['nama'] ?></p>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<!-- untuk partners -->
<section id="partners">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our Top Partners</p>
            <h2>Partners</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi magni tempore expedita sequi. Similique rerum doloremque impedit saepe atque maxime.</p>
        </div>

        <div class="partner-list">
            <?php
            $sql1 = "select * from partners order by id asc";
            $q1 = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_assoc($q1)) {
            ?>
                <div class="kartu-partner">
                    <a href="<?php echo buat_link_partners($r1['id']) ?>">
                        <img src="<?php echo url_dasar() . "/gambar/" . partners_foto($r1['id']) ?>" />
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<?php include_once("inc_footer.php") ?>