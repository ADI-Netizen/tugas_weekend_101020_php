<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Tugas Weekend Adi</a>
    </nav>

    <div class="container-xl mt-3">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#satu" class="nav-link active" data-toggle="tab">Nomor 1</a>
            </li>
            <li class="nav-item">
                <a href="#dua" class="nav-link" data-toggle="tab">Nomor 2</a>
            </li>
            <li class="nav-item">
                <a href="#tiga" class="nav-link" data-toggle="tab">Nomor 3</a>
            </li>
            <li class="nav-item">
                <a href="#empat" class="nav-link" data-toggle="tab">Nomor 4</a>
            </li>
            <li class="nav-item">
                <a href="#lima" class="nav-link" data-toggle="tab">Nomor 5</a>
            </li>
            <li class="nav-item">
                <a href="#enam" class="nav-link" data-toggle="tab">Nomor 6</a>
            </li>
            <li class="nav-item">
                <a href="#tujuh" class="nav-link" data-toggle="tab">Nomor 7</a>
            </li>
        </ul>
        <div class="tab-content">
            <!-- Nomor 1 -->
            <div class="tab-pane fade show active" id="satu">
                <p>
                    Hitunglah luas permukaan kubus dengan panjang setiap rusuknya sebagai berikut.<br>
                    a. 4 cm<br>b. 7 cm<br>c. 10 cm<br>d. 12cm<br>
                </p>

                <?php
                function permukaan($nilai)
                {
                    $hasilPK = 6 * pow($nilai, 2);
                    return $hasilPK;
                }
                ?>
                <p>
                    <b>Luas dengan panjang rusuk 4 : <u><?= permukaan(4) ?></u> cm<sup>2</sup></b><br>
                    <b>Luas dengan panjang rusuk 7 : <u><?= permukaan(7) ?></u> cm<sup>2</sup></b><br>
                    <b>Luas dengan panjang rusuk 10 : <u><?= permukaan(10) ?></u> cm<sup>2</sup></b><br>
                    <b>Luas dengan panjang rusuk 12 : <u><?= permukaan(12) ?></u> cm<sup>2</sup></b><br>
                </p>
            </div>

            <!-- Nomor 2 -->
            <div class="tab-pane fade" id="dua">
                <p>
                    Sebuah kotak kayu berbentuk kubus memiliki luas permukaan 3.750 cm2. Hitunglah panjang sisi kotak kayu tersebut ?
                </p>

                <?php

                function panjang($luas)
                {
                    return sqrt($luas);
                }
                ?>
                <p><b>Jadi panjang sisi kotak kayu tersebut adalah <u><?= panjang(3750) ?></u> cm</b></p>
            </div>

            <!-- Nomor 3 -->
            <div class="tab-pane fade" id="tiga">
                <p>
                    Sebuah tabung memiliki jari – jari dan tinggi masing – masing 10 cm dan 30 cm, lalu tentukan lah berapa volume dari tabung tersebut?
                </p>

                <?php
                function tabung($r, $t)
                {
                    return $v = (22 / 7) * pow($r, 2) * $t;
                }
                ?>

                <p><b>Volume dari tabung tersebut adalah <u><?= tabung(10, 30) ?></u> cm<sup>2</sup></b><br></p>
            </div>

            <!-- Nomor 4 -->
            <div class="tab-pane fade" id="empat">
                <p>
                    Sebuah tabung memiliki jari – jari 14 cm dan tinggi nya 10 cm, maka tentukan lah luas nya?
                </p>
                <?php
                function luasTabung($jari, $tinggi)
                {
                    return $L = 2 * (22 / 7 * $jari) * ($jari + $tinggi);
                }
                ?>

                <p>
                    <b>Jadi, luas permukaan tabungnya adalah <u><?= luasTabung(14, 10) ?></u> cm<sup>2</sup></b>
                </p>
            </div>

            <!-- Nomor 5 -->
            <div class="tab-pane fade" id="lima">
                <p>
                    Sebuah lingkaran memiliki jari-jari sebesar 14 cm. Tentukan luas lingkaran tersebut ?
                </p>

                <?php
                function hitung($jariJari)
                {
                    return $luasLing = 22 / 7 * pow($jariJari, 2);
                }
                ?>

                <p>
                    <b>Jadi, luas lingkaran tersebut adalah <u><?= hitung(14) ?></u> cm<sup>2</sup></b>
                </p>
            </div>

            <!-- Nomor 6 -->
            <div class="tab-pane fade" id="enam">
                <p>
                    Sebuah roda sepeda yang berbentuk lingkaran memiliki diameter sebesar 14 cm. Maka luas dan keliling roda tersebut adalah ?
                </p>

                <?php
                function keliling($dia)
                {
                    return $kll = (22 / 7) * $dia;
                }
                ?>

                <p>
                    <b>Jadi, luas roda tersebut adalah <u><?= hitung(14 / 2) ?></u> cm<sup>2</sup></b> <br>
                    <b>Sedangkan keliling roda tersebut adalah <u><?= keliling(14) ?></u> cm<sup>2</sup></b>
                </p>
            </div>

            <!-- Nomor 7 -->
            <div class="tab-pane fade" id="tujuh">
                <p>
                    Pak Andi memiliki sebuah mobil yang panjang jari-jari ban mobil tersebut sebesar 21 cm. Saat mobil tersebut berjalan, ban mobil tersebut berputar sebanyak 200 kali. Berapakah jarak yang ditempuh mobil tersebut ?
                </p>

                <?php

                function jarak($j, $rot)
                {
                    $kel = 2 * (22 / 7) * $j;
                    return $tempuh = $kel * $rot;
                }
                ?>

                <p>
                    <b>Jadi, jarak yang ditempuh Pak Andi adalah <u><?= jarak(21, 200) ?></u> cm</b>
                </p>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>