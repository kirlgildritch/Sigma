<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register – LocalLift PH</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <style>
    /* ── CSS Variables ─────────────────────────────── */
    :root {
      --pink:        #e83e72;
      --pink-dark:   #c9275a;
      --pink-light:  #fce4ec;
      --pink-pale:   #fff0f5;
      --gray-dark:   #2d2d2d;
      --gray-mid:    #6b7280;
      --gray-light:  #f3f4f6;
      --white:       #ffffff;
      --border:      #e5e7eb;
      --shadow:      0 4px 24px rgba(232,62,114,.12);
      --radius:      12px;
      --radius-sm:   8px;
    }

    /* ── Reset ─────────────────────────────────────── */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Poppins', sans-serif;
      background: var(--pink-pale);
      color: var(--gray-dark);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    a { text-decoration: none; color: inherit; }
    ul { list-style: none; }

    /* ── Top Bar ───────────────────────────────────── */
    .topbar {
      background: var(--pink-light);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 7px 32px;
      font-size: 12.5px;
    }
    .topbar-left { display: flex; gap: 14px; }
    .topbar-left a {
      color: var(--gray-mid);
      transition: color .2s;
    }
    .topbar-left a:hover { color: var(--pink); }
    .topbar-left svg { width: 16px; height: 16px; fill: currentColor; }
    .topbar-center {
      display: flex;
      align-items: center;
      gap: 7px;
      color: var(--pink);
      font-weight: 700;
      font-size: 12.5px;
    }
    .topbar-center svg { width: 18px; height: 18px; fill: var(--pink); }
    .topbar-right {
      display: flex;
      gap: 18px;
      font-size: 12.5px;
      font-weight: 600;
      color: var(--gray-dark);
    }
    .topbar-right span { cursor: pointer; }
    .topbar-right span:hover { color: var(--pink); }

    /* ── Header / Nav ──────────────────────────────── */
    header {
      background: var(--white);
      box-shadow: 0 2px 10px rgba(0,0,0,.06);
      padding: 0 32px;
    }
    .header-inner {
      max-width: 1100px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 72px;
      gap: 20px;
    }
    /* Logo */
    .logo {
      display: flex;
      align-items: center;
      gap: 9px;
      flex-shrink: 0;
    }
    .logo-icon {
      width: 44px; height: 44px;
      background: var(--pink);
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
    }
    .logo-icon svg { width: 26px; height: 26px; fill: var(--white); }
    .logo-text { font-family: 'Nunito', sans-serif; font-size: 21px; font-weight: 900; line-height: 1.1; }
    .logo-text span { color: var(--pink); }
    /* Search */
    .search-bar {
      flex: 1; max-width: 420px;
      position: relative;
    }
    .search-bar input {
      width: 100%;
      padding: 10px 18px 10px 18px;
      border: 1.5px solid var(--border);
      border-radius: 30px;
      font-size: 13.5px;
      font-family: 'Poppins', sans-serif;
      background: var(--gray-light);
      outline: none;
      transition: border-color .2s, background .2s;
    }
    .search-bar input:focus { border-color: var(--pink); background: var(--white); }
    .search-bar button {
      position: absolute; right: 12px; top: 50%; transform: translateY(-50%);
      background: none; border: none; cursor: pointer;
      color: var(--gray-mid); display: flex; align-items: center;
    }
    .search-bar button:hover { color: var(--pink); }
    .search-bar button svg { width: 18px; height: 18px; }
    /* User Actions */
    .user-actions { display: flex; gap: 20px; align-items: center; }
    .user-action {
      display: flex; flex-direction: column; align-items: center;
      font-size: 11.5px; font-weight: 600; color: var(--gray-dark);
      cursor: pointer; gap: 2px; transition: color .2s;
      position: relative;
    }
    .user-action:hover { color: var(--pink); }
    .user-action svg { width: 22px; height: 22px; }
    .badge {
      position: absolute; top: -4px; right: -6px;
      background: var(--pink); color: var(--white);
      font-size: 9px; font-weight: 800;
      width: 16px; height: 16px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
    }

    /* ── Navigation ────────────────────────────────── */
    nav {
      background: var(--white);
      border-top: 1px solid var(--border);
    }
    .nav-inner {
      max-width: 1100px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      gap: 4px;
      padding: 0 32px;
    }
    .nav-link {
      padding: 13px 18px;
      font-size: 13px;
      font-weight: 600;
      color: var(--gray-dark);
      cursor: pointer;
      border-bottom: 3px solid transparent;
      transition: color .2s, border-color .2s;
      letter-spacing: .3px;
    }
    .nav-link:hover { color: var(--pink); }
    .nav-link.active {
      color: var(--white);
      background: var(--pink);
      border-radius: 6px 6px 0 0;
      border-bottom-color: var(--pink);
    }
    .nav-register {
      margin-left: auto;
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 8px 18px;
      background: var(--pink);
      color: var(--white);
      border-radius: 30px;
      font-size: 13px;
      font-weight: 700;
      cursor: pointer;
      transition: background .2s, transform .15s;
      border-bottom: none !important;
    }
    .nav-register:hover { background: var(--pink-dark); transform: translateY(-1px); }
    .nav-register svg { width: 16px; height: 16px; fill: var(--white); }

    /* ── Breadcrumb ─────────────────────────────────── */
    .breadcrumb {
      max-width: 1100px; margin: 0 auto;
      padding: 14px 32px 0;
      font-size: 12.5px; color: var(--gray-mid);
      display: flex; align-items: center; gap: 6px;
    }
    .breadcrumb a:hover { color: var(--pink); }
    .breadcrumb-sep { color: var(--gray-mid); }
    .breadcrumb-current { font-weight: 700; color: var(--gray-dark); letter-spacing: .5px; }

    /* ── Main ───────────────────────────────────────── */
    main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 32px 16px 48px;
    }

    /* ── Card ───────────────────────────────────────── */
    .card {
      background: var(--white);
      border-radius: 20px;
      box-shadow: var(--shadow);
      padding: 44px 48px 40px;
      width: 100%; max-width: 520px;
      animation: fadeUp .5s ease both;
    }
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(22px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .card-title {
      font-family: 'Nunito', sans-serif;
      font-size: 28px; font-weight: 900;
      text-align: center; color: var(--gray-dark);
      margin-bottom: 6px;
    }
    .card-sub {
      text-align: center; font-size: 13.5px;
      color: var(--gray-mid); margin-bottom: 32px;
    }

    /* ── Form ───────────────────────────────────────── */
    .form-group { margin-bottom: 22px; }
    .form-label {
      display: flex; align-items: center; gap: 8px;
      font-size: 13.5px; font-weight: 700;
      color: var(--gray-dark); margin-bottom: 8px;
    }
    .form-label svg { width: 18px; height: 18px; color: var(--gray-dark); }
    .input-wrap { position: relative; }
    .input-wrap svg {
      position: absolute; left: 14px; top: 50%; transform: translateY(-50%);
      width: 17px; height: 17px; color: #bbb; pointer-events: none;
    }
    .form-input {
      width: 100%;
      padding: 12px 14px 12px 42px;
      border: 1.5px solid var(--border);
      border-radius: var(--radius-sm);
      font-size: 13.5px;
      font-family: 'Poppins', sans-serif;
      color: var(--gray-dark);
      background: var(--gray-light);
      outline: none;
      transition: border-color .2s, background .2s, box-shadow .2s;
    }
    .form-input::placeholder { color: #bbb; }
    .form-input:focus {
      border-color: var(--pink);
      background: var(--white);
      box-shadow: 0 0 0 3px rgba(232,62,114,.1);
    }

    /* ── Checkbox ───────────────────────────────────── */
    .checkbox-row {
      display: flex; align-items: center; gap: 10px;
      margin-bottom: 24px; font-size: 13.5px; color: var(--gray-dark);
    }
    .checkbox-row input[type="checkbox"] {
      appearance: none; -webkit-appearance: none;
      width: 20px; height: 20px; flex-shrink: 0;
      border: 2px solid var(--border);
      border-radius: 5px; background: var(--gray-light);
      cursor: pointer; position: relative;
      transition: background .2s, border-color .2s;
    }
    .checkbox-row input[type="checkbox"]:checked {
      background: var(--pink); border-color: var(--pink);
    }
    .checkbox-row input[type="checkbox"]:checked::after {
      content: '';
      position: absolute; left: 4px; top: 1px;
      width: 8px; height: 13px;
      border: 2.5px solid var(--white);
      border-top: none; border-left: none;
      transform: rotate(45deg);
    }
    .tc-link { color: var(--pink); font-weight: 700; cursor: pointer; }
    .tc-link:hover { text-decoration: underline; }

    /* ── Submit Button ──────────────────────────────── */
    .btn-signup {
      width: 100%;
      padding: 14px;
      background: var(--pink);
      color: var(--white);
      border: none;
      border-radius: var(--radius-sm);
      font-size: 15px;
      font-weight: 800;
      font-family: 'Nunito', sans-serif;
      letter-spacing: 1.5px;
      cursor: pointer;
      transition: background .2s, transform .15s, box-shadow .2s;
      box-shadow: 0 4px 16px rgba(232,62,114,.35);
    }
    .btn-signup:hover {
      background: var(--pink-dark);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(232,62,114,.45);
    }
    .btn-signup:active { transform: translateY(0); }

    /* ── Login Link ─────────────────────────────────── */
    .login-link {
      text-align: center;
      margin-top: 18px;
      font-size: 13.5px;
      color: var(--gray-mid);
    }
    .login-link a { color: var(--pink); font-weight: 700; }
    .login-link a:hover { text-decoration: underline; }

    /* ── Footer ─────────────────────────────────────── */
    footer {
      background: var(--white);
      border-top: 1px solid var(--border);
      padding: 40px 32px 0;
    }
    .footer-inner {
      max-width: 1100px; margin: 0 auto;
      display: grid;
      grid-template-columns: 1.6fr 1fr 1fr;
      gap: 40px;
      padding-bottom: 36px;
    }
    .footer-brand .logo { margin-bottom: 14px; }
    .footer-brand p {
      font-size: 13px; color: var(--gray-mid); line-height: 1.7;
      max-width: 230px;
    }
    .footer-col h4 {
      font-size: 12px; font-weight: 800;
      letter-spacing: 1px; color: var(--gray-dark);
      margin-bottom: 14px; text-transform: uppercase;
    }
    .footer-col ul li {
      margin-bottom: 9px;
    }
    .footer-col ul li::before { content: '• '; color: var(--pink); font-size: 14px; }
    .footer-col ul li a { font-size: 13px; color: var(--gray-mid); transition: color .2s; }
    .footer-col ul li a:hover { color: var(--pink); }
    .social-links { display: flex; flex-direction: column; gap: 10px; }
    .social-link {
      display: flex; align-items: center; gap: 10px;
      font-size: 13px; color: var(--gray-mid);
      cursor: pointer; transition: color .2s;
    }
    .social-link:hover { color: var(--pink); }
    .social-icon {
      width: 32px; height: 32px;
      border-radius: 8px;
      background: var(--gray-light);
      display: flex; align-items: center; justify-content: center;
      transition: background .2s;
    }
    .social-link:hover .social-icon { background: var(--pink-light); }
    .social-icon svg { width: 16px; height: 16px; }

    .footer-bottom {
      border-top: 1px solid var(--border);
      padding: 14px 0;
      display: flex; align-items: center; justify-content: space-between;
      max-width: 1100px; margin: 0 auto;
      font-size: 12px; color: var(--gray-mid);
    }
    .footer-bottom strong { color: var(--gray-dark); }
    .footer-bottom-links { display: flex; gap: 16px; }
    .footer-bottom-links a { color: var(--gray-mid); transition: color .2s; }
    .footer-bottom-links a:hover { color: var(--pink); }

    /* ── Responsive ─────────────────────────────────── */

    /* Tablet: 768px – 1024px */
    @media (max-width: 1024px) {
      .header-inner { padding: 0 20px; }
      .nav-inner { padding: 0 20px; }
      .breadcrumb { padding: 14px 20px 0; }
      .footer-inner { grid-template-columns: 1fr 1fr; gap: 28px; }
      .footer-brand { grid-column: 1 / -1; }
      footer { padding: 32px 20px 0; }
      .footer-bottom { padding: 14px 0; }
      .card { max-width: 480px; }
    }

    /* Large Mobile / Small Tablet: up to 768px */
    @media (max-width: 768px) {
      /* Topbar */
      .topbar { padding: 6px 16px; flex-wrap: wrap; gap: 6px; }
      .topbar-center { display: none; }
      .topbar-right { font-size: 11px; gap: 12px; }

      /* Header */
      header { padding: 0 16px; }
      .header-inner {
        flex-wrap: wrap;
        height: auto;
        padding: 12px 0;
        gap: 10px;
      }
      .logo-text { font-size: 18px; }
      .search-bar {
        order: 3;
        flex: 1 1 100%;
        max-width: 100%;
      }
      .user-actions { gap: 14px; }
      .user-action { font-size: 10.5px; }

      /* Nav */
      nav { overflow-x: auto; -webkit-overflow-scrolling: touch; }
      .nav-inner {
        padding: 0 10px;
        gap: 2px;
        width: max-content;
        min-width: 100%;
      }
      .nav-link { padding: 11px 12px; font-size: 11.5px; }
      .nav-register { padding: 7px 12px; font-size: 11.5px; }

      /* Breadcrumb */
      .breadcrumb { padding: 12px 16px 0; font-size: 11.5px; }

      /* Card */
      .card {
        padding: 28px 20px 24px;
        border-radius: 14px;
        margin: 0 4px;
      }
      .card-title { font-size: 22px; }
      .card-sub { font-size: 12.5px; margin-bottom: 24px; }
      .form-group { margin-bottom: 18px; }
      .form-label { font-size: 12.5px; }
      .form-input { font-size: 13px; padding: 11px 12px 11px 38px; }
      .btn-signup { font-size: 14px; padding: 13px; }
      .login-link { font-size: 12.5px; }

      /* Footer */
      footer { padding: 28px 16px 0; }
      .footer-inner { grid-template-columns: 1fr; gap: 24px; }
      .footer-brand { grid-column: auto; }
      .footer-bottom {
        flex-direction: column;
        gap: 8px;
        text-align: center;
        padding: 14px 0;
      }
      .footer-bottom-links { justify-content: center; }
    }

    /* Small Mobile: up to 480px */
    @media (max-width: 480px) {
      .topbar { justify-content: space-between; }
      .topbar-left { gap: 10px; }
      .topbar-right { gap: 8px; font-size: 10.5px; }

      .logo-icon { width: 36px; height: 36px; border-radius: 8px; }
      .logo-icon svg { width: 20px; height: 20px; }
      .logo-text { font-size: 16px; }

      .header-inner { padding: 10px 0; }
      .search-bar input { font-size: 12.5px; padding: 9px 14px; }

      main { padding: 20px 10px 36px; }
      .card { padding: 24px 16px 20px; border-radius: 12px; }
      .card-title { font-size: 20px; }
      .card-sub { font-size: 12px; margin-bottom: 20px; }

      .form-label { font-size: 12px; gap: 6px; }
      .form-input { font-size: 12.5px; padding: 10px 10px 10px 36px; }
      .input-wrap svg { width: 15px; height: 15px; left: 11px; }

      .checkbox-row { font-size: 12px; gap: 8px; }
      .checkbox-row input[type="checkbox"] { width: 18px; height: 18px; }

      .btn-signup { font-size: 13.5px; padding: 12px; letter-spacing: 1px; }
      .login-link { font-size: 12px; margin-top: 14px; }

      .nav-link { padding: 10px 10px; font-size: 11px; }
      .nav-register { padding: 6px 10px; font-size: 11px; gap: 5px; }

      .footer-col h4 { font-size: 11px; }
      .footer-col ul li a { font-size: 12px; }
      .social-link { font-size: 12px; }
      .footer-bottom { font-size: 11px; }
    }

    /* Extra Small: up to 360px */
    @media (max-width: 360px) {
      .logo-text { font-size: 14px; }
      .user-action span:not(.badge) { display: none; }
      .card-title { font-size: 18px; }
      .btn-signup { font-size: 13px; }
    }
  </style>
</head>
<body>

  <!-- ══ TOP BAR ══════════════════════════════════════ -->
  <div class="topbar">
    <div class="topbar-left">
      <a href="#" title="Facebook">
        <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
      </a>
      <a href="#" title="Instagram">
        <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" fill="white"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="white" stroke-width="1.5"/></svg>
      </a>
      <a href="#" title="Check">
        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
      </a>
      <a href="#" title="Email">
        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6" fill="none" stroke="currentColor" stroke-width="1.5"/></svg>
      </a>
    </div>

    <div class="topbar-center">
      <!-- piggy bank icon -->
      <svg viewBox="0 0 24 24"><path d="M19 11H18A6 6 0 0 0 6 11H5A2 2 0 0 0 3 13v3a2 2 0 0 0 2 2h1v1a1 1 0 0 0 2 0v-1h8v1a1 1 0 0 0 2 0v-1h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2zM8 14a1 1 0 1 1 1-1 1 1 0 0 1-1 1zm4-5a4 4 0 0 0-3.46 2H7.54A4 4 0 0 0 8 9zm0 0"/><circle cx="15" cy="8" r="2"/></svg>
      FREE SHIPPING THIS WEEK! ORDER OVER ₱500
    </div>

    <div class="topbar-right">
      <span>ENGLISH ▾</span>
    </div>
  </div>

  <!-- ══ HEADER ════════════════════════════════════════ -->
  <header>
    <div class="header-inner">
      <!-- Logo -->
      <a href="index.html" class="logo">
        <div class="logo-icon">
          <!-- shopping bag with pin -->
          <svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6" stroke="white" stroke-width="1.5"/><path d="M16 10a4 4 0 01-8 0" fill="none" stroke="white" stroke-width="1.5"/></svg>
        </div>
        <div class="logo-text">LocalLift<br><span>PH</span></div>
      </a>

      <!-- Search -->
      <div class="search-bar">
        <input type="text" placeholder="Search for prdd, hiogs, and more..."/>
        <button type="button">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        </button>
      </div>

      <!-- User actions -->
      <div class="user-actions">
        <div class="user-action">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          Login
        </div>
        <div class="user-action" style="position:relative;">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          Register
          <span class="badge">0</span>
        </div>
      </div>
    </div>
  </header>

  <!-- ══ NAV ═══════════════════════════════════════════ -->
  <nav>
    <div class="nav-inner">
      <a href="index.html" class="nav-link active">HOME</a>
      <a href="shops.html" class="nav-link">SHOPS</a>
      <a href="products.html" class="nav-link">PRODUCTS</a>
      <a href="about.html" class="nav-link">ABOUT</a>
      <a href="become-seller.html" class="nav-link">BECOME A SELLER</a>
      <a href="register.html" class="nav-link nav-register">
        <!-- store icon -->
        <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        REGISTER
      </a>
    </div>
  </nav>

  <!-- ══ BREADCRUMB ════════════════════════════════════ -->
  <div class="breadcrumb">
    <a href="index.html">HOME</a>
    <span class="breadcrumb-sep">/</span>
    <span class="breadcrumb-current">REGISTER</span>
  </div>

  <!-- ══ MAIN ══════════════════════════════════════════ -->
  <main>
    <div class="card">
      <h1 class="card-title">Create Your Account</h1>
      <p class="card-sub">Sign up to start buying and selling local products</p>

      <form action="#" method="POST" novalidate>

        <!-- Full Name -->
        <div class="form-group">
          <label class="form-label" for="fullname">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            Full Name
          </label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            <input class="form-input" type="text" id="fullname" name="fullname"
              placeholder="Enter your full name..." autocomplete="name" required />
          </div>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label class="form-label" for="email">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            Email Address
          </label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <input class="form-input" type="email" id="email" name="email"
              placeholder="Enter your email address..." autocomplete="email" required />
          </div>
        </div>

        <!-- Password -->
        <div class="form-group">
          <label class="form-label" for="password">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
            Password
          </label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
            <input class="form-input" type="password" id="password" name="password"
              placeholder="Create a password..." autocomplete="new-password" required />
          </div>
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
          <label class="form-label" for="confirm-password">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
            Confirm Password
          </label>
          <div class="input-wrap">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
            <input class="form-input" type="password" id="confirm-password" name="confirm-password"
              placeholder="Re-enter your password..." autocomplete="new-password" required />
          </div>
        </div>

        <!-- Terms & Conditions -->
        <div class="checkbox-row">
          <input type="checkbox" id="terms" name="terms" checked />
          <label for="terms">
            I agree to the <a href="terms.html" class="tc-link">Terms &amp; Conditions</a>
          </label>
        </div>

        <!-- Submit -->
        <button type="submit" class="btn-signup">SIGN UP</button>

        <!-- Login link -->
        <p class="login-link">
          Already have an account? <a href="login.html">Log in here</a>
        </p>

      </form>
    </div>
  </main>

  <!-- ══ FOOTER ════════════════════════════════════════ -->
  <footer>
    <div class="footer-inner">
      <!-- Brand -->
      <div class="footer-brand">
        <a href="index.html" class="logo">
          <div class="logo-icon">
            <svg viewBox="0 0 24 24" fill="white"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6" stroke="rgba(255,255,255,.5)" stroke-width="1.5"/><path d="M16 10a4 4 0 01-8 0" fill="none" stroke="rgba(255,255,255,.8)" stroke-width="1.5"/></svg>
          </div>
          <div class="logo-text">LocalLift<br><span>PH</span></div>
        </a>
        <p>Empowering local businesses by providing a centralized marketplace for sellers and buyers.</p>
      </div>

      <!-- Quick Links -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="shops.html">Shops</a></li>
          <li><a href="products.html">Products</a></li>
          <li><a href="about.html">About Us</a></li>
        </ul>
      </div>

      <!-- Connect -->
      <div class="footer-col">
        <h4>Connect With Us</h4>
        <div class="social-links">
          <div class="social-link">
            <div class="social-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="#3b5998" stroke-width="2"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
            </div>
            Facebook
          </div>
          <div class="social-link">
            <div class="social-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="#e1306c" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke-width="2"/></svg>
            </div>
            Instagram
          </div>
          <div class="social-link">
            <div class="social-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="#444" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            Email
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom bar -->
    <div class="footer-bottom">
      <span>© 2023 <strong>LocalLift PH</strong>. All Rights Reserved.</span>
      <div class="footer-bottom-links">
        <a href="privacy.html">Privacy Policy</a>
        <a href="terms.html">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>

</body>
</html>
