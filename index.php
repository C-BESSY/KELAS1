<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.13.1/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluit"> <!--membuat tamilan ke kiri -->
        <div class="row mb-1"></div> <!--membuat jarak dari atas -->
        <div class="row">

            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">PWEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                <a class="nav-link" href="index.php?page=list-mhs">List Mahasiswa</a>
                                <a class="nav-link" href="index.php?page=add-mhs">Tambah Mahasiswa</a>
                                <a class="nav-link" href="index.php?page=list-motor">List Motor</a>
                                <a class="nav-link" href="index.php?page=add-motor">Tambah Motor</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-12">
                <?php
                $halaman = "view/home.php";
                if (isset($_REQUEST['page'])) {
                    $page = $_REQUEST['page'];
                    switch ($page) {
                        case "list-mhs":
                            $halaman = "view/mahasiswa/index.php";
                            break;
                        case "add-mhs":
                            $halaman = "view/mahasiswa/formTambah.php";
                            break;
                        case "list-motor":
                            $halaman = "view/motor/index.php";
                            break;
                        case "add-motor":
                            $halaman = "view/motor/formTambah.php";
                            break;
                        case "update-motor":
                            $halaman = "view/motor/formUbah.php";
                            break;
                        case "delete-motor":
                            $halaman = "view/motor/konfirmasiHapus.php";
                            break;
                        case "update-mhs":
                            $halaman = "view/mahasiswa/formUbah.php";
                            break;
                        case "delete-mhs":
                            $halaman = "view/mahasiswa/konfirmasiHapus.php";
                            break;
                    }
                }
                include $halaman;
                ?>
            </div>
        </div>
    </div>
</body>

</html>