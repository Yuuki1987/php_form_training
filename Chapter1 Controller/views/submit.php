<?php
require('../Views/layouts/app.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>送信管理用</title>
</head>

<body>
    <div class="d-flex justify-content-center">
        <form action="check.php" method="POST">
            <table class="table table-hover">
                <h1 class="text-center" colspan="2">送信完了画面</h1>
                <p class="text-center" colspan="2">お問い合わせありがとうございました。</p>

                <td class="text-center"><a href="form.php" class="btn btn-secondary ">戻る</a></td>
                <ul>
                    <li> <?php echo h($name) ?></li>
                    <li> <?php echo h($email); ?></li>
                    <li> <?php echo nl2br(h($message)); ?></li>
                </ul>
            </table>
        </form>
    </div>
</body>

</html>