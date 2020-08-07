<?php
if ($_POST['action'] != 'Register') {
    header("location: ../login");
    exit();
}
require 'connection.php';
$user   = mysqli_real_escape_string($db, $_POST['regUser']);
$pass   = mysqli_real_escape_string($db, $_POST['regPass']);
$repass = mysqli_real_escape_string($db, $_POST['regRepass']);
$fname  = '';
$lname  = '';
$phone  = mysqli_real_escape_string($db, $_POST['regPhone']);
$mail   = '';
$line   = '';
if ($pass != $repass) {
    echo 'รหัสผ่านสองครั้งไม่ตรงกัน';
    exit();
}
if (!(strlen($user) >= 6 and strlen($user) <= 32)) {
    echo "Username invalid format";
    exit();
}
if (!(preg_match("/^[a-zA-Z0-9_]+$/", $user))) {
    echo "Username invalid format.";
    exit();
}
if (!(strlen($pass) >= 6 and strlen($pass) <= 32)) {
    echo "รหัสผ่านต้องมีความยาว 6-32 ตัวอักษร";
    exit();
}
if (!(preg_match("/^[a-zA-Z0-9_]+$/", $pass))) {
    echo "รหัสผ่านต้องประกอบไปด้วย a-z A-Z 0-9 เท่านั้น";
    exit();
}
$sql    = "SELECT `uname` FROM `users` WHERE `uname` = '$user' ";
$result = mysqli_query($db, $sql);
$row    = mysqli_num_rows($result);
if ($row != 0) {
    echo 'Username นี้เคยสมัครไปแล้ว';
    exit();
}

// check mm88get user
$url = "https://spy777.com/api/user?domain=spy777&phone=" . $phone;
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "GET"
));
$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response);
if ($data->{'success'}) {
    $join_mm88get = 1;
} else {
    $join_mm88get = 0;
}


$sql    = "  INSERT INTO `users`(`uname`, `pass`, `type`, `status`,`credit`, `fortype`, `fname`, `lname`, `phone`,`email`, `line`, `join_mm88get`)
              VALUES ('$user','$pass','1','0','10','1','$fname','$lname','$phone','$mail','$line', '$join_mm88get') ";
$result = mysqli_query($db, $sql);
if ($result) {
    echo "success";
} else {
    echo mysqli_error($result);
}
mysqli_close($db);
