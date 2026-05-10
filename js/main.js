gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
    // 慣性スクロール
    const lenis = new Lenis({ duration: 1.2, smooth: true });
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => { lenis.raf(time * 1000) });

    // マウスストーカー
    const cursor = document.getElementById('cursor-stalker');
    window.addEventListener('mousemove', (e) => {
        if(window.innerWidth > 900) { // PCのみ動かす
            gsap.to(cursor, { x: e.clientX, y: e.clientY, duration: 0.1 });
        }
    });

    document.querySelectorAll('a, .tech-card').forEach(el => {
        el.addEventListener('mouseenter', () => cursor.classList.add('active'));
        el.addEventListener('mouseleave', () => cursor.classList.remove('active'));
    });

    // 巨大ロゴのアニメーション
    const giantLogos = document.querySelectorAll('.giant-logo');
    giantLogos.forEach(logo => {
        const text = logo.textContent;
        logo.innerHTML = text.split('').map(char => `<span>${char === ' ' ? '&nbsp;' : char}</span>`).join('');
        gsap.from(logo.querySelectorAll('span'), {
            scrollTrigger: { trigger: logo, start: "top 90%" },
            y: 100, opacity: 0, rotationY: 45, stagger: 0.05, duration: 1.2, ease: "expo.out"
        });
    });

    // 本文の出現
    document.querySelectorAll('.split-section, .grid-cards > *').forEach(el => {
        gsap.from(el, {
            scrollTrigger: { trigger: el, start: "top 85%" },
            y: 50, opacity: 0, duration: 1, ease: "power3.out"
        });
    });

    // マウスパララックス (Hero画像)
    const heroSection = document.querySelector('.top-hero');
    const heroBg = document.querySelector('.hero-bg-img');

    if (heroSection && heroBg && window.innerWidth > 900) { // PCのみ
        heroSection.addEventListener('mousemove', (e) => {
            const { width, height } = heroSection.getBoundingClientRect();
            const x = e.clientX / width - 0.5;
            const y = e.clientY / height - 0.5;
            gsap.to(heroBg, { x: x * -30, y: y * -30, duration: 0.6, ease: "power2.out" });
        });
    }

    // ＝ ここから追加：スマホ用メニューの開閉制御 ＝
    const menuBtn = document.querySelector('.mobile-menu-btn');
    const overlayNav = document.querySelector('.mobile-overlay-nav');

    if (menuBtn && overlayNav) {
        menuBtn.addEventListener('click', () => {
            menuBtn.classList.toggle('open');
            overlayNav.classList.toggle('active');
            
            // メニューが開いている時は背景のスクロールを止める
            if (overlayNav.classList.contains('active')) {
                lenis.stop();
                document.body.style.overflow = 'hidden';
            } else {
                lenis.start();
                document.body.style.overflow = '';
            }
        });
    }
});