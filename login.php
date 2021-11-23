<?php
if (isset($_POST['submit'])) {
    $mes = "ログインしました。";
}

include_once('lib/config.php');

$page_slug = 'login';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テストPHP掲示板APP</title>
    <link rel="stylesheet" href="<?php echo ASSETS . 'css/ress.css'; ?>">
    <link rel="stylesheet" href="<?php echo ASSETS . 'css/common.css'; ?>">
    <link rel="stylesheet" href="<?php echo ASSETS . 'css/login.css'; ?>">
</head>

<body class="<?php echo $page_slug; ?>">
    <?php include_once('inc/header.php'); ?>

    <main class="layout-common">
        <div class="wrapper">
            <?php
            if (isset($mes) && strlen($mes) > 0) {
                echo "<div class=\"box\">${mes}</div>";
            }
            ?>

            <form action="" method="post" id="loginForm" class="box form form-login">
                <ul>
                    <li class="form-row">
                        <div>メールアドレス</div>
                        <div><input type="email" name="email" id=""></div>
                    </li>
                    <li class="form-row">
                        <div>パスワード</div>
                        <div><input type="password" name="password" id=""></div>
                    </li>
                </ul>
                <div class="tac">
                    <input type="submit" name="submit" value="ログイン" class="btn form-btn form-btn__submit">
                </div>
            </form>
        </div>
    </main>

    <?php include_once('inc/footer.php'); ?>
</body>

</html>