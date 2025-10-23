<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Registro</title>
    <style>
        /* Layout básico tipo AdminLTE */
        :root { --sidebar-w: 260px; --bg: #f6f7f9; --sidebar-bg:#2f3640; --sidebar-text:#cfd6da; --accent:#00a65a; }
        html,body { height:100%; margin:0; font-family: "Segoe UI", Roboto, Arial, sans-serif; background:var(--bg); color:#222; }
        .app { display:flex; min-height:100vh; }
        .sidebar { width:var(--sidebar-w); background:var(--sidebar-bg); color:var(--sidebar-text); padding:20px 12px; box-sizing:border-box; }
        .logo { font-weight:700; color:#fff; font-size:18px; padding:10px 8px; display:flex; align-items:center; gap:8px; }
        .search { margin:14px 0; }
        .search input { width:100%; padding:8px 10px; border-radius:4px; border:none; }
        .menu { margin-top:8px; }
        .menu h6 { font-size:12px; color:#9aa4a8; margin:18px 8px 8px; text-transform:uppercase; letter-spacing:1px; }
        .menu ul { list-style:none; padding:0; margin:0; }
        .menu li { padding:10px 8px; display:flex; align-items:center; gap:10px; color:var(--sidebar-text); border-radius:4px; cursor:pointer; }
        .menu li:hover { background: rgba(255,255,255,0.03); }
        .label { display:inline-block; width:10px; height:10px; border-radius:50%; margin-right:8px; }
        .content { flex:1; padding:24px 32px; box-sizing:border-box; }
        .topbar { display:flex; justify-content:space-between; align-items:center; padding:12px 0; }
        .card { background:#fff; border-radius:6px; padding:20px; box-shadow: 0 2px 6px rgba(0,0,0,0.06); }
        .header-title { font-size:28px; margin:6px 0; }
        .subtle { color:#666; }
        /* responsive */
        @media(max-width:800px){ .sidebar{ display:none } .app{ padding:12px } }
    </style>
</head>
<body>
    <div class="app">
        <aside class="sidebar" role="navigation" aria-label="Sidebar">
            <div class="logo">
                <div style="width:34px;height:34px;background:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--sidebar-bg);font-weight:700">A</div>
                <div>AdminLTE</div>
            </div>

            <div class="search">
                <input type="search" placeholder="search" aria-label="Buscar">
            </div>

            <nav class="menu" aria-label="Main menu">
                <h6>Pages</h6>
                <ul>
                    <li>📄 Pages</li>
                </ul>

                <h6>Account Settings</h6>
                <ul>
                    <li>👤 Profile</li>
                    <li>🔒 Change Password</li>
                    <li>📂 Multi Level</li>
                </ul>

                <h6>Labels</h6>
                <ul>
                    <li><span class="label" style="background:#d9534f"></span>Important</li>
                    <li><span class="label" style="background:#f0ad4e"></span>Warning</li>
                    <li><span class="label" style="background:#5bc0de"></span>Information</li>
                </ul>
            </nav>
        </aside>

        <main class="content" role="main">
            <div class="topbar">
                <div>
                    <h2 class="header-title">Dashboard</h2>
                    <div class="subtle">Welcome to this beautiful admin panel.</div>
                </div>
                <div>
                    @if(auth()->check())
                        <span style="margin-right:12px;">Hola, <strong>{{ auth()->user()->name ?? auth()->user()->username ?? 'Usuario' }}</strong></span>
                        <a href="{{ route('logout') }}" style="margin-right:12px;text-decoration:none;color:#d9534f">Salir</a>
                        <a href="{{ url('/') }}" style="text-decoration:none;color:#007bff">Home</a>
                    @else
                        <a href="{{ url('/login') }}" style="margin-right:12px;text-decoration:none;color:#007bff">Login</a>
                        <a href="{{ url('/') }}" style="text-decoration:none;color:#007bff">Home</a>
                    @endif
                </div>
            </div>

           
        </main>
    </div>
</body>
</html>