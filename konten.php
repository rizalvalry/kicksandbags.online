<?php
$query00 = $db->query("SELECT gambar from slide where aktif = 'Y' limit 1");
$query01 = $db->query("SELECT * from profil limit 1");


$slide = $query00->fetch_assoc();
$profil = $query01->fetch_assoc();
?>

<section class="home-section home-full-height bg-dark bg-gradient" id="home" data-background="gambar/thumb_slide/<?=$slide['gambar']?>">
            <div class="titan-caption">
                <div class="caption-content">
                    <!-- <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
                    <div class="font-alt mb-40 titan-title-size-4">We are Titan bro</div><a class="section-scroll btn btn-border-w btn-round" href="#">Learn More</a> -->
                    <img src="gambar/toko/<?php echo $profil['gambar']; ?>" style="width:350px; height:350px; border-radius:12px;" alt="<?php echo $logo['meta_keyword']; ?>">

                </div>
            </div>
        </section>
        <div class="main">
            <div class="container">
                <div data-mc-src="1b09a9fe-6360-47c0-ac98-6b6a412772de#instagram"></div>

                <script src="https://cdn2.woxo.tech/a.js#60f291b7d2b2ab0015a0cb65" async data-usrc>
                </script>
            </div>
            <section class="module" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Layanan Kami</h2>
                            <div class="module-subtitle font-serif"><?php echo $profil['pin_bb'];?>
                            </div>
                        </div>
                    </div>
                    <hr class="divider-w mt-10 mb-20">
                    <div class="container" id="team">

                        <div class="row">

                            <!-- starting -->
                        <?php
							$query100       = $db->query("SELECT warna, judul_banner, keterangan, gambar, url FROM banner where aktif = 'Y'");
							while ( $row100 = $query100->fetch_assoc() ){
						?>
                            <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3">
                                <div class="team-item">
                                    <div class="team-image"><img src="gambar/thumb_banner/<?php echo $row100['gambar']; ?>" alt="Member Photo" />
                                        <div class="team-detail">
                                            <!-- <h5 class="font-alt">Hi all</h5> -->
                                            <p class="font-serif"><?php echo $row100['keterangan']; ?></p>
                                            <!-- <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                                            class="fa fa-dribbble"></i></a><a href="#"><i
                                                            class="fa fa-skype"></i></a></div> -->
                                        </div>
                                    </div>
                                    <div class="team-descr font-alt">
                                        <div class="team-name"><?php echo $row100['judul_banner']; ?></div>
                                        <div class="team-role"><?php echo $row100['url']; ?></div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- ending -->
                        </div>
                    </div>
                </div>
            </section>

            
            <?php
                    
                    $query75  = $db->query("SELECT judul_halaman, isi_halaman FROM halaman_statis WHERE id_halaman = 1 AND aktif = 'Y'");
                    $query76  = $db->query("SELECT judul_halaman, isi_halaman FROM halaman_statis WHERE id_halaman = 4 AND aktif = 'Y'");
                    $row75 = $query75->fetch_assoc();
                    $row76 = $query76->fetch_assoc();
                   
            ?>
            <div class="container">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1"><?php echo $row75['judul_halaman']; ?></a></h4>
                        </div>
                        <div class="panel-collapse collapse in" id="support1">
                            <div class="panel-body"><?php echo $row75['isi_halaman']; ?></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support2"><?php echo $row76['judul_halaman']; ?></a></h4>
                        </div>
                        <div class="panel-collapse collapse" id="support2">
                            <div class="panel-body"><?php echo $row76['isi_halaman']; ?></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section class="module pb-0 bg-dark" id="works">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Testimoni</h2>
                    </div>
                </div>
                <div class="testimonials-slider pt-140 pb-140">
                    <ul class="slides">
                    <?php
                    $query1234 = $db->query("SELECT id_galeri, judul_galeri, keterangan, gambar FROM galeri WHERE aktif = 'Y' ORDER BY id_galeri DESC");
                    while ($row1234 = $query1234->fetch_assoc()) {
                        $query12345 = $db->query("SELECT COUNT(id_foto) AS jumlah FROM foto WHERE id_galeri = '$row1234[id_galeri]'");
                        $row12345 = $query12345->fetch_assoc();
                        $isi_artikel         = $row1234['judul_galeri'];
                        $isi                 = substr($isi_artikel,0,10); // ambil sebanyak 220 karakter
                                // $isi                 = substr($isi_artikel,0,strrpos($isi," ")); // potong per spasi kalimat
                        ?>
                    <!-- starting -->
                        <li>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="module-icon">
                                        <img src="gambar/thumb_galeri/<?php echo $row1234['gambar']; ?>" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                <div class="col-sm-12">
                                       <img src="assets/images/testimoni/testi.jpeg" style="width:100px; height:150px;">
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-4">
                                        <div class="testimonial-author">
                                            <div class="testimonial-caption font-alt">
                                                <div class="testimonial-title"><?php echo $row1234['judul_galeri']; ?></div>
                                                <!-- <div class="testimonial-descr">SomeCompany INC, CEO</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php
                        }
                        ?>
                       <!-- ending -->
                    </ul>
                </div>
            </div>
        </section>


        <!-- tabs -->
        <?php

        $tab_result = $db->query("SELECT kategori_produk.id_kategori, kategori_produk.nama_kategori FROM produk LEFT JOIN subkategori_produk ON produk.id_subkategori=subkategori_produk.id_subkategori LEFT JOIN kategori_produk ON subkategori_produk.id_kategori=kategori_produk.id_kategori WHERE produk.aktif = 'Y' ORDER BY id_kategori ASC");
        $tab_menu = '';
        $tab_content = '';
        $i = 0;
        while($row = $tab_result->fetch_assoc())
        {
        if($i == 0)
        {
        $tab_menu .= '
        <li><a class="wow fadeInUp" href="#'.$row["id_kategori"].'" data-toggle="tab" data-wow-delay="0.2s">'.$row["nama_kategori"].'</a></li>
        ';
        $tab_content .= '
        <div id="'.$row["id_kategori"].'" class="tab-pane fade in active">
        ';
        }
        else
        {
        $tab_menu .= '
        <li><a class="wow fadeInUp" href="#'.$row["id_kategori"].'" href="#'.$row["id_kategori"].'" data-toggle="tab">'.$row["nama_kategori"].'</a></li>
        ';
        $tab_content .= '
        <div id="'.$row["id_kategori"].'" class="tab-pane fade">
        ';
        }
        $product_query = $db->query("SELECT kategori_produk.id_kategori, kategori_produk.nama_kategori, kategori_produk.kategori_seo, id_produk,nama_produk,gambar FROM produk LEFT JOIN subkategori_produk ON produk.id_subkategori=subkategori_produk.id_subkategori LEFT JOIN kategori_produk ON subkategori_produk.id_kategori=kategori_produk.id_kategori WHERE produk.aktif = 'Y' AND kategori_produk.id_kategori = '$row[id_kategori]' ORDER BY id_produk DESC");
        while($sub_row = $product_query->fetch_assoc())
        {
        $tab_content .= '
        <li class="work-item illustration webdesign">
                                        <a href="#alt-features" class="section-scroll">
                                            <div class="work-image"><img src="gambar/thumb_produk1/'.$sub_row['gambar'].'" alt="Portfolio Item" /></div>
                                            <div class="work-caption font-alt">
                                                <h3 class="work-title">'.$sub_row["nama_produk"].'</h3>
                                                
                                            </div>
                                        </a>
                                    </li>
        ';
        }
        $tab_content .= '<div style="clear:both"></div></div>';
        $i++;
        }
        ?>


        <!-- end tabs -->

        <section class="module pb-0" id="alt-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Promo</h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="filter font-alt">
                            <!-- <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li> -->
                             <?php echo $tab_menu; ?>
                        </ul>
                        <ul class="tab-content works-grid works-grid-gut works-grid-3 works-hover-w">
                            <?php
                            echo $tab_content;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <hr class="divider-w">

        <div class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
                        <div class="callout-text font-alt">
                            <h3 class="callout-title">Subscribe now</h3>
                            <p>We will not spam your email.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="callout-btn-box">
                            <form id="subscription-form" role="form" method="post" action="https://markup.themewagon.com/titan/php/subscribe.php">
                                <div class="input-group"><a class="section-scroll" href="#contact"><button class="form-control">Chat Now</button></a>
                                    <span class="input-group-btn"></span>
                                </div>
                            </form>
                            <div class="text-center" id="subscription-response"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="module" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Get in touch</h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <form id="contactForm" role="form" method="post" action="https://markup.themewagon.com/titan/php/contact.php">
                            <div class="form-group"><label class="sr-only" for="name">Name</label><input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group"><label class="sr-only" for="email">Email</label><input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."
                                />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group"><textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center"><button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button></div>
                        </form>
                        <div class="ajax-response font-alt" id="contactFormResponse"></div>
                    </div>
                </div>
            </div>
        </section>


        <section id="map-section">
            <!-- <div id="map"></div> -->
            <?php $queryfooter = $db->query("SELECT * from testimoni where id_testimoni = 2 AND aktif = 'Y'");
           $map = $queryfooter->fetch_assoc() ?>
<?php echo $map['testimoni']; ?>
        </section>

        