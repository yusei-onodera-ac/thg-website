<?php
// データベースの代わりとなる「プロジェクト一覧」の配列を定義
$projects = [
    '1' => [
        'title' => '(Webアプリ)Tokyo-Park-Map',
        'stack' => 'JAVA / PHP  / CSS / DB /JS',
        'content' => '
            <p style="margin-bottom: 2rem;">
                「東京都オープンデータ・ハッカソン」でブチかましたWebアプリ。単なる施設紹介じゃつまらないので、独自に収集したディープなデータもブチ込み、忖度なしの「ガチ勢向けランキング」として実装しました。
            </p>
            </p>
            <p style="margin-bottom: 2rem;">
                老若男女使いやすいようなUIを意識してコーディングしました。
            </p>
        '
    ],
    '2' => [
        'title' => '脳波による随意運動の意図抽出とリアルタイム予測システム',
        'stack' => 'NEXT.JS / PYTHON / GCP',
        'content' => '
            <p style="margin-bottom: 2rem;">
                CTEAC2025に出展した、THGきっての野心作。「脳波で都市を操る」というSFチックな体験を現実にしました。
            </p>
            <p style="margin-bottom: 2rem;">
                脳波計（BCI）から流れてくる生データをPythonで解析し、右手を挙げる「意思」をAIがリアルタイムで予測。Next.jsで構築したビジュアライザーと連携させ、思考をダイレクトに都市の動きへ反映させます。ハック精神を極めた、未来のサービス展開が待ち遠しいプロトタイプです。
            </p>
        '
    ]
];

// URLから ?id=〇〇 の数字を取得する（指定がない場合は 1 とする）
$project_id = $_GET['id'] ?? '1';

// 万が一、存在しないID（3など）が指定されたら、強制的に 1 を表示する安全対策
if (!array_key_exists($project_id, $projects)) {
    $project_id = '1';
}

// 表示するプロジェクトのデータをセット
$project = $projects[$project_id];
?>

<section class="container-small" style="padding-top: 20vh;">
    <div class="page-label" style="font-family: var(--font-heading); font-weight: 700; margin-bottom: 2rem; letter-spacing: 0.05em;">
        (PROJECT DETAIL)
    </div>

    <h1 style="font-family: var(--font-heading); font-size: clamp(3rem, 6vw, 5rem); line-height: 1; margin-bottom: 1rem; word-wrap: break-word;">
        <?= $project['title'] ?>
    </h1>

    <div style="font-family: var(--font-mono); font-weight: 700; color: #888; margin-bottom: 4rem; font-size: 0.9rem;">
        <?= $project['stack'] ?>
    </div>

    <div style="border-top: 2px solid var(--text-color); padding-top: 3rem; font-size: 1.1rem; line-height: 2.2; font-weight: 500;">
        <?= $project['content'] ?>
    </div>

    <div style="margin-top: 10vh; text-align: left;">
        <a href="?p=projects" style="font-weight: 700; border-bottom: 2px solid var(--text-color); padding-bottom: 5px; transition: opacity 0.3s;" onmouseover="this.style.opacity='0.5'" onmouseout="this.style.opacity='1'">&larr; BACK TO PROJECTS</a>
    </div>
</section>