<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $arr1 = array('zent','php',1);
        // // $arr2 = ['zent','php'];

        // for($i = 0; $i<count($arr1); $i++) {
        //     echo $arr1[$i] . "<br>";
        // }

        // foreach($arr1 as $k => $v) {
        //     echo $k . " - " . $v . "<br>";
        // }
        // // var_dump($arr1);
        // print_r($arr1);
        // echo '<br>';
        // $user = ['Ha Noi'];
        // $user['user-name'] = 'Luân';
        // $user['email'] = 'luan@gmail.com';
        // $user['phone'] = '0987654321';

        // echo 'Địa chỉ : ' . $user[0]."<br>";
        // echo 'Ten : ' . $user['user-name'];

        // $user = [];

        // $user1 = [
        //     'username' => 'Luân1',
        //     'email' => 'Luan@gmail.com',
        //     'phone' => '09876'
        // ];
        // $user2 = [
        //     'username' => 'Luân2',
        //     'email' => 'Luan@gmail.com',
        //     'phone' => '09876'
        // ];
        // $user3 = [
        //     'username' => 'Luân3',
        //     'email' => 'Luan@gmail.com',
        //     'phone' => '09876'
        // ];

// for + foreach
        // $users[] = $user1; 
        // $users[] = $user2;
        // $users[] = $user3;
        
        // for($i = 0; $i < count($users);$i++) {
            
        //     foreach($users[$i] as $key => $value) {
        //         echo $key . ' : ' . $value . '<br>';
        //     }
        //     echo '-----------<br>';
        // }

        // echo '-------------------------';

        // foreach($users as $key => $user) {
        //     echo '--------' . "<br>";
        //     echo 'username : ' . $user['username']."<br>";
        //     echo 'email : ' . $user['email']."<br>";
        //     echo 'phone : ' . $user['phone']."<br>";
        // }
        
//hàm kiểm tra chẵn lẻ      
        // function test_chan_le ($n) {
        //     if($n % 2 == 0) {
        //         return true;
        //     } else return false;
        // }
        // // echo test_chan_le(10);
        // $num = 9;
        // if(test_chan_le($num)){
        //     echo $num . ' là số chẵn';
        // } else {
        //     echo $num . ' là số lẻ';
        // }
// hàm tính tổng
//         $tong = 1;
//         function tintTong($arr) {
//             global $tong;
//             foreach($arr as $number) {
//                 $tong += $number;
//             }
//             echo 'Tổng' . $tong;
//             return  $tong;
//         };

//         tintTong([1,2,3,4,5,6]);
//         echo '<br>';
//         echo 'Tổng: '.$tong;
//     echo '<br>';
// // bín tĩnh
// function kt() {
//     static $a = 0;
//     $a++;
//     echo $a;
// }
// kt();
// kt();
// kt();

include_once "tinhtoan.php";
tinhTong(5,10);


?>
</body>
</html>