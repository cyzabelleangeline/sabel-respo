<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title><?= $title ?></title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #fafafa;
            color: #1a1a1a;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            padding: 50px 60px;
        }
        h1 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 12px;
            letter-spacing: -0.5px;
        }
        p {
            color: #666;
            font-size: 15px;
            margin-bottom: 30px;
        }
        nav a {
            display: inline-block;
            margin: 0 8px;
            padding: 10px 20px;
            text-decoration: none;
            color: #1a1a1a;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.15s ease;
        }
        nav a:hover {
            background: #1a1a1a;
            color: #fff;
            border-color: #1a1a1a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to My Student Page</h1>
        <p>Student Information System — KEVINBALITA</p>
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
            <a href="<?= site_url('student/grant_access') ?>">Grant Access</a>
        </nav>
    </div>
</body>
</html>