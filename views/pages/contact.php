<?php
$message_status = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject_input = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    $company = trim($_POST['company'] ?? '');

    // Honeypot（bot対策）
    if ($company !== '') {
        $message_status = 'error';
    } else {
        $safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $safe_subject = htmlspecialchars($subject_input, ENT_QUOTES, 'UTF-8');
        $safe_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

        if ($safe_name !== '' && filter_var($safe_email, FILTER_VALIDATE_EMAIL) && $safe_subject !== '' && $safe_message !== '') {
            $to = 'onodera.888.420@icloud.com';
            $subject = '[THG Inc.] お問い合わせ通知';

            $body = "Webサイトからお問い合わせが届きました。\n\n";
            $body .= "【お名前】\n{$safe_name}\n\n";
            $body .= "【メールアドレス】\n{$safe_email}\n\n";
            $body .= "【件名】\n{$safe_subject}\n\n";
            $body .= "【お問い合わせ内容】\n{$safe_message}\n";

            mb_language('Japanese');
            mb_internal_encoding('UTF-8');

            // 送信元は自ドメイン固定、返信先に入力メールを使う
            $headers = [];
            $headers[] = 'From: THG Website <noreply@tokyo-hack-group.com>';
            $headers[] = "Reply-To: {$safe_email}";
            $headers[] = 'Content-Type: text/plain; charset=UTF-8';

            if (mb_send_mail($to, $subject, $body, implode("\r\n", $headers))) {
                $message_status = 'success';
            } else {
                error_log('[THG contact] mail send failed.');
                $message_status = 'error';
            }
        } else {
            $message_status = 'error';
        }
    }
}
?>

<section class="container" style="padding-top: 15vh;">
    <h1 class="giant-logo">CONTACT</h1>

    <div class="statement-text">
        ご相談・ご質問・協業のご相談など、お気軽にご連絡ください。<br>
        内容を確認のうえ、担当者よりご返信いたします。
    </div>

    <div class="split-section" id="contact-form">
        <h2 class="split-title">CONTACT<br>FORM</h2>
        <div class="split-content">
            <?php if ($message_status === 'success'): ?>
                <div style="padding: 3rem; background: var(--text-color); color: var(--bg-color); text-align: center;">
                    <h3 style="font-size: 1.5rem; margin-bottom: 1rem; font-family: var(--font-heading);">THANK YOU.</h3>
                    <p>お問い合わせを受け付けました。<br>2〜3営業日以内を目安に返信いたします。</p>
                </div>
            <?php else: ?>
                <?php if ($message_status === 'error'): ?>
                    <p style="color: red; margin-bottom: 2rem; font-weight: bold;">※送信に失敗しました。入力内容をご確認ください。</p>
                <?php endif; ?>

                <form action="?p=contact#contact-form" method="POST">
                    <input type="text" name="company" autocomplete="off" tabindex="-1" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;">

                    <div style="margin-bottom: 2.5rem;">
                        <label style="display:block; font-weight:700; font-family:var(--font-mono); margin-bottom:0.5rem;">NAME（必須）</label>
                        <input type="text" name="name" required>
                    </div>

                    <div style="margin-bottom: 2.5rem;">
                        <label style="display:block; font-weight:700; font-family:var(--font-mono); margin-bottom:0.5rem;">EMAIL（必須）</label>
                        <input type="email" name="email" required>
                    </div>

                    <div style="margin-bottom: 2.5rem;">
                        <label style="display:block; font-weight:700; font-family:var(--font-mono); margin-bottom:0.5rem;">SUBJECT（必須）</label>
                        <input type="text" name="subject" required>
                    </div>

                    <div style="margin-bottom: 3.5rem;">
                        <label style="display:block; font-weight:700; font-family:var(--font-mono); margin-bottom:0.5rem;">MESSAGE（必須）</label>
                        <textarea name="message" rows="6" required></textarea>
                    </div>

                    <button type="submit" style="background:var(--text-color); color:var(--bg-color); border:none; padding:1.2rem 3.5rem; font-size:1.1rem; font-weight:700; font-family:var(--font-mono); cursor:pointer;">SEND MESSAGE &rarr;</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</section>
