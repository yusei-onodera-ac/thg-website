<?php
$cat = $_GET['cat'] ?? 'Architecture';
?>
<section class="container">
    <a href="?p=blog" style="display: inline-block; margin-bottom: 2rem; font-weight: 700; color: #888; letter-spacing: 0.1em; font-size: 0.85rem;">&larr; ALL ARTICLES</a>
    
    <span class="section-label">Category</span>
    <h1 class="section-title">#<?php echo htmlspecialchars($cat); ?></h1>

    <div style="margin-top: 4rem;">
        <a href="?p=blog_detail&id=1" class="list-item">
            <p class="list-meta">2026.05 | Architecture</p>
            <h3 class="list-title">値オブジェクト(Value Object)が生み出す堅牢なドメインモデル</h3>
        </a>
    </div>
</section>