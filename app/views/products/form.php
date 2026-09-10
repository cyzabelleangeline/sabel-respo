<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($form_title ?? 'Product'); ?> | Product System</title>
    <style>
        :root {
            --bg: #07111d;
            --bg-soft: #0f172a;
            --card: rgba(15, 23, 42, 0.9);
            --card-2: rgba(17, 24, 39, 0.6);
            --line: rgba(148, 163, 184, 0.2);
            --text: #edf4ff;
            --muted: #b0bfd7;
            --primary: #8b5cf6;
            --primary-2: #ec4899;
            --success: #22c55e;
            --danger: #f87171;
            --warning: #fbbf24;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #020817, #0b1020 38%, #111827);
            color: var(--text);
        }
        .shell {
            width: min(1100px, 92vw);
            margin: 40px auto;
        }
        .topbar {
            background: rgba(15, 23, 42, 0.9);
            border: 1px solid var(--line);
            border-radius: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 22px;
            margin-bottom: 28px;
        }
        .brand {
            color: var(--text);
            text-decoration: none;
            font-size: 1.4rem;
            font-weight: 700;
            letter-spacing: -0.05em;
        }
        .brand span { color: var(--primary); }
        .nav {
            display: flex;
            gap: 16px;
            align-items: center;
            color: var(--muted);
        }
        .nav a {
            text-decoration: none;
            color: var(--muted);
        }
        .card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 28px;
            box-shadow: 0 22px 60px rgba(2, 6, 23, 0.6);
        }
        h1 {
            margin-top: 0;
            margin-bottom: 6px;
            font-size: clamp(2rem, 4vw, 3rem);
            letter-spacing: -0.06em;
        }
        .subtitle {
            margin: 0 0 26px;
            color: var(--muted);
        }
        .error {
            background: rgba(248, 113, 113, 0.1);
            color: #fecaca;
            border: 1px solid rgba(248, 113, 113, 0.3);
            border-radius: 12px;
            padding: 12px 14px;
            margin-bottom: 18px;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }
        .field {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .field.full {
            grid-column: 1 / -1;
        }
        label {
            color: var(--muted);
            font-size: 0.85rem;
        }
        input, textarea {
            width: 100%;
            background: rgba(15, 23, 42, 0.9);
            color: var(--text);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 13px 14px;
            font-size: 1rem;
        }
        textarea {
            min-height: 120px;
            resize: vertical;
        }
        .actions {
            margin-top: 28px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border-radius: 12px;
            padding: 12px 18px;
            font-weight: 700;
            border: 1px solid transparent;
            cursor: pointer;
        }
        .btn.primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-2));
            color: white;
        }
        .btn.secondary {
            background: transparent;
            color: var(--text);
            border-color: var(--line);
        }
        @media (max-width: 720px) {
            .grid { grid-template-columns: 1fr; }
            .topbar { flex-direction: column; gap: 12px; }
        }
    </style>
</head>
<body>
    <div class="shell">
        <header class="topbar">
            <a class="brand" href="<?= site_url('products'); ?>">product<span>/</span>archive</a>
            <div class="nav">
                <span><?= htmlspecialchars($_SESSION['username'] ?? 'admin'); ?></span>
                <a href="<?= site_url('logout'); ?>">Logout</a>
            </div>
        </header>

        <div class="card">
            <h1><?= htmlspecialchars($form_title ?? 'Product'); ?></h1>
            <p class="subtitle">Capture the essentials for a clean inventory record.</p>

            <?php if (!empty($error)): ?>
                <div class="error"><?= htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <form method="post" action="<?= htmlspecialchars($form_action ?? site_url('products')); ?>">
                <div class="grid">
                    <div class="field full">
                        <label for="product_name">Product name</label>
                        <input id="product_name" name="product_name" type="text" value="<?= htmlspecialchars($product['product_name'] ?? ''); ?>" required>
                    </div>

                    <div class="field full">
                        <label for="description">Description</label>
                        <textarea id="description" name="description"><?= htmlspecialchars($product['description'] ?? ''); ?></textarea>
                    </div>

                    <div class="field">
                        <label for="price">Price</label>
                        <input id="price" name="price" type="number" min="0" step="0.01" value="<?= htmlspecialchars((string) ($product['price'] ?? 0)); ?>" required>
                    </div>

                    <div class="field">
                        <label for="quantity">Quantity</label>
                        <input id="quantity" name="quantity" type="number" min="0" step="1" value="<?= htmlspecialchars((string) ($product['quantity'] ?? 0)); ?>" required>
                    </div>
                </div>

                <div class="actions">
                    <button type="submit" class="btn primary">Save Product</button>
                    <a href="<?= site_url('products'); ?>" class="btn secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
