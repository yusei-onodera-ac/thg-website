<?php
// 送信ステータス管理
$message_status = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
    $position = htmlspecialchars($_POST['position'] ?? '', ENT_QUOTES, 'UTF-8');
    $portfolio = htmlspecialchars($_POST['portfolio'] ?? '', ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');

    if (!empty($name) && !empty($email) && !empty($message)) {
        // 通知を受け取りたいメールアドレス
        $to = "onodera.888.420@icloud.com"; 
        
        $subject = "[THG Inc.] RECRUIT エントリー通知";
        $body = "採用へのエントリーがありました。\n\n";
        $body .= "【NAME】\n{$name}\n\n";
        $body .= "【EMAIL】\n{$email}\n\n";
        $body .= "【POSITION】\n{$position}\n\n";
        $body .= "【PORTFOLIO / GITHUB】\n{$portfolio}\n\n";
        $body .= "【MESSAGE】\n{$message}\n";

        // 文字化け対策
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        // 送信元ヘッダー
        $headers = "From: {$email}";

        // メール送信実行
        if (mb_send_mail($to, $subject, $body, $headers)) {
            $message_status = 'success';
        } else {
            $message_status = 'error';
        }
    } else {
        $message_status = 'error';
    }
}
?>

<section class="container" style="padding-top: 15vh;">
    <h1 class="giant-logo">RECRUIT</h1>

    <div class="statement-text">
        圧倒的な熱量で技術を探求するメンバーを募集しています。<br>
        「動けばいい」という妥協を許さず、技術の限界に挑戦したいエンジニアへ。
    </div>

    <div class="split-section">
        <h2 class="split-title">OPEN<br>POSITIONS</h2>
        <div class="split-content">
            <div style="margin-bottom: 4rem; border-bottom: 1px solid #ddd; padding-bottom: 3rem;">
                <h3 style="font-size:2rem; font-weight:900; margin-bottom: 1rem;">Backend Engineer</h3>
                <p>Java, Spring Bootを用いた堅牢なシステム設計。DDD（ドメイン駆動設計）への理解がある方を歓迎します。</p>
            </div>
            
            <div style="margin-bottom: 4rem; border-bottom: 1px solid #ddd; padding-bottom: 3rem;">
                <h3 style="font-size:2rem; font-weight:900; margin-bottom: 1rem;">Frontend Engineer</h3>
                <p>Next.js, TypeScriptを用いたモダンなUI/UX開発。APIとのシームレスな連携を構築できる方。</p>
            </div>
        </div>
    </div>

    <div class="split-section" id="entry-form">
        <h2 class="split-title">ENTRY<br>FORM</h2>
        <div class="split-content">
            
            <?php if ($message_status === 'success'): ?>
                <div style="padding: 3rem; background: var(--text-color); color: var(--bg-color); text-align: center;">
                    <h3 style="font-size: 1.5rem; margin-bottom: 1rem; font-family: var(--font-heading);">THANK YOU.</h3>
                    <p>エントリーを受け付けました。<br>確認次第、担当者よりご連絡いたします。</p>
                </div>
            <?php else: ?>
                <?php if ($message_status === 'error'): ?>
                    <p style="color: red; margin-bottom: 2rem; font-weight: bold;">※送信に失敗しました。入力内容をご確認ください。</p>
                <?php endif; ?>

                <form action="?p=recruit#entry-form" method="POST">
                    <div style="margin-bottom: 2.5rem;">
                        <label style="display:block; font-weight:700; font-family:var(--font-mono); margin-bottom:0.5rem;">NAME</label>
                        <input type="text" name="name" required style="width:100%; border:none; border-bottom:2px solid var(--text-color); padding:0.8rem 0; font-size:1.2rem; background:transparent; outline:none; border-radius:0;">
                    </div>

                    <div style="margin-bottom: 2.5rem;">
                        <label style="display:block; font-weight:700; font-family:var(--font-mono); margin-bottom:0.5rem;">EMAIL</label>
                        <input type="email" name="email" required style="width:100%; border:none; border-bottom:2px solid var(--text-color); padding:0.8rem 0; font-size:1.2rem; background:transparent; outline:none; border-radius:0;">
                    </div>

                    <div style="margin-bottom: 2.5rem;">
                        <label style="display:block; font-weight:700; font-family:var(--font-mono); margin-bottom:0.5rem;">POSITION</label>
                        <select name="position" style="width:100%; border:none; border-bottom:2px solid var(--text-color); padding:0.8rem 0; font-size:1.2rem; background:transparent; outline:none; border-radius:0; cursor:pointer;">
                            <option value="Backend Engineer">Backend Engineer</option>
                            <option value="Frontend Engineer">Frontend Engineer</option>
                            <option value="Trainee / Other">Trainee / Other</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 2.5rem;">
                        <label style="display:block; font-weight:700; font-family:var(--font-mono); margin-bottom:0.5rem;">GITHUB / PORTFOLIO URL</label>
                        <input type="text" name="portfolio" placeholder="https://github.com/..." style="width:100%; border:none; border-bottom:2px solid var(--text-color); padding:0.8rem 0; font-size:1.2rem; background:transparent; outline:none; border-radius:0;">
                    </div>

                    <div style="margin-bottom: 3.5rem;">
                        <label style="display:block; font-weight:700; font-family:var(--font-mono); margin-bottom:0.5rem;">MESSAGE / MOTIVATION</label>
                        <textarea name="message" rows="4" required style="width:100%; border:none; border-bottom:2px solid var(--text-color); padding:0.8rem 0; font-size:1.2rem; background:transparent; outline:none; resize:vertical; border-radius:0;"></textarea>
                    </div>

                    <button type="submit" style="background:var(--text-color); color:var(--bg-color); border:none; padding:1.2rem 3.5rem; font-size:1.1rem; font-weight:700; font-family:var(--font-mono); cursor:pointer;">SUBMIT ENTRY &rarr;</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</section>