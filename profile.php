<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Profile</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<?php
$admin = $koneksi->query("SELECT * FROM tbl_admin WHERE id_admin='$_SESSION[id_admin]'")->fetch_assoc();
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            Data Profile
        </div>
        <div class="card-body">
            <table class="table">
                <form action="" method="POST">
                    <tr>
                        <td>Nama Admin</td>
                        <td>:</td>
                        <td><?= $admin['nama_admin'] ?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><?= $admin['username'] ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="text" name="password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Level Admin</td>
                        <td>:</td>
                        <td><?= $admin['level_admin'] ?></td>
                    </tr>
                    <tr>
                        <td>Aksi</td>
                        <td>:</td>
                        <td><button class="btn btn-success" type="submit" name="simpan">Simpan</button></td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
</div>


<?php if (isset($_POST['simpan'])) {
    $password = $_POST['password'];
    $simpan = $koneksi->query("UPDATE tbl_admin SET password='$password' WHERE id_admin='$_SESSION[id_admin]'");
    if ($simpan == True) {
        echo "<script>
                alert('data berhasil disimpan')
                window.location='?page=profile'
              </script>";
    } else {
        echo "<script>
                alert('data Gagal disimpan')
                window.location='?page=profile'
              </script>";
    }
} ?>