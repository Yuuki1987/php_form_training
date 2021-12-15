<?php
require('../Views/layouts/app.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <title>送信管理用</title>
</head>
<div class="d-flex justify-content-center">
    <form action="check.php" method="POST">
        <table class="table table-hover">
            <h1 class="text-center" colspan="2">送信完了画面</h1>
            <p class="text-center" colspan="2">お問い合わせありがとうございました。</p>
            <td class="text-center"><a href="form.php" class="btn btn-secondary ">戻る</a></td>
            <?php foreach ($lines as $line) :  ?>
                <?php $data = explode(',', $line); ?>
                <ul>
                    <li> <?php echo $data[0]; ?></li>
                    <li> <?php echo $data[1]; ?></li>
                    <li> <?php echo $data[2]; ?></li>
                </ul>
            <?php endforeach; ?>

        </table>
    </form>
</div>
</body>

</html>