<?php
require('../Views/layouts/app.php');
?>

<head>
    <title>郵便番号API</title>
</head>
<div class="d-flex justify-content-center ">
    <form action="post_controller.php" method="GET">
        <h1 class="text-center" >郵便番号検索のAPI</h1>
        <?php if ($response1 === false) {
            $alert = "<script type='text/javascript'>alert('郵便番号は存在しません');</script>";
            echo $alert;
        }; ?>
        <p>郵便番号（数字7桁）</p>
        <input  type="text" name="post" size="10" pattern=".{7}" required value="<?php echo $post; ?>">
        <button class="btn btn-primary" type="submit">送信する</button>
    </form>
</div>
</body>
</html>