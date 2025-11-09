<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>THE MAN Coffee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* === TOÀN BỘ CSS GIAO DIỆN === */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f4f2;
            color: #333;
        }

        header {
            background-color: #6b4f4f;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 30px;
            min-height: 70vh;
        }

        footer {
            background-color: #6b4f4f;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        h1, h2, h3 {
            color: #4a2c2a;
        }

        .grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .drink, .bean {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 15px;
            width: 250px;
            text-align: center;
            transition: transform 0.2s;
        }

        .drink:hover, .bean:hover {
            transform: scale(1.05);
        }

        img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        form {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #6b4f4f;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #8d6a6a;
        }
    </style>
</head>
<body>
    <header>
        <h1>☕ THE MAN Coffee ☕</h1>
        <nav>
            <a href="/">Trang chủ</a>
            <a href="/about">Giới thiệu</a>
            <a href="/menu">Thực đơn</a>
            <a href="/beans-story">Câu chuyện hạt cà phê</a>
            <a href="/contact">Liên hệ</a>
        </nav>
    </header>

    <main>
        {{-- Nơi các trang con sẽ hiển thị nội dung --}}
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 THE MAN Coffee - Tất cả các quyền được bảo lưu.</p>
    </footer>
</body>

</html>
