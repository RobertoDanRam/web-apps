<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <style>
        :root {
            font-family: "Segoe UI", Arial, sans-serif;
            color: #4a5258;
            background: #ffffff;
        }

        * { box-sizing: border-box; }
        html, body { min-height: 100%; }
        body { margin: 0; }

        .welcome {
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 60px 24px;
        }

        .panel {
            width: min(778px, 100%);
            min-height: 490px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 54px;
            padding: 64px 40px;
            background: #ffffff;
            border-radius: 6px;
            box-shadow: 0 22px 28px rgba(0, 0, 0, 0.28);
        }

        .logo {
            margin: 0;
            color: #60686d;
            font-size: clamp(4rem, 9vw, 5.25rem);
            font-weight: 300;
            line-height: 1;
            letter-spacing: -0.07em;
        }

        .author-name {
            color: #dc2626;
            font-weight: 700;
        }

        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 38px;
        }

        nav a {
            color: #303840;
            font-size: 0.9rem;
            font-weight: 500;
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }

        nav a:hover { color: #f05340; }

        @media (max-width: 640px) {
            .welcome { padding: 24px 16px; }
            .panel { min-height: 420px; gap: 48px; padding: 48px 24px; }
            nav { gap: 24px; }
            nav a { font-size: 0.78rem; }
        }
    </style>
</head>
<body>
    <main class="welcome">
        <section class="panel" aria-label="Laravel welcome">
            <h1 class="logo">Laravel</h1>
            <div class="author-name">Roberto Ramos</div>
            <nav aria-label="Laravel links">
                <a href="https://laravel.com/docs" target="_blank" rel="noopener">Documentation</a>
                <a href="https://laracasts.com" target="_blank" rel="noopener">Laracasts</a>
                <a href="https://laravel-news.com" target="_blank" rel="noopener">News</a>
                <a href="https://nova.laravel.com" target="_blank" rel="noopener">Nova</a>
                <a href="https://forge.laravel.com" target="_blank" rel="noopener">Forge</a>
                <a href="https://github.com/laravel/laravel" target="_blank" rel="noopener">GitHub</a>
            </nav>
        </section>
    </main>
</body>
</html>
