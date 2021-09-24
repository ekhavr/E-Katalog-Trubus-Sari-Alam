<header class="header1">
  <div class="container-menu-header">
    <div class="topbar">
      <!-- Ini bagian paling atas header -->
    </div>

    <div class="wrap_header">

      <!-- Menu -->
      <div class="wrap_menu">
        <nav class="menu">
          <ul class="main_menu">
            <li>
              <a href="index.php">Home</a>
            </li>

            <li>
              <a href="katalog.php">Produk</a>
            </li>

            <!-- <li>
              <a href="#">Kategori</a>
              <ul class="sub_menu">
                  <?php
  									$tampil = "select * from kategori ";
  									$hasil  = mysqli_query($con,$tampil);
  									while ($r=mysqli_fetch_array($hasil)){
  									echo '<li><a href="kategori.php?page=kategori&cat='.$r['id_kategori'].'">'.$r['nama_kategori'].'</a></li>';
  									}
								  ?>

              </ul>
            </li> -->

            <li>
              <a href="profile.php">Profil</a>
            </li>

            <li>
              <a href="Kontak.php">Kontak</a>
            </li>

            <li>
              <a href="carapesan.php">Cara Pesan</a>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Header Icon -->
<!--       <div class="header-icons">
          <a href="#" class="topbar-social-item fa fa-facebook"></a>
          <a href="#" class="topbar-social-item fa fa-instagram"></a>
          <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
      </div> -->
    </div>
  </div>
</header>
