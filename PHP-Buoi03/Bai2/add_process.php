    <?php
        setcookie('msg','Thêm mới thành công' , time() + 10);

        session_start();
        $sv = array(
            'code' => $_POST['code'],
            'name' => $_POST['name'],
            'sdt' => $_POST['sdt'],
            'email' => $_POST['email'],
            'gt' => $_POST['gt'],
            'address' => $_POST['address']
        );
        $_SESSION['sv'][] = $sv;
        header('Location:list.php');


        // echo "<pre>";
        //     var_dump($_SESSION);
        // echo "</pre>";

        // echo $_POST['code']."<br>";
        // echo $_POST['name']."<br>";
        // echo $_POST['email']."<br>";
        // echo $_POST['sdt']."<br>";
        // echo $_POST['gt']."<br>";
        // echo $_POST['address']."<br>";

        
    ?>
