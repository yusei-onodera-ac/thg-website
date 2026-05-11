# THG  | Tokyo Hack Group Corporate Site

![THG Inc. Preview](https://via.placeholder.com/1200x630.png?text=THG+INC.+Corporate+Site) **THG  (Tokyo Hack Group)** の公式サイトのソースコードです。
ハッカソンという極限の環境下で、圧倒的なスピードと堅牢なアーキテクチャ（DDD, オブジェクト指向）を武器に戦うエンジニア集団のアイデンティティを、洗練されたタイポグラフィとシームレスなアニメーションで表現しています。

🔗 **Live Demo:** [https://tokyo-hack-group.com](https://tokyo-hack-group.com) ---

## 🚀 Features

- **Extreme Typography**: HUMAN MADEライクな、大胆かつクリーンなタイポグラフィ・デザイン。
- **Fluid Animation**: GSAP (GreenSock) と Lenis を組み合わせた、慣性スクロールとリッチなスクロールアニメーション。
- **Native-Like Mobile UI**: スマートフォン表示時は、ネイティブアプリのようなフルスクリーン・オーバーレイメニューとスナップスクロールを実装。
- **No-DB Architecture**: データベース（MySQL等）を使用しない、PHPのフロントコントローラパターンによる静的かつセキュアな構成。
- **Built-in Contact Form**: PHPの `mb_send_mail()` を利用した、シンプルで確実なエントリー／お問い合わせフォーム。

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Backend**: PHP 8.x
- **Animation**: [GSAP](https://gsap.com/) (ScrollTrigger)
- **Smooth Scroll**: [Lenis](https://lenis.studiofreight.com/)

## 📂 Directory Structure

```text
THG-WEBSITE/
├── css/
│   └── style.css          # グローバルスタイル、レスポンシブ、アニメーション定義
├── images/                # 写真、アセット類
├── js/
│   └── main.js            # GSAPアニメーション、Lenis初期化、カーソルストーカー
├── views/                 # テンプレートファイル
│   ├── components/        # 共通パーツ (header.php, footer.php)
│   └── pages/             # 各ページコンポーネント (top, mission, projects, recruit...)
├── .htaccess              # URLリライト、セキュリティ設定
└── index.php              # フロントコントローラ（全リクエストのルーティング）
