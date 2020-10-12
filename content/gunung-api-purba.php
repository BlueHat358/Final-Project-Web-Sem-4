<?php
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style_luweng.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/style.js"></script>
    
    <script src="../js/script_candi_boko.js"></script>  

    <title>Gunung Api Purba</title>

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
    
    <div class="jumbotron text-left" style="background-image: url(../image/gunung2.jpg);">
      <h1>Gunung<br>Api Purba</h1>
      <p> Nglanggeran Kulon, Nglanggeran, Kec. Patuk, 
      <br>Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55862</p>
      <hr>
    </div>


    <section class="about">
        <br>
          <div class="row">
            <div class="col-md-4 offset-md-2">
              <p class="pKiri">
                <strong>Gunung Api Purba Nglanggeran</strong> adalah sebutan yang biasa diberikan pada fosil gunung berapi yang sudah tidak aktif lagi atau telah mati.
                Dulunya, gunung api purba juga aktif seperti gunung berapi yang kita kenal masih aktif saat ini. Namun karena suatu proses tertentu, gunung berapi dapat mati. Saat gunung berapi mati, magma yang ada di diatrema atau saluran magma utama kehilangan daya dorong yang dapat melontarkan magma ke permukaan. 
            </div>
            <div class="col-md-4 offset-md-1">
              <img src="../image/gunung1.jpg" class="gambar img-thumbnail" >
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 offset-md-2">
              <img src="../image/gunung2.jpg" class="gambar img-thumbnail">
            </div>
            <div class="col-md-4 offset-md-1">
              <p class="pKanan">
               <br> Menurut penelitian yang pernah dilakukan, gunung api purba ini aktif sekitar 60 juta tahun yang lalu dan ternyata dulunya gunung api ini berasal dari gunung api yang ada di dasar laut. Oleh karena proses tertentu, gunung api tersebut terangkat dan kemudian menjadi daratan. Prosesnya tentu terjadi sudah jutaan tahun yang lalu bentuk Gunung Api Purba Nglanggeran sekarang seperti bebatuan besar. Tingginya sekitar 700 mdpl (meter di atas permukaan laut). Namun kini, Gunung Api Purba Nglanggeran sudah dijadikan tempat pendakian dan sudah banyak juga pengunjung yang mendaki sampai ke puncak ketika sedang berwisata.
              </p>
          </div>
          <div class="col-md-4 offset-md-5">
            <p class="pKiri">
              <br><strong>Harga tiket masuk Gunung Api Purba Nglanggeran :</strong>
              <br> <strong>Untuk Domestik</strong>
              <br> Tiket Gunung Api Purba Siang Rp 15.000
              <br> Tiket Gunung Api Purba Malam Rp. 20.000 
              <br><br> <strong> Untuk Wisatawan Manca </strong>
              <br> Tiket Gunung Api Purba Siang/Malam Rp. 30.000
              <br><br> <strong> Biaya Parkir Gunung Api Purba Nglanggeran </strong>
              <br> Motor Rp. 2.000 per unit
              <br> Mobil Rp. 5.000 per unit
            </p>
  
          </div>
        </div>
      </div>
    </section>

    <section class="about">
      <div class="isi">
        <div class="peta text-center">
          <h4>Lokasi Gunung Api Purba :<br></h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15809.994759335987!2d110.5379165!3d-7.8427585!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4ad51e14b7baaf61!2sAncient%20Volcano%20Nglanggeran!5e0!3m2!1sen!2sid!4v1592990669338!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>       
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
                                    $("#dbName").val("tbl_comment4");
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
                                $.post("../php/comment-list.php", {"db_name": "tbl_comment4"},
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