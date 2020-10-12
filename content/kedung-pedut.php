<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/style.js"></script>
    <title>Kedung Pedut</title>

    <style>
        .comment-area{
            /*width: 100%;*/
            padding-top: 1rem;
            background-color: #f7bbeb;
        }

        .comment-form-container {
            border: #e0dfdf 2px solid;
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
                                    <a class="login-item" href="../php/logout.php"><img width="25px" height="25px" style="margin-top: 3px!important;" src="../image/logout.png" alt="Log Out" srcset=""></a>
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
    
    	<div class="header-bottom" style="background-image: url(../image/kedung-pedut5.png);">
    		<div class="content-header">
    			<div class="quote">
                    <h2 class="quote-title">Kedung Pedut</h2>
                    <h4 class="quote-title">Girimulyo, Kulon Progo</h4>
    			</div>
    		</div>
        </div>
    
    <div class="content-area">
        <div>
            <div class="content">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-5">
                            <div class="content-container">
                                <div class="content-wrapper">
                                    <div class="content-animate">
                                        <h4>Kedung Pedut</h4>
                                        <p>
                                            Kedung Pedut ini memiliki keunikan yaitu airnya memiliki dua warna yaitu hijau tosca dan berwarna putih. 
                                            Kawasan Kedung Pedut ini baru dibuka untuk umum pada tanggal 15 Februari 2015. Secara keseluruhan bila dihitung, 
                                            kawasan kedunng pedut ini mempunyai hampir ada 5 kedung, yaitu Kedung Anyes, Kedung Lanang, Kedung Wedok, 
                                            Kedung Merak dan Kedung Merang. Dimana disetiap kedung ini mempunyai kedalaman yang berbeda beda. 
                                            Air yang mengalir disini berasal dari Gunung Kelir yang melewati beberapa destinasi wisata alam lain seperti Kembang Soka, 
                                            Taman Sungai Mudal, Gua Kiskendo, atau yang tidak lebih jauh dari sana adalah Grojokan Sewu dan air terjun Ketawing.
                                        </p>
                                        <p>
                                            Kedung Pedut berasal dari dua kata, yaitu kedung yang memiliki arti genangan dan pedut yang artinya dalam. 
                                            Sehingga kedung pedut artinya adalah genangan air yang dalam. Ada 2 kedung yang cukup dalam, 
                                            sekitar 2 sampai 3 meter dan salah satu kedung itu berada di dekat air terjun utama sehingga disarankan untuk tidak berenang disana karena cukup berbahaya. 
                                            Tapi tenang disini masih ada beberapa kedung lagi yang tidak berbahaya, 
                                            walau berukuran lebih kecil tapi bentuk kedung ini seperti tangga, sehingga tercipta air terjun mini. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="content-animate1">
                                <h4>Fasilitas dan Rute Menuju Kedung Pedut</h4>
                                <p>
                                    Jika kalian kesini tenang saja karena disini cukup banyak fasilitas yang ada di sekitar kedung pedut ini, seprti kursi, 
                                    jembatan dari kayu, warung, musholla, toilet, ruang ganti dan fasilitas lainnya. 
                                    Untuk menuju kawasan wisata ini kita memang diharuskan untuk berjalan kaki. 
                                    Akan tetapi jalan yang akan kita lalui sudah nyaman untuk dilewati dan jalanannya pun tidak begitu terjal. 
                                    Selain wisata airnya, bebatuan disini juga dapat membuat terkesima sehingga menghipnotis orang untuk berfoto-foto ria disini.
                                </p>
                                <p>
                                    Lokasi kawasan ini berada di Dusun Kembang, Desa Jatimulyo, Kecamatan Girimulyo, Kabupaten Kulon Progo, D.I. Yogyakarta. 
                                    Rute yang kalian ambil misal dari tugu jogja, kearah barat menuju ring road barat. 
                                    Kemudian ambil jalan menuju godean sampai pasar godean, setelah itu lurus ikuti jalan sampai pasar kenteng. 
                                    Lanjutkan perjalanan menuju ke tanjakan menoreh. Setelah mencapai sebuah pertigaan ambil kearah goa kiskendo. 
                                    Kemudian, menemukan pertigaan kembali ambil arah ke kiri. Jalan terus sekitar 4km hingga sobat native menemukan grojogan mudal. 
                                    Dari sini belok ke kiri menuju ke air terjun kembang soka. Nah dari sini kalian cukup ikuti petunjuk yang ada di jalan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fasilitas-area">
                <div class="container">
                    <div class="row justify-content-sm-center">
                        <div class="col-lg-6 text-center">
                            <div class="fasilitas-title">
                                <h3>Harga Masuk dan Ticket Parkir</h3>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="fasilitas1">
                            <div class="col-md-3 d-inline-flex justify-content-between">
                                <div class="fasilitas-wrapper" style="background-image: url(../image/ticket-min.jpg);">
                                    <div class="fasilitas-bg">
                                        <div class="text-fasilitas">
                                            <p>Ticket Rp. 3.000/orang</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="fasilitas2">-->
                        <!--    <div class="col-md-3 justify-content-between">-->
                        <!--        <div class="fasilitas-wrapper" style="background-image: url(../image/parking-ticket-min.jpg);">-->
                        <!--            <div class="fasilitas-bg">-->
                        <!--                <div class="text-fasilitas">-->
                        <!--                    <p>Parkir Motor Rp. 3.000 dan Mobil Rp. 5.000</p>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="fasilitas3">
                            <div class="col-md-3">
                                <div class="fasilitas-wrapper" style="background-image: url(../image/parking-ticket-min.jpg);">
                                    <div class="fasilitas-bg">
                                        <div class="text-fasilitas">
                                            <p>Parkir Motor Rp. 3.000 dan Mobil Rp. 5.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-area">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-8">
                            <div>
                                <div>
                                    <center>
                                        <div class="col-md-5 text-md-center">
                                            <div class="image-title">
                                                <h3>Foto</h3>
                                                <hr>
                                            </div>
                                        </div>
                                    </center>
                                    <div class="image-show-container">
                                        <div>
                                            <img class="image-show">
                                        </div>
                                    </div>
                                    <div class="image-content-wrapper">
                                        <div class="row justify-content-sm-center">
                                            <div class="col-image">
                                                <div class="image-content">
                                                    <img class="image-source" src="../image/Kedung-Pedut2-min.jpg" alt="" srcset="">
                                                </div>
                                            </div>
                                            <div class="col-image">
                                                <div class="image-content">
                                                    <img class="image-source" src="../image/kedung-pedut5-crop.png" alt="" srcset="">
                                                </div>
                                            </div>
                                            <div class="col-image">
                                                <div class="image-content">
                                                    <img class="image-source" src="../image/kedung-pedut3.jpg" alt="" srcset="">
                                                </div>
                                            </div>
                                            <div class="col-image">
                                                <div class="image-content">
                                                    <img class="image-source" src="../image/Kedung-Pedut4.jpg" alt="" srcset="">
                                                </div>
                                            </div>
                                            <div class="col-image">
                                                <div class="image-content">
                                                    <img class="image-source" src="../image/kedung-pedut5.png" alt="" srcset="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
                                        <input type="hidden" name="isEmpty" id="isEmpty" value="$isEmpty"
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
                                 $("#name").focus();
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
                                    $("#dbName").val("tbl_comment1");
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
                                $.post("../php/comment-list.php", {"db_name": "tbl_comment1"},
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
                                                console.log(commentId);

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
                                                                    '<div><a class="btn-reply" onClick="postReply('+ commentId +')">Reply</a></div>'+
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
                                                                    '<div><a class="btn-reply" onClick="postReply('+ commentId +')">Reply</a></div>'+
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
                                                                    '<div><a class="btn-reply" onClick="postReply('+ commentId +')">Reply</a></div>'+
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
                                                                    '<div><a class="btn-reply" onClick="postReply('+ commentId +')">Reply</a></div>'+
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