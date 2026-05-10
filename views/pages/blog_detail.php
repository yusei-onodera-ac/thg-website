<section class="container-small">
    <a href="?p=blog" style="display: inline-block; margin-bottom: 2rem; font-weight: 700; color: #888; letter-spacing: 0.1em; font-size: 0.85rem;">&larr; BACK TO BLOG</a>
    
    <div style="margin-bottom: 1rem; color: var(--text-color); font-weight: 700;">
        <span style="border: 1px solid var(--text-color); padding: 4px 12px; font-size: 0.8rem; border-radius: 20px;">Architecture</span>
        <span style="margin-left: 1rem; font-size: 0.85rem; color: #888;">2026.05.01</span>
    </div>
    
    <h1 class="section-title" style="font-size: 2.5rem; margin-bottom: 4rem;">値オブジェクト(Value Object)が生み出す堅牢なドメインモデル</h1>
    
    <div style="line-height: 2.2; color: #333; font-size: 1.1rem;">
        <p style="margin-bottom: 2rem;">
            Javaでドメイン駆動設計（DDD）を実践する際、最も強力な武器の一つとなるのが「値オブジェクト（Value Object）」です。
            今回は、プリミティブ型への執着を捨て、堅牢なモデルを構築するためのアプローチを解説します。
        </p>
        <h3 style="margin: 3rem 0 1rem; font-size: 1.5rem; border-left: 4px solid var(--text-color); padding-left: 1rem;">なぜStringやintをそのまま使ってはいけないのか？</h3>
        <p>
            例えば、ユーザーのメールアドレスを単なる `String` で表現した場合、その文字列が本当にメールアドレスの形式を満たしているかは、使用する側で毎回バリデーションする必要があります...
        </p>
    </div>
</section>