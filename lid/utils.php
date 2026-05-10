<?php
// 簡易的なデータストア（本来はDBから取得する部分）
function get_data_by_id($array, $id) {
    foreach ($array as $item) {
        if ($item['id'] == $id) return $item;
    }
    return null;
}

$all_projects = [
    1 => ['title' => 'Stock Simulator Engine', 'date' => '2026.04', 'tech' => 'Java, Phaser', 'content' => 'リアルタイムに変動する株価指数をシミュレートするコアエンジン。DDD（ドメイン駆動設計）を採用し、堅牢なロジックを実現。'],
    2 => ['title' => 'Open Data Visualizer', 'date' => '2026.05', 'tech' => 'Next.js, Python', 'content' => '東京都が公開している交通オープンデータを解析し、3Dマップ上にリアルタイムの混雑状況を投影します。']
];

$all_blogs = [
    1 => ['title' => 'JavaにおけるValue Objectの重要性', 'date' => '2026.05.01', 'cat' => 'Java', 'body' => '不変性を保つための設計判断について解説します...'],
    2 => ['title' => 'ハッカソンで勝つためのチームビルディング', 'date' => '2026.05.02', 'cat' => 'Hackathon', 'body' => '役割分担と並行開発のコツについて...']
];
?>