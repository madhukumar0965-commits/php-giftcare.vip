<?php
$steps = [
    [
        'number' => '01',
        'title' => 'Visit the correct website',
        'body_before' => 'Open your browser and navigate to the GiftCardMall/MyGift website specified in your card documentation. You may find it at ',
        'link_text' => 'GiftCardMall/MyGift cardholder site',
        'body_after' => ', but always verify the actual domain before entering your card details.',
    ],
    [
        'number' => '02',
        'title' => 'Enter your card information',
        'body' => 'If your card is supported by the website, enter the 16-Digit card number, expiration date, and security code. Make sure the information matches the details printed on your card.',
    ],
    [
        'number' => '03',
        'title' => 'Complete verification',
        'body' => 'Follow any security verification instructions displayed on the page. If the page does not work, double-check your information or try another browser.',
    ],
    [
        'number' => '04',
        'title' => 'Review your remaining funds',
        'body_before' => 'Once your details have been verified, review the displayed ',
        'body_bold' => 'giftcardmall balance',
        'body_after' => '. Depending on the card, you may also be able to view recent transactions or pending authorizations.',
    ],
    [
        'number' => '05',
        'title' => 'Keep your information secure',
        'body_bold' => 'After completing your giftcardmall mygift check balance',
        'body_after_bold' => ', close the page if you are using a shared computer. Never share your full card number or security code with an unsolicited caller or an unverified website.',
    ]
];

$faqs = [
    [
        'question' => 'How do I check my giftcardmall/mygift balance?',
        'answer' => 'Visit the verified balance-checking website specified in your card documentation, enter the requested card details, and review the available funds. This is the basic giftcardmall/mygift balance process.',
    ],
    [
        'question' => 'How do I complete giftcardmall activation?',
        'answer' => 'Check your card packaging and receipt first. If activation is required, follow the instructions provided by the retailer or issuer. Some cards are activated automatically at purchase.',
    ],
    [
        'question' => 'How can I use the giftcardmall register card option?',
        'answer' => 'If your card supports registration, open the relevant registration or profile section on the verified website and follow the instructions to provide the requested billing information.',
    ],
    [
        'question' => 'What should I do if my giftcardmall balance is incorrect?',
        'answer' => 'Review recent transactions and pending authorizations. If the amount still appears incorrect, contact the issuer through the support number printed on your card.',
    ],
    [
        'question' => 'What does mcgiftcard balance mean?',
        'answer' => 'The phrase mcgiftcard balance may be used as a search term for a prepaid or gift card balance. However, identify the exact card issuer and product before choosing a balance-checking website. Do not assume every card using this term is managed by GiftCardMall or MyGift.',
    ],
    [
        'question' => 'Is mcgift giftcardmall the same as MyGift?',
        'answer' => 'People may use mcgift giftcardmall and mygift giftcardmall as search variations when looking for card services. These phrases alone do not establish that a particular website or card is officially associated with GiftCardMall. Verify the card issuer and the website printed on the card documentation before entering any details.',
    ],
    [
        'question' => 'Why is my giftcardmall/mygift card being declined?',
        'answer' => 'A transaction may be declined because the card has not been activated, the purchase exceeds the available balance, the billing information does not match, or the merchant does not accept that card type. Review the card terms and contact the issuer if the problem continues.',
    ],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#251a32">
    <meta name="description" content="Learn how to check giftcardmall/mygift balance or www.giftcardmall.com/mygift card activation, Visa payment basics and practical answers to common prepaid gift card questions.">
    <title>GiftCardMall/MyGift | Check Your Balance | Official Website
</title>
    <style>
        :root {
            color-scheme: light;
            --ink: #251a32;
            --muted: #655f68;
            --paper: #f8f6f0;
            --white: #fffefa;
            --purple: #8054d6;
            --purple-soft: #eee7fa;
            --lime: #d6f58a;
            --line: #dfd9d0;
            --serif: Georgia, "Times New Roman", serif;
            --sans: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; scroll-padding-top: 90px; }
        body { margin: 0; background: var(--paper); color: var(--ink); font-family: var(--sans); -webkit-font-smoothing: antialiased; }
        a { color: inherit; }
        .skip-link { position: absolute; top: -50px; left: 16px; z-index: 5; padding: 10px 14px; background: var(--white); border-radius: 8px; }
        .skip-link:focus { top: 10px; }
        .notice { padding: 10px 20px; background: var(--ink); color: #fff; text-align: center; font-size: 12px; font-weight: 650; letter-spacing: .015em; }
        .notice span { color: var(--lime); padding-right: 7px; }
        .site-header { border-bottom: 1px solid var(--line); }
        .header-inner { width: min(1120px, calc(100% - 48px)); min-height: 76px; margin: auto; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { display: inline-flex; align-items: center; gap: 12px; text-decoration: none; }
        .brand-mark { display: grid; width: 38px; height: 38px; place-items: center; border-radius: 13px; background: var(--ink); color: var(--lime); font-family: var(--serif); font-size: 27px; font-weight: 700; font-style: italic; }
        .brand-name { display: block; font-size: 16px; font-weight: 800; letter-spacing: -.045em; }
        .brand-tag { display: block; margin-top: 3px; color: var(--muted); font-size: 9px; font-weight: 750; letter-spacing: .2em; text-transform: uppercase; }
        .nav-link { border: 1px solid var(--ink); border-radius: 30px; padding: 11px 18px; font-size: 12px; font-weight: 700; text-decoration: none; transition: background .2s, color .2s; }
        .nav-link:hover { background: var(--ink); color: white; }
        main { width: min(1120px, calc(100% - 48px)); margin: auto; }
        .breadcrumb { padding: 22px 0 24px; color: var(--muted); font-size: 12px; font-weight: 600; }
        .breadcrumb a { text-decoration: none; }
        .breadcrumb span { margin: 0 9px; color: #aaa2a7; }
        .hero { display: grid; grid-template-columns: 1.02fr .98fr; align-items: center; gap: 50px; padding: 25px 0 66px; }
        .hero h1 { font-size: clamp(34px, 4vw, 48px); line-height: 1.05; }
        .eyebrow { display: flex; align-items: center; gap: 12px; color: #66548b; font-size: 11px; font-weight: 800; letter-spacing: .17em; line-height: 1.5; text-transform: uppercase; }
        .eyebrow::before { width: 30px; height: 2px; flex: 0 0 30px; background: var(--purple); content: ""; }
        h1, h2, h3, p { margin-top: 0; }
        h1 { margin: 23px 0 24px; font: 500 clamp(48px, 6vw, 72px)/.98 var(--serif); letter-spacing: -.06em; }
        h1 em { color: var(--purple); font-weight: 400; }
        .hero-copy { max-width: 565px; color: var(--muted); font-size: 15px; line-height: 1.9; }
        .hero-copy strong { color: var(--ink); }
        .hero-actions { display: flex; flex-wrap: wrap; gap: 12px; margin: 27px 0 17px; }
        .button { display: inline-flex; min-height: 48px; align-items: center; justify-content: center; gap: 10px; border: 1px solid var(--ink); border-radius: 28px; padding: 0 21px; font-size: 12px; font-weight: 800; text-decoration: none; transition: transform .2s, box-shadow .2s; }
        .button:hover { transform: translateY(-2px); box-shadow: 0 6px 15px #251a3217; }
        .button-primary { border-color: #c0e371; background: var(--lime); }
        .button-secondary { background: transparent; }
        .reassurance { display: flex; align-items: flex-start; gap: 9px; max-width: 470px; margin: 0; color: var(--muted); font-size: 11px; line-height: 1.7; }
        .reassurance span { display: inline-grid; width: 19px; height: 19px; flex: 0 0 19px; place-items: center; border-radius: 50%; background: var(--purple-soft); color: var(--purple); font-weight: 900; }
        .hero-art { position: relative; min-height: 370px; overflow: hidden; border-radius: 24px; background: #eee9df; }
        .art-orb { position: absolute; top: -80px; right: -40px; width: 290px; height: 290px; border: 1px solid #ffffffa6; border-radius: 50%; }
        .art-orb::after { position: absolute; inset: 25px; border: 1px solid #ffffff85; border-radius: 50%; content: ""; }
        .art-label { position: absolute; top: 28px; left: 30px; color: #625b67; font-size: 11px; font-weight: 750; letter-spacing: .04em; }
        .gift-card { position: absolute; top: 78px; left: 50%; width: min(340px, 76%); height: 200px; padding: 23px; transform: translateX(-50%) rotate(-6deg); border: 1px solid #ffffff66; border-radius: 17px; background: linear-gradient(135deg, #3c254e, #8159ce 75%, #a178e7); box-shadow: 0 22px 40px #39234633; color: white; }
        .card-top { display: flex; justify-content: space-between; align-items: center; color: #ffffffd9; font-size: 9px; font-weight: 750; letter-spacing: .16em; }
        .card-chip { position: absolute; top: 78px; left: 24px; width: 34px; height: 27px; border: 1px solid #eedda977; border-radius: 6px; background: linear-gradient(135deg, #f6db8f, #c99e4e); }
        .card-number { position: absolute; bottom: 40px; left: 24px; color: #ffffffd9; font-size: 13px; letter-spacing: .2em; }
        .card-foot { position: absolute; right: 24px; bottom: 20px; color: #ffffffbf; font-size: 8px; font-weight: 700; letter-spacing: .13em; }
        .balance-note { position: absolute; right: 20px; bottom: 21px; width: 235px; padding: 18px; transform: rotate(3deg); border: 1px solid #e8e1d7; border-radius: 14px; background: var(--white); box-shadow: 0 14px 32px #251a3218; }
        .note-top { display: flex; justify-content: space-between; color: var(--muted); font-size: 11px; font-weight: 650; }
        .balance-note h3 { margin: 13px 0 15px; font: 500 19px/1.2 var(--serif); letter-spacing: -.025em; }
        .note-row { display: flex; justify-content: space-between; border-top: 1px solid var(--line); padding-top: 10px; color: var(--muted); font-size: 10px; }
        .note-row strong { color: var(--ink); }
        .art-caption { position: absolute; bottom: 8px; left: 15px; color: #766f76; font-size: 9px; }
        .topic-strip { display: grid; grid-template-columns: repeat(3, 1fr); border-top: 1px solid var(--line); border-bottom: 1px solid var(--line); }
        .topic { display: flex; min-height: 70px; align-items: center; justify-content: center; gap: 11px; color: #48404c; font-size: 12px; font-weight: 700; }
        .topic + .topic { border-left: 1px solid var(--line); }
        .topic-icon { display: grid; width: 28px; height: 28px; place-items: center; border-radius: 50%; background: var(--purple-soft); color: var(--purple); font-size: 14px; }
        .section { padding: 92px 0; border-bottom: 1px solid var(--line); }
        .section-kicker { margin-bottom: 19px; color: #746b78; font-size: 10px; font-weight: 800; letter-spacing: .15em; text-transform: uppercase; }
        .section-heading { max-width: 660px; margin-bottom: 13px; font: 500 clamp(36px, 4.6vw, 53px)/1.04 var(--serif); letter-spacing: -.045em; }
        .section-intro { max-width: 640px; margin-bottom: 34px; color: var(--muted); font-size: 14px; line-height: 1.8; }
        .cardholder-guide { display: grid; grid-template-columns: 1.05fr .95fr; gap: 18px; align-items: stretch; }
        .cardholder-guide > article { padding: 30px; border: 1px solid var(--line); border-radius: 18px; background: var(--white); box-shadow: 0 12px 30px #251a3208; }
        .cardholder-guide .section-kicker { margin-bottom: 13px; }
        .cardholder-guide .section-heading { font-size: clamp(30px, 3.4vw, 40px); }
        .cardholder-guide .section-intro { margin-bottom: 18px; font-size: 13px; }
        .cardholder-guide > article > .section-intro:last-child { margin-bottom: 0; }
        .registration-checklist { display: grid; gap: 0; margin: 4px 0 22px; padding: 0; color: var(--muted); font-size: 12px; line-height: 1.7; list-style: none; counter-reset: checklist; }
        .registration-checklist li { position: relative; padding: 12px 0 12px 43px; border-bottom: 1px solid var(--line); counter-increment: checklist; }
        .registration-checklist li::before { position: absolute; top: 10px; left: 0; display: grid; width: 29px; height: 29px; place-items: center; border-radius: 10px; background: var(--purple-soft); color: var(--purple); content: counter(checklist, decimal-leading-zero); font-size: 10px; font-weight: 800; }
        .cardholder-guide > article + article { background: #f0eaf9; border-color: #e4d9f5; }
        .quick-grid { display: grid; grid-template-columns: 1.2fr .8fr; gap: 18px; }
        .hero .quick-grid { grid-column: 1 / -1; }
        .quick-card { padding: 26px; border: 1px solid var(--line); border-radius: 16px; background: var(--white); }
        .quick-card h3 { margin: 11px 0; font: 500 24px/1.22 var(--serif); letter-spacing: -.025em; }
        .quick-card p { margin-bottom: 0; color: var(--muted); font-size: 13px; line-height: 1.8; }
        .quick-card .card-label { color: #71647f; font-size: 10px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; }
        .quote-card { display: flex; flex-direction: column; justify-content: center; background: #f0eaf9; }
        .quote-mark { height: 30px; color: var(--purple); font: 44px/1 var(--serif); }
        .quote-card strong { display: block; max-width: 310px; margin-bottom: 10px; font: 500 21px/1.28 var(--serif); }
        .step-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; }
        .step-card { position: relative; min-height: 205px; padding: 23px; border: 1px solid var(--line); border-radius: 15px; background: var(--white); }
        .step-number { display: grid; width: 35px; height: 35px; place-items: center; margin-bottom: 24px; border-radius: 50%; background: var(--purple-soft); color: var(--purple); font-size: 11px; font-weight: 800; }
        .step-card h3, .help-card h3, .resource-card h3 { margin-bottom: 9px; font: 500 21px/1.2 var(--serif); letter-spacing: -.02em; }
        .step-card p, .help-card p, .resource-card p { margin-bottom: 0; color: var(--muted); font-size: 12px; line-height: 1.75; }
        .issuer-box { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 18px; margin-top: 18px; padding: 21px 24px; border-radius: 14px; background: #eee9df; }
        .issuer-box strong { display: block; margin-bottom: 6px; font-size: 12px; }
        .issuer-box p { margin: 0; color: var(--muted); font-size: 11px; line-height: 1.7; }
        .issuer-link { flex: 0 0 auto; border-bottom: 1px solid var(--ink); font-size: 12px; font-weight: 750; text-decoration: none; }
        .help-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 13px; }
        .help-card { min-height: 178px; padding: 21px; border: 1px solid var(--line); border-radius: 15px; background: var(--white); }
        .help-icon { display: grid; width: 30px; height: 30px; place-items: center; margin-bottom: 18px; border-radius: 9px; background: var(--purple-soft); color: var(--purple); font-size: 15px; font-weight: 750; }
        .safety-panel { display: grid; grid-template-columns: 1fr 1fr; gap: 45px; padding: 38px; border-radius: 22px; background: var(--ink); color: white; }
        .safety-panel .section-kicker { color: #c8b6e8; }
        .safety-panel .section-heading { font-size: clamp(34px, 4vw, 46px); }
        .safety-panel .section-intro { margin: 0; color: #e1dce5; }
        .safety-list { display: grid; gap: 15px; align-content: center; margin: 0; padding: 0; list-style: none; }
        .safety-list li { display: flex; gap: 12px; align-items: flex-start; color: #f1eef3; font-size: 12px; line-height: 1.65; }
        .safety-list span { display: grid; width: 21px; height: 21px; flex: 0 0 21px; place-items: center; border-radius: 50%; background: var(--lime); color: var(--ink); font-size: 11px; font-weight: 900; }
        .faq-layout { display: grid; grid-template-columns: .8fr 1.2fr; gap: 55px; }
        .faq-layout .section-heading { font-size: clamp(38px, 4.5vw, 52px); }
        .faq-list { border-top: 1px solid var(--line); }
        details { border-bottom: 1px solid var(--line); }
        summary { display: flex; min-height: 60px; align-items: center; justify-content: space-between; gap: 18px; cursor: pointer; list-style: none; font-size: 13px; font-weight: 700; }
        summary > span { min-width: 0; flex: 1; }
        summary::-webkit-details-marker { display: none; }
        summary::after { content: "+"; color: var(--purple); font-size: 22px; font-weight: 400; }
        details[open] summary::after { content: "−"; }
        details p { max-width: 610px; margin: -2px 32px 18px 0; color: var(--muted); font-size: 12px; line-height: 1.8; }
        .resources { display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px; }
        .resource-card { padding: 23px; border: 1px solid var(--line); border-radius: 15px; background: var(--white); }
        .resource-card a { display: inline-block; margin-top: 18px; font-size: 11px; font-weight: 800; text-decoration-color: var(--purple); text-underline-offset: 4px; }
        footer { margin-top: 60px; background: #efece5; }
        .footer-inner { width: min(1120px, calc(100% - 48px)); margin: auto; padding: 42px 0 24px; }
        .footer-top { display: grid; grid-template-columns: 1.4fr 1fr; gap: 55px; padding-bottom: 30px; border-bottom: 1px solid #d7d1c8; }
        .footer-copy { max-width: 570px; margin: 14px 0 0; color: var(--muted); font-size: 11px; line-height: 1.8; }
        .footer-nav { display: flex; flex-wrap: wrap; align-content: flex-start; justify-content: flex-end; gap: 13px 20px; padding-top: 7px; }
        .footer-nav a { color: #49414d; font-size: 11px; font-weight: 700; text-decoration: none; }
        .footer-bottom { display: flex; justify-content: space-between; gap: 15px; padding-top: 18px; color: var(--muted); font-size: 10px; line-height: 1.6; }
        @media (max-width: 760px) {
            .header-inner, main, .footer-inner { width: min(100% - 32px, 560px); }
            .header-inner { min-height: 68px; }
            .brand-mark { width: 35px; height: 35px; }
            .brand-tag { font-size: 8px; }
            .nav-link { padding: 10px 12px; font-size: 10px; }
            .breadcrumb { padding: 18px 0; font-size: 10px; }
            .hero { grid-template-columns: 1fr; gap: 30px; padding: 18px 0 43px; }
            .hero h1 { font-size: clamp(34px, 8vw, 44px); }
            h1 { font-size: clamp(49px, 12vw, 67px); }
            .hero-copy { font-size: 14px; }
            .hero-art { min-height: 340px; }
            .topic { min-height: 65px; gap: 7px; font-size: 9px; text-align: center; }
            .topic-icon { width: 24px; height: 24px; flex: 0 0 24px; }
            .section { padding: 65px 0; }
            .quick-grid, .faq-layout, .safety-panel { grid-template-columns: 1fr; gap: 20px; }
            .cardholder-guide { grid-template-columns: 1fr; }
            .cardholder-guide > article { padding: 24px; }
            .step-grid { grid-template-columns: 1fr; }
            .step-card { min-height: auto; }
            .step-number { margin-bottom: 17px; }
            .help-grid { grid-template-columns: repeat(2, 1fr); }
            .help-card { min-height: 190px; padding: 17px; }
            .help-card h3 { font-size: 19px; }
            .safety-panel { padding: 26px 22px; }
            .safety-list { gap: 13px; }
            .faq-layout { gap: 28px; }
            .footer-top { grid-template-columns: 1fr; gap: 22px; }
            .footer-nav { justify-content: flex-start; }
        }
        @media (max-width: 430px) {
            .notice { padding: 9px 12px; font-size: 10px; }
            .brand-name { font-size: 14px; }
            .brand-tag { letter-spacing: .13em; }
            .hero-actions { gap: 9px; }
            .button { min-height: 45px; padding: 0 15px; font-size: 11px; }
            .hero-art { min-height: 315px; }
            .gift-card { top: 73px; height: 175px; }
            .balance-note { right: 12px; bottom: 20px; width: 205px; padding: 14px; }
            .topic { flex-direction: column; padding: 10px 3px; font-size: 8px; }
            .help-grid, .resources { grid-template-columns: 1fr; }
            .help-card { min-height: auto; }
            .help-icon { margin-bottom: 13px; }
            .issuer-box { align-items: flex-start; padding: 18px; }
            .footer-bottom { flex-direction: column; }
        }
        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            *, *::before, *::after { transition-duration: .01ms !important; }
        }
    </style>
</head>
<body id="top">
    <a class="skip-link" href="#main">Skip to guide</a>
    <div class="notice"><span aria-hidden="true">●</span> Independent information only — not affiliated with GiftCardMall, MyGift, Visa, or any card issuer.</div>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="#top" aria-label="Checkgiftbalancecard.com home">
                <span class="brand-mark" aria-hidden="true">c</span>
                <span><span class="brand-name">Checkgiftbalancecard.com</span><span class="brand-tag">Cardholder field guide</span></span>
            </a>
            <a class="nav-link" href="#how-to-check">Balance check guide <span aria-hidden="true">↗</span></a>
        </div>
    </header>

    <main id="main">
        <nav class="breadcrumb" aria-label="Breadcrumb"><a href="#top">Home</a><span aria-hidden="true">/</span>Gift card balance guide</nav>

        <section class="hero" id="balance-guide" aria-labelledby="hero-title">
            <div>
                <div class="eyebrow">01 / Start with the basics</div>
                <h1 id="hero-title">How to Check Giftcardmall/MyGift Balance, Activate a Card, and Register Gift Card?</h1>
                <p class="hero-copy">If you have a prepaid gift card and want to know how much money is left on it, the giftcardmall/mygift balance-checking process is a useful place to start. Whether you want to check your giftcardmall balance, complete giftcardmall activation, or learn how to use the giftcardmall register card process, understanding each step can help you manage your card more confidently.</p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#how-to-check">Explore balance steps <span aria-hidden="true">↗</span></a>
                    <a class="button button-secondary" href="#faq">Browse FAQs <span aria-hidden="true">↓</span></a>
                </div>
                <p class="reassurance"><span aria-hidden="true">✓</span>This guide never asks for a card number, account login, or payment information.</p>
            </div>
            <div class="hero-art" role="img" aria-label="Illustration of a prepaid card and a balance checklist; not a live balance result">
                <div class="art-orb" aria-hidden="true"></div>
                <div class="art-label">A little clarity before checkout</div>
                <div class="gift-card" aria-hidden="true">
                    <div class="card-top"><span>PREPAID · CARD GUIDE</span><span>✳</span></div>
                    <div class="card-chip"></div>
                    <div class="card-number">•••• &nbsp;•••• &nbsp;•••• &nbsp;••••</div>
                    <div class="card-foot">ILLUSTRATION ONLY</div>
                </div>
                <div class="balance-note" aria-hidden="true">
                    <div class="note-top"><span>Balance checklist</span><span>↗</span></div>
                    <h3>Ready to check what’s available?</h3>
                    <div class="note-row"><span>Use your issuer’s site</span><strong>✓</strong></div>
                    <div class="note-row"><span>Verify the web address</span><strong>✓</strong></div>
                </div>
                <div class="art-caption">Decorative graphic · no live card data</div>
            </div>
            <div class="quick-grid">
                <article class="quick-card">
                    <div class="card-label">A quick note about MyGift</div>
                    <p>Many users search for giftcardmall/mygift balance, mygift giftcardmall, giftcardmall mygift, and giftcardmall mygift check balance because they want to find their remaining funds, verify card activation, or resolve a payment problem. Others search for giftcardmall/mygift Visa, mcgiftcard balance, or mcgift giftcardmall when looking for information about a particular prepaid card.</p>
                </article>
                
            </div>
        </section>
       


        <section class="section" id="how-to-check" aria-labelledby="steps-title">
            <div class="section-kicker">02 / A safer way to check</div>
            <h2 class="section-heading" id="steps-title">How to Check Giftcardmall/MyGift Balance Step by Step.</h2>
            <p class="section-intro">The giftcardmall/mygift check balance process helps eligible cardholders review their available funds before making a purchase. Checking your giftcardmall balance first can reduce the risk of a declined transaction and help you plan your spending.</p>
            <div class="step-grid">
                <?php foreach ($steps as $step): ?>
                    <article class="step-card">
                        <span class="step-number"><?= htmlspecialchars($step['number'], ENT_QUOTES, 'UTF-8') ?></span>
                        <h3><?= htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p><?php if (isset($step['link_text'])): ?>
                            <?= htmlspecialchars($step['body_before'], ENT_QUOTES, 'UTF-8') ?><a href="https://www.giftcardmall.com/mygift" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($step['link_text'], ENT_QUOTES, 'UTF-8') ?></a><?= htmlspecialchars($step['body_after'], ENT_QUOTES, 'UTF-8') ?>
                        <?php elseif (isset($step['body_bold'])): ?>
                            <?= isset($step['body_before']) ? htmlspecialchars($step['body_before'], ENT_QUOTES, 'UTF-8') : '' ?><strong><?= htmlspecialchars($step['body_bold'], ENT_QUOTES, 'UTF-8') ?></strong><?= htmlspecialchars($step['body_after'] ?? $step['body_after_bold'], ENT_QUOTES, 'UTF-8') ?>
                        <?php else: ?>
                            <?= htmlspecialchars($step['body'], ENT_QUOTES, 'UTF-8') ?>
                        <?php endif; ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
            <div class="issuer-box">
                <div>
                    <strong>Have a card that lists GiftCardMall/MyGift?</strong>
                    <p>This external cardholder address may change or redirect. Confirm it against the instructions on your card before using it.</p>
                </div>
                <a class="issuer-link" href="https://www.giftcardmall.com/mygift" target="_blank" rel="noopener noreferrer">Visit cardholder address ↗</a>
            </div>
        </section>

        <section class="section" id="troubleshooting" aria-labelledby="help-title">
            <div class="section-kicker">03 / Card activation</div>
            <h2 class="section-heading" id="help-title">How to Activate a Giftcardmall Card.</h2>
            <p class="section-intro">GiftCardMall activation is the process of making an eligible gift card ready for use. Some cards are activated automatically when purchased, while others may require additional instructions. If your card is not working, follow these steps to understand the activation process.</p>
            <div class="help-grid">
                <article class="help-card">
                    <span class="help-icon" aria-hidden="true">01</span>
                    <h3>Check the packaging and receipt</h3>
                    <p>Review the card packaging, purchase receipt, and accompanying instructions. These materials may indicate whether the card was activated at checkout or requires another step.</p>
                </article>
                <article class="help-card">
                    <span class="help-icon" aria-hidden="true">02</span>
                    <h3>Confirm whether activation is required</h3>
                    <p>Some prepaid cards are ready to use immediately after purchase. Others require you to follow the issuer's activation instructions. Do not assume every GiftCardMall/MyGift Visa card follows the same procedure.</p>
                </article>
                <article class="help-card">
                    <span class="help-icon" aria-hidden="true">03</span>
                    <h3>Use the issuer's official activation method</h3>
                    <p>If activation is required, use the website or telephone number printed on the card packaging or supplied by the issuer. Enter requested details only after verifying the service is legitimate.</p>
                </article>
                <article class="help-card">
                    <span class="help-icon" aria-hidden="true">04</span>
                    <h3>Verify the card status</h3>
                    <p>After completing the required steps, follow the issuer's instructions to confirm the card is ready to use. You may also be able to check the GiftCardMall/MyGift balance to verify available funds.</p>
                </article>
            </div>
        </section>

        <section class="section" id="security" aria-labelledby="safety-title">
            <div class="safety-panel">
                <div>
                    <div class="section-kicker">04 / Card registration</div>
                    <h2 class="section-heading" id="safety-title">How to Register a GiftCardMall Card</h2>
                    <p class="section-intro">The GiftCardMall register-card process may help eligible cardholders associate billing information with their prepaid card. This can matter for some online purchases that require a billing ZIP code.</p>
                    <p class="section-intro">Use these steps only when registration is available for your card. Options vary by issuer, and some cards do not require registration.</p>
                </div>
                <ul class="safety-list">
                    <li><span aria-hidden="true">1</span><div><strong>Find the registration option</strong><br>Visit the website identified in your card documentation. If supported, look for a registration, profile, or billing-information option.</div></li>
                    <li><span aria-hidden="true">2</span><div><strong>Enter the requested details</strong><br>Provide only the information requested by the issuer, which may include your name, address, and ZIP code. Submit it only on a verified website.</div></li>
                    <li><span aria-hidden="true">3</span><div><strong>Check your information carefully</strong><br>Make sure the details are accurate and consistent with the information you plan to use during online checkout.</div></li>
                    <li><span aria-hidden="true">4</span><div><strong>Save your registration</strong><br>Follow the on-screen instructions to complete the process. Available options can differ by card and issuer.</div></li>
                    <li><span aria-hidden="true">5</span><div><strong>Test your card responsibly</strong><br>Before making a large purchase, check your available funds and confirm your card supports the intended transaction.</div></li>
                </ul>
            </div>
        </section>

        <section class="section cardholder-guide" id="cardholder-guide" aria-label="Additional GiftCardMall/MyGift guidance">
            <article>
                <h2 class="section-heading">How to Check Giftcardmall Balance and Activation Status Together</h2>
                <p class="section-intro">If you want to complete a <strong>giftcardmall/mygift check balance</strong> and determine whether your card is ready to use, follow this simple checklist.</p>
                <ol class="registration-checklist">
                    <li>Inspect the card: Confirm that the card has not been damaged or tampered with.</li>
                    <li>Review the receipt: Check for purchase and activation information.</li>
                    <li>Confirm activation: Follow the instructions provided by the card issuer.</li>
                    <li>Check the balance: Use the verified balance-checking service for your specific card.</li>
                    <li>Register if required: Complete the available registration process if you need billing information for online purchases.</li>
                    <li>Review transactions: Look for recent purchases or pending holds that may affect your available funds.</li>
                    <li>Contact support if necessary: Use the telephone number printed on the card if activation, registration, or balance checking does not work.</li>
                </ol>
                <p class="section-intro">These steps cover the main tasks associated with giftcardmall/mygift, including card activation, registration, and available-balance verification.</p>
            </article>
            <article>
                <h2 class="section-heading">Giftcardmall/MyGift Visa: What Cardholders Should Know</h2>
                <p class="section-intro">A giftcardmall/mygift Visa is a prepaid payment card associated with the Visa payment network. Its usage restrictions, registration options, fees, and expiration terms depend on the particular card and its issuer.</p>
                <p class="section-intro">Before using your card, check the giftcardmall balance, confirm activation if necessary, and review the terms supplied with the card. If an online purchase fails, check whether the merchant requires billing information, whether the purchase exceeds your available funds, or whether the merchant accepts prepaid cards.</p>
                <p class="section-intro">Users searching for giftcardmall, giftcardmall mygift, and mygift giftcardmall should also distinguish between network-branded prepaid cards and retailer-specific gift cards. Different products can use different websites and support processes.</p>
            </article>
        </section>

        <section class="section" id="faq" aria-labelledby="faq-title">
            <div class="faq-layout">
                <div>
                    <div class="section-kicker">06 / Frequently asked questions</div>
                    <h2 class="section-heading" id="faq-title">Frequently Asked Questions About Giftcardmall/MyGift</h2>
                    <p class="section-intro">Answers about checking a balance, activation, card registration, and common card issues.</p>
                </div>
                <div class="faq-list">
                    <?php foreach ($faqs as $faq): ?>
                        <details>
                            <summary><span><?= htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') ?></span></summary>
                            <p><?= htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8') ?></p>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="section" id="resources" aria-labelledby="resources-title">
            <div class="section-kicker">07 / Helpful next steps</div>
            <h2 class="section-heading" id="resources-title">For account-specific answers.</h2>
            <p class="section-intro">When a card needs attention, contact its issuer directly using information supplied with the card.</p>
            <div class="resources">
                <article class="resource-card">
                    <h3>GiftCardMall/MyGift balance</h3>
                    <p>For cards that list GiftCardMall or MyGift, use the cardholder address only after confirming it against your card or packaging.</p>
                    <a href="https://www.giftcardmall.com/mygift" target="_blank" rel="noopener noreferrer">GiftCardMall/MyGift card balance ↗</a>
                </article>
                <article class="resource-card">
                    <h3>Read Visa’s gift card guidance</h3>
                    <p>Visa provides general information on gift cards and where to find help with a card.</p>
                    <a href="https://www.visa.com/en-us/personal/cards/gift/gift-card-balance" target="_blank" rel="noopener noreferrer">Visa gift card balance information ↗</a>
                </article>
                <article class="resource-card">
                    <h3>Prepaid gift card support</h3>
                    <p>For activation questions, a lost card, or an unfamiliar charge, use the support number printed on your card.</p>
                    <a href="#how-to-check">Review the safe steps ↑</a>
                </article>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-inner">
            <div class="footer-top">
                <div>
                    <a class="brand" href="#top">
                        <span class="brand-mark" aria-hidden="true">c</span>
                        <span><span class="brand-name">Checkgiftbalancecard.com</span><span class="brand-tag">Independent cardholder guide</span></span>
                    </a>
                    <p class="footer-copy">Checkgiftbalancecard.com is an independent informational resource. It is not affiliated with GiftCardMall, MyGift, Blackhawk Network, Visa, Mastercard, or a financial institution. We do not process payments, check balances, activate cards, or request card credentials. All trademarks belong to their respective owners.</p>
                </div>
                <nav class="footer-nav" aria-label="Footer navigation">
                    <a href="#balance-guide">Balance overview</a>
                    <a href="#how-to-check">How to check</a>
                    <a href="#troubleshooting">Card help</a>
                    <a href="#security">Safety</a>
                    <a href="#faq">FAQs</a>
                    <a href="https://www.giftcardmall.com/mygift" target="_blank" rel="noopener noreferrer">GiftCardMall/MyGift balance ↗</a>
                    
                </nav>
            </div>
            <div class="footer-bottom">
                <span>© <?= date('Y') ?> Checkgiftbalancecard.com · Independent educational guide.</span>
                <span>Always confirm current instructions with your card issuer.</span>
            </div>
        </div>
    </footer>
    <script>
        const keywords = [
            'giftcardmall/mygift check balance',
            'giftcardmall mygift check balance',
            'www.giftcardmall.com mygift',
            'giftcardmall/mygift balance',
            'giftcardmall/mygift visa',
            'giftcardmall register card',
            'giftcardmall activation',
            'mcgiftcard balance',
            'mcgift giftcardmall',
            'mygift giftcardmall',
            'giftcardmall mygift',
            'giftcardmall'
        ];
        const keywordPattern = new RegExp(`(${keywords
            .sort((a, b) => b.length - a.length)
            .map(keyword => keyword.replace(/[.*+?^${}()|[\]\\]/g, '\\$&'))
            .join('|')})`, 'gi');
        const textNodes = [];
        const walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT);

        while (walker.nextNode()) {
            textNodes.push(walker.currentNode);
        }

        for (const textNode of textNodes) {
            const parent = textNode.parentElement;
            const text = textNode.nodeValue;
            if (!parent || parent.closest('script, style, noscript, textarea, strong') || !text) {
                continue;
            }

            keywordPattern.lastIndex = 0;
            if (!keywordPattern.test(text)) {
                continue;
            }

            const fragment = document.createDocumentFragment();
            const textWrapper = document.createElement('span');
            const parts = text.split(keywordPattern);
            parts.forEach((part, index) => {
                if (index % 2 === 1) {
                    const strong = document.createElement('strong');
                    strong.textContent = part;
                    textWrapper.appendChild(strong);
                } else {
                    textWrapper.appendChild(document.createTextNode(part));
                }
            });
            fragment.appendChild(textWrapper);
            textNode.parentNode.replaceChild(fragment, textNode);
        }
    </script>
</body>
</html>
