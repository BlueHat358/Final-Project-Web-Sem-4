<?php
    include('php/config.php');
    
    //This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
    if(isset($_GET["code"]))
    {
     //It will Attempt to exchange a code for an valid authentication token.
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

        //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
        if(!isset($token['error'])){
        //Set the access token used for requests
            $google_client->setAccessToken($token['access_token']);

            //Store "access_token" value in $_SESSION variable for future use.
            $_SESSION['access_token'] = $token['access_token'];

            //Create Object of Google Service OAuth 2 class
            $google_service = new Google_Service_Oauth2($google_client);

            //Get user profile data from google
            $data = $google_service->userinfo->get();

            //Below you can find Get profile data and store into $_SESSION variable
            if(!empty($data['given_name'])){
                $_SESSION['user_first_name'] = $data['given_name'];
            }

            if(!empty($data['family_name'])){
                $_SESSION['user_last_name'] = $data['family_name'];
            }

            if(!empty($data['email'])){
                $_SESSION['user_email_address'] = $data['email'];
            }

            if(!empty($data['gender'])){
                $_SESSION['user_gender'] = $data['gender'];
            }

            if(!empty($data['picture'])){
                $_SESSION['user_image'] = $data['picture'];
            }
        }
    }

    // header('location: ../index.php');
    
    //This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
    if(!isset($_SESSION['access_token'])){
        //Create a URL to obtain user authorization

        $login_button = '<a class="nav-item nav-link active" href="'.$google_client->createAuthUrl().'">Login</a>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/style.js"></script>
    <script src="js/style_home.js"></script>
    <title>Pariwisata Yogyakarta</title>
</head>

<body>
<?php
    $isEmpty = isset($_SESSION['access_token']) ? $_SESSION['access_token'] : 'null';

    $_SESSION['isEmpty'] = $isEmpty;

    if($isEmpty == 'null'){
        $variabel1 = <<<login1
        <div class="header-area" id="navbar">
           <div class="header-top">
                <div class="header-menu-area">
                    <nav class="navbar navbar-expand">
                        <div class="header-logo">
                            <a class="navbar-brand" id="text-logo" href="">Travels</a>
                        </div>
                        <div class="navbar-collapse float-right" id="navbarNavAltMarkup">
                            <div class="navbar-nav ml-auto" id="header-menu">
                                <a class="nav-item nav-link active nav-home" href="">Home</a>
                                <div class="row nav-not-login">
                                    $login_button
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        login1;
        echo $variabel1;
    }

    if($isEmpty != 'null'){
        $image_profile = $_SESSION['user_image'];
        $first_name = $_SESSION['user_first_name'];
        $last_name = $_SESSION['user_last_name'];
        $email =$_SESSION['user_email_address'];
        $variabel = <<<login
        <div class="header-area" id="navbar">
           <div class="header-top">
                <div class="header-menu-area">
                    <nav class="navbar navbar-expand">
                        <div class="header-logo">
                            <a class="navbar-brand" id="text-logo" href="">Travels</a>
                        </div>
                        <div class="navbar-collapse float-right" id="navbarNavAltMarkup">
                            <div class="navbar-nav ml-auto" id="header-menu">
                                <a class="nav-item nav-link active nav-home" href="">Home</a>
                                <div class="row nav-login">
                                    <img class="login-item" width="30px" height="30px" src="$image_profile" alt="" srcset="">
                                    <h5 class="login-item">$first_name $last_name</h5>
                                    <a class="login-item" href="php/logout.php"><img width="25px" height="25px" style="margin-top: 3px!important;" src="image/logout.png" alt="Log Out" srcset=""></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        login;
        echo $variabel;
    }
?>

    <!-- carousel area -->
    <div class="caurosel-area" style="overflow: hidden;">
        <div class="caurosel-wrapper">
            <div class="caurosel-banner">
                <div class="caurosel-content" data=0 style="background-image: url(image/pt2.jpg);">
                    <h2>Pantai Timang</h2>
                    <h4>Tepus, Gunung Kidul</h4>
                </div>
                <div class="caurosel-content" data=1 style="background-image: url(image/kedung-pedut3.jpg);">
                    <h2>Kedung Pedut</h2>
                    <h4>Girimulyo, Kulon Progo</h4>
                </div>
                <div class="caurosel-content" data=2 style="background-image: url(image/gunung2.jpg);">
                    <h2>Gunung Api Purba</h2>
                    <h4>Patuk, Gunung Kidul</h4>
                </div>
                <div class="caurosel-content" data=3 style="background-image: url(image/1.jpg);">
                    <h2>Luweng Sampang</h2>
                    <h4>Gedang Sari, Gunung Kidul</h4>
                </div>
                <div class="caurosel-content" data=4 style="background-image: url(image/lawas1.jpg);">
                    <h2>Kebun Buah Mangunan</h2>
                    <h4>Bantul, D.I. Yogyakarta</h4>
                </div>
                <div class="caurosel-content"></div>
            </div>
        </div>
    </div>
    <!-- end carousel area -->

    <!-- content -->
    <div class="content-wrapper">
        <div class="container">
            <!-- List Pariwisata -->
            <div class="row justify-content-center">
                <div class="col-md-6 text-center content-title">
                    <h3>List Pariwisata</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg text-center image-list-wrapper">
                    <img src="image/waduk-sermo3-crop.jpeg" alt="" srcset="" class="rounded-circle mx-auto d-block img-list">
                    <h5>Waduk Sermo</h5>
                    <p class="text-left">Waduk Sermo adalah sumber air bersih untuk PDAM dan untuk air irigasi persawahandaerah Wates dan sekitarnya. Selain dijadikan sebagai sumber...</p>
                    <a href="content/waduk-sermo.php"><button class="btn btn-danger">Lanjut membaca</button></a>
                </div>
                <div class="col-lg text-center image-list-wrapper">
                    <img src="image/Kedung-Pedut2-min.jpg" alt="" srcset="" class="rounded-circle mx-auto d-block img-list">
                    <h5>Kedung Pedut</h5>
                    <p class="text-left">Kedung Pedut ini memiliki keunikan yaitu airnya memiliki dua warna yaitu hijau tosca dan berwarna putih. Kawasan Kedung Pedut ini baru dibuka...</p>
                    <a href="content/kedung-pedut.php"><button class="btn btn-danger">Lanjut membaca</button></a>
                </div>
                <div class="col-lg text-center image-list-wrapper">
                    <img src="image/jumbotron - Copy.jpg" alt="" srcset="" class="rounded-circle mx-auto d-block img-list">
                    <h5>Kedung Kandang</h5>
                    <p class="text-left">Air Terjun Kedung Kandang adalah sebuah air terjun yang berada di Provinsi Yogyakarta tepatnya di Nglanggeran Kulon, Nglanggeran, Kec. Patuk,...</p>
                    <a href="content/kedung-kandang.php"><button class="btn btn-danger">Lanjut membaca</button></a>
                </div>
                <div class="col-lg text-center image-list-wrapper">
                    <img src="image/1.jpg" alt="" srcset="" class="rounded-circle mx-auto d-block img-list">
                    <h5>Luweng Sampang</h5>
                    <p class="text-left">Air Terjun Luweng Sampang adalah sebuah air terjun yang berada di Provinsi Yogyakarta tepatnya di Desa Sampang, Kecamatan Gedangsari,...</p>
                    <a href="content/luweng-sampang.php"><button class="btn btn-danger">Lanjut membaca</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg text-center image-list-wrapper">
                    <img src="image/gunung2.jpg" alt="" srcset="" class="rounded-circle mx-auto d-block img-list">
                    <h5>Gunung Api Purba</h5>
                    <p class="text-left">Gunung Api Purba Nglanggeran adalah sebutan yang biasa diberikan pada fosil gunung berapi yang sudah tidak aktif lagi atau telah mati...</p>
                    <a href="content/gunung-api-purba.php"><button class="btn btn-danger">Lanjut membaca</button></a>
                </div>
                <div class="col-lg text-center image-list-wrapper">
                    <img src="image/candi1.jpg" alt="" srcset="" class="rounded-circle mx-auto d-block img-list">
                    <h5>Candi Ratu Boko</h5>
                    <p class="text-left">Candi Ratu Boko adalah sebuah bangunan megah yang dibangun pada masa pemerintahan Rakai Panangkaran, salah satu keturunan Wangsa...</p>
                    <a href="content/candi-ratu-boko.php"><button class="btn btn-danger">Lanjut membaca</button></a>
                </div>
                <div class="col-lg text-center image-list-wrapper">
                    <img src="image/cp2.jpg" alt="" srcset="" class="rounded-circle mx-auto d-block img-list">
                    <h5>Candi Prambanan</h5>
                    <p class="text-left">Candi Prambanan adalah salah satu kompleks candi yang terkenal di Indonesia dan ditetapkan UNESCO sebagai situs warisan dunia pada...</p>
                    <a href="content/candi-prambanan.php"><button class="btn btn-danger">Lanjut membaca</button></a>
                </div>
                <div class="col-lg text-center image-list-wrapper">
                    <img src="image/pt2.jpg" alt="" srcset="" class="rounded-circle mx-auto d-block img-list">
                    <h5>Pantai Timang</h5>
                    <p class="text-left">Menyeberangi Karang Berombak Besar di Pantai Timang Gunung Kidul – Pantai Timang merupakan salah satu pantai di kabupaten gunung...</p>
                    <a href="content/pantai-timang.php"><button class="btn btn-danger">Lanjut membaca</button></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 text-center image-list-wrapper ">
                    <img src="image/lawas1.jpg" alt="" srcset="" class="rounded-circle mx-auto d-block img-list">
                    <h5>Kebun Buah Mangunan</h5>
                    <p class="text-left">Kebun Buah Mangunan merasakan sensasi berada di atas awan biasanya hanya dapat kita rasakan saat berada di puncak gunung. Namun...</p>
                    <a href="content/kebun-buah-mangunan.php"><button class="btn btn-danger">Lanjut membaca</button></a>
                </div>
                <div class="col-lg-3 text-center image-list-wrapper image3">
                    <img src="image/lengkung.jpg" alt="" srcset="" class="rounded-circle mx-auto d-block img-list">
                    <h5>Hutan Pinus Pengger</h5>
                    <p class="text-left">Hutan Pinus Pengger merupakan salah satu wisata alam yang berlokasi di Sendangsari, Desa Terong, Kecamatan Dlingo, Kabupaten Bantul,...</p>
                    <a href="content/hutan-pinus-pengger.php"><button class="btn btn-danger">Lanjut membaca</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="tentang-kami-area">
        <div class="container">
            <div class="row justify-content-center content-title-fixed">
                <div class="col-md-4 text-center content-title">
                    <h3>Tim Kami</h3>
                    <hr>
                </div>
            </div>
            <div class="row about-us tentang-kami-content" data-speed=3 data-opacity=-1.5>
                <div class="col-md-4 text-center">
                    <img width="200px" height="200px" src="image/helmi1.jpg" alt="" srcset="" class="mx-auto d-block tentang-image">
                    <h4>M. Helmi Habibi</h4>
                    <h6>18.11.1891</h6>
                </div>
            </div>
            <div class="row tentang-kami-content" data-speed=-10 data-opacity=6>
                <div class="col-md-6 offset-md-7 text-center">
                    <img width="300px" height="300px" src="image/nawan.jpg" alt="" srcset="" class="mx-auto d-block tentang-image">
                    <h4>Kurniawan Dwi Waestaputra</h4>
                    <h6>18.11.1896</h6>
                </div>
            </div>
            <div class="row tentang-kami-content" data-speed=4 data-opacity=-1>
                <div class="col-md-5 offset-lg-4 text-center">
                    <img width="250px" height="250px" src="image/fajar.jpg" alt="" srcset="" class="mx-auto d-block tentang-image">
                    <h4>Fajar Muhammad Sidiq</h4>
                    <h6>18.11.1895</h6>
                </div>
            </div>
            <div class="row tentang-kami-content" data-speed=0.75 data-opacity=-3>
                <div class="col-md-5 offset-md-1 text-center">
                    <img width="200px" height="200px" src="image/vika.jpg" alt="" srcset="" class="mx-auto d-block tentang-image">
                    <h4>Vika Arya Prasetya</h4>
                    <h6>18.11.1892</h6>
                </div>
            </div>
            <div class="row tentang-kami-content" data-speed=3 data-opacity=-3>
                <div class="col-md-5 offset-md-2 text-center">
                    <img width="250px" height="250px" src="image/ilham.jpg" alt="" srcset="" class="mx-auto d-block tentang-image">
                    <h4>Ilham Nur Rohman</h4>
                    <h6>18.11.1903</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- end Tentang Kami -->

    <!-- contact us -->
    <div class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center content-title">
                    <h3>Kamu dapat mengirim pesan kepada kami</h3>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center contact-col">
                    <form id="contact-form" action="php/contactUs.php" method="POST">
                        <input type="text" name="name" class="contact-control" placeholder="Nama" required><br>
                        <input type="email" name="email" class="contact-control" placeholder="Email" required><br>
                        <textarea name="message" class="contact-control _textarea" rows="5" placeholder="Pesan" required></textarea>
                        <br>
                        <button class="btn btn-primary btn-submit" name="btn_send">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact us -->
</body>

</html>