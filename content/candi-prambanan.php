<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_pantai_timang.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <!--<script src="../js/style.js"></script>-->
    
    <script src="../js/style_pantai_timang.js"></script>  

    <title>Candi Prambanan</title>

    <style>
        /* Disabled Horizontal Scroll */
      html, body {
      max-width: 100%;
      /*overflow-x: hidden;*/
      }
      /* End Disabled Horizontal Scroll */
 
      .long-text {
      width: 150%;
      }
    
        .comment-area{
            /*width: 100%;*/
            padding-top: 1rem;
            background-color: #fdf7fc;
        }

        .comment-form-container {
            border: #a09c9c 2px solid;
            padding: 20px;
            border-radius: 2px;
            width: 100%;
            margin-bottom: 2rem;
        }

        .input-row {
            margin: auto;
            padding-bottom: 20px;
        }

        .input-field {
            width: 100%;
            border-radius: 2px;
            padding: 10px;
            border: #e0dfdf 1px solid;
        }

        .btn-submit {
            padding: 10px 20px;
            background: #333;
            border: #1d1d1d 1px solid;
            color: #f0f0f0;
            font-size: 0.9em;
            width: 100px;
            border-radius: 2px;
            cursor:pointer;
        }

        .btn_kirim{
            text-align: right;
        }

        ul {
            list-style-type: none;
        }

        .comment-row {
            border-bottom: #e0dfdf 1px solid;
            margin-bottom: 15px;
            padding: 15px;
        }

        .outer-comment {
            background: #F0F0F0;
            padding: 20px;
            border: #dedddd 1px solid;
        }

        span.comment-row-label {
            font-style: italic;
        }

        span._admin{
            font-style: italic;
            float: right;
            background-color: #530bcf;
            color: #e6dcf7;
            font-weight: bold;
            padding: 5px;
            border-radius: 5px;
        }

        span.posted-by {
            color: #09F;
        }

        .comment-info {
            font-size: 0.8em;
        }
        .comment-text {
            margin: 10px 0px;
        }
        .btn-reply {
            font-size: 0.8em;
            text-decoration: underline;
            color: #888787;
            cursor:pointer;
        }
        #comment-message {
            margin-left: 20px;
            color: #189a18;
            display: none;
        }
    </style>
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
                                <a class="nav-item nav-link active nav-home" href="../">Home</a>
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
                                <a class="nav-item nav-link active nav-home" href="../">Home</a>
                                <div class="row nav-login">
                                    <img class="login-item" width="30px" height="30px" src="$image_profile" alt="" srcset="">
                                    <h5 class="login-item">$first_name $last_name</h5>
                                    <a class="login-item" href="../php/logout.php"><img width="25px" height="25px" src="../image/logout.png" alt="Log Out" srcset=""></a>
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
    
    <div class="jumbotron jumbotron-fluid" style="background-image: url(../image/cp2.jpg);">
  <div class="container text-center">
    <h1 class="display-4"><b>Candi Prambanan</b></h1>
    <hr class="my-4">
    <p class="lead"><b>Daerah Istimewa Yogyakarta</b></p>
  </div>
</div>

<!-- Penjelasan Candi Prambanan -->
    <section class="about">
      <div class="isi">
        <br>
        <div class="row">
          <div class="col-md-4 offset-md-2">
            <p class="pKiri">
              <b>Candi Prambanan</b> adalah salah satu kompleks candi yang terkenal di Indonesia dan ditetapkan UNESCO sebagai situs warisan dunia pada tahun 1991 selain Candi Borobudur. Tidak sama dengan Candi Borobudur yang merupakan candi Buddha, Candi Prambanan adalah sebuah kompleks candi Hindu. Meskipun demikian, Lokasi keduanya yang berada di Jawa Tengah juga membuktikan bahwa dahulu umat Buddha dan Hindu hidup berdampingan dengan rukun. Kedua candi besar ini juga menjadi bukti kemajuan peradaban manusia pada saat itu karena mampu membangun candi-candi dengan seni arsitektur yang luar biasa tanpa bantuan teknologi canggih.
              Kompleks Candi Prambanan juga disebut memiliki seribu buah candi karena adanya cerita rakyat Roro Jonggrang, namun sebenarnya hanya ada sekitar 240 candi di kompleks tempat wisata ini. Tempat wisata ini menghadap timur, tetapi terdapat empat pintu masuk di masing-masing mata angin. Gerbang utama candi ini adalah yang berada di sebelah timur.<br><br>
              Candi ini merupakan persembahan bagi Dewa Siwa yang dalam ajaran Hindu dikenal sebagai Dewa Penghancur. Menurut prasasti Siwaghra yang saat ini disimpan di Museum Nasional Indonesia, nama asli kompleks candi ini adalah Siwaghra yang berasal dari bahasa Sansekerta, yang mempunyai arti Rumah Siwa.
              Karena statusnya sebagai candi persembahan untuk Dewa Siwa, maka candi induk di kompleks ini adalah candi Dewa Siwa yang mempunyai tinggi 47 meter. Candi induk ini diapit dua candi yaitu candi Dewa Wishnu dan candi Dewa Brahma yang masing-masing setinggi 33 meter. Candi ketiga dewa ini disebut dengan Candi Trimurti. Di dalam Candi Trimurti terdapat arca masing-masing dewa. Di depan ketiga candi dewa terdapat tiga Candi Wahana yang mewakili kendaraan masing-masing dewa. Wahana Nandi untuk Dewa Siwa, Angsa untuk Dewa Wishnu dan Garuda untuk Dewa Brahma.<br><br>
              Selain candi-candi tersebut, masih ada banyak sekali candi lain di kompleks ini, yaitu Candi Kelir, Candi Apit, Candi Patok, dan Candi Perwara. Semua candi ini mengelilingi Candi Trimurti. Untuk Candi Perwara, peletakan candi dibagi menjadi empat lapisan atau zona yang disebut sebagai gambaran empat kasta manusia dalam ajaran Hindu. Lapisan terluar diperuntukkan untuk sembahyang kasta sudra, lapisan yang lebih dalam untuk waisya dan dua lapisan berikutnya masing-masing untuk ksatrya dan brahmana.Selain berbagai tipe candi tersebut, di tempat wisata ini juga terdapat relief yang menceritakan tentang dua kisah fenomenal dalam Hindu yaitu Ramayana dan Krishnayana. Relief ini berada di dinding bagian dalam dari pagar yang mengelilingi Candi Trimurti. Relief Ramayana menceritakan tentang perjuangan Rama yang dibantu oleh Hanoman untuk merebut Shinta, istrinya yang diculik oleh Rahwana. Untuk Krishnayana, relief ini menceritakan tentang perjalanan hidup Krishna sebagai awatara atau reinkarnasi dari Dewa Wishnu. Di kompleks Candi Prambanan terdapat sebuah museum berbentuk rumah joglo. Museum ini berisi koleksi benda-benda yang berhasil ditemukan di sekitar candi dahulu seperti arca dan bebatuan purbakala.</p>
              <h5 class="pKiri">Sejarah Singkat Candi Prambanan</h5>
              <p class="pKiri">Awal berdirinya kompleks Candi Prambanan memiliki dua kisah yaitu cerita rakyat mengenai Roro Jonggrang dan sejarah dibangunnya candi ini pada masa kerajaan Hindu di Jawa yang diperoleh dari hasil penelitian para ahli. Candi Prambanan dikenal juga sebagai Candi Roro Jonggrang. Cerita rakyat ini bermula dari Roro Jonggrang, putri kerajaan yang kecantikannya tak diragukan lagi. Banyak pemuda yang datang dengan maksud melamar sang putri, termasuk Bandung Bondowoso. Meskipun Bandung Bondowoso terkenal sakti dan kuat, namun Roro Jonggrang tidak menyukainya. Setelah berpikir lama, akhirnya Roro Jonggrang mengatakan bersedia menjadi istrinya, namun Bandung Bondowoso harus bisa membangun 1.000 candi dalam waktu semalam. Karena sangat yakin dengan kekuatan yang dimilikinya, pemuda itu menyanggupinya.
            </p>
          </div>
          <div class="col-md-4 ">
            <p class="pKanan">
                Dengan bantuan jin Bandung Bondowoso telah berhasil membangun 999 candi. Roro Jonggrang merasa takut, sehingga muncul ide untuk menumbuk padi yang akan membuat ayam berkokok. Ketika mendengar ayam telah berkokok sementara jumlah candi yang dibangun belum mencapai target, Bandung Bondowoso menjadi bingung dan marah saat tahu itu semua hanya tipuan Roro Jonggrang yang bertujuan untuk menggagalkan usahanya. Akhirnya, Bandung Bondowoso pun mengutuk sang putri menjadi sebuah candi untuk melengkapi jumlah candi yang dimintanya. Candi Dewa Siwa yang merupakan candi induk itulah yang dipercaya sebagai perwujudan Roro Jonggrang setelah dikutuk. Diluar cerita rakyat yang beredar, Candi Prambanan diperkirakan dibangun pada abad ke-9 atau pada masa Dinasti Sanjaya. Para peneliti mengatakan, tak lama setelah dibangun, Candi Prambanan tidak terurus dengan baik sehingga banyak kerusakan yang terjadi di bangunan ini.<br><br>
                Candi Prambanan ditemukan kembali pada tahun 1733 oleh CA Lons, seorang warga Belanda. Penemuan ini lebih awal jika dibandingkan dengan penemuan Candi Borobudur oleh Sir Thomas Stamford Raffles. Setelah ditemukan, kompleks mulai diperbaiki dan dilakukan berbagai upaya rekonstruksi. Saat ini, Candi ini menjadi kompleks candi Hindu termegah di Indonesia</p>
                <h4 class="pKanan">Hal-Hal lain Yang bisa kamu lakukan di Prambanan</h4>
                <p class="pKanan"><b>Mengenal seni sastra dan cerita Hindu</b><br>Sama seperti Candi Borobudur, di tempat wisata ini juga terdapat relief bercerita. Cara membaca relief ini pun sama, Anda harus masuk dari pintu sebelah timur kemudian berjalan mengitari Candi Trimurti searah putaran jarum jam. Relief di bagian dalam pagar ini memiliki dua kisah yaitu mengenai Ramayana dan Krishnayana. Tak perlu bingung jika kesulitan membaca relief tersebut. Anda bisa menggunakan jasa pemandu di kompleks Candi Prambanan. Anda juga dapat pergi ke museum yang berada di bagian utara kompleks candi untuk mendapatkan informasi seputar tempat wisata ini. Menariknya, untuk masuk ke museum ini Anda tidak perlu mengeluarkan biaya lagi karena sudah termasuk dalam harga tiket masuk kompleks tempat wisata.<br>
                <b>Hunting foto</b><br>Tempat wisata ini menjadi salah satu lokasi favorit untuk para pecinta fotografi. Anda bisa mengambil foto dari berbagai sudut dan Candi Prambanan akan selalu tampak cantik kokoh berdiri. Pada malam hari, tempat wisata ini semakin cantik dengan lampu-lampu yang menyala dan mengarah ke Candi Trimurti. Candi ketiga dewa tersebut tampak berdiri megah dengan cahaya keemasan.<br>
                <b>Berkeliling kompleks candi</b><br>Anda bisa berkeliling tempat wisata seluas 39,8 hektar ini dengan berjalan kaki. Pelataran kompleks ini ditanami banyak tumbuhan sehingga tampak seperti taman yang luas. Berjalan sambil mengamati ukiran pada setiap candi tentu akan membuat Anda lebih kagum pada hasil karya besar ini. Ukiran di candi-candi ini tampak mustahil dikerjakan oleh manusia pada saat teknologi belum berkembang di zaman dahulu.<br>
                <b>Berburu suvenir</b><br>Di kompleks tempat wisata ini telah dibangun banyak kios yang menjual suvenir khas Candi Prambanan seperti kaos, gantungan kunci, kalung,gelang sampai miniatur candi. Tak hanya suvenir Candi Prambanan, di sini Anda juga bisa menemukan miniatur dan kaos Candi Borobudur.<br><br>
                Selain itu Jam Buka Candi Prambanan yaitu setiap hari pukul 06:00 - 17.00 (kecuali pada malam hari ada suatu acara pertunjukan). Harga tiket masuk untuk orang Dewasa yaitu Rp 40.000 sedangkan untuk anak-anak yaitu Rp 20.000 dan juga kamu dapat mengunjungi Candi Prambanan dengan menggunakan Transportasi Transjogja 1A dari Jalan Malioboro dengan waktu tempuh sekitar satu jam.
            </p>
          </div>
        </div>
      </div>
    </section>


<!-- Gambar -->
<section id="pict" class="pict bg-light pb-4">
<div class="container">
  <div class="row mb-4 pt-4">
    <div class="col text-center">
      <h2>Kumpulan Foto dan Video di Candi Prambanan</h2>
    </div>
  </div>

<div class="row mb-4">
  <div class="col-md">
    <div class="card">
      <img src="../image/cp7.png" class="gambar img-thumbnail" alt="Candi Prambanan">
    </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img src="../image/cp6.jpg" class="gambar img-thumbnail" alt="Candi Prambanan">
      </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img src="../image/cp5.jpg" class="gambar img-thumbnail" alt="Candi Prambanan">
      </div>
    </div>
  </div>

    <div class="row mb-4">
      <div class="col-md">
        <div class="card">
          <img src="../image/cp8.jpg" class="gambar img-thumbnail" alt="Candi Prambanan">
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img src="../image/cpp.jpg" class="gambar img-thumbnail" alt="Candi Prambanan">
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img src="../image/cp2.jpg" class="gambar img-thumbnail" alt="Candi Prambanan">
        </div>
      </div>
    </div>

    <div class="row mb-4">
      <div class="col-md">
        <div class="card">
          <img src="../image/cp9.jpg" class="gambar img-thumbnail" alt="Candi Prambanan">
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img src="../image/cp4.jpg" class="gambar img-thumbnail" alt="Candi Prambanan">
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img src="../image/cp10.jpg" class="gambar img-thumbnail" alt="Candi Prambanan">
        </div>
      </div>
    </div>

<!-- Video -->
    <div class="row mb-4">
      <div class="col-md">
        <div class="card">
          <iframe src="https://www.youtube.com/embed/sDNHiBHMG8s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="gambar img-thumbnail" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <iframe src="https://www.youtube.com/embed/dPKv7Wy9oyU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="gambar img-thumbnail" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <iframe src="https://www.youtube.com/embed/MhifUwbQj6o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="gambar img-thumbnail" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
    
    <center>
        <div class="comment-area">
        <div class="row-comment justify-content-lg-center">
            <div class="col-lg-8">
                <div class="col-lg-6 text-lg-center">
                    <div class="fasilitas-title">
                        <h3>Tinggalkan Jejak</h3>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-comment justify-content-lg-center">
            <div class="col-lg-6">
                <div class="comment-form-container">
                    <?php 
                        $isEmpty = $_SESSION['isEmpty']; 
                        
                        if($isEmpty == 'null'){
                            $forms = <<<form
                            <form id="frm-comment">
                                <div class="input-row">
                                    <input type="hidden" name="comment_id" id="commentId"
                                        placeholder="Name" /> 
                                        <input type="hidden" name="db_name" id="dbName"
                                        placeholder="Name" />
                                        <input type="hidden" name="isEmpty" id="isEmpty" value="$isEmpty"
                                        placeholder="Name" />
                                        <input class="input-field"
                                        type="text" name="name" id="name" placeholder="Nama" required/>
                                </div>
                                <div class="input-row">
                                    <textarea class="input-field" type="text" name="comment"
                                        id="comment" placeholder="Masukkan komentar di sini!" rows="5" style="resize: none;" required></textarea>
                                </div>
                                <div class="btn_kirim">
                                    <input type="button" class="btn-submit" id="submitButton"
                                        value="Kirim"/><div id="comment-message" required>Komentar berhasil ditambahkan!</div>
                                </div>
                            </form>
                            form;
                            echo $forms;
                        }else{
                            $image_profile = $_SESSION['user_image'];
                            $first_name = $_SESSION['user_first_name'];
                            $last_name = $_SESSION['user_last_name'];
                            $email =$_SESSION['user_email_address'];
                            $forms1 = <<<form1
                            <form id="frm-comment">
                                <div class="input-row">
                                    <input type="hidden" name="comment_id" id="commentId"
                                        placeholder="Name" /> 
                                        <input type="hidden" name="db_name" id="dbName"
                                        placeholder="Name" />
                                        <input type="hidden" name="name" id="name" value="$first_name $last_name"
                                        placeholder="Name" />
                                        <input type="hidden" name="email" id="email" value="$email"
                                        placeholder="Name" />
                                        <input type="hidden" name="profil_imgae" id="profil_image" value="$image_profile"
                                        placeholder="Name" />
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img width="100px" src="$image_profile" alt="" srcset="">
                                            </div>
                                            <div class="col-sm-9 text-left">
                                                <h4 id="name" name="name">$first_name $last_name</h4>
                                                <h6 id="email" name="enail">$email</h6>
                                            </div>
                                        </div>
                                </div>
                                <div class="input-row">
                                    <textarea class="input-field" type="text" name="comment"
                                        id="comment" placeholder="Masukkan komentar di sini!" rows="5" style="resize: none;" required></textarea>
                                </div>
                                <div class="btn_kirim">
                                    <input type="button" class="btn-submit" id="submitButton"
                                        value="Kirim"/><div id="comment-message" required>Komentar berhasil ditambahkan!</div>
                                </div>
                            </form>
                            form1;
                            echo $forms1;
                        }
                    ?>
                </div>
            </div>
        </div>
        <div>
            <div class="row-comment justify-content-lg-center">
                <div class="col-lg-6 text-left">
                    <div id="output"></div>
                        <script>
                            function postReply(commentId) {
                                $('#commentId').val(commentId);
                                if($('#isEmpty').val() == 'null'){
                                    $("#name").focus();
                                }else{
                                    $("#comment").focus();
                                }
                            }

                            $("#submitButton").click(function () {
                                // console.log($('#name').val());
                                // console.log($('#comment').val());
                                if($('#name').val() != "" && $('#comment').val() != ""){
                                    $("#dbName").val("tbl_comment6");
                                    // console.log("ada");
                                    $("#comment-message").css('display', 'none');
                                    var str = $("#frm-comment").serialize();
    
                                    $.ajax({
                                        url: "../php/comment-add.php",
                                        data: str,
                                        type: 'post',
                                        success: function (response)
                                        {
                                            var result = eval('(' + response + ')');
                                            if (response)
                                            {
                                                $("#comment-message").css('display', 'inline-block');
                                                $("#comment").val("");
                                                $("#commentId").val("");
                                                listComment();
                                            } else
                                            {
                                                alert("Failed to add comments !");
                                                return false;
                                            }
                                        }
                                    });
                                    
                                    setTimeout(function(){
                                        $("#comment-message").css('display', 'none');
                                    }, 3000);
                                }else{
                                    // console.log("k0song");
                                    alert("Nama dan Komentar tidak boleh kosong");
                                }
                            });
                            
                            $(document).ready(function () {
                                    listComment();
                            });

                            function listComment() {
                                $.post("../php/comment-list.php", {"db_name": "tbl_comment6"},
                                        function (data) {
                                            var data = JSON.parse(data);
                                            
                                            var comments = "";
                                            var replies = "";
                                            var item = "";
                                            var parent = -1;
                                            var admin_id = "";
                                            var email = "";
                                            var image_profile = "";
                                            var results = new Array();

                                            var list = $("<ul class='outer-comment'>");
                                            var item = $("<li>").html(comments);

                                            for (var i = 0; (i < data.length); i++)
                                            {
                                                var commentId = data[i]['comment_id'];
                                                parent = data[i]['parent_comment_id'];
                                                admin_id = data[i]['admin_id'];

                                                if (parent == "0")
                                                {
                                                    if(admin_id == "Y85"){
                                                        comments = '<div class="comment-row">'+
                                                            '<div class="row">'+
                                                                '<div class="col-sm-2 m-auto image-profile-comment">'+
                                                                    '<img class="rounded-circle mx-auto d-block image-profile" src="'+ data[i]["image_profile"] +'" alt="" srcset=""></div>'+
                                                                '<div class="col-sm-10">'+
                                                                    '<div class="comment-info">'+
                                                                        '<span class="comment-row-label">from</span> <span class="posted-by">' + data[i]['comment_sender_name'] + '</span>'+
                                                                        '<span class="comment-row-label"> at</span> <span class="posted-at">' + data[i]['date'] + '</span>'+
                                                                        '<span class="_admin">Admin</span>'+
                                                                    '</div>'+
                                                                    '<div class="comment-text">' + data[i]['comment'] + '</div>'+
                                                                    '<div><a class="btn-reply" onClick="postReply(' + commentId + ')">Reply</a></div>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>';
                                                    }else{
                                                        comments = '<div class="comment-row">'+
                                                            '<div class="row">'+
                                                                '<div class="col-sm-2 m-auto image-profile-comment">'+
                                                                    '<img class="rounded-circle mx-auto d-block image-profile" src="'+ data[i]["image_profile"] +'" alt="" srcset=""></div>'+
                                                                '<div class="col-sm-10">'+
                                                                    '<div class="comment-info">'+
                                                                        '<span class="comment-row-label">from</span> <span class="posted-by">' + data[i]['comment_sender_name'] + '</span>'+
                                                                        '<span class="comment-row-label"> at</span> <span class="posted-at">' + data[i]['date'] + '</span>'+
                                                                    '</div>'+
                                                                    '<div class="comment-text">' + data[i]['comment'] + '</div>'+
                                                                    '<div><a class="btn-reply" onClick="postReply(' + commentId + ')">Reply</a></div>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>';
                                                    }

                                                    var item = $("<li>").html(comments);
                                                    list.append(item);
                                                    var reply_list = $('<ul>');
                                                    item.append(reply_list);
                                                    listReplies(commentId, data, reply_list);
                                                }
                                            }
                                            $("#output").html(list);
                                        });
                            }

                            function listReplies(commentId, data, list) {
                                for (var i = 0; (i < data.length); i++)
                                {
                                    if (commentId == data[i].parent_comment_id)
                                    {
                                        if(data[i].admin_id == "Y85"){
                                            var comments = '<div class="comment-row">'+
                                                            '<div class="row">'+
                                                                '<div class="col-sm-2 m-auto image-profile-comment">'+
                                                                    '<img class="rounded-circle mx-auto d-block image-profile" src="'+ data[i]["image_profile"] +'" alt="" srcset=""></div>'+
                                                                '<div class="col-sm-10">'+
                                                                    '<div class="comment-info">'+
                                                                        '<span class="comment-row-label">from</span> <span class="posted-by">' + data[i]['comment_sender_name'] + '</span>'+
                                                                        '<span class="comment-row-label"> at</span> <span class="posted-at">' + data[i]['date'] + '</span>'+
                                                                        '<span class="_admin">Admin</span>'+
                                                                    '</div>'+
                                                                    '<div class="comment-text">' + data[i]['comment'] + '</div>'+
                                                                    '<div><a class="btn-reply" onClick="postReply(' + commentId + ')">Reply</a></div>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>';
                                        }else{
                                            var comments = '<div class="comment-row">'+
                                                            '<div class="row">'+
                                                                '<div class="col-sm-2 m-auto image-profile-comment">'+
                                                                    '<img class="rounded-circle mx-auto d-block image-profile" src="'+ data[i]["image_profile"] +'" alt="" srcset=""></div>'+
                                                                '<div class="col-sm-10">'+
                                                                    '<div class="comment-info">'+
                                                                        '<span class="comment-row-label">from</span> <span class="posted-by">' + data[i]['comment_sender_name'] + '</span>'+
                                                                        '<span class="comment-row-label"> at</span> <span class="posted-at">' + data[i]['date'] + '</span>'+
                                                                    '</div>'+
                                                                    '<div class="comment-text">' + data[i]['comment'] + '</div>'+
                                                                    '<div><a class="btn-reply" onClick="postReply(' + commentId + ')">Reply</a></div>'+
                                                                '</div>'+
                                                            '</div>'+
                                                        '</div>';
                                        }
                                        var item = $("<li>").html(comments);
                                        var reply_list = $('<ul>');
                                        list.append(item);
                                        item.append(reply_list);
                                        listReplies(data[i].comment_id, data, reply_list);
                                    }
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </center>
</body>

</html>