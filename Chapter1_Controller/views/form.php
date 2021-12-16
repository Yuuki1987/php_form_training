<?php
require('../Views/layouts/app.php');
?>

<head>
    <title>問い合わせフォーム</title>
</head>
<div class="d-flex justify-content-center">
    <form action="check.php" method="POST">
        <table class="table table-hover">
            <h1 class="text-center" colspan="2">問い合わせフォーム</h1>
            <tr>
                <th>名前</th>
                <td><input type="text" name="name" size="30"></td>
            </tr>
            <tr>
                <th>メールアドレス（半角英数字）</th>
                <td><input name="email" size="30"></td>
            </tr>
            <tr>
                <td class="align-middle">問い合わせ内容</td>
                <td><textarea name="message" id="" cols="40" rows="5"></textarea></td>
            </tr>
            <tr class="text-center">
                <td colspan="2"><button class="btn btn-primary" type="submit">確認する</button></td>
            </tr>
        </table>
    </form>
</div>
</body>

</html>