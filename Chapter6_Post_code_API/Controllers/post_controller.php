<?php
require_once('../util.php');
$post = preg_match('/\A\d{7}\z/u',$_GET['post']);
$post = $_GET['post'];
$_SESSION['post'] = $post;
if(!$post){
    echo '郵便番号は数値７桁で入力をお願いします。';
    exit;
}
$limit = "&limit=100";
$url = "https://zipcloud.ibsnet.co.jp/api/search?zipcode=" . (string) $_GET['post']. $limit;
$response = file_get_contents($url);
//Jsonファイルを配列に変換
$response = json_decode($response, true);

if(!$response['results'] == null){
    $count = count($response['results'])-1 ;
    $number = $response['results'][0]['zipcode'];
    $number3 = substr($number,0,3);
    $number4 = substr($number,3,4);
    $_SESSION = array();
}
else{
    $response1 = $response['results'];
    $_SESSION['response1'] = false;
    header('location:post_number.php');    
    exit;
}


include('../Views/post_controller.php');
?>