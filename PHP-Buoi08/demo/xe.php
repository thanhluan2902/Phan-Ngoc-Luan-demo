<?php
    class xe{
        var $name;
        var $color;
        var $soCho;
        var $hangXe;

        function chay() {
            echo "Xe thì chạy";
        }
    }

    $oto = new xe();

    $oto->name = "xe bò";
    $oto->soCho = 15;
    $oto->chay();

    // echo $oto->name;

    $xeMay = new xe();
    $xeMay->name = "Xe máy";
    $xeMay->hangXe = "sh";
    // echo $xeMay->name;



?>