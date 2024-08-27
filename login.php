<?php include 'model/koneksi.php';
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <?php include 'component/head.php' ?>
</head>

<body class="hold-transition login-page">


    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b><h2><marquee direction="left" scrollamount="6" align="center"> --- SISTEM INFORMASI OBJEK WISATA DI PULAU SIPORA KAB.KEP MENTAWAI ---</marquee></h2></b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">LOGIN</p>

                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                    </div>
                </form>

                <?php

                    if(isset($_POST['login'])){
                        $username = $_POST['username'];
                        $password = $_POST['pass'];
                    
                        $cek = $koneksi->query("SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password' ")->fetch_assoc();

                        if ($cek == True) {
                            $_SESSION['id_admin'] = $cek['id_admin'];
                            $_SESSION['level_admin'] = $cek['level_admin'];
                            echo"<script>
                                alert('Login berhasil');
                                window.location='index.php';
                            </script>";
                        }else{
                            echo"<script>
                            alert('Login Gagal');
                            window.location='login.php';
                            </script>";
                        }

                    }

                ?>


            </div>

        </div>
    </div>


    <?php include 'component/script.php' ?>
</body>

</html>