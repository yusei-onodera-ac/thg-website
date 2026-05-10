<?php
// イベント詳細のデータを配列で定義（ここで画像をセットします）
$events = [
    '1' => [
        'title' => 'CEATEC2025 出展',
        'meta' => '2025.10 | TOKYO',
        'image' => '', // ★ここで写真を表示！
        'content' => '
            <p style="margin-bottom: 2rem;">
                日本最大級のテックイベント「CEATEC 2025」に出展！「頭で考えるだけで、街が動く」っていう、SF映画みたいなバズるアイディアを形にしました。
            </p>
            <p style="margin-bottom: 2rem;">
                右手を挙げる「意思」をAIが脳波から読み取って、リアルタイムに都市のデータを操る。そんな魔法みたいな体験を支えているのは、実はTHG Inc.がこだわり抜いたガチな設計思想なんです。
            </p>
        '
    ],
        '2' => [
        'title' => 'Open Data Hackathon　出場',
        'meta' => '2025.12 | TOKYO',
        'image' => 'images/4320DD74-064A-4150-8AB8-472285C550CA.JPG',
        'content' => '
            <p style="margin-bottom: 2rem;">
                東京都のオープンデータをハックして、「本当に泳ぎやすいのはどこか？」を暴く都営プールランキングマップを開発。お役所データにTHG独自の視点を掛け合わせ、忖度なしのガチ評価を実装しました。
            </p>
            <p style="margin-bottom: 2rem;">
                バズるアイディアを支えるのは、迷わせないUIと直感的な操作感。一目でお気に入りが見つかる画面遷移にこだわり、プロトタイプでありながらサービス級の完成度を芽吹かせました。
            </p>
        '
    ],
];

// URLからIDを取得し、存在しない場合は1とする
$event_id = $_GET['id'] ?? '1';
if (!array_key_exists($event_id, $events)) {
    $event_id = '1';
}
$event = $events[$event_id];
?>

<section class="container-small" style="padding-top: 20vh;">
    <div class="page-label" style="font-family: var(--font-heading); font-weight: 700; margin-bottom: 2rem; letter-spacing: 0.05em;">
        (EVENT REPORT)
    </div>

    <h1 style="font-family: var(--font-heading); font-size: clamp(3rem, 6vw, 5rem); line-height: 1; margin-bottom: 1rem; word-wrap: break-word;">
        <?= $event['title'] ?>
    </h1>

    <div style="font-family: var(--font-mono); font-weight: 700; color: #888; margin-bottom: 4rem; font-size: 0.9rem;">
        <?= $event['meta'] ?>
    </div>

    <?php if (!empty($event['image'])): ?>
    <div style="width:100%; height:60vh; overflow:hidden; margin-bottom:4rem; border-radius:4px; background:#f0f0f0;">
        <img src="<?= $event['image'] ?>" style="width:100%; height:130%; object-fit:cover; margin-top:-15%; filter: grayscale(10%);" class="parallax-img">
    </div>
    <?php endif; ?>

    <div style="border-top: 2px solid var(--text-color); padding-top: 3rem; font-size: 1.1rem; line-height: 2.2; font-weight: 500;">
        <?= $event['content'] ?>
    </div>

    <div style="margin-top: 10vh; text-align: left;">
        <a href="?p=events" style="font-weight: 700; border-bottom: 2px solid var(--text-color); padding-bottom: 5px; transition: opacity 0.3s;" onmouseover="this.style.opacity='0.5'" onmouseout="this.style.opacity='1'">&larr; BACK TO EVENTS</a>
    </div>
</section>