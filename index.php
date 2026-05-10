<?php
// デフォルトはtopページ
$page = isset($_GET['p']) ? $_GET['p'] : 'top';

// 共通ヘッダーの読み込み
include 'views/components/header.php';

// ページファイルの存在確認と読み込み
$file = "views/pages/{$page}.php";
if (file_exists($file)) {
    include $file;
} else {
    echo "<section style='padding: 20vh 5vw; text-align: center;'><h2>404 Not Found</h2><p>ページが見つかりません。</p></section>";
}

// 共通フッターの読み込み
include 'views/components/footer.php';
?>