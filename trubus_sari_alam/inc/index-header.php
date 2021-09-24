<header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="assets_home/img/tsa.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Kategori
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                      <?php
                                        $tampil = "select * from kategori ";
                                        $hasil  = mysqli_query($con,$tampil);
                                        while ($r=mysqli_fetch_array($hasil)){
                                        echo '<a href="kategori.php?page=kategori&cat='.$r['id_kategori'].'" class="dropdown-item">'.$r['nama_kategori'].'</a>';
                                       }
                                       ?>   
                                    </div>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="katalog.php">Produk</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="profile.php">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="kontak.php">Kontak</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="carapesan.php">Cara Pesan</a>
                                </li>
                            </ul>
                        </div>
                         <div class="hearer_icon d-flex">
                            <!-- <div class="dropdown cart">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-bag"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
    
                                    </div>
                                </div>
                            </div> -->
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
         <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner" action="hasilcari.php?page=cari" method="POST">
                    <input type="text" class="form-control" name="cari"  placeholder="Pencarian Produk">
                    <button type="submit" class="btn" href="hasilcari.php?page=cari"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header><!-- Header -->
