<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style_hutan_pengger.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/style.js"></script>
    
    <script src="../js/style_hutan_pengger.js"></script>  

    <title>Hutan Pinus Pengger</title>

    <style>
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
        
        .comment-area{
            background: #fff !important;
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
    
    <div class="cover judul" style="background-image: url(../image/lengkung.jpg);">
			<h1 align="center" style="padding-top: 80px">Hutan Pinus Pengger</h1>
		<div class="judulket">
			<p>Alamat : Sendangsari, Desa Terong, Kecamatan Dlingo, Kabupaten Bantul, Daerah Istimewa Yogyakarta.</p>
			<p>Buka : 06.00 – 00.00 WIB</p>
		</div>	
	</div>
	<div class="container">
    <div class="row">
      <div class="col text-center">
       <h1>Hutan Pinus Pengger</h1>
          <p style="text-align: justify;"><strong>Hutan Pinus Pengger</strong> merupakan salah satu wisata alam yang berlokasi di Sendangsari, Desa Terong, Kecamatan Dlingo, Kabupaten Bantul, Daerah Istimewa Yogyakarta. Walaupun masih terdengar asing, dikalangan penyuka jalan-jalan objek wisata Hutan Pinus Pengger terbilang cukup populer. Tempat ini masih dirasa asing karena baru dibuka secara resmi pada tanggal 7 April 2016. Hutan Pinus Pengger mudah dijangkau karena terletak dipinggir jalan Pathuk Dlingo Km 4,5. Ketika pagi sampai siang hari hutan Pinus Pengger ini juga ramai dikunjungi juga lho. Mulai dari kaum muda mudi, rombongan tour hingga keluarga. Ya memang hutan pinus ini mempunyai daya tarik sendiri bagi wisatawan. Dimana wisata ini berada di bukit dan dikawasan ini tumbuh rimbun pohon pinus. Alhasil udara dan suasana asri pun masih melekat, cocok untuk bersantai dan berkumpul.Untuk pemandangan alam di Hutan Pinus Pengger ini cukup bagus lho. Lanscape bukit, alam dan hiruk pikuk kota Jogja akan terpapang didepan mata.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md">
        <h3>Parkir Kendaraan</h3>
          <ul>
            <li>Motor : Rp. 2.000/kendaraan</li>
            <li>Mobil : Rp. 5.000/kendaraan</li>
            <li>Bus   : Rp. 20.000/kendaraan</li>
          </ul>
        <h3>Bea Masuk</h3>
          <ul>
            <li>Kawasan Hutan : Rp. 2.500/orang</li>
            <li>Panggung Sekolah Hutan : Rp. 2.500/orang</li>
            <li>Studio Alam : Rp. 2.000/orang</li>
            <li>Jelajah Alam : Rp. 10.000/orang</li>
            <li>Sepeda Hutan : Rp. 10.000/orang</li>
            <li>Panjat Tebing : Rp. 15.000/orang</li>
          </ul>
        <h3>Sewa Panggung Sekolah Hutan</h3>
          <ul>      
            <li>Komersial : Rp. 3.000.000/kegiatan</li>
            <li>Non Komersial : Rp. 1.000.000/kegiatan</li>
          </ul>
        <h3>Sewa</h3>
          <ul>
            <li>Tempat : Rp. 200.000/kegiatan</li>
            <li>Hammock : Rp. 10.000/orang</li>
            <li>Flying Fox : Rp. 15.000/orang</li>
            <li>Aula : Rp. 250.000/4jam</li>
            <li>Camping Ground : Rp. 15.000/orang/hari</li>
            <li>Warung : Rp. 100.000/bulan</li>
          </ul>
        <h3>Dokumentasi</h3>
          <ul>
            <li>Foto Session dan Prewedding : Rp. 200.000/kegiatan</li>
            <li>Video Clip : Rp. 250.000/kegiatan</li>
            <li>Film Komersial : Rp. 1.000.000/hari</li>
          </ul>
      </div>
    </div>
      <div class="col-md">
        <div class="card" style="width: 20rem;">
          <img src="img\map.jpg" class="card-img-top" alt="Image Not Found">
          <div class="card-body">
            <h5 class="card-title">Peta Hutan Pinus Pengger</h5>
            <a href="https://goo.gl/maps/snjVUumY952V8BX7A" class="btn btn-primary">VISIT THIS PLACE</a>
          </div>
        </div>
      </div>
	<section class="pict" id="pict">
	<div class="container960" align="center">
		<div class="gambar item1 gambardiam">
			<img src="../image/icon.jpg" alt="Image Not Found" style="width:100%">
			<div class="containergambar">
				<p><strong>Icon Hutan Pinus Pengger</strong> Terletak sebelum pintu masuk wisata agar terlihat jelas oleh pengunjung. Menjadi salah satu spot yang berada diluar tempat wisata. Banyak pengunjung yang berfoto disini karena Icon Hutan Pinus Pengger.</p>
			</div>
		</div>
		<div class="gambar item2 gambardiam">
			<img src="../image/spot.jpg" alt="Image Not Found" style="width:100%">
			<div class="containergambar gambarhover">
				<p><strong>Spot foto Pinus Pengger</strong> yang tertera tulisan agar tahu dimana tempat wisata yang dikunjungi. Bagus untuk berfoto 1 orang bahkan cocok untuk banyak orang. Alangkah ebih bagus kalau foto pada saat malam hari karena backgroudnya langsung pemandangan rumah warga kota Bantul. Bentuknya seperti gardu pandang, fungsinya sebagai spot foto dan melihat pemandangan dari atas bukit.</p>
			</div>
		</div>
		<div class="gambar item3 gambardiam">
			<img src="../image/tangan.jpg" alt="Image Not Found" style="width:100%">
			<div class="containergambar">
				<p><strong>Tangan Raksasa</strong> Bentuknya seperti saat tangan Naruto akan mengeluarkan rasinggan. Terbuat dari susunan kayu yang dibentuk sedemikian rupa, spot satu ini terlihat indah sekali. Letaknya berada di ujung tebing. Bila mengambil dengan angle yang tepat, hosil foto akan menangkap background tangan raksasa itu sendiri juga pemandangan dari bawah sana. Para wisatawan biasanya berfoto duduk di atas tapak tangan itu. Berlakon seolah sedang bertapa. </p>
			</div>
		</div>
		<div class="gambar item4 gambardiam">
			<img src="../image/bunder.jpeg" alt="Image Not Found" style="width:100%">
			<div class="containergambar">
				<p><strong>Lubang Raksasa</strong> Paling menarik saat Anda diam di lubang tersebut, lalu teman Anda mengambil foto dari sisi lain. Lubang raksasa itu juga berhadapan langsung dengan pemandangan rumah warga kota Bantul. Bentuknya seperti sangkar burung, tapi bukan sangkar burung. Seperti lubang, tapi lubangnya tidak menjorok ke bawah. Tiduran di lubang itu pun terlihat nyaman.</p>
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
                                    $("#dbName").val("tbl_comment9");
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
                                $.post("../php/comment-list.php", {"db_name": "tbl_comment9"},
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