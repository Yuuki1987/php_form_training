<?php
require('../Views/layouts/app.php');
?>

<head>
    <title>確認フォーム</title>
</head>
<div class="d-flex justify-content-center">
    <form action="submit.php" method="POST">
        <table class="table table-hover">
            <h1 class="text-center" colspan="2">問い合わせフォーム</h1>
            <p class="text-center" colspan="2">内容を確認してください</p>
            <tr>
                <th>名前</th>
                <td name=name><?php echo h($name); ?></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td name="emi"><?php echo h($email); ?></td>
            </tr>
            <tr>
                <td class="align-middle">問い合わせ内容</td>
                <td><?php echo nl2br(h($message)); ?></td>
            </tr>
            <tr>
                <td colspan="1"><a href="form.php" class="btn btn-secondary ">戻る</a></td>
                <td colspan="1"><button class="btn btn-primary" type="submit">送信する</a></button></td>
            </tr>
        </table>
        <input type="hidden" name="name" value="<?php echo h($name) ?>">
        <input type="hidden" name="email" value="<?php echo h($email) ?>">
        <input type="hidden" name="message" value="<?php echo h($message) ?>">
    </form>
</div>
</body>

</html>