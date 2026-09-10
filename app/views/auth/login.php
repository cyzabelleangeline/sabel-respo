<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Product System</title>
    <style>
        :root {
            --bg: #0b1020;
            --panel: rgba(17, 24, 39, 0.9);
            --panel-2: rgba(15, 23, 42, 0.92);
            --line: rgba(148, 163, 184, 0.28);
            --text: #e5eefb;
            --muted: #a9b8d0;
            --primary: #8b5cf6;
            --primary-2: #22c55e;
            --danger: #f87171;
            --shadow: 0 30px 80px rgba(15, 23, 42, 0.7);
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at top left, rgba(139, 92, 246, 0.25), transparent 32%),
                radial-gradient(circle at bottom right, rgba(34, 197, 94, 0.08), transparent 24%),
                linear-gradient(135deg, #020817, #0b1020 40%, #111827);
        }
        .card {
            width: min(92vw, 440px);
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 22px;
            box-shadow: var(--shadow);
            padding: 32px 28px;
            backdrop-filter: blur(12px);
        }
        h1 {
            margin: 0 0 10px;
            font-size: 2rem;
            letter-spacing: -0.06em;
        }
        .sub {
            margin: 0 0 22px;
            color: var(--muted);
            line-height: 1.6;
        }
        .alert {
            background: rgba(248, 113, 113, 0.08);
            border: 1px solid rgba(248, 113, 113, 0.35);
            color: #fecaca;
            border-radius: 12px;
            padding: 12px 14px;
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.86rem;
            color: var(--muted);
        }
        input {
            width: 100%;
            border: 1px solid var(--line);
            background: rgba(15, 23, 42, 0.9);
            color: var(--text);
            border-radius: 12px;
            padding: 13px 14px;
            margin-bottom: 16px;
            font-size: 1rem;
        }
        input:focus {
            outline: 2px solid rgba(139, 92, 246, 0.6);
            border-color: transparent;
        }
        button {
            width: 100%;
            border: none;
            border-radius: 12px;
            padding: 14px 16px;
            background: linear-gradient(135deg, var(--primary), #7c3aed);
            color: white;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 16px 24px rgba(139, 92, 246, 0.25);
        }
        button:hover { transform: translateY(-1px); }
        .meta {
            margin-top: 18px;
            color: var(--muted);
            font-size: 0.88rem;
            text-align: center;
        }
        .tag {
            display: inline-block;
            background: rgba(34, 197, 94, 0.11);
            color: #bbf7d0;
            border: 1px solid rgba(34, 197, 94, 0.25);
            border-radius: 999px;
            padding: 6px 10px;
            font-size: 0.72rem;
            margin-bottom: 16px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="tag">Secure Access</div>
        <h1>Welcome back</h1>
        <p class="sub">Sign in to manage the product inventory and protect your catalogue.</p>

        <?php if (!empty($error)): ?>
            <div class="alert"><?= htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form method="post" action="<?= site_url('login'); ?>" autocomplete="off">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" value="" required autocomplete="off" spellcheck="false">

            <label for="password">Password</label>
            <input id="password" name="password" type="password" value="" required autocomplete="new-password">

            <button type="submit">Login</button>
        </form>

    </div>
</body>
</html>
