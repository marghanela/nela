<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Taffy Bakery</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        (function () {
            window.onload = function () {
                var latLng = new google.maps.LatLng(-7.8124580, 110.3630790);
                var options = {
                    zoom:15,
                    center:latLng,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById('map'), options);
            }
        })();
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            var $slide = $("#slide ");
            $slide.empty();
            var bg_img = new Array('images/1.jpg', 'images/2.jpg');
            for (var i = 0; i < bg_img.length; i++) {
                imgTemplate = "<img src='" + bg_img[i] + "' alt='image' >";
                $slide.append(imgTemplate);
            }

            $("#slide  img:gt(0)").hide();
            setInterval(function () {
                $visible = $("#slide img:visible");
                $visible.fadeOut(1000);
                if ($visible.next('img').length == 0) {
                    $("#slide img:first").fadeIn(1000);
                } else {
                    $visible.next('img').fadeIn(1000);
                }
            }, 5000);

        });
    </script>
</head>
<body>

<div id="container">

    <div id="header">

        <div id="menu">
            <ul>
                <li><a href="#" class="current"><span>Home</span></a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <center><h1>Taffy Bakery</h1></center>
        <center>Where Great Baking Begins</center>

    </div>
    <div id="content">

        <div id="slide"></div>

        <div id="sidebar" class="column">
            <h2>Menu Andalan</h2>

            <div class="product">
                <img src="images/product1.jpeg" alt=""/>

                <p class="product-title"><a href="#"> Cupcakes </a></p>
            </div>
            <div class="product">
                <img src="images/product2.jpg" alt=""/>

                <p class="product-title"><a href="#"> Coffee Cookies</a></p>
            </div>
            <div class="product">
                <img src="images/product3.jpg" alt=""/>

                <p class="product-title"><a href="#">Bread</a></p>

            </div>
            <div id="map" style="width:100%; height:200px;"></div>
            <p class="product-title"><a href="#">Kunjungi Kami di:</a></p>

            <p class="product-title"><a href="#">Jl. Patehan Lor Yogyakarta</a></p>
        </div>

        <div>
            <div id="main" class="column">

                <div id="welcome">
                    <h2>Welcome</h2>

                    <div>
                        <img src="images/owner.jpg" alt=""/>

                        <p>Selamat datang di website kami, kami menjual berbagai macam kue dan juga berbagi tips
                            pengetahuan akan kue..
                            semua tersedia disini dan selamat menikmati..
                        </p>

                        <p align="right">owner - <b>Nela Marghaniyata</b></p>


                    </div>
                </div>

                <div id="recent-news">
                    <h2>Latest News (Demo)</h2>

                    <div class="post">
                        <h2><a href="#">Grosir Kue Lebaran di Bulan Ramadhan</a></h2>

                        <p class="meta">Written by Nela Marghaniyata | 18 April 2012</p>
                        <img src="images/post1.jpg" alt=""/>

                        <p> Ramadhan sebentaar lagi.. Pasti nya kita harus mulai nyiapin kue untuk lebaran! Nah Mba
                            punya kabar bagus buat kamu sist..
                            Kali ini Mba nyediain edisi spesial Grosir Kue Lebaran dengan harga murah dan tentunya
                            berkualitas. Aneka ragam pilihan kue
                            lebaran bisa kamu dapatin disini! Tanpa berdesakan, tanpa capek, jadi ga' usah takut karena
                            kamu tetep bisa khusyuk ketika menjalankan shaum ramadhan<span class="more"><a href="#">Read
                                more</a></span></p>
                    </div>

                    <div class="post">
                        <h2><a href="#">Mengantisipasi Kue yang Bantat</a></h2>

                        <p class="meta">Nela Marghaniyata | 18 April 2012</p>
                        <img src="images/post2.jpg" alt=""/>

                        <p>Biasanya ketika kita bikin kue, kadang kita takut kalau kue yang akan kita buat tersebut
                            menjadi bantat, nah Mbak akan berbagi tips
                            ke kamu buat mengantisipasi kue yang bantat, penasaran gimana caranya? yuks simak yuks
                            tipsnya....
                            1. Pilih tepung terigu yang berkualitas <span class="more"><a href="#">Read more</a></span>
                        </p>
                    </div>
                    <p class="product-title"><a href="#">View All</a></p>
                </div>
            </div>

        </div>

        <div id="cse-search-form" style="width: 100%;">
            <div class="gsc-control-searchbox-only gsc-control-searchbox-only-id" dir="ltr">
                <form class="gsc-search-box" accept-charset="utf-8">
                    <table cellspacing="0" cellpadding="0" class="gsc-search-box">
                        <tbody>
                        <tr>
                            <td class="gsc-input"><input autocomplete="off" type="text" size="10" class=" gsc-input"
                                                         name="search" title="cari" id="gsc-i-id1" dir="ltr"
                                                         spellcheck="false"
                                                         style="outline: none; background-image: url(http://www.google.com/cse/intl/id/images/google_custom_search_watermark.gif); background-color: rgb(255, 255, 255); background-position: 0% 50%; background-repeat: no-repeat no-repeat; ">
                            </td>
                            <td class="gsc-search-button"><input type="button" value="Cari" class="gsc-search-button"
                                                                 title="cari"></td>
                            <td class="gsc-clear-button">
                                <div class="gsc-clear-button" title="hasil akhir">&nbsp;</div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table cellspacing="0" cellpadding="0" class="gsc-branding">
                        <tbody>
                        <tr>
                            <td class="gsc-branding-user-defined"></td>
                            <td class="gsc-branding-text">
                                <div class="gsc-branding-text">didukung oleh</div>
                            </td>
                            <td class="gsc-branding-img"><img src="./bout.php_files/small-logo.png"
                                                              class="gsc-branding-img"></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <script src="./nela.php_files/jsapi" type="text/javascript"></script>
        <script type="text/javascript">
            google.load('search', '1', {language:'id', style:google.loader.themes.ESPRESSO});
            google.setOnLoadCallback(function () {
                var customSearchOptions = {};
                var customSearchControl = new google.search.CustomSearchControl(
                    '006817221727675365273:tqqndrgtwqw', customSearchOptions);
                customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                var options = new google.search.DrawOptions();
                options.enableSearchboxOnly("http://GOOGLE.COM", "s");
                customSearchControl.draw('cse-search-form', options);
            }, true);

        </script>
        <div id="wheater">
            <?php
            echo "<table width='600px' border='1'>";
            echo "<tr>";
            //echo "<td>Kota</td>";
            //echo "<td>Humidity</td>";
            //echo "<td></td>";
            //echo "<td>Condition</td>";
            //echo "<td>Icon</td>";
            //echo "<td>Temperature</td>";

            function FtoC($a)
            {
                $c = ($a - 32) / 1.8;
                return number_format($c) . "у " . "<br/>";
            }

            $xml = simplexml_load_file("http://arif.staff.amikom.ac.id/service.php");
            //echo "<h1>" .$xml->getName()."</h1>";

            $hasil = array();

            foreach ($xml->children() as $child) {
                echo "<tr>";
                //echo "<td>";
                $m = $child->attributes()->type;
                echo "</td>";
                //echo"<h2>".$m."<h2>";

                if ($m == "weather")

                    foreach ($child->children() as $anak1) {
                        echo "<td>";
                        $n = $anak1->attributes()->name;
                        //echo "<h2>".$childa_>attributes."</h2>";
                        echo"<table border='2px' width='200px'><tr><th colspan='2'>" . $n . "</th></td></tr>";

                        foreach ($anak1->children() as $anak2 => $a2) {
                            if ($anak2 == 'icon') {
                                echo '<tr><td colspan="4" align="center">' . '<img src="' . "http://arif.staff.amikom.ac.id/" . $a2 . '" height="60" width="60"/></td></tr>';
                            } else if ($anak2 == 'temp_f') {
                                echo "<tr><td>" . "temp_c" . "</td><td>" . FtoC($a2) . "</td></tr>";
                            } else if ($anak2 == 'wind_condition' || $anak2 == 'condition') {
                                echo "<tr><td>" . $anak2 . "</td><td>" . FtoC($a2) . "</td></tr>";
                            } else {
                                echo "<tr><td>" . $anak2 . "</td><td>" . $a2 . "</td></tr>";
                            }
                            $hasil ["$m"]["$n"]["$anak2"] = "$a2";
                        }
                        echo "</table>";


                    }
            }
            ?>


        </div>

    </div>

    <div id="footer">

        <div id="footer-menu">
            <center>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </center>
        </div>

        <center>
            <div id="copyright">
                Copyright &copy; 2012 | Designed by Nela Marghaniyata
            </div>
        </center>

    </div>

</body>
</html>