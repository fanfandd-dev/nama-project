<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portofolio - Fandy</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background: #f4f6f8;
            color: #222;
        }
        nav {
            background: #1e293b;
            padding: 16px 40px;
            display: flex;
            gap: 24px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }
        main {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }
        footer {
            text-align: center;
            padding: 20px;
            color: #888;
            font-size: 13px;
        }
        .profile-header {
    text-align: center;
    padding: 20px 0 40px;
}
.profile-header img {
    width: 160px;
    height: 160px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid white;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    margin-bottom: 20px;
}
.profile-header h1 {
    margin: 0 0 8px;
    font-size: 28px;
    color: #1e293b;
}
.profile-header p.tagline {
    color: #666;
    font-size: 15px;
    max-width: 480px;
    margin: 0 auto;
}
.card-section {
    background: white;
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 24px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.06);
}
.card-section h2 {
    margin-top: 0;
    color: #1e293b;
    font-size: 20px;
    border-bottom: 2px solid #f0f0f0;
    padding-bottom: 10px;
}
.skill-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    list-style: none;
    padding: 0;
}
.skill-badges li {
    background: #e6f0ff;
    color: #1e293b;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
}
    </style>
</head>
<body>
    <nav>
        <a href="/">Beranda</a>
        <a href="/portofolio">Portofolio</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>&copy; 2026 Fandy Miftakhul Zanuar</footer>
</body>
</html>
