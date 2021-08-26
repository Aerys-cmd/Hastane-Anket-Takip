<?php
if (isset($_SESSION['YetkiNo'])) {
    if ($_SESSION['YetkiNo'] == 5) {
        $sql = "select count(ID) as 'sayi' from soru where YollayanID={$_SESSION['ID']}";
        $result = mysqli_query($con, $sql);
        $data = mysqli_fetch_assoc($result);
        if (checkifHastaAdded($_SESSION['ID']) != 0) {
            $clss = "info-box-icon bg-danger elevation-1";
            $bilgi = "Hasta bilgileri Ekle";
            $hykID = checkifHastaAdded($_SESSION['ID']);
        } else {
            $clss = 'info-box-icon bg-success elevation-1';
            $bilgi = "Hasta bilgilerini görüntüle";
        }
?>

        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="<?php echo $clss; ?>"><i class="fas fa-address-card"></i></span>
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <div class="info-box-content">
                                                <a href="main.php?sayfaadi=hastaekle" class="info-box-number"> <?php echo $bilgi; ?></a>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="clearfix hidden-md-up"></div>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-inbox"></i></span>

                                            <div class="info-box-content">
                                                <span class="info-box-text">Sorulan Sorular</span>
                                                <span class="info-box-number"><?php echo $data['sayi'] . ' Soru Soruldu.';  ?></span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text"></span>
                                                <a href="main.php?sayfaadi=soruliste" class="info-box-number"> Gelen Cevaplar</a>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>
        <?php

    } else if ($_SESSION['YetkiNo'] == 4) {
        $sql = "select count(ID) as 'sayi' from soru where YollayanID={$_SESSION['ID']}";
        $result = mysqli_query($con, $sql);
        $data = mysqli_fetch_assoc($result);
        ?>
            <div class="content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-address-card"></i></span>
                                                <ion-icon name="chatbubbles-outline"></ion-icon>
                                                <div class="info-box-content">
                                                    <a href="main.php?sayfaadi=hesabim" class="info-box-number">Hesabım</a>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <div class="clearfix hidden-md-up"></div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-inbox"></i></span>

                                                <div class="info-box-content">
                                                    <span class="info-box-text">Sorulan Sorular</span>
                                                    <span class="info-box-number"><?php echo $data['sayi'] . ' Soru Soruldu.';  ?></span>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text"></span>
                                                    <a href="main.php?sayfaadi=soruliste" class="info-box-number"> Gelen Cevaplar</a>
                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                            <!-- /.info-box -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>

        <?php
    } else if ($_SESSION['YetkiNo'] == 3) {
        $sql = "select count(ID) as 'sayi' from kullanici where YetkiNo=4";
        $result = mysqli_query($con, $sql);
        $data = mysqli_fetch_assoc($result);
        $sql1 = "select count(ID) as 'sayi' from kullanici where YetkiNo=5";
        $result1 = mysqli_query($con, $sql1);
        $data1 = mysqli_fetch_assoc($result1);
        ?>
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Hesabım  -->
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-address-card"></i></span>
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <div class="info-box-content">
                                                <a href="main.php?sayfaadi=hesabim" class="info-box-number">Hesabım</a>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="clearfix hidden-md-up"></div>
                                    <!-- Gelen Sorular  -->
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Öğrenci Sayısı</span>
                                                <span class="info-box-number"><?php echo $data['sayi'] . ' öğrenci kaydı var.';  ?></span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Hasta Yakını Sayısı</span>
                                                <span class="info-box-number"><?php echo $data1['sayi'] . ' hasta yakını kaydı var.';  ?></span>

                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                </div>
                                <div class="row">


                                    <div class="clearfix hidden-md-up"></div>
                                    <div class="col-12 col-sm-6 col-md-4">

                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text"></span>
                                                <a href="main.php?sayfaadi=soruliste" class="info-box-number"> Gelen Cevaplar</a>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>


        <?php
    } else if ($_SESSION['YetkiNo'] == 2) { 
        $sql = "select count(ID) as 'sayi' from kullanici where YetkiNo=4";
        $result = mysqli_query($con, $sql);
        $data = mysqli_fetch_assoc($result);
        $sql1 = "select count(ID) as 'sayi' from kullanici where YetkiNo=5";
        $result1 = mysqli_query($con, $sql1);
        $data1 = mysqli_fetch_assoc($result1);
        ?>

            <div class="content-wrapper">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Hesabım  -->
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-address-card"></i></span>
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <div class="info-box-content">
                                                <a href="main.php?sayfaadi=hesabim" class="info-box-number">Hesabım</a>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="clearfix hidden-md-up"></div>
                                    <!-- Gelen Sorular  -->
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Öğrenci Sayısı</span>
                                                <span class="info-box-number"><?php echo $data['sayi'] . ' öğrenci kaydı var.';  ?></span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Hasta Yakını Sayısı</span>
                                                <span class="info-box-number"><?php echo $data1['sayi'] . ' hasta yakını kaydı var.';  ?></span>

                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                </div>
                                <div class="row">


                                    <div class="clearfix hidden-md-up"></div>
                                    <div class="col-12 col-sm-6 col-md-4">

                                    <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text"></span>
                                                <a href="main.php?sayfaadi=soruliste" class="info-box-number"> Gelen Sorular</a>
                                            </div>
                                            <!-- /.info-box-content -->
                                    </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Gelen Soru Sayısı</span>
                                                <span class="info-box-number"><?php
                                                 $sql1 = "select count(ID) as 'sayi' from soru where AtananID={$_SESSION['ID']}";
                                                 $result1 = mysqli_query($con, $sql1);
                                                 $data1 = mysqli_fetch_assoc($result1);
                                                
                                                echo $data1['sayi'] . ' soru geldi.';  ?></span>

                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Verilen cevap sayısı</span>
                                                <span class="info-box-number"><?php
                                                 $sql1 = "select count(ID) as 'sayi' from cevap where YollayanID={$_SESSION['ID']}";
                                                 $result1 = mysqli_query($con, $sql1);
                                                 $data1 = mysqli_fetch_assoc($result1);
                                                
                                                echo $data1['sayi'] . ' cevap gönderildi.';  ?></span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>


    <?php
    }
    else{
        $sql = "select count(ID) as 'sayi' from kullanici where YetkiNo=4";
        $result = mysqli_query($con, $sql);
        $data = mysqli_fetch_assoc($result);
        $sql1 = "select count(ID) as 'sayi' from kullanici where YetkiNo=5";
        $result1 = mysqli_query($con, $sql1);
        $data1 = mysqli_fetch_assoc($result1);
        ?>
        
        <div class="content-wrapper">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Hesabım  -->
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-address-card"></i></span>
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <div class="info-box-content">
                                                <a href="main.php?sayfaadi=hesabim" class="info-box-number">Hesabım</a>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="clearfix hidden-md-up"></div>
                                    <!-- Gelen Sorular  -->
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Öğrenci Sayısı</span>
                                                <span class="info-box-number"><?php echo $data['sayi'] . ' öğrenci kaydı var.';  ?></span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>
                                            <ion-icon name="chatbubbles-outline"></ion-icon>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Hasta Yakını Sayısı</span>
                                                <span class="info-box-number"><?php echo $data1['sayi'] . ' hasta yakını kaydı var.';  ?></span>

                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Toplam Soru Sayısı</span>
                                                <span class="info-box-number"><?php
                                                 $sql1 = "select count(ID) as 'sayi' from soru";
                                                 $result1 = mysqli_query($con, $sql1);
                                                 $data1 = mysqli_fetch_assoc($result1);
                                                
                                                echo $data1['sayi'] . ' soru geldi.';  ?></span>

                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="info-box mb-3">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-comments"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Toplam verilen cevap sayısı</span>
                                                <span class="info-box-number"><?php
                                                 $sql1 = "select count(ID) as 'sayi' from cevap";
                                                 $result1 = mysqli_query($con, $sql1);
                                                 $data1 = mysqli_fetch_assoc($result1);
                                                
                                                echo $data1['sayi'] . ' cevap gönderildi.';  ?></span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>

        
        <?php
    }
}
    ?>