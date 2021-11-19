<?php
include_once('lib/config.php');

$page_slug = 'home';
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
    <link rel="stylesheet" href="<?php echo ASSETS . 'css/post.css'; ?>">
</head>

<body class="<?php echo $page_slug; ?>">
    <?php include_once('inc/header.php'); ?>

    <main class="layout-common">
        <div class="wrapper">
            <ul class="posts">
                <li class="post">
                    <h3 class="post__title">タイトルが入ります</h3>
                    <div class="post__content">
                        ここに本文が入ります。
                    </div>
                    <div class="post__flex flex">
                        <div class="post__info flex">
                            <h4 class="post__author">投稿者名</h4>
                            <p class="post__time">2021.01.31</p>
                        </div>
                        <div class="post__controller">
                            <a href="" class="btn btn--green">編集</a>
                            <a href="" class="btn btn--red">削除</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </main>

    <?php include_once('inc/footer.php'); ?>
</body>

</html>