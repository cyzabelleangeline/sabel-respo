<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <meta charset="UTF-8">
    <title>Student Profile</title>
    <style>
        :root {
            --bg: #f6f7f9;
            --surface: #ffffff;
            --border: #e5e7eb;
            --text: #111827;
            --muted: #6b7280;
            --accent: #2563eb;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: -apple-system, 'Segoe UI', Inter, Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 40px;
            background: var(--surface);
            border-bottom: 1px solid var(--border);
        }
        .brand {
            font-size: 15px;
            font-weight: 600;
            letter-spacing: -0.2px;
        }
        .brand span { color: var(--accent); }
        nav a {
            margin-left: 8px;
            padding: 8px 16px;
            text-decoration: none;
            color: var(--text);
            font-size: 13px;
            font-weight: 500;
            border-radius: 6px;
            transition: background 0.15s ease;
        }
        nav a:hover { background: #f3f4f6; }
        nav a.active {
            background: #eff4ff;
            color: var(--accent);
        }

        main {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 65px);
            padding: 40px 20px;
        }
        .card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 36px;
            width: 380px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.03), 0 8px 24px rgba(0,0,0,0.04);
        }
        .profile-top {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 24px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--border);
        }
        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: var(--accent);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
            flex-shrink: 0;
        }
        .profile-top h1 {
            font-size: 16px;
            font-weight: 600;
            letter-spacing: -0.2px;
            margin-bottom: 2px;
        }
        .profile-top p {
            font-size: 13px;
            color: var(--muted);
        }
        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 11px 0;
            border-bottom: 1px solid #f0f1f3;
            font-size: 14px;
        }
        .row:last-of-type { border-bottom: none; }
        .label {
            color: var(--muted);
            font-size: 13px;
        }
        .value {
            font-weight: 500;
        }
        .footer-nav {
            margin-top: 24px;
            display: flex;
            gap: 8px;
        }
        .footer-nav a {
            flex: 1;
            text-align: center;
            padding: 9px 0;
            text-decoration: none;
            color: var(--text);
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.15s ease;
        }
        .footer-nav a:hover {
            border-color: var(--accent);
            color: var(--accent);
        }
    </style>
</head>
<body>
    <header>
        <div class="brand">Student<span>KEVS</span></div>
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a class="active" href="<?= site_url('student/profile') ?>">Profile</a>
        </nav>
    </header>

    <main>
        <div class="card">
            <div class="profile-top">
                <div class="avatar">KB</div>
                <div>
                    <h1><?= $name ?></h1>
                    <p><?= $course ?> — <?= $year ?></p>
                </div>
            </div>
            <div class="row"><span class="label">Student ID</span><span class="value"><?= $student_id ?></span></div>
            <div class="row"><span class="label">Course</span><span class="value"><?= $course ?></span></div>
            <div class="row"><span class="label">Year Level</span><span class="value"><?= $year ?></span></div>
            <div class="row"><span class="label">Section</span><span class="value"><?= $section ?></span></div>
            <div class="row"><span class="label">Email</span><span class="value"><?= $email ?></span></div>
            <div class="footer-nav">
                <a href="<?= site_url('student') ?>">Home</a>
                <a href="<?= site_url('student/grant_access') ?>">Grant Access</a>
            </div>
        </div>
    </main>
</body>
</html>