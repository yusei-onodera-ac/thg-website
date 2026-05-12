# THG  | Tokyo Hack Group Corporate Site

![THG . Preview](https://via.placeholder.com/1200x630.png?text=THG+INC.+Corporate+Site) **THG  (Tokyo Hack Group)** の公式サイトのソースコードです。

🔗 **Live Demo:** [https://tokyo-hack-group.com](https://tokyo-hack-group.com) ---

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript　(choko)
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
