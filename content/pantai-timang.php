<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style_pantai_timang.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/style.js"></script>
    
    <script src="../js/style_pantai_timang.js"></script>  

    <title>Pantai Timang</title>

    <style>
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
    
    <!-- navbar -->
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
    <!-- navbar -->
    
    <div class="jumbotron jumbotron-fluid" style="background-image: url(../image/pt2.jpg);">
  <div class="container text-center">
    <h1 class="display-4">Pantai Timang</h1>
    <hr class="my-4">
    <p class="lead">Daerah Istimewa Yogyakarta</p>
  </div>
</div>

<!-- Penjelasan Candi Prambanan -->
    <section class="about">
      <div class="isi">
        <br>
        <div class="row">
          <div class="col-md-4 offset-md-2">
            <p class="pKiri">
              <b>Menyeberangi Karang Berombak Besar di Pantai Timang Gunung Kidul</b> – Pantai Timang merupakan salah satu pantai di kabupaten gunung kidul yang terkenal akan pemandangan pasir putih yang alami serta kokohnya batu batuan besar di sekitar pantai. Tumbuhan pandan berderet yang tumbuh di sekitar pantai dan deburan ombak pantai menambah daya tarik tersendiri panorama pantai timang. Jika wisatawan berkunjung ke pantai ini, wisatawan bisa sekalian berkunjung ke pantai pantai lain yang jaraknya berdekatan dengan pantai timang seperti pantai nglambor, pantai jogan, pantai siung, pantai seruni, pantai pok tunggal, dan pantai ngetun. Berwisata alam ke pantai timang akan semakin seru jika wisatawan bergabung dengan paket wisata yogya.<br><br>
              Pantai timang gunung kidul terbagi menjadi dua wilayah yang berbeda. Wilayah pertama merupakan pantai dengan pasir putih dan bersih yang berada di sebelah timur, sedangkan bagian kedua merupakan perbukitan batu batuan terjal yang berbatasan langsung dengan laut yang berada di sebelah barat. Batu batu besar atau pulau tersebut dikenal dengan nama batu panjang atau pulau panjang dan pulau timang. Panorama pantai nampak semakin indah dengan adanya batu batuan megah yang berdiri kokoh di pinggiran pantai.<br><br>
              Pulau timang gunung kidul tidak seperti pulau biasa yang berupa lahan pasir yang luas, pulau ini berupa bongkahan batu karang yang besar dengan dinding tebing yang curam. Untuk mencapai pulau timang wisatawan harus menggunakan gandola kayu atau kereta gantung menyeberangi ombak besar yang memecah batuan karang. Gandola kayu ini ditarik dengan tali tambang yang kokoh dengan menggunakan tenaga manusia. Gandola kayu ini ditarik mulai dari bibir pantai timang menuju pulau timang dengan jarak luncur sekitar 50 – 100 meter. Diperlukan nyali yang besar untuk  menyeberang kesana, karena sepanjang jarak itu wisatawan akan meluncur sendirian dengan ditemani pemandangan ombak pantai yang besar.<br><br>
              Fasilitas gandola kayu merupakan hasil swadaya dari masyarakat sekitar yang awal mulanya banyak digunakan oleh warga untuk menyeberang mencari lobster ke pulau timang. Namun semakin dengan banyaknya wisatawan yang datang dan mencoba untuk menyeberang menggunakan gandola kayu ini, masyarakat akhirnya mengkomersilkannya dengan menarik biaya sebesar Rp. 200.000/orang. Harga tersebut lumayan mahal karena gandola ditarik secara manual dan butuh tenaga beberapa orang untuk menarik gandola tersebut.<br><br>
              Pulau timang kaya akan hasil laut yang sangat melimpah, salah satu hasil lautnya yang sangat terkenal adalah lobster. Masyarakat rela besusah payah menyeberang ke pulau ini untuk mencari lobster dan hasil laut lainnya. Lobster dari pulau timang ini mempunyai nilai ekonomi yang sangat tinggi dan merupakan salah satu lahan mata pencaharian warga sekitar pulau timang.<br><br>
              <b>Rute menuju Pantai Timang</b><br>
              Jika anda belum pernah sama sekali berwisata ke Pantai –pantai yang ada di daerah Gunung Kidul, anda akan merasa kesulitan untuk mencari rute yang menuju Pantai Timang ini. Namun anda bisa menggunakan rute yang dijelaskan dengan lengkap di bawah ini sehingga perjalanan anda semakin mudah dan tidak tersesat.
              Rute dari Kota Yogyakarta ke lokasi berjarak sekitar 50 kilometer dan bisa di tempuh melalui jalur yang ke arah Wonosari. Kemudian dari daerah Wonosari anda melalui jalur yang ke arah Pantai Baron. Sebelum sampai di Pantai Baron ada pertigaan ambil kiri yang ke arah Pantai Siung. Sampai di Pasar Dakbong belok ke Pantai Timang, anda bisa melihat petunjuk jalan yang menuju Pantai Timang.<br><br>
              Jalanan yang menuju lokasi masih bagus sampai masuk ke Desa sekitar Pantai Timang. Setelah beberapa ratus meter dari jalan desa, jalur yang akan anda tempuh penuh dengan bebatuan kapur mulai dari yang ukurannya kecil sampai ukuran besar. Oleh karena itu, anda disarankan untuk tetap berhati-hati. Setelah itu baru ada jalur yang sudah di cor.<br><br>
            </p>
          </div>
          <div class="col-md-4 ">
            <p class="pKanan">
                Pemandangan di sekitar perjalanan penuh dengan nuansa hijau, yang dapat membuat anda lupa bahwa sedang melewati jalan bebatuan. Tetap waspada terhadap jalan berbatu agar selamat samapi di tujuan anda yaitu pantai Timang. Setelah sampai di permukiman penduduk, anda akan segera bertemu pangkalan ojek yang menawarkan jasanya dari pintu masuk sampai ke parkiran Pantai Timang.
              </p>
                <h4 class="pKanan">Objek wisata yang akan kamu temui di Pantai Timang</h4>
                <p class="pKanan"><b>Gondola</b><br>Jembatan Pantai Timang Daya tarik wisata di pantai ini adalah dengan keberadaan wahana Gondola yang dapat memacu adrenalin para pengunjung yang ingn mencoba menaikinya, bagaimana tidak, gondola tradisional yang terbuat dari kayu dan di gerakan dengan tenaga manusia.
                Kemudian kita naiki untuk menyebrang laut yang di bawahnya ada ombak besar dan angin yang kencang membuat setiap pengunjung yang menaiki wahana ini berteriak. Entah bagaimana, malah pengunjung yang datang kesini dengan alasan merasa penasaran untuk menaiki gondola dan jembatan gantung, serta ingin merasakan sensasi berada di bukit karang dengan deburan ombak yang besar dan anginnya.<br><br>
                Namun kegunaan gondola bukan hanya untuk para pengunjung saja, warga sekitar / nelayan yang ingin mencari udang ke pulau itupun menggunakan jasa gondola ini. Karena angin serta ombak yang terlalu besar, tidak memungkinkan para nelayan / warga menyebranginya dengan perahu tradisional.<br><br>
                Gondola di sini bukanlah gondola modern, tetapi gondola tradisional yang dibuat dari kayu yang diikat dengan tali tambang. Alasan menggunakan tali tambang ini karena tali tambang di anggap lebih kuat jika terkena air laut dibandingkan dengan penggunaan sling yang terbuat dari besi atau baja.<br><br>
                Tiket naik gondola ini sebesar Rp. 200.000,- untuk bolak balik dari pantai ke bukit karang dan dari bukit karang ke pantai, awalnyauntuk menaiki gondola ini tidak dikenakan biaya, karena antusiasme pengunjung yang ingin mencobanya dan ingin berada di bukit karang, membuat warga menarifkan harga untuk perjalanan bolak balik.<br><br>
                <b>Bukit Karang</b><br>byek wisata selanjutnya yaitu Bukit Karang. Ikon di Pantai ini adalah dengan keberadaan sebuah bukit karang yang besar di pulau kecil yang letaknya tidak jauh dari pantai, di pulau ini juga sudah tersedia beberapa spot untuk berfoto. Pulau ini juga digunakan oleh para nelayan untuk mencari udang lobster.<br><br>
                <b>Jembatan Gantung</b><br>Jembatan Pantai Timang Selain bukit karanga, ada juga sebuah jembatan gantung. Saat ini sudah di bangun fasilitas jembatan gantung yang digunakan sebagai alternatif para pengunjung untuk menyebrangi laut menuju Bukit Karang. Tiket naik jembatan gantung sebesar Rp. 100.000,- untuk bolak balik dari pantai ke bukit karang dan dari bukit karang ke pantai lagi.<br><br>
                <b>Makanan Olahan Laut</b><br>Di pantai ini juga menyediakan olahan lobster hasil tangkapan nelayan di Bukit Karang. Jika belum ada perubahan, harga per kilogramnya sekitar Rp.400.000,-. Liburan semakin lengkap dengan berwisata kuiner di pantai dengan pemandangan khas ini. Karena fasilitas di pantai ini masih terbatas, disarankan agar anda mempersiapkan dan membawa perlengkapan keperluan anda. Karena masih sedikit yang berjualan makanan dan minuman, jangan lupa untuk membeli makanan sebelum sampai ke lokasi. Semoga liburan anda menyenangkan.
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
      <h2>Kumpulan Foto dan Video di Pantai Timang</h2>
    </div>
  </div>

<div class="row mb-4">
  <div class="col-md">
    <div class="card">
      <img src="../image/pt2.jpg" class="gambar img-thumbnail" alt="Pantai Timang">
    </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img src="../image/pt3.jpg" class="gambar img-thumbnail" alt="Pantai Timang">
      </div>
    </div>
    <div class="col-md">
      <div class="card">
        <img src="../image/pt5.jpg" class="gambar img-thumbnail" alt="Pantai Timang">
      </div>
    </div>
  </div>

    <div class="row mb-4">
      <div class="col-md">
        <div class="card">
          <img src="../image/pt4.jpg" class="gambar img-thumbnail" alt="Pantai Timang">
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img src="../image/pt6.jpg" class="gambar img-thumbnail" alt="Pantai Timang">
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <img src="../image/pt7.jpg" class="gambar img-thumbnail" alt="Pantai Timang">
        </div>
      </div>
    </div>

<!-- video -->
    <div class="row mb-4">
      <div class="col-md">
        <div class="card">
          <iframe src="https://www.youtube.com/embed/6I0P7ks5TNA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="gambar img-thumbnail" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <iframe src="https://www.youtube.com/embed/ffWYj4c_xUg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="gambar img-thumbnail" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md">
        <div class="card">
          <iframe src="https://www.youtube.com/embed/2nWcHcdPJm8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="gambar img-thumbnail" allowfullscreen></iframe>
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
                                    $("#dbName").val("tbl_comment7");
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
                                $.post("../php/comment-list.php", {"db_name": "tbl_comment7"},
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