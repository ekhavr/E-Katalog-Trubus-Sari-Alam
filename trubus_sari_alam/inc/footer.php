 <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Produk Kami</h4>
                        <ul class="list-unstyled">
                            <?php
                                $tampil = "select * from kategori ";
                                $hasil  = mysqli_query($con,$tampil);
                                while ($r=mysqli_fetch_array($hasil)){
                                echo '<li><a href="kategori.php?page=kategori&cat='.$r['id_kategori'].'">'.$r['nama_kategori'].'</a></li>';
                                }
                              ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Tentang Kami</h4>
                        <ul class="list-unstyled">
                            <li><a href="profile.php">Profil</a></li>
                            <li><a href="kontak.php">Kontak</a></li>
                            <li><a href="carapesan.php">Cara Pesan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Alamat Kami</h4>
                        <ul class="list-unstyled">
                            <li><a ><?php
                            $sql=$con->query("select * from kontak order by id_kontak limit 1");
                            while($row=$sql->fetch_assoc()){
                                echo ''.$row['alamat'].'';
                        ?></a></li><?php } ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <h4>Sosial Media</h4>
                        <div class="social_icon">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
            </div>
        </div>
    </footer>