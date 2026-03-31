<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: monospace, sans-serif;
        }

        .topbar {
            background: #11cc40;
            color: white;
            padding: 8px 20px;
            display: flex;
            justify-content: space-between;
        }

        .navbar {
            background: #15b0c4;
            display: flex;
            align-items: center;
            padding: 15px 20px;
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
            margin-right: auto;
        }

        .menu a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .menu a:hover {
            color: yellow;
        }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
                        url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1');
            background-size: cover;
            background-position: center;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .container {
            padding: 40px;
        }

        footer {
            background: #0b5e2b;
            color: white;
            text-align: center;
            padding: 15px;
        }
        .logo {
    display: flex;
    align-items: center;
    color: white;
    font-size: 22px;
    font-weight: bold;
}

.logo-img {
    width: 40px;
    height: 40px;
    margin-right: 10px;
    border-radius: 50%; /* opsional biar bulat */
}
    </style>
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
    <div>📧 albaziabdillah@gmail.com</div>
    <div>📞 +62 812-3456-7890</div>
</div>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">
    <img src="{{ asset('logo.jpeg') }}" alt="Logo" class="logo-img">
    <span>Asep DevLife</span>
</div>
    <div class="menu">
        <a href="/">Beranda</a>
        <a href="/berita">Project</a>
        <a href="/profile">Profile</a>
    </div>
</div>

@yield('content')

<footer>
    © 2026 Asep DevLife
</footer>

</body>
</html>