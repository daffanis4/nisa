<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container"> 
                <a class="navbar-brand" href="#page-top">Nepal.Education</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#beranda">beranda</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#kategori">kategori</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Login">Login</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Materi">Materi</a></li>
                    </ul>
                </div>
            </div>
        </nav>

<br/>
<br/>
<br/>
<br/>
<br/>

<div class="y">

<center><br />
	<a href="tabelguru.php"></a>
	<a class="btn btn-primary" href="tabelguru.php">Lihat semua data</a>
 
    <br />
    <br />
    <table border="1">
      <tr>

        <th>NIP</th>
        <th>NAMA</th>
        <th>MAPEL</th>
        <th>JABATAN</th>
        <th>OPSI</th>
      </tr>
      <?php
      include 'koneksi.php';
      $nip = 1;
      $data = mysqli_query($conn, "select * from identitas_guru");
      while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
          <td>
            <?php echo $nip++; ?>
          </td>
          <td>
            <?php echo $d['nama']; ?>
          </td>
          <td>
            <?php echo $d['mapel']; ?>
          </td>
          <td>
            <?php echo $d['jabatan']; ?>
          </td>
          <td><a href="hapusguru.php?nip=<?= $d["nip"]; ?>"
              onclick="return confirm('Apakah anda ingin menghapus data ini?')">Hapus</a>
            <a href="editguru.php?nip=<?= $d["nip"]; ?>"
              onclick="return confirm('Apakah anda ingin mengedit data ini?')">Edit</a>
          </td>


        </tr>
      <?php
      
      }
      ?>
    </table>
</div>


</body>

</html>