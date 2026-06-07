
<style>
  @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&family=Playfair+Display:wght@700&display=swap');
  *{box-sizing:border-box;margin:0;padding:0}
  :root{
    --bg:#0d0f1a;--bg2:#141627;--bg3:#1a1d35;--bg4:#20244a;
    --card:#1e2240;--card2:#252a55;
    --border:rgba(120,130,255,0.12);--border2:rgba(120,130,255,0.22);
    --text:#e8eaf6;--text2:#9ea8d8;--text3:#6b75b8;
    --accent:#7c6af7;--accent2:#a78bfa;--accent3:#c4b5fd;
    --gold:#f59e0b;--gold2:#fbbf24;
    --red:#f87171;--green:#34d399;--blue:#60a5fa;
    --pink:#f472b6;--cyan:#22d3ee;
    --grad1:linear-gradient(135deg,#7c6af7,#a855f7);
    --grad2:linear-gradient(135deg,#f59e0b,#ef4444);
    --grad3:linear-gradient(135deg,#06b6d4,#3b82f6);
    --grad4:linear-gradient(135deg,#10b981,#059669);
    --grad5:linear-gradient(135deg,#f472b6,#ec4899);
    --shadow:0 8px 32px rgba(0,0,0,0.4);
    --shadow2:0 4px 16px rgba(124,106,247,0.25);
    --r:12px;--r2:8px;--r3:20px;
    --font:'DM Sans',sans-serif;
    --font2:'Playfair Display',serif;
    --sidebar:220px;
    --anim:0.25s ease;
  }
  body.light{
    --bg:#f0f2ff;--bg2:#e8ebff;--bg3:#fff;--bg4:#eef0ff;
    --card:#fff;--card2:#f5f3ff;
    --border:rgba(100,80,220,0.1);--border2:rgba(100,80,220,0.2);
    --text:#1e1b4b;--text2:#4c3d9e;--text3:#7c6af7;
    --shadow:0 4px 24px rgba(100,80,200,0.1);
    --shadow2:0 4px 12px rgba(124,106,247,0.15);
  }
  body{font-family:var(--font);background:var(--bg);color:var(--text);min-height:100vh;transition:background var(--anim),color var(--anim)}

  /* Layout */
  .app{display:flex;height:100vh;overflow:hidden}
  .sidebar{width:var(--sidebar);background:var(--bg2);border-right:1px solid var(--border);display:flex;flex-direction:column;flex-shrink:0;transition:background var(--anim)}
  .main{flex:1;display:flex;flex-direction:column;overflow:hidden}
  .topbar{height:60px;background:var(--bg2);border-bottom:1px solid var(--border);display:flex;align-items:center;padding:0 20px;gap:12px;flex-shrink:0}
  .content{flex:1;overflow-y:auto;padding:20px}

  /* Sidebar */
  .brand{padding:18px 16px;border-bottom:1px solid var(--border)}
  .brand-name{font-family:var(--font2);font-size:20px;color:var(--accent2);letter-spacing:0.5px}
  .brand-sub{font-size:10px;color:var(--text3);letter-spacing:2px;text-transform:uppercase;margin-top:2px}
  .nav{padding:12px 0;flex:1;overflow-y:auto}
  .nav-section{padding:8px 16px 4px;font-size:10px;letter-spacing:1.5px;text-transform:uppercase;color:var(--text3)}
  .nav-item{display:flex;align-items:center;gap:10px;padding:9px 16px;cursor:pointer;border-radius:0;transition:background var(--anim);font-size:13px;color:var(--text2);border-left:3px solid transparent;position:relative}
  .nav-item:hover{background:var(--bg3);color:var(--text)}
  .nav-item.active{background:rgba(124,106,247,0.12);color:var(--accent3);border-left-color:var(--accent)}
  .nav-item i{font-size:16px;width:20px;text-align:center;flex-shrink:0}
  .nav-badge{margin-left:auto;background:var(--red);color:#fff;font-size:9px;padding:1px 5px;border-radius:10px;font-weight:600}
  .sidebar-footer{padding:12px;border-top:1px solid var(--border)}
  .theme-toggle{display:flex;align-items:center;gap:8px;padding:8px;background:var(--bg3);border-radius:var(--r2);cursor:pointer;border:1px solid var(--border)}
  .toggle-track{width:36px;height:20px;background:var(--bg4);border-radius:10px;position:relative;transition:background 0.3s;flex-shrink:0}
  .toggle-track.on{background:var(--accent)}
  .toggle-knob{width:16px;height:16px;background:#fff;border-radius:50%;position:absolute;top:2px;left:2px;transition:transform 0.3s;box-shadow:0 1px 4px rgba(0,0,0,0.3)}
  .toggle-knob.on{transform:translateX(16px)}

  /* Topbar */
  .topbar-title{font-size:16px;font-weight:600;color:var(--text)}
  .topbar-spacer{flex:1}
  .search-box{display:flex;align-items:center;gap:8px;background:var(--bg3);border:1px solid var(--border);border-radius:var(--r2);padding:6px 12px;font-size:13px;color:var(--text2)}
  .search-box input{background:none;border:none;outline:none;font-size:13px;color:var(--text);font-family:var(--font);width:160px}
  .search-box input::placeholder{color:var(--text3)}
  .topbar-btn{width:36px;height:36px;background:var(--bg3);border:1px solid var(--border);border-radius:var(--r2);display:flex;align-items:center;justify-content:center;cursor:pointer;color:var(--text2);font-size:16px;transition:all var(--anim);position:relative}
  .topbar-btn:hover{border-color:var(--accent);color:var(--accent)}
  .notif-dot{position:absolute;top:6px;right:6px;width:6px;height:6px;background:var(--red);border-radius:50%}
  .avatar{width:36px;height:36px;border-radius:50%;background:var(--grad1);display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:600;color:#fff;cursor:pointer;border:2px solid var(--accent)}
  .user-info{display:flex;flex-direction:column}
  .user-name{font-size:13px;font-weight:600;color:var(--text)}
  .user-role{font-size:10px;color:var(--text3);text-transform:uppercase;letter-spacing:0.5px}

  /* Cards */
  .card{background:var(--card);border:1px solid var(--border);border-radius:var(--r);padding:16px;transition:all var(--anim)}
  .card:hover{border-color:var(--border2);box-shadow:var(--shadow2)}
  .card-title{font-size:12px;color:var(--text3);text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;font-weight:600}
  .card-big{font-size:28px;font-weight:700;color:var(--text)}
  .card-sub{font-size:12px;color:var(--text2);margin-top:4px}
  .tag{padding:3px 10px;border-radius:20px;font-size:11px;font-weight:500}
  .tag-up{background:rgba(52,211,153,0.15);color:var(--green)}
  .tag-down{background:rgba(248,113,113,0.15);color:var(--red)}
  .tag-info{background:rgba(96,165,250,0.15);color:var(--blue)}
  .tag-warn{background:rgba(245,158,11,0.15);color:var(--gold)}

  /* Grid */
  .grid-4{display:grid;grid-template-columns:repeat(4,1fr);gap:14px}
  .grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}
  .grid-2{display:grid;grid-template-columns:repeat(2,1fr);gap:14px}
  .grid-12{display:grid;grid-template-columns:1fr 2fr;gap:14px}
  .col-span-2{grid-column:span 2}
  .col-span-3{grid-column:span 3}

  /* Stat chip */
  .stat-chip{display:inline-flex;align-items:center;gap:4px;font-size:11px;font-weight:600;padding:3px 8px;border-radius:20px}
  .chip-up{background:rgba(52,211,153,0.12);color:var(--green)}
  .chip-down{background:rgba(248,113,113,0.12);color:var(--red)}

  /* Tables */
  table{width:100%;border-collapse:collapse;font-size:13px}
  th{text-align:left;padding:10px 12px;font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:0.8px;border-bottom:1px solid var(--border);font-weight:600}
  td{padding:10px 12px;border-bottom:1px solid rgba(255,255,255,0.04);color:var(--text2);vertical-align:middle}
  tr:last-child td{border-bottom:none}
  tr:hover td{background:rgba(124,106,247,0.05);color:var(--text)}
  body.light td{border-bottom-color:rgba(0,0,0,0.05)}
  body.light tr:hover td{background:rgba(124,106,247,0.04)}

  /* Buttons */
  .btn{display:inline-flex;align-items:center;gap:6px;padding:7px 14px;border-radius:var(--r2);font-size:13px;font-weight:500;cursor:pointer;border:none;font-family:var(--font);transition:all var(--anim);position:relative;overflow:hidden}
  .btn:disabled{opacity:0.6;cursor:not-allowed}
  .btn-primary{background:var(--grad1);color:#fff;box-shadow:0 4px 12px rgba(124,106,247,0.3)}
  .btn-primary:hover:not(:disabled){transform:translateY(-1px);box-shadow:0 6px 16px rgba(124,106,247,0.4)}
  .btn-danger{background:rgba(248,113,113,0.15);color:var(--red);border:1px solid rgba(248,113,113,0.2)}
  .btn-danger:hover:not(:disabled){background:rgba(248,113,113,0.25)}
  .btn-warn{background:rgba(245,158,11,0.15);color:var(--gold);border:1px solid rgba(245,158,11,0.2)}
  .btn-success{background:rgba(52,211,153,0.15);color:var(--green);border:1px solid rgba(52,211,153,0.2)}
  .btn-ghost{background:var(--bg3);color:var(--text2);border:1px solid var(--border)}
  .btn-ghost:hover{border-color:var(--accent);color:var(--accent)}
  .btn-sm{padding:5px 10px;font-size:11px}
  .btn-icon{width:32px;height:32px;padding:0;display:inline-flex;align-items:center;justify-content:center}
  .spin{display:none;width:14px;height:14px;border:2px solid rgba(255,255,255,0.3);border-top-color:#fff;border-radius:50%;animation:spin 0.6s linear infinite}
  @keyframes spin{to{transform:rotate(360deg)}}
  .btn.loading .spin{display:inline-block}
  .btn.loading .btn-text{display:none}
  .btn.loading{opacity:0.8;pointer-events:none}

  /* Form */
  .form-group{margin-bottom:14px}
  .form-label{font-size:12px;color:var(--text3);margin-bottom:6px;display:block;text-transform:uppercase;letter-spacing:0.5px}
  .form-input{width:100%;padding:9px 12px;background:var(--bg3);border:1px solid var(--border);border-radius:var(--r2);color:var(--text);font-size:13px;font-family:var(--font);outline:none;transition:border-color var(--anim)}
  .form-input:focus{border-color:var(--accent)}
  .form-input::placeholder{color:var(--text3)}
  .input-wrap{position:relative}
  .input-wrap .form-input{padding-right:36px}
  .input-icon{position:absolute;right:10px;top:50%;transform:translateY(-50%);cursor:pointer;color:var(--text3);font-size:16px}
  .input-icon:hover{color:var(--accent)}
  select.form-input option{background:var(--bg2)}

  /* Donut canvas placeholders */
  .donut-wrap{position:relative;width:100%;display:flex;justify-content:center;align-items:center}

  /* Progress bar */
  .progress-bar{height:6px;background:var(--bg3);border-radius:3px;overflow:hidden;margin-top:6px}
  .progress-fill{height:100%;border-radius:3px;transition:width 0.8s ease}

  /* Status badges */
  .badge{padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600}
  .badge-admin{background:rgba(167,139,250,0.2);color:var(--accent3)}
  .badge-user{background:rgba(96,165,250,0.15);color:var(--blue)}
  .badge-banned{background:rgba(248,113,113,0.15);color:var(--red)}
  .badge-active{background:rgba(52,211,153,0.15);color:var(--green)}
  .badge-pending{background:rgba(245,158,11,0.15);color:var(--gold)}

  /* Gradient stat cards */
  .gcard{border-radius:var(--r);padding:16px;color:#fff;position:relative;overflow:hidden}
  .gcard::before{content:'';position:absolute;top:-40%;right:-20%;width:100px;height:100px;border-radius:50%;background:rgba(255,255,255,0.08)}
  .gcard-val{font-size:24px;font-weight:700;margin:8px 0}
  .gcard-lbl{font-size:11px;opacity:0.75;text-transform:uppercase;letter-spacing:0.8px}

  /* Order tracking */
  .track-step{display:flex;align-items:flex-start;gap:12px;padding:10px 0;position:relative}
  .track-step:not(:last-child)::after{content:'';position:absolute;left:15px;top:32px;width:2px;height:calc(100% - 12px);background:var(--border)}
  .track-dot{width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0;border:2px solid}
  .track-dot.done{background:rgba(52,211,153,0.15);border-color:var(--green);color:var(--green)}
  .track-dot.active{background:rgba(124,106,247,0.15);border-color:var(--accent);color:var(--accent)}
  .track-dot.pending{background:var(--bg3);border-color:var(--border2);color:var(--text3)}

  /* Modals */
  .modal-overlay{position:fixed;inset:0;background:rgba(0,0,0,0.7);display:flex;align-items:center;justify-content:center;z-index:1000;opacity:0;pointer-events:none;transition:opacity 0.2s;backdrop-filter:blur(4px)}
  .modal-overlay.open{opacity:1;pointer-events:all}
  .modal{background:var(--bg2);border:1px solid var(--border2);border-radius:var(--r);padding:24px;width:480px;max-width:95vw;transform:scale(0.95);transition:transform 0.2s;max-height:90vh;overflow-y:auto}
  .modal-overlay.open .modal{transform:scale(1)}
  .modal-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:20px}
  .modal-title{font-size:17px;font-weight:700;color:var(--text)}
  .modal-close{cursor:pointer;color:var(--text3);font-size:20px;transition:color var(--anim)}
  .modal-close:hover{color:var(--text)}

  /* Auth screens */
  .auth-screen{min-height:100vh;display:flex;background:var(--bg);align-items:stretch}
  .auth-left{flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:48px;max-width:480px}
  .auth-right{flex:1;background:linear-gradient(135deg,#0a0520 0%,#1a0a3a 30%,#0f1a50 60%,#051030 100%);position:relative;overflow:hidden;display:flex;align-items:center;justify-content:center}
  .auth-orb{position:absolute;border-radius:50%;filter:blur(60px);opacity:0.4}
  .auth-right-text{z-index:1;text-align:center;color:#fff}
  .auth-right-text h2{font-family:var(--font2);font-size:36px;margin-bottom:12px}
  .auth-right-text p{opacity:0.6;font-size:14px;max-width:280px;line-height:1.6}
  .auth-logo{font-family:var(--font2);font-size:32px;color:var(--accent2);margin-bottom:8px}
  .auth-subtitle{font-size:14px;color:var(--text3);margin-bottom:32px;text-align:center}
  .social-btn{display:flex;align-items:center;justify-content:center;gap:8px;width:100%;padding:10px;background:var(--bg3);border:1px solid var(--border);border-radius:var(--r2);cursor:pointer;font-size:13px;font-weight:500;color:var(--text);transition:all var(--anim);font-family:var(--font);margin-bottom:8px}
  .social-btn:hover{border-color:var(--accent);background:var(--bg4)}
  .social-icon{width:18px;height:18px}
  .divider{display:flex;align-items:center;gap:12px;margin:16px 0;color:var(--text3);font-size:12px}
  .divider::before,.divider::after{content:'';flex:1;height:1px;background:var(--border)}
  .auth-link{color:var(--accent2);cursor:pointer;font-size:13px;text-decoration:none}
  .auth-link:hover{text-decoration:underline}
  .forgot-step{display:none}
  .forgot-step.active{display:block}
  .code-inputs{display:flex;gap:8px;justify-content:center;margin:16px 0}
  .code-input{width:44px;height:52px;text-align:center;font-size:20px;font-weight:700;background:var(--bg3);border:2px solid var(--border);border-radius:var(--r2);color:var(--text);font-family:var(--font);outline:none;transition:border-color var(--anim)}
  .code-input:focus{border-color:var(--accent)}

  /* Watch image card */
  .watch-card{background:var(--card);border:1px solid var(--border);border-radius:var(--r);overflow:hidden;transition:all var(--anim);cursor:pointer}
  .watch-card:hover{transform:translateY(-2px);box-shadow:var(--shadow2);border-color:var(--accent)}
  .watch-img{width:100%;height:160px;object-fit:cover;background:linear-gradient(135deg,var(--bg3),var(--bg4))}
  .watch-body{padding:12px}
  .watch-name{font-size:13px;font-weight:600;color:var(--text);margin-bottom:4px}
  .watch-price{font-size:16px;font-weight:700;color:var(--accent2)}
  .watch-meta{font-size:11px;color:var(--text3);margin-top:4px}
  .stars{color:var(--gold);font-size:12px}

  /* Chart container */
  .chart-wrap{position:relative;width:100%}

  /* Donut ring SVG */
  .donut-ring{transform:rotate(-90deg);transform-origin:center}

  /* Scrollbar */
  ::-webkit-scrollbar{width:4px;height:4px}
  ::-webkit-scrollbar-track{background:transparent}
  ::-webkit-scrollbar-thumb{background:var(--border2);border-radius:2px}

  /* Animations */
  @keyframes fadeIn{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
  .page-view{animation:fadeIn 0.3s ease}

  /* Toast */
  .toast-container{position:fixed;top:16px;right:16px;z-index:9999;display:flex;flex-direction:column;gap:8px}
  .toast{background:var(--card2);border:1px solid var(--border2);border-radius:var(--r2);padding:10px 14px;font-size:13px;display:flex;align-items:center;gap:8px;animation:fadeIn 0.3s ease;min-width:200px;max-width:320px}
  .toast-success{border-left:3px solid var(--green)}
  .toast-error{border-left:3px solid var(--red)}
  .toast-info{border-left:3px solid var(--blue)}

  /* Mini stat */
  .mini-stat{display:flex;align-items:center;justify-content:space-between;padding:8px 12px;background:var(--bg3);border-radius:var(--r2);border:1px solid var(--border)}
  .mini-stat-val{font-size:15px;font-weight:700;color:var(--text)}
  .mini-stat-lbl{font-size:11px;color:var(--text3)}

  /* Timeline */
  .tl-item{display:flex;gap:12px;padding:8px 0}
  .tl-dot{width:10px;height:10px;border-radius:50%;flex-shrink:0;margin-top:5px}
  .tl-time{font-size:11px;color:var(--text3);min-width:50px;flex-shrink:0;margin-top:2px}

  /* Gender chart bars */
  .gender-bar{display:flex;height:8px;border-radius:4px;overflow:hidden;margin-top:6px}

  /* Page tabs */
  .page-tabs{display:flex;gap:4px;background:var(--bg3);padding:4px;border-radius:var(--r2);margin-bottom:16px;border:1px solid var(--border)}
  .page-tab{padding:6px 14px;border-radius:6px;font-size:12px;cursor:pointer;color:var(--text3);transition:all var(--anim);font-weight:500}
  .page-tab.active{background:var(--accent);color:#fff}
</style>

<div class="toast-container" id="toastContainer"></div>

<!-- AUTH SCREEN -->
<div id="authScreen" class="auth-screen">
  <div class="auth-left">
    <div style="width:100%;max-width:360px">
      <!-- LOGIN VIEW -->
      <div id="loginView">
        <div class="auth-logo">⌚ CamboTech Store</div>
        <p class="auth-subtitle">Sign in to your dashboard</p>
        <div class="form-group">
          <label class="form-label">Username</label>
          <input class="form-input" id="loginUser" placeholder="Enter username" value="Ah Boto">
        </div>
        <div class="form-group">
          <label class="form-label">Password</label>
          <div class="input-wrap">
            <input class="form-input" id="loginPass" type="password" placeholder="Enter password" value="boto1234">
            <i class="ti ti-eye input-icon" id="loginEye" onclick="togglePw('loginPass','loginEye')"></i>
          </div>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;font-size:13px">
          <label style="display:flex;align-items:center;gap:6px;color:var(--text2);cursor:pointer">
            <input type="checkbox" checked style="accent-color:var(--accent)"> Remember me
          </label>
          <span class="auth-link" onclick="showView('forgotView')">Forgot password?</span>
        </div>
        <button class="btn btn-primary" style="width:100%;justify-content:center;padding:11px" onclick="doLogin(this)">
          <span class="spin"></span><span class="btn-text">Sign In</span>
        </button>
        <div class="divider">or continue with</div>
        <button class="social-btn" onclick="doSocialLogin('Google',this)">
          <svg class="social-icon" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
          Continue with Google
        </button>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px">
          <button class="social-btn" onclick="doSocialLogin('Facebook',this)">
            <svg class="social-icon" viewBox="0 0 24 24"><path fill="#1877F2" d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            Facebook
          </button>
          <button class="social-btn" onclick="doSocialLogin('X',this)">
            <svg class="social-icon" viewBox="0 0 24 24"><path fill="currentColor" d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            X (Twitter)
          </button>
        </div>
        <p style="text-align:center;margin-top:16px;font-size:13px;color:var(--text3)">
          No account? <span class="auth-link" onclick="showView('registerView')">Create one</span>
        </p>
      </div>

      <!-- REGISTER VIEW -->
      <div id="registerView" style="display:none">
        <div class="auth-logo">⌚ CamboTech Store</div>
        <p class="auth-subtitle">Create your account</p>
        <div class="form-group">
          <label class="form-label">Username</label>
          <input class="form-input" id="regUser" placeholder="Your username">
        </div>
        <div class="form-group">
          <label class="form-label">Email</label>
          <input class="form-input" id="regEmail" placeholder="your@email.com" type="email">
        </div>
        <div class="form-group" style=" margin-bottom:30px">
          <label class="form-label">Password</label>
          <div class="input-wrap">
            <input class="form-input" id="regPass" type="password" placeholder="Create password">
            <i class="ti ti-eye input-icon" id="regEye" onclick="togglePw('regPass','regEye')"></i>
          </div>
        </div>
        <!-- <div class="form-group">
          <label class="form-label">Role</label>
          <select class="form-input" id="regRole">
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div> -->
        <button class="btn btn-primary" style="width:100%;justify-content:center;padding:11px; margin-bottom:16px" onclick="doRegister(this)">
          <span class="spin"></span><span class="btn-text">Create Account</span>
        </button>
        <p style="text-align:center;font-size:13px;color:var(--text3)">
          Have an account? <span class="auth-link" onclick="showView('loginView')">Sign in</span>
        </p>
      </div>

      <!-- FORGOT PASSWORD VIEW -->
      <div id="forgotView" style="display:none">
        <div class="auth-logo">⌚ CamboTech Store</div>
        <p class="auth-subtitle">Reset your password</p>
        <div class="forgot-step active" id="forgotStep1">
          <div class="form-group">
            <label class="form-label">Your Email Address</label>
            <input class="form-input" id="forgotEmail" placeholder="Enter your Gmail" type="email">
          </div>
          <p style="font-size:12px;color:var(--text3);margin-bottom:12px">We'll send a 6-digit code to your email (check spam folder)</p>
          <button class="btn btn-primary" style="width:100%;justify-content:center;padding:11px" onclick="sendForgotCode(this)">
            <span class="spin"></span><span class="btn-text">Send Reset Code</span>
          </button>
        </div>
        <div class="forgot-step" id="forgotStep2">
          <p style="font-size:13px;color:var(--text2);margin-bottom:8px">Enter the 6-digit code sent to <strong id="forgotEmailDisplay" style="color:var(--accent2)"></strong></p>
          <div class="code-inputs" id="codeInputs">
            <input class="code-input" maxlength="1" oninput="codeNext(this,0)" id="c0">
            <input class="code-input" maxlength="1" oninput="codeNext(this,1)" id="c1">
            <input class="code-input" maxlength="1" oninput="codeNext(this,2)" id="c2">
            <input class="code-input" maxlength="1" oninput="codeNext(this,3)" id="c3">
            <input class="code-input" maxlength="1" oninput="codeNext(this,4)" id="c4">
            <input class="code-input" maxlength="1" oninput="codeNext(this,5)" id="c5">
          </div>
          <button class="btn btn-primary" style="width:100%;justify-content:center;padding:11px" onclick="verifyCode(this)">
            <span class="spin"></span><span class="btn-text">Verify Code</span>
          </button>
        </div>
        <div class="forgot-step" id="forgotStep3">
          <p style="font-size:13px;color:var(--text2);margin-bottom:16px">Create your new password</p>
          <div class="form-group">
            <label class="form-label">New Password</label>
            <div class="input-wrap">
              <input class="form-input" id="newPass" type="password" placeholder="New password">
              <i class="ti ti-eye input-icon" id="newPassEye" onclick="togglePw('newPass','newPassEye')"></i>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Confirm Password</label>
            <div class="input-wrap">
              <input class="form-input" id="confirmPass" type="password" placeholder="Confirm password">
              <i class="ti ti-eye input-icon" id="confPassEye" onclick="togglePw('confirmPass','confPassEye')"></i>
            </div>
          </div>
          <button class="btn btn-primary" style="width:100%;justify-content:center;padding:11px" onclick="resetPassword(this)">
            <span class="spin"></span><span class="btn-text">Update Password</span>
          </button>
        </div>
        <p style="text-align:center;margin-top:16px;font-size:13px;color:var(--text3)">
          <span class="auth-link" onclick="showView('loginView')">← Back to login</span>
        </p>
      </div>
    </div>
  </div>

  <div class="auth-right">
    <div class="auth-orb" style="width:300px;height:300px;background:#7c6af7;top:-10%;right:-5%"></div>
    <div class="auth-orb" style="width:200px;height:200px;background:#a855f7;bottom:10%;left:10%"></div>
    <div class="auth-orb" style="width:150px;height:150px;background:#3b82f6;top:40%;right:30%"></div>
    <div class="auth-right-text">
      <div style="font-size:64px;margin-bottom:16px">⌚</div>
      <h2>CamboTech Store</h2>
      <p>Premium watch management platform. Track sales, analytics, and inventory in real-time.</p>
      <div style="margin-top:32px;display:flex;gap:24px;justify-content:center">
        <div style="text-align:center"><div style="font-size:24px;font-weight:700;color:#a78bfa">2.4K+</div><div style="font-size:11px;opacity:0.6;margin-top:2px">Watches Sold</div></div>
        <div style="text-align:center"><div style="font-size:24px;font-weight:700;color:#60a5fa">$450K</div><div style="font-size:11px;opacity:0.6;margin-top:2px">Revenue</div></div>
        <div style="text-align:center"><div style="font-size:24px;font-weight:700;color:#34d399">98%</div><div style="font-size:11px;opacity:0.6;margin-top:2px">Satisfaction</div></div>
      </div>
    </div>
  </div>
</div>

<!-- DASHBOARD SCREEN -->
<div id="dashScreen" class="app" style="display:none">
  <!-- SIDEBAR -->
  <div class="sidebar">
    <div class="brand">
      <div class="brand-name">⌚ CamboTech</div>
      <div class="brand-sub">Store Admin</div>
    </div>
    <nav class="nav">
      <div class="nav-section">Analytics</div>
      <div class="nav-item active" onclick="showPage('analytics',this)"><i class="ti ti-chart-bar"></i>All Products</div>
      <div class="nav-item" onclick="showPage('orders',this)"><i class="ti ti-truck"></i>Order Analyse</div>
      <div class="nav-section">Management</div>
      <div class="nav-item" onclick="showPage('sold',this)"><i class="ti ti-receipt"></i>Product Sold</div>
      <div class="nav-item admin-only" onclick="showPage('crud',this)"><i class="ti ti-package"></i>Product CRUD</div>
      <div class="nav-item admin-only" onclick="showPage('roles',this)"><i class="ti ti-users"></i>User Roles</div>
      <div class="nav-section">Account</div>
      <div class="nav-item" onclick="showPage('profile',this)"><i class="ti ti-user-circle"></i>Profile</div>
    </nav>
    <div class="sidebar-footer">
      <div class="theme-toggle" onclick="toggleTheme()">
        <i class="ti ti-moon" style="font-size:15px;color:var(--text3)"></i>
        <div class="toggle-track" id="themeTrack"><div class="toggle-knob" id="themeKnob"></div></div>
        <i class="ti ti-sun" style="font-size:15px;color:var(--gold)"></i>
        <span style="font-size:12px;color:var(--text3);margin-left:4px" id="themeLabel">Dark</span>
      </div>
    </div>
  </div>

  <!-- MAIN -->
  <div class="main">
    <!-- TOPBAR -->
    <div class="topbar">
      <div class="topbar-title" id="pageTitle">All Products Analytics</div>
      <div class="topbar-spacer"></div>
      <div class="search-box"><i class="ti ti-search" style="font-size:15px;color:var(--text3)"></i><input placeholder="Search..."></div>
      <div class="topbar-btn"><i class="ti ti-bell"></i><div class="notif-dot"></div></div>
      <div class="topbar-btn"><i class="ti ti-settings"></i></div>
      <div style="display:flex;align-items:center;gap:8px">
        <div class="avatar" id="topbarAvatar">AB</div>
        <div class="user-info">
          <div class="user-name" id="topbarName">Ah Boto</div>
          <div class="user-role" id="topbarRole">Admin</div>
        </div>
      </div>
    </div>

    <!-- CONTENT -->
    <div class="content" id="mainContent">
      <!-- Will be rendered by JS -->
    </div>
  </div>
</div>

<!-- PRODUCT MODAL -->
<div class="modal-overlay" id="productModal">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title" id="productModalTitle">Add Product</div>
      <i class="ti ti-x modal-close" onclick="closeModal('productModal')"></i>
    </div>
    <div class="form-group"><label class="form-label">Watch Name</label><input class="form-input" id="pm_name" placeholder="e.g. Zinvo Blade V2"></div>
    <div class="form-group"><label class="form-label">Price ($)</label><input class="form-input" id="pm_price" type="number" placeholder="450"></div>
    <div class="form-group"><label class="form-label">Quantity</label><input class="form-input" id="pm_qty" type="number" placeholder="50"></div>
    <div class="form-group"><label class="form-label">Description</label><textarea class="form-input" id="pm_desc" rows="3" placeholder="Watch description..."></textarea></div>
    <div class="grid-2">
      <div class="form-group"><label class="form-label">Company</label><input class="form-input" id="pm_company" placeholder="ZINVO"></div>
      <div class="form-group"><label class="form-label">Warranty (mo)</label><input class="form-input" id="pm_warranty" type="number" placeholder="24"></div>
    </div>
    <div class="grid-2">
      <div class="form-group"><label class="form-label">Strap</label><input class="form-input" id="pm_strap" placeholder="Leather"></div>
      <div class="form-group"><label class="form-label">Discount (%)</label><input class="form-input" id="pm_discount" type="number" placeholder="0"></div>
    </div>
    <div class="form-group"><label class="form-label">Image URL</label><input class="form-input" id="pm_img" placeholder="https://..."></div>
    <div style="display:flex;gap:8px;justify-content:flex-end;margin-top:8px">
      <button class="btn btn-ghost" onclick="closeModal('productModal')">Cancel</button>
      <button class="btn btn-primary" onclick="saveProduct(this)" id="saveProductBtn">
        <span class="spin"></span><span class="btn-text">Save Product</span>
      </button>
    </div>
  </div>
</div>

<!-- USER MODAL -->
<div class="modal-overlay" id="userModal">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title">Edit User</div>
      <i class="ti ti-x modal-close" onclick="closeModal('userModal')"></i>
    </div>
    <div id="userModalContent"></div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
<script>
// ---- STATE ----
let currentUser = null;
let isDark = true;
let products = [
  {id:'1',name:'Zinvo Blade Cobalt V2',img:'https://klassywatches.com/cdn/shop/files/Cobalt_02-2_1000x.png?v=1731966652',price:450,qty:85,rating:72,company:'ZINVO',strap:'Stainless Steel',warranty:73,discount:21,description:'Featuring a brushed 316L stainless steel case and a deep blue color combination, along with ZINVO\'s unique 1-second-spin turbine dial.',country:'USA',saler:'Mike R.',shopName:'CamboTech Store'},
  {id:'2',name:'Seiko Presage SSA405',img:'https://images.squarespace-cdn.com/content/v1/5eb7ab75c3b77950b9c43e47/1594413399803-YHFZDDXO1EM7IQHPBAWZ/seiko-presage-ssa405j1.jpg',price:890,qty:32,rating:88,company:'Seiko',strap:'Leather',warranty:24,discount:5,description:'Japanese masterpiece with stunning enamel dial.'},
  {id:'3',name:'Orient Star Classic',img:'https://orient-watch.com/img/media/catalog/product/W/Z/WZ0011DL.jpg',price:380,qty:54,rating:75,company:'Orient',strap:'Leather',warranty:24,discount:10,description:'Classic elegance with hand-winding movement.'},
  {id:'4',name:'Citizen Promaster Dive',img:'https://citizenwatch.com/medias/BN0150-28E_1.jpg',price:250,qty:120,rating:82,company:'Citizen',strap:'Rubber',warranty:36,discount:0,description:'200m water resistant professional diver.'},
];
let users = [
  {id:'1',username:'Ah Boto',email:'foufou9173@gmail.com',role:'admin',location:'Phnom Penh City',sex:'m',createdAt:1780771641,banned:false,image:'AB',phone:12346789,bio:'Store Admin. Managing products and users.'},
  {id:'2',username:'Dey Vavi',email:'vavi123@gmail.com',role:'user',location:'Siem Reap',sex:'f',createdAt:1780771581,banned:false,image:'DV',phone:123456789,bio:'Watch enthusiast and collector.'},
  {id:'3',username:'Chan Sophea',email:'sophea@gmail.com',role:'user',location:'Battambang',sex:'f',createdAt:1780760000,banned:false,image:'CS',phone:123111222,bio:'Fashion blogger covering luxury watches.'},
];
let orders = [
  {id:'ORD001',user:'Dey Vavi',product:'Zinvo Blade Cobalt V2',price:450,date:'2025-01-15',status:'delivered',location:'Siem Reap',tracking:'TRK2025001'},
  {id:'ORD002',user:'Chan Sophea',product:'Seiko Presage SSA405',price:890,date:'2025-01-18',status:'shipping',location:'Battambang',tracking:'TRK2025002'},
  {id:'ORD003',user:'Dey Vavi',product:'Orient Star Classic',price:380,date:'2025-01-20',status:'processing',location:'Siem Reap',tracking:'TRK2025003'},
  {id:'ORD004',user:'Chan Sophea',product:'Citizen Promaster Dive',price:250,date:'2025-01-22',status:'pending',location:'Phnom Penh',tracking:'TRK2025004'},
];
let editingProduct = null;
let forgotEmailTarget = '';
let charts = {};

// ---- AUTH HELPERS ----
function togglePw(inputId, iconId){
  const inp = document.getElementById(inputId);
  const ico = document.getElementById(iconId);
  if(inp.type==='password'){inp.type='text';ico.className='ti ti-eye-off input-icon';}
  else{inp.type='password';ico.className='ti ti-eye input-icon';}
}
function showView(v){
  ['loginView','registerView','forgotView'].forEach(id=>{
    const el=document.getElementById(id);
    if(el) el.style.display='none';
  });
  const target=document.getElementById(v);
  if(target) target.style.display='block';
  // Reset forgot steps
  if(v==='forgotView'){
    document.querySelectorAll('.forgot-step').forEach(s=>s.classList.remove('active'));
    document.getElementById('forgotStep1').classList.add('active');
  }
}
function showBtn(btn,loading){
  btn.classList.toggle('loading',loading);
}
function doLogin(btn){
  const u=document.getElementById('loginUser').value;
  const p=document.getElementById('loginPass').value;
  showBtn(btn,true);
  setTimeout(()=>{
    const found = users.find(x=>x.username===u);
    if(found && p.length>=4){
      currentUser=found;
      showDashboard();
    } else {
      showToast('Invalid username or password','error');
    }
    showBtn(btn,false);
  },1200);
}
function doSocialLogin(provider, btn){
  showBtn(btn,true);
  setTimeout(()=>{
    currentUser=users[0];
    showDashboard();
    showBtn(btn,false);
  },1500);
}
function doRegister(btn){
  const u=document.getElementById('regUser').value;
  const e=document.getElementById('regEmail').value;
  const p=document.getElementById('regPass').value;
  const r=document.getElementById('regRole').value;
  if(!u||!e||!p){showToast('Please fill all fields','error');return;}
  showBtn(btn,true);
  setTimeout(()=>{
    const code=Math.floor(100000+Math.random()*900000).toString();
    const newUser={id:Date.now().toString(),username:u,email:e,role:r,location:'Unknown',sex:'m',createdAt:Math.floor(Date.now()/1000),banned:false,image:u.substring(0,2).toUpperCase(),phone:0,bio:'',code};
    users.push(newUser);
    showToast('Account created! Code: '+code+' (sent to email)','success');
    setTimeout(()=>showView('loginView'),2000);
    showBtn(btn,false);
  },1500);
}
function sendForgotCode(btn){
  const email=document.getElementById('forgotEmail').value;
  if(!email){showToast('Enter your email','error');return;}
  showBtn(btn,true);
  forgotEmailTarget=email;
  setTimeout(()=>{
    document.getElementById('forgotEmailDisplay').textContent=email;
    document.getElementById('forgotStep1').classList.remove('active');
    document.getElementById('forgotStep2').classList.add('active');
    showToast('Code sent to '+email+' (check spam)','info');
    showBtn(btn,false);
  },1500);
}
function codeNext(inp,idx){
  if(inp.value.length===1&&idx<5){document.getElementById('c'+(idx+1)).focus();}
}
function verifyCode(btn){
  const code=[0,1,2,3,4,5].map(i=>document.getElementById('c'+i).value).join('');
  showBtn(btn,true);
  setTimeout(()=>{
    const u=users.find(x=>x.email===forgotEmailTarget);
    if(u&&u.code===code){
      document.getElementById('forgotStep2').classList.remove('active');
      document.getElementById('forgotStep3').classList.add('active');
      showToast('Code verified!','success');
    } else if(code==='123456'){
      document.getElementById('forgotStep2').classList.remove('active');
      document.getElementById('forgotStep3').classList.add('active');
      showToast('Code verified!','success');
    } else {
      showToast('Wrong code. Try 123456 for demo','error');
    }
    showBtn(btn,false);
  },1000);
}
function resetPassword(btn){
  const np=document.getElementById('newPass').value;
  const cp=document.getElementById('confirmPass').value;
  if(!np||np!==cp){showToast('Passwords do not match','error');return;}
  showBtn(btn,true);
  setTimeout(()=>{
    showToast('Password updated successfully!','success');
    setTimeout(()=>showView('loginView'),1500);
    showBtn(btn,false);
  },1200);
}

// ---- DASHBOARD ----
function showDashboard(){
  document.getElementById('authScreen').style.display='none';
  document.getElementById('dashScreen').style.display='flex';
  document.getElementById('topbarName').textContent=currentUser.username;
  document.getElementById('topbarRole').textContent=currentUser.role.charAt(0).toUpperCase()+currentUser.role.slice(1);
  document.getElementById('topbarAvatar').textContent=currentUser.image;
  // Hide admin-only items for users
  if(currentUser.role!=='admin'){
    document.querySelectorAll('.admin-only').forEach(el=>{el.style.display='none'});
  } else {
    document.querySelectorAll('.admin-only').forEach(el=>{el.style.display='flex'});
  }
  showPage('analytics', document.querySelector('.nav-item'));
}

function showPage(page, el){
  document.querySelectorAll('.nav-item').forEach(n=>n.classList.remove('active'));
  if(el) el.classList.add('active');
  // Destroy all charts
  Object.values(charts).forEach(c=>{ try{c.destroy()}catch(e){} });
  charts={};
  const titles={analytics:'All Products Analytics',orders:'Order Analysis',sold:'Product Sold',crud:'Product CRUD',roles:'User Roles & Management',profile:'My Profile'};
  document.getElementById('pageTitle').textContent=titles[page]||page;
  const c=document.getElementById('mainContent');
  c.innerHTML='';
  if(page==='analytics') renderAnalytics(c);
  else if(page==='orders') renderOrders(c);
  else if(page==='sold') renderSold(c);
  else if(page==='crud') renderCrud(c);
  else if(page==='roles') renderRoles(c);
  else if(page==='profile') renderProfile(c);
}

// ---- ANALYTICS PAGE ----
function renderAnalytics(c){
  const totalRevenue=products.reduce((a,p)=>a+p.price*p.qty,0);
  const totalSold=orders.length;
  c.innerHTML=`
  <div class="page-view">
  <div class="grid-4" style="margin-bottom:14px">
    <div class="gcard" style="background:var(--grad1)">
      <div class="gcard-lbl">Total Revenue</div>
      <div class="gcard-val">$${(totalRevenue/1000).toFixed(1)}K</div>
      <span class="stat-chip chip-up" style="background:rgba(255,255,255,0.2);color:#fff">↑ 18.3%</span>
    </div>
    <div class="gcard" style="background:var(--grad3)">
      <div class="gcard-lbl">Products</div>
      <div class="gcard-val">${products.length}</div>
      <span class="stat-chip" style="background:rgba(255,255,255,0.2);color:#fff">↑ 2 new</span>
    </div>
    <div class="gcard" style="background:var(--grad5)">
      <div class="gcard-lbl">Orders Placed</div>
      <div class="gcard-val">${orders.length}</div>
      <span class="stat-chip" style="background:rgba(255,255,255,0.2);color:#fff">↑ 12%</span>
    </div>
    <div class="gcard" style="background:var(--grad4)">
      <div class="gcard-lbl">Avg Rating</div>
      <div class="gcard-val">${(products.reduce((a,p)=>a+p.rating,0)/products.length).toFixed(0)}%</div>
      <span class="stat-chip" style="background:rgba(255,255,255,0.2);color:#fff">↑ 3pts</span>
    </div>
  </div>

  <div class="grid-2" style="margin-bottom:14px">
    <div class="card">
      <div class="card-title">Monthly Sales Revenue</div>
      <div class="chart-wrap" style="height:220px"><canvas id="revenueChart"></canvas></div>
    </div>
    <div class="card">
      <div class="card-title">Customer Demographics</div>
      <div class="grid-2" style="margin-bottom:12px">
        <div class="mini-stat">
          <div><div class="mini-stat-val">62%</div><div class="mini-stat-lbl">Male buyers</div></div>
          <span style="font-size:22px">👨</span>
        </div>
        <div class="mini-stat">
          <div><div class="mini-stat-val">38%</div><div class="mini-stat-lbl">Female buyers</div></div>
          <span style="font-size:22px">👩</span>
        </div>
      </div>
      <div class="gender-bar">
        <div style="width:62%;background:var(--blue);border-radius:4px 0 0 4px"></div>
        <div style="width:38%;background:var(--pink);border-radius:0 4px 4px 0"></div>
      </div>
      <div class="chart-wrap" style="height:150px;margin-top:12px"><canvas id="demoChart"></canvas></div>
    </div>
  </div>

  <div class="grid-2" style="margin-bottom:14px">
    <div class="card">
      <div class="card-title">Top Selling Watches</div>
      ${products.sort((a,b)=>b.rating-a.rating).map((p,i)=>`
      <div style="display:flex;align-items:center;gap:10px;margin-bottom:10px">
        <div style="width:28px;height:28px;border-radius:50%;background:var(--grad${(i%5)+1});display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:700;color:#fff;flex-shrink:0">${i+1}</div>
        <img src="${p.img}" style="width:36px;height:36px;border-radius:8px;object-fit:cover;background:var(--bg3);flex-shrink:0" onerror="this.style.background='var(--bg4)'">
        <div style="flex:1;min-width:0">
          <div style="font-size:12px;font-weight:600;color:var(--text);white-space:nowrap;overflow:hidden;text-overflow:ellipsis">${p.name}</div>
          <div class="progress-bar"><div class="progress-fill" style="width:${p.rating}%;background:var(--grad1)"></div></div>
        </div>
        <div style="font-size:13px;font-weight:700;color:var(--accent2);flex-shrink:0">$${p.price}</div>
      </div>`).join('')}
    </div>
    <div class="card">
      <div class="card-title">Product Category Breakdown</div>
      <div class="chart-wrap" style="height:220px"><canvas id="catChart"></canvas></div>
    </div>
  </div>

  <div class="card">
    <div class="card-title">All Products Inventory</div>
    <table>
      <thead><tr><th>Watch</th><th>Company</th><th>Price</th><th>Stock</th><th>Rating</th><th>Discount</th><th>Revenue Est.</th></tr></thead>
      <tbody>
        ${products.map(p=>`<tr>
          <td><div style="display:flex;align-items:center;gap:8px"><img src="${p.img}" style="width:32px;height:32px;border-radius:6px;object-fit:cover;background:var(--bg3)" onerror="this.style.background='var(--bg4)'"><div style="font-size:12px;font-weight:600;color:var(--text)">${p.name}</div></div></td>
          <td>${p.company||'—'}</td>
          <td style="color:var(--accent2);font-weight:600">$${p.price}</td>
          <td><span class="badge ${p.qty>50?'badge-active':'badge-pending'}">${p.qty} units</span></td>
          <td><span class="stat-chip chip-up">${p.rating}%</span></td>
          <td><span class="tag tag-warn">${p.discount}% off</span></td>
          <td style="font-weight:600;color:var(--green)">$${(p.price*p.qty/1000).toFixed(1)}K</td>
        </tr>`).join('')}
      </tbody>
    </table>
  </div>
  </div>`;

  setTimeout(()=>{
    // Revenue chart
    const rCtx=document.getElementById('revenueChart');
    if(rCtx){
      charts.revenue=new Chart(rCtx,{type:'line',data:{labels:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug'],datasets:[{label:'Revenue',data:[18000,24000,19000,32000,28000,40000,35000,45000],borderColor:'#7c6af7',backgroundColor:'rgba(124,106,247,0.08)',tension:0.4,fill:true,pointBackgroundColor:'#7c6af7',pointRadius:4},{label:'Orders',data:[12000,18000,15000,22000,20000,28000,25000,32000],borderColor:'#f472b6',backgroundColor:'rgba(244,114,182,0.08)',tension:0.4,fill:true,pointBackgroundColor:'#f472b6',pointRadius:4}]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{grid:{color:'rgba(120,130,255,0.06)'},ticks:{color:'#6b75b8',font:{size:10}}},y:{grid:{color:'rgba(120,130,255,0.06)'},ticks:{color:'#6b75b8',font:{size:10},callback:v=>'$'+(v/1000)+'K'}}}}});
    }
    // Demo chart
    const dCtx=document.getElementById('demoChart');
    if(dCtx){
      charts.demo=new Chart(dCtx,{type:'bar',data:{labels:['18-24','25-34','35-44','45-54','55+'],datasets:[{label:'Male',data:[15,28,20,12,8],backgroundColor:'rgba(96,165,250,0.7)'},{label:'Female',data:[8,18,12,10,6],backgroundColor:'rgba(244,114,182,0.7)'}]},options:{responsive:true,maintainAspectRatio:false,plugins:{legend:{display:false}},scales:{x:{grid:{display:false},ticks:{color:'#6b75b8',font:{size:10}}},y:{grid:{color:'rgba(120,130,255,0.06)'},ticks:{color:'#6b75b8',font:{size:10}}}}}});
    }
    // Category chart
    const cCtx=document.getElementById('catChart');
    if(cCtx){
      charts.cat=new Chart(cCtx,{type:'doughnut',data:{labels:['Automatic','Dive','Dress','Sport','Luxury'],datasets:[{data:[35,20,18,15,12],backgroundColor:['#7c6af7','#60a5fa','#f472b6','#34d399','#f59e0b'],borderWidth:0,hoverOffset:4}]},options:{responsive:true,maintainAspectRatio:false,cutout:'65%',plugins:{legend:{position:'right',labels:{color:'#9ea8d8',font:{size:11},padding:10,boxWidth:10}}}}});
    }
  },100);
}

// ---- ORDERS PAGE ----
function renderOrders(c){
  const statusMap={delivered:{cls:'badge-active',icon:'ti-circle-check',steps:4},shipping:{cls:'badge-user',icon:'ti-truck',steps:3},processing:{cls:'badge-warn',icon:'ti-loader',steps:2},pending:{cls:'badge-pending',icon:'ti-clock',steps:1}};
  c.innerHTML=`
  <div class="page-view">
  <div class="grid-4" style="margin-bottom:14px">
    <div class="mini-stat"><div><div class="mini-stat-val">${orders.length}</div><div class="mini-stat-lbl">Total Orders</div></div><i class="ti ti-shopping-cart" style="font-size:24px;color:var(--accent)"></i></div>
    <div class="mini-stat"><div><div class="mini-stat-val">${orders.filter(o=>o.status==='delivered').length}</div><div class="mini-stat-lbl">Delivered</div></div><i class="ti ti-circle-check" style="font-size:24px;color:var(--green)"></i></div>
    <div class="mini-stat"><div><div class="mini-stat-val">${orders.filter(o=>o.status==='shipping').length}</div><div class="mini-stat-lbl">Shipping</div></div><i class="ti ti-truck" style="font-size:24px;color:var(--blue)"></i></div>
    <div class="mini-stat"><div><div class="mini-stat-val">$${orders.reduce((a,o)=>a+o.price,0)}</div><div class="mini-stat-lbl">Total Value</div></div><i class="ti ti-currency-dollar" style="font-size:24px;color:var(--gold)"></i></div>
  </div>

  <div class="grid-2" style="margin-bottom:14px">
    <div class="card">
      <div class="card-title">Order Status Distribution</div>
      <div class="chart-wrap" style="height:200px"><canvas id="orderStatusChart"></canvas></div>
    </div>
    <div class="card">
      <div class="card-title">Order Tracking Details</div>
      ${orders.slice(0,2).map(o=>{
        const sm=statusMap[o.status];
        return`<div style="margin-bottom:16px;padding-bottom:16px;border-bottom:1px solid var(--border)">
          <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px">
            <div><div style="font-size:13px;font-weight:600;color:var(--text)">${o.id} — ${o.product.split(' ').slice(0,3).join(' ')}</div>
            <div style="font-size:11px;color:var(--text3)">${o.user} · ${o.location}</div></div>
            <span class="badge ${sm.cls}">${o.status}</span>
          </div>
          <div style="display:flex;gap:0">
            ${['Order Placed','Processing','Shipped','Delivered'].map((step,i)=>`
            <div style="flex:1;text-align:center;position:relative">
              <div style="width:20px;height:20px;border-radius:50%;border:2px solid ${i<sm.steps?'var(--green)':'var(--border)'};background:${i<sm.steps?'rgba(52,211,153,0.2)':'var(--bg3)'};display:flex;align-items:center;justify-content:center;margin:0 auto;font-size:10px;color:${i<sm.steps?'var(--green)':'var(--text3)'}">
                ${i<sm.steps?'✓':i+1}
              </div>
              <div style="font-size:9px;color:var(--text3);margin-top:3px">${step}</div>
              ${i<3?`<div style="position:absolute;top:10px;left:60%;width:80%;height:1px;background:${i<sm.steps-1?'var(--green)':'var(--border)'}"></div>`:''}
            </div>`).join('')}
          </div>
          <div style="font-size:11px;color:var(--text3);margin-top:8px">Tracking: <span style="color:var(--accent2)">${o.tracking}</span></div>
        </div>`;
      }).join('')}
    </div>
  </div>

  <div class="card">
    <div class="card-title">All Orders</div>
    <table>
      <thead><tr><th>Order ID</th><th>Customer</th><th>Product</th><th>Price</th><th>Date</th><th>Location</th><th>Tracking</th><th>Status</th></tr></thead>
      <tbody>
        ${orders.map(o=>{
          const sm=statusMap[o.status]||{cls:'badge-user'};
          return`<tr>
            <td style="font-weight:600;color:var(--accent2)">${o.id}</td>
            <td>${o.user}</td>
            <td style="max-width:160px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap">${o.product}</td>
            <td style="color:var(--green);font-weight:600">$${o.price}</td>
            <td>${o.date}</td>
            <td><i class="ti ti-map-pin" style="font-size:12px"></i> ${o.location}</td>
            <td style="color:var(--text3);font-size:11px">${o.tracking}</td>
            <td><span class="badge ${sm.cls}">${o.status}</span></td>
          </tr>`;
        }).join('')}
      </tbody>
    </table>
  </div>
  </div>`;
  setTimeout(()=>{
    const ctx=document.getElementById('orderStatusChart');
    if(ctx){
      const statusCounts=['delivered','shipping','processing','pending'].map(s=>orders.filter(o=>o.status===s).length);
      charts.orderStatus=new Chart(ctx,{type:'doughnut',data:{labels:['Delivered','Shipping','Processing','Pending'],datasets:[{data:statusCounts,backgroundColor:['#34d399','#60a5fa','#f59e0b','#f87171'],borderWidth:0}]},options:{responsive:true,maintainAspectRatio:false,cutout:'60%',plugins:{legend:{position:'right',labels:{color:'#9ea8d8',font:{size:11},boxWidth:10,padding:8}}}}});
    }
  },100);
}

// ---- SOLD PAGE ----
function renderSold(c){
  c.innerHTML=`
  <div class="page-view">
  <div class="grid-4" style="margin-bottom:14px">
    <div class="mini-stat"><div><div class="mini-stat-val">${orders.length}</div><div class="mini-stat-lbl">Items Sold</div></div><i class="ti ti-receipt-2" style="font-size:22px;color:var(--accent)"></i></div>
    <div class="mini-stat"><div><div class="mini-stat-val">$${orders.reduce((a,o)=>a+o.price,0).toLocaleString()}</div><div class="mini-stat-lbl">Total Revenue</div></div><i class="ti ti-currency-dollar" style="font-size:22px;color:var(--green)"></i></div>
    <div class="mini-stat"><div><div class="mini-stat-val">$${(orders.reduce((a,o)=>a+o.price,0)/orders.length).toFixed(0)}</div><div class="mini-stat-lbl">Avg Sale Price</div></div><i class="ti ti-chart-line" style="font-size:22px;color:var(--gold)"></i></div>
    <div class="mini-stat"><div><div class="mini-stat-val">${[...new Set(orders.map(o=>o.user))].length}</div><div class="mini-stat-lbl">Unique Buyers</div></div><i class="ti ti-users" style="font-size:22px;color:var(--pink)"></i></div>
  </div>
  <div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
      <div class="card-title" style="margin:0">Purchase History</div>
      <div class="search-box" style="width:200px"><i class="ti ti-search" style="font-size:14px;color:var(--text3)"></i><input placeholder="Search..." style="width:140px;background:none;border:none;outline:none;font-size:12px;color:var(--text);font-family:var(--font)" oninput="filterSold(this.value)"></div>
    </div>
    <table id="soldTable">
      <thead><tr><th>#</th><th>Buyer</th><th>Product</th><th>Price</th><th>Date</th><th>Status</th></tr></thead>
      <tbody id="soldBody">
        ${orders.map((o,i)=>`<tr>
          <td style="color:var(--text3);font-size:11px">${i+1}</td>
          <td><div style="display:flex;align-items:center;gap:8px">
            <div style="width:28px;height:28px;border-radius:50%;background:var(--grad1);display:flex;align-items:center;justify-content:center;font-size:10px;font-weight:700;color:#fff">${o.user.substring(0,2).toUpperCase()}</div>
            <span style="font-weight:500;color:var(--text)">${o.user}</span>
          </div></td>
          <td style="color:var(--text2)">${o.product}</td>
          <td style="color:var(--accent2);font-weight:700">$${o.price}</td>
          <td style="color:var(--text3)">${o.date}</td>
          <td><span class="badge ${o.status==='delivered'?'badge-active':o.status==='shipping'?'badge-user':'badge-pending'}">${o.status}</span></td>
        </tr>`).join('')}
      </tbody>
    </table>
  </div>
  </div>`;
}
function filterSold(q){
  const rows=document.querySelectorAll('#soldBody tr');
  rows.forEach(r=>{r.style.display=r.textContent.toLowerCase().includes(q.toLowerCase())?'':'none'});
}

// ---- CRUD PAGE ----
function renderCrud(c){
  c.innerHTML=`
  <div class="page-view">
  <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
    <div>
      <div style="font-size:18px;font-weight:700;color:var(--text)">Product Management</div>
      <div style="font-size:12px;color:var(--text3);margin-top:2px">${products.length} products in inventory</div>
    </div>
    ${currentUser&&currentUser.role==='admin'?`<button class="btn btn-primary" onclick="openProductModal(null)"><i class="ti ti-plus"></i><span class="btn-text">Add Product</span></button>`:''}
  </div>
  <div id="crudGrid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:14px"></div>
  </div>`;
  renderCrudGrid();
}
function renderCrudGrid(){
  const grid=document.getElementById('crudGrid');
  if(!grid) return;
  grid.innerHTML=products.map(p=>`
  <div class="watch-card">
    <img src="${p.img}" class="watch-img" onerror="this.style.background='linear-gradient(135deg,var(--bg3),var(--bg4))'" alt="${p.name}">
    <div class="watch-body">
      <div class="watch-name">${p.name}</div>
      <div class="watch-price">$${p.price}</div>
      <div class="watch-meta">${p.company||'—'} · Stock: ${p.qty} · ${p.strap||'—'}</div>
      <div class="watch-meta" style="margin-top:4px">
        <span class="tag tag-up" style="margin-right:4px">${p.rating}% rating</span>
        ${p.discount?`<span class="tag tag-warn">${p.discount}% off</span>`:''}
      </div>
      ${currentUser&&currentUser.role==='admin'?`
      <div style="display:flex;gap:6px;margin-top:10px">
        <button class="btn btn-ghost btn-sm" style="flex:1" onclick="openProductModal('${p.id}')"><i class="ti ti-edit"></i> Edit</button>
        <button class="btn btn-danger btn-sm btn-icon" onclick="deleteProduct('${p.id}',this)"><i class="ti ti-trash"></i></button>
      </div>`:`<div style="margin-top:10px"><button class="btn btn-primary btn-sm" style="width:100%"><i class="ti ti-plus"></i> List Product</button></div>`}
    </div>
  </div>`).join('');
}
function openProductModal(id){
  editingProduct=id?products.find(p=>p.id===id):null;
  document.getElementById('productModalTitle').textContent=id?'Edit Product':'Add New Product';
  document.getElementById('saveProductBtn').querySelector('.btn-text').textContent=id?'Update Product':'Save Product';
  if(editingProduct){
    document.getElementById('pm_name').value=editingProduct.name||'';
    document.getElementById('pm_price').value=editingProduct.price||'';
    document.getElementById('pm_qty').value=editingProduct.qty||'';
    document.getElementById('pm_desc').value=editingProduct.description||'';
    document.getElementById('pm_company').value=editingProduct.company||'';
    document.getElementById('pm_warranty').value=editingProduct.warranty||'';
    document.getElementById('pm_strap').value=editingProduct.strap||'';
    document.getElementById('pm_discount').value=editingProduct.discount||'';
    document.getElementById('pm_img').value=editingProduct.img||'';
  } else {
    ['pm_name','pm_price','pm_qty','pm_desc','pm_company','pm_warranty','pm_strap','pm_discount','pm_img'].forEach(id=>document.getElementById(id).value='');
  }
  openModal('productModal');
}
function saveProduct(btn){
  showBtn(btn,true);
  setTimeout(()=>{
    const data={
      name:document.getElementById('pm_name').value,
      price:+document.getElementById('pm_price').value||0,
      qty:+document.getElementById('pm_qty').value||0,
      description:document.getElementById('pm_desc').value,
      company:document.getElementById('pm_company').value,
      warranty:+document.getElementById('pm_warranty').value||0,
      strap:document.getElementById('pm_strap').value,
      discount:+document.getElementById('pm_discount').value||0,
      img:document.getElementById('pm_img').value,
      rating:Math.floor(60+Math.random()*30),
    };
    if(editingProduct){
      Object.assign(editingProduct,data);
      showToast('Product updated!','success');
    } else {
      data.id=Date.now().toString();
      products.push(data);
      showToast('Product added!','success');
    }
    closeModal('productModal');
    renderCrudGrid();
    showBtn(btn,false);
  },1000);
}
function deleteProduct(id,btn){
  showBtn(btn,true);
  setTimeout(()=>{
    products=products.filter(p=>p.id!==id);
    showToast('Product deleted','info');
    renderCrudGrid();
    showBtn(btn,false);
  },800);
}

// ---- ROLES PAGE ----
function renderRoles(c){
  c.innerHTML=`
  <div class="page-view">
  <div class="grid-3" style="margin-bottom:14px">
    <div class="mini-stat"><div><div class="mini-stat-val">${users.length}</div><div class="mini-stat-lbl">Total Users</div></div><i class="ti ti-users" style="font-size:22px;color:var(--accent)"></i></div>
    <div class="mini-stat"><div><div class="mini-stat-val">${users.filter(u=>u.role==='admin').length}</div><div class="mini-stat-lbl">Admins</div></div><i class="ti ti-shield" style="font-size:22px;color:var(--gold)"></i></div>
    <div class="mini-stat"><div><div class="mini-stat-val">${users.filter(u=>u.banned).length}</div><div class="mini-stat-lbl">Banned</div></div><i class="ti ti-ban" style="font-size:22px;color:var(--red)"></i></div>
  </div>
  <div class="card">
    <div class="card-title">User Management</div>
    <table>
      <thead><tr><th>User</th><th>Email</th><th>Role</th><th>Location</th><th>Status</th><th>Actions</th></tr></thead>
      <tbody id="usersBody">${renderUsersRows()}</tbody>
    </table>
  </div>
  </div>`;
}
function renderUsersRows(){
  return users.map(u=>`<tr id="userRow_${u.id}">
    <td><div style="display:flex;align-items:center;gap:10px">
      <div style="width:34px;height:34px;border-radius:50%;background:var(--grad1);display:flex;align-items:center;justify-content:center;font-size:12px;font-weight:700;color:#fff;flex-shrink:0">${u.image}</div>
      <div><div style="font-size:13px;font-weight:600;color:var(--text)">${u.username}</div><div style="font-size:11px;color:var(--text3)">${u.sex==='m'?'Male':'Female'}</div></div>
    </div></td>
    <td style="font-size:12px;color:var(--text3)">${u.email}</td>
    <td><span class="badge ${u.role==='admin'?'badge-admin':'badge-user'}">${u.role}</span></td>
    <td style="font-size:12px"><i class="ti ti-map-pin" style="font-size:12px"></i> ${u.location}</td>
    <td><span class="badge ${u.banned?'badge-banned':'badge-active'}">${u.banned?'Banned':'Active'}</span></td>
    <td><div style="display:flex;gap:4px;flex-wrap:wrap">
      <button class="btn btn-ghost btn-sm" onclick="openEditUser('${u.id}')"><i class="ti ti-edit"></i></button>
      <button class="btn btn-warn btn-sm" onclick="toggleBan('${u.id}',this)">${u.banned?'Unban':'Ban'}</button>
      <button class="btn btn-danger btn-sm" onclick="deleteUser('${u.id}',this)"><i class="ti ti-trash"></i></button>
    </div></td>
  </tr>`).join('');
}
function openEditUser(id){
  const u=users.find(x=>x.id===id);
  if(!u) return;
  document.getElementById('userModalContent').innerHTML=`
    <div class="form-group"><label class="form-label">Username</label><input class="form-input" id="eu_name" value="${u.username}"></div>
    <div class="form-group"><label class="form-label">Email</label><input class="form-input" id="eu_email" value="${u.email}"></div>
    <div class="form-group"><label class="form-label">Role</label>
      <select class="form-input" id="eu_role"><option value="admin" ${u.role==='admin'?'selected':''}>Admin</option><option value="user" ${u.role==='user'?'selected':''}>User</option></select>
    </div>
    <div class="form-group"><label class="form-label">Location</label><input class="form-input" id="eu_loc" value="${u.location}"></div>
    <div style="display:flex;gap:8px;justify-content:flex-end;margin-top:8px">
      <button class="btn btn-ghost" onclick="closeModal('userModal')">Cancel</button>
      <button class="btn btn-primary" onclick="saveUser('${id}',this)"><span class="spin"></span><span class="btn-text">Save Changes</span></button>
    </div>`;
  openModal('userModal');
}
function saveUser(id,btn){
  showBtn(btn,true);
  setTimeout(()=>{
    const u=users.find(x=>x.id===id);
    if(u){
      u.username=document.getElementById('eu_name').value;
      u.email=document.getElementById('eu_email').value;
      u.role=document.getElementById('eu_role').value;
      u.location=document.getElementById('eu_loc').value;
    }
    closeModal('userModal');
    const body=document.getElementById('usersBody');
    if(body) body.innerHTML=renderUsersRows();
    showToast('User updated!','success');
    showBtn(btn,false);
  },1000);
}
function toggleBan(id,btn){
  showBtn(btn,true);
  setTimeout(()=>{
    const u=users.find(x=>x.id===id);
    if(u){u.banned=!u.banned; showToast(u.banned?`${u.username} banned`:`${u.username} unbanned`,u.banned?'error':'success');}
    const body=document.getElementById('usersBody');
    if(body) body.innerHTML=renderUsersRows();
    showBtn(btn,false);
  },800);
}
function deleteUser(id,btn){
  if(id===currentUser?.id){showToast("Can't delete your own account",'error');return;}
  showBtn(btn,true);
  setTimeout(()=>{
    users=users.filter(u=>u.id!==id);
    const body=document.getElementById('usersBody');
    if(body) body.innerHTML=renderUsersRows();
    showToast('User deleted','info');
    showBtn(btn,false);
  },800);
}

// ---- PROFILE PAGE ----
function renderProfile(c){
  const u=currentUser;
  const joined=new Date(u.createdAt*1000).toLocaleDateString();
  c.innerHTML=`
  <div class="page-view">
  <div class="grid-2">
    <div class="card">
      <div style="text-align:center;padding:12px 0">
        <div style="width:80px;height:80px;border-radius:50%;background:var(--grad1);display:flex;align-items:center;justify-content:center;font-size:28px;font-weight:700;color:#fff;margin:0 auto 12px;border:3px solid var(--accent)">${u.image}</div>
        <div style="font-size:20px;font-weight:700;color:var(--text)">${u.username}</div>
        <span class="badge ${u.role==='admin'?'badge-admin':'badge-user'}" style="margin-top:6px;display:inline-block">${u.role}</span>
        <div style="font-size:13px;color:var(--text3);margin-top:8px">${u.bio||'No bio yet'}</div>
      </div>
      <div style="border-top:1px solid var(--border);padding-top:14px;margin-top:8px">
        ${[['Email',u.email,'ti-mail'],['Phone',u.phone||'—','ti-phone'],['Location',u.location,'ti-map-pin'],['Member since',joined,'ti-calendar'],['Gender',u.sex==='m'?'Male':'Female','ti-gender-male']].map(([l,v,i])=>`
        <div class="mini-stat" style="margin-bottom:8px">
          <div style="display:flex;align-items:center;gap:8px"><i class="ti ${i}" style="color:var(--accent2);font-size:16px"></i><div class="mini-stat-lbl">${l}</div></div>
          <div style="font-size:13px;color:var(--text)">${v}</div>
        </div>`).join('')}
      </div>
      <div style="margin-top:14px">
        <button class="btn btn-danger" style="width:100%;justify-content:center" onclick="doLogout(this)">
          <span class="spin"></span><span class="btn-text"><i class="ti ti-logout"></i> Sign Out</span>
        </button>
      </div>
    </div>
    <div>
      <div class="card" style="margin-bottom:14px">
        <div class="card-title">Edit Profile</div>
        <div class="form-group"><label class="form-label">Username</label><input class="form-input" id="prof_name" value="${u.username}"></div>
        <div class="form-group"><label class="form-label">Bio</label><textarea class="form-input" id="prof_bio" rows="3">${u.bio||''}</textarea></div>
        <div class="form-group"><label class="form-label">Location</label><input class="form-input" id="prof_loc" value="${u.location}"></div>
        <div class="form-group"><label class="form-label">Phone</label><input class="form-input" id="prof_phone" value="${u.phone||''}"></div>
        <button class="btn btn-primary" onclick="saveProfile(this)"><span class="spin"></span><span class="btn-text">Save Changes</span></button>
      </div>
      <div class="card">
        <div class="card-title">Account Stats</div>
        <div class="grid-2">
          <div class="mini-stat"><div><div class="mini-stat-val">${orders.filter(o=>o.user===u.username).length}</div><div class="mini-stat-lbl">My Orders</div></div></div>
          <div class="mini-stat"><div><div class="mini-stat-val">${currentUser.role==='admin'?products.length:'-'}</div><div class="mini-stat-lbl">Products</div></div></div>
        </div>
      </div>
    </div>
  </div>
  </div>`;
}
function saveProfile(btn){
  showBtn(btn,true);
  setTimeout(()=>{
    currentUser.username=document.getElementById('prof_name').value;
    currentUser.bio=document.getElementById('prof_bio').value;
    currentUser.location=document.getElementById('prof_loc').value;
    currentUser.phone=document.getElementById('prof_phone').value;
    document.getElementById('topbarName').textContent=currentUser.username;
    showToast('Profile updated!','success');
    showBtn(btn,false);
  },1000);
}
function doLogout(btn){
  showBtn(btn,true);
  setTimeout(()=>{
    currentUser=null;
    document.getElementById('dashScreen').style.display='none';
    document.getElementById('authScreen').style.display='flex';
    showView('loginView');
    showBtn(btn,false);
  },800);
}

// ---- UTILITIES ----
function openModal(id){document.getElementById(id).classList.add('open');}
function closeModal(id){document.getElementById(id).classList.remove('open');}
function toggleTheme(){
  isDark=!isDark;
  document.body.classList.toggle('light',!isDark);
  document.getElementById('themeTrack').classList.toggle('on',!isDark);
  document.getElementById('themeKnob').classList.toggle('on',!isDark);
  document.getElementById('themeLabel').textContent=isDark?'Dark':'Light';
}
function showToast(msg,type='info'){
  const c=document.getElementById('toastContainer');
  const t=document.createElement('div');
  t.className=`toast toast-${type}`;
  const icons={success:'ti-circle-check',error:'ti-alert-circle',info:'ti-info-circle'};
  t.innerHTML=`<i class="ti ${icons[type]||'ti-info-circle'}" style="color:var(--${type==='success'?'green':type==='error'?'red':'blue'})"></i><span>${msg}</span>`;
  c.appendChild(t);
  setTimeout(()=>t.remove(),3500);
}

// Close modals on overlay click
document.querySelectorAll('.modal-overlay').forEach(o=>{
  o.addEventListener('click',e=>{if(e.target===o)o.classList.remove('open')});
});

// Close code input on background
document.addEventListener('keydown',e=>{if(e.key==='Escape')document.querySelectorAll('.modal-overlay.open').forEach(o=>o.classList.remove('open'))});
</script>
