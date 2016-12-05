<?php

    session_start();
    header("Cache-control: private");
    if ($_SESSION["access"] == "granted"){
       
    }
    else {
      header("Location: ./admin.php");
    }

?> 

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- SmartMenus jQuery Bootstrap Addon CSS -->
        <link href="./css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet"> 
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>       
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Erce</a>
              </div>
              <div class="collapse navbar-collapse navbar-ex1-collapse">
                <!--<ul class="nav navbar-nav navbar-right" id="mobile-ul">
                    <li class=""><a class="language-a" href="index.php"><img class="" src="images/language/turkish.png" class="img-responsive" height="20px" width="20px"/></a></li>
                    <li class=""><a class="language-a" href="index_En.php"><img class="" src="images/language/english.png" class="img-responsive" height="20px" width="20px"/></a></li>    
                </ul>-->
                <ul class="nav navbar-nav navbar-right">
                    <!--<li class="active">
                        <a class="page-scroll" href="#summary">
                            <span class="glyphicon glyphicon-user"></span>
                        </a>
                    </li>-->
                    <li>
                        <a href="#">Ayarlar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="site-settings.php">Site Ayarları</a></li>
                            <li>
                                <a href="#">Sayfa Ayarları <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="mainpage-settings.php">Anasayfa</a></li>
                                    <li><a href="about-settings.php">Hakkımızda</a></li>
                                    <li><a href="products-settings.php">Ürünler</a></li>
                                    <li><a href="services-settings.php">Hizmetler</a></li>
                                    <li><a href="references-settings.php">Referanslar</a></li>
                                    <li><a href="gallery-settings.php">Galeri</a></li>
                                    <li><a href="contact-settings.php">İletişim</a></li>
                                </ul>
                            </li>
                            <li><a href="social-links.php">Sosyal Linkler</a></li>
                            <li>
                                <a href="#">Bakım ve Onarım <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#database">Veritabanı Bakımı</a></li>
                                    <li><a href="#checkupdates">Güncellemeleri Kontrol Et</a></li>
                                </ul>
                            </li>
                            <li><a href="#move">Hareket Dökümü</a></li>
                            <li><a href="#file-manager">File Manager</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Uygulamalar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#notes">Notlar</a></li>
                            <li><a href="#calendar">Takvim</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="#statistics">İstatistik <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#ipaddresses">IP Adresleri</a></li>
                            <li><a href="#references">Referanslar</a></li>
                            <li><a href="#activevisitors">Aktif Ziyaretçiler</a></li>
                            <li><a href="#dailydatas">Günlük Veriler</a></li>
                            <li><a href="#graphicalpresentation">Grafiksel Sunum</a></li>
                        </ul>
                    </li>
                    <li><a class="page-scroll" href="slider.php">Slider</a></li>
                    <li>
                        <a class="page-scroll" href="#products">Ürünler<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="products.php">Ürünler</a></li>
                            <li><a href="#productcategories">Ürün Kategorileri</a></li>
                            <li><a href="#productcomments">Ürün Yorumları</a></li>
                        </ul>
                    </li>
                    <li><a class="page-scroll" href="#references">Referanslar</a></li>
                    <li><a class="page-scroll" href="#news">Duyurular</a></li>
                    <li>
                        <a class="page-scroll" href="#contact">İletişim<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="inbox.php">Gelen Kutusu</a></li>
                            <li><a href="#sentbox">Gönderilenler</a></li>
                            <li><a href="#newemail">Yeni İleti Oluştur</a></li>
                        </ul>
                    </li>
                    <li>                
                        <form class="form-logoff" action="logoff.php" method="GET">
                            <button type="submit" value="logoff" class="btn btn-default logoff" name="logoff" id="logoff"><img class="img-responsive logoff-image" src="./images/logoff.png" height="18px" width="18px"></button>
                        </form>
                    </li>
                </ul>
              </div>
            </div>
        </nav>
        <div class="container-fluid admin-main-container">
            <div class="row">
                <div class="col-md-1 col-sm-1 col-lg-1"></div>
                <div class="col-xs-18 col-md-10 col-sm-10 col-lg-10 container-title">
                    <div class="row first-row">
                        <div class="col-md-12 col-xs-18">
                            <h3>Hoş Geldiniz</h3>
                        </div>
                    </div>
                    <div class="row second-row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">   
                            <div class="row" id="records-title">
                                <div class="col-md-5 col-xs-5"></div>
                                <div class="col-md-2 col-xs-2"><h2></h2></div>
                                <div class="col-md-5 col-xs-5"></div>
                            </div>

                            <div id="records" class="message-div">
                                <form method="post" action="addProduct.php" enctype="multipart/form-data">
                                    <p>
                                              Please Enter the Band Members Name.
                                            </p>
                                            <p>
                                              Band Member or Affiliates Name:
                                            </p>
                                            <input type="text" name="nameMember"/>
                                            <p>
                                              Please Enter the Band Members Position. Example:Drums.
                                            </p>
                                            <p>
                                              Band Position:
                                            </p>
                                            <input type="text" name="bandMember"/>
                                            <p>
                                              Please Upload a Photo of the Member in gif or jpeg format. The file name should be named after the Members name. If the same file name is uploaded twice it will be overwritten! Maxium size of File is 35kb.
                                            </p>
                                            <p>
                                              Photo:
                                            </p>
                                            <input type="hidden" name="size" value="350000">
                                            <input type="file" name="photo"> 
                                            <p>
                                              Please Enter any other information about the band member here.
                                            </p>
                                            <p>
                                              Other Member Information:
                                            </p>
                                <textarea rows="10" cols="35" name="aboutMember">
                                </textarea>
                                            <p>
                                              Please Enter any other Bands the Member has been in.
                                            </p>
                                            <p>
                                              Other Bands:
                                            </p>
                                            <input type="text" name="otherBands" size=30 />
                                            <br/>
                                            <br/>
                                            <input TYPE="submit" name="upload" title="Add data to the Database" value="Add Member"/>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-lg-1"></div>
            </div>
        </div> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <!-- SmartMenus jQuery plugin -->
        <script type="text/javascript" src="./js/jquery.smartmenus.js"></script>

        <!-- SmartMenus jQuery Bootstrap Addon -->
        <script type="text/javascript" src="./js/jquery.smartmenus.bootstrap.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>');</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script type="text/javascript" src="../bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>