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
    
    <script src="../js/script_luweng.js"></script>  

    <title>Luweng Sampang</title>

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
    
    <div class="jumbotron text-left" style="background-image: url('../image/jumbotron - Copy.jpg');">
      <h1>Luweng <br>Sampang.</h1>
      <p>Jl. Juminahan, Sampang, Mongkrong, Sampang, Gedang Sari, Kabupaten Gunung Kidul,<br> Daerah Istimewa Yogyakarta 55863</p>
      <hr>
    </div>


    <section class="about">
      <div class="isi">
        <div class="peta text-center">
          <img src="../image/jogja.jpg" class="rounded" alt="Peta Yogyakarta">
        </div>
        <br>
        <div class="row">
          <div class="col-md-4 offset-md-2">
            <p class="pKiri">
              <strong>Air Terjun Luweng Sampang</strong> adalah sebuah air terjun yang berada di Provinsi Yogyakarta tepatnya di Desa Sampang, Kecamatan Gedangsari, Gunungkidul, Yogyakarta. Air terjun ini juga sering disebut Grand Canyon nya Indonesia. Karena memiliki karakteristik batuan yang sama dengan Grand Canyon yang asli. Batuannya memiliki tekstur bergaris-garis. Filosofi dari nama Luweng Sampang adalah Luweng artinya lubang dalam bahasa jawa dan sampang adalah nama lokasinya yaitu berada di desa sampang. 
            </p>
          </div>
          <div class="col-md-4 ">
            <p class="pKanan">
              Kita bisa menikmati view air terjun ini baik dari atas maupun bawah. Karena kikisan air ini sangat keren mengikis bebatuan sehingga berbentuk garis-garis. Batuannya juga tidak seperti batuan biasa yang sering kita temukan.
             Jika kita ingin mengunjungi Air terjun ini. Rutenya sangat mudah sekali. Jika kita dari kota jogja mungkin sekitar 1 jam-an bahkan bisa lebih jika kita menggunakan kendaraan roda 4. Di tempat ini pengunjung hanya membayar uang parkir sekitar Rp.2000 sampai Rp.5000 saja. tidak dikenakan biaya masuk air terjun ini. 
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="pict" id="pict">
      <hr>
      <div class="isi">
        <div class="row">
          <div class="col-md-5 offset-md-1">
          <img src="../image/1.jpg" class="gambar img-thumbnail"> 
          <figure class="source" align=botton>source : <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fgarasijogja.com%2Fair-terjun-kedung-kandang-gunung-kidul%2F&psig=AOvVaw2EOFlrN_qEdTDKKbnSbs8u&ust=1592476753408000&source=images&cd=vfe&ved=0CAIQjRxqGAoTCNDIyabUiOoCFQAAAAAdAAAAABCPAQ" style="color:black">https://garasijogja.com</a></figure>           
          </div> 
          <div class="col-md-5">
          <img src="../image/2.jpg" class="gambar img-thumbnail">
          <figure class="source" align=botton>source : <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fantarejatour.com%2Fgunung-kidul%2Fair-terjun-kedung-kandang&psig=AOvVaw2EOFlrN_qEdTDKKbnSbs8u&ust=1592476753408000&source=images&cd=vfe&ved=0CAIQjRxqGAoTCNDIyabUiOoCFQAAAAAdAAAAABCJAQ" style="color:black">https://antarejatour.com</a></figure>       
          </div>
          <div class="col-md-5 offset-md-1">
          <img src="../image/3.jpg" class="gambar img-thumbnail"> 
          <figure class="source" align=botton>source : <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Ftravel.kompas.com%2Fread%2F2019%2F04%2F17%2F150000127%2F6-tips-berkunjung-ke-air-terjun-kedung-kandang-nglanggeran%3Fpage%3Dall&psig=AOvVaw2EOFlrN_qEdTDKKbnSbs8u&ust=1592476753408000&source=images&cd=vfe&ved=0CAIQjRxqGAoTCNDIyabUiOoCFQAAAAAdAAAAABDpAQ" style="color:black">https://travel.kompas.com</a></figure>           
          </div> 
          <div class="col-md-5">
          <img src="../image/4.jpg" class="gambar img-thumbnail">
          <figure class="source" align=botton>source : <a href="https://www.google.com/url?sa=i&url=https%3A%2F%2Feksotisjogja.com%2Fair-terjun-kedung-kandang-gunung-kidul%2F&psig=AOvVaw2EOFlrN_qEdTDKKbnSbs8u&ust=1592476753408000&source=images&cd=vfe&ved=0CAIQjRxqGAoTCNDIyabUiOoCFQAAAAAdAAAAABDkAQ" style="color:black">https://eksotisjogja.com</a></figure>       
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
                                    $("#dbName").val("tbl_comment3");
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
                                $.post("../php/comment-list.php", {"db_name": "tbl_comment3"},
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