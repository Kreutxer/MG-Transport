<?php

include "session.php";
include "koneksi.php";

?>

<!-- Halo <?php echo $_SESSION['username'];?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?= time()?>">
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <div class="logo"></div>
        <div class="empty"></div>
        <div class="list">
            <div class="wrap">
                <a href="driver.php">Drivers</a>
            </div>
            <div class="wrap">
                <a href="">Trucks</a>
            </div>
            <div class="wrap">
                <a href="">Customers</a>
            </div>
        </div>
        <div class="blank"></div>
    </div>
    <div class="banner">
        <div class="text-banner"></div>
    </div>
    <div class="divider"></div>
    <div class="body-container">
        <div class="head">Lorem Ipsum</div>
        <div class="content-wrapper">
            <div class="left">
                <div class="left-list">
                    <p>List Lorem ipsum</p>
                    <br>
                    <li>Lorem ipsum</li>
                    <li>Sed fermentum</li>
                    <li>Maecenas at ex sem</li>
                </div>
            </div>
            <div class="mid">
                <div class="mid-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum nec eleifend diam. Vestibulum pharetra diam sit amet velit scelerisque, ac varius enim ornare.
                    Aliquam justo dolor, mollis a scelerisque eget, laoreet vel est. Pellentesque lacinia gravida est, vitae venenatis velit sodales ac.
                    Sed nec dignissim purus. Mauris pharetra elit eros, vel luctus metus semper eget. In hac habitasse platea dictumst.
                    </p>
                    <br>
                    <p>Sed fermentum mattis ex, non auctor urna pretium et. Curabitur mi magna, finibus non mauris ut, elementum volutpat diam. Maecenas hendrerit sed orci et dignissim. Maecenas vitae lectus ut magna iaculis aliquam eget ut leo. Suspendisse vitae iaculis elit. Quisque in nunc tortor. Morbi dapibus sagittis urna nec finibus.</p>
                    <br>
                    <p>Maecenas at ex sem. Quisque sit amet ex volutpat, accumsan elit sit amet, fringilla erat. Proin ullamcorper magna non justo feugiat faucibus. Duis at libero ante. In hac habitasse platea dictumst. Mauris purus erat, suscipit in condimentum porttitor, hendrerit a augue. Donec sed pretium diam. Integer semper posuere quam nec ultrices. Mauris efficitur, lectus vitae volutpat faucibus, sem urna malesuada tortor, vel congue ex nisi at diam. Proin tempor faucibus volutpat. Donec felis ligula, vehicula a dignissim id, tristique et odio. Ut rhoncus iaculis metus, id volutpat lorem placerat vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse scelerisque, libero eget tempus aliquet, ligula arcu rutrum odio, eget vehicula tortor metus non enim.</p>
                    <br>
                    <p>Proin tincidunt luctus massa et tempus. Sed a dui maximus, interdum lacus imperdiet, maximus purus. Donec non libero fermentum, iaculis massa eu, pellentesque eros. Suspendisse potenti. Maecenas quis sapien in ex mollis sagittis pharetra eget dui. Nam id sem convallis, porta turpis eget, tempus augue. Praesent eu tincidunt quam. Suspendisse elementum rhoncus iaculis. Nam tristique nibh vel commodo vestibulum. Fusce sagittis porttitor nunc eu semper. Mauris nec diam bibendum, porta risus ac, tincidunt purus. Maecenas ornare nulla ac tempor consectetur. Ut erat sem, pharetra nec sagittis quis, iaculis vitae mi.</p>
                </div>
            </div>
            <div class="left">
                <div class="left-list">
                    <p>List Lorem ipsum</p>
                    <br>
                    <li>Lorem ipsum</li>
                    <li>Sed fermentum</li>
                    <li>Maecenas at ex sem</li>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="foot-wrapper">
            <div class="contact">
                <div class="contain">
                    <div class="icon-address"></div>
                    <div class="t">JL. Jend. Sudirman No. 3, Pekanbaru</div>
                </div>
                <div class="contain">
                    <div class="icon-phone"></div>
                    <div class="t">+62 852-3381-807</div>
                </div>
                <div class="contain">
                    <div class="icon-email"></div>
                    <div class="t">cs@mgtransport.com</div>
                </div>
            </div>
            <div class="company">
                <div class="company-name">

                </div>
            </div>
        </div>
    </div>
</body>
</html>