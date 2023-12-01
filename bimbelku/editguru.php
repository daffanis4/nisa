<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['simpan'])) {
    $nip = $_POST['nip'];


    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];
    $jabatan = $_POST['jabatan'];

    // update user data
    $result = mysqli_query($conn, "UPDATE identitas_guru SET nip='$nip',nama='$nama',mapel='$mapel',jabatan='$jabatan' WHERE nip=$nip");

    // Redirect to homepage to display updated user in list
    header("Location: tabelguru.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$nip = $_GET['nip'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM identitas_guru WHERE nip=$nip");

while ($user_data = mysqli_fetch_array($result)) {
    $nip = $user_data['nip'];
    $nama = $user_data['nama'];
    $mapel = $user_data['mapel'];
    $jabatan = $user_data['jabatan'];
}
?>
<html>

<head>
    <title>Edit Data barang</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <br>
    </br>

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

        <center>
            <br/>
            <br/>

            <a href="tabel.php" onclick="return confirm('apakah ingin seperti semula kembali?')">ubah?</a>
            <div class="from-input-data">
                <form name="update_user" method="post" action="editguru.php">
                    <table border="0">
                        <div class="row">
                            <tr>
                                <td>nip</td>
                                <td><input type="text" name="nip" value=<?php echo $nip; ?>></td>
                            </tr>
                        </div>
                        <div class="row">
                            <tr>
                                <td>nama</td>
                                <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
                            </tr>
                        </div>
                        <div class="row">
                            <tr>
                                <td>mapel</td>
                                <td><input type="text" name="mapel" value=<?php echo $mapel; ?>></td>
                            </tr>
                        </div>
                        <div class="row">
                            <tr>
                                <td>jabatan</td>
                                <td><input type="text" name="jabatan" value=<?php echo $jabatan; ?>></td>
                            </tr>
                        </div>
                        <div class="row">
                            <tr>
                                <td><input type="hidden" name="nip" value=<?php echo $_GET['nip']; ?>></td>
                                <td><input type="submit" name="simpan" value="simpan"></td>
                            </tr>
                        </div>
            </div>
            </table>
            </form>
        </center>
    </body>

</html>