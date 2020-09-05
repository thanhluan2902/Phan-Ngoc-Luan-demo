<?php
    class Posts {
        var $tieu_de;
        var $duong_dan;
        var $mo_ta;
        var $noi_dung;

        function inTT() {
            echo $this->tieu_de . "<br>";
            echo $this->duong_dan . "<br>";
            echo $this->mo_ta . "<br>";
            echo $this->noi_dung;
        }
    }

    class Categories {
        var $name;
        var $duong_dan;
        var $danh_muc_cha;
        var $anh_hien_thi;
        var $mo_ta;

        function inTT() {
            echo $this->name . "<br>";
            echo $this->duong_dan . "<br>";
            echo $this->danh_muc_cha . "<br>";
            echo $this->anh_hien_thi . "<br>";
            echo $this->mo_ta;
        }
    }

    class Users {
        var $name;
        var $email;
        var $password;
        var $anh_dai_dien;

        function inTT() {
            echo $this->name . "<br>";
            echo $this->email . "<br>";
            echo $this->password . "<br>";
            echo $this->anh_dai_dien;
        }
    }

//================================================================================
    echo "<h3> Thông tin bài viết </h3>";
    $post = new Posts();
    $post->tieu_de = "<b>Tiêu đề :   </b>Cô giáo mầm non trường havert lộ clip";
    $post->duong_dan = "<b>Đường dẫn : </b>http://nolovenolive";
    $post->mo_ta = "<b>Mô tả : </b>Bưởi 5 roi phú quốc ngon ơi là ngon";
    $post->noi_dung = "<b>Nội dung : </b>  Mỹ cấm Việt Nam nhập bưởi 5 roi qua Trung Quốc ????? really";

    $post->inTT();

    echo "<br><br><>-------------------------------------------------------<><br><br>";
//================================================================================
    echo "<h3> Thông tin danh mục </h3>";
    $category = new Categories();
    $category->name = "<b>Tên danh mục : </b>Bản tin chém gió 24h";
    $category->duong_dan = "<b>Dường dẫn : </b>htjh://sdfdshgdsfsđ/sdlkhfsdygf";
    $category->danh_muc_cha = "<b>Tên danh mục cha : </b>News";
    $category->anh_hien_thi = "<b>Ảnh hiển thi : </b>ko có ảnh";
    $category->mo_ta = "<b>Mô tả : </b>đang update";

    $category->inTT();

    echo "<br><br><>-------------------------------------------------------<><br><br>";
//================================================================================
    echo "<h3> Thông tin người dùng </h3>";
    $user = new users();
    $user->name = "<b>Name : </b>Phan Ngọc Luân";
    $user->email = "<b>Email : </b>thanhluan@gmail.com";
    $user->password = "<b>Password : </b>*************";
    $user->anh_dai_dien = "<b>Ảnh đại diện : </b>đang cập nhật";

    $user->inTT();
?>