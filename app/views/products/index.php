<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Product System</title>
    <?php include APP_DIR . 'views/products/styles.php'; ?>
</head>
<body>
    <div class="shell">
        <header class="topbar">
            <a class="brand" href="<?= site_url('products'); ?>">product<span>/</span>archive</a>
            <nav>
                <span><?= htmlspecialchars($_SESSION['username'] ?? 'admin'); ?></span>
                <a href="<?= site_url('logout'); ?>">Sign out</a>
            </nav>
        </header>

        <main>
            <p class="eyebrow">A considered inventory</p>
            <h1>Objects with a place in the world.</h1>
            <p class="intro">Keep the details close. Add the things worth remembering, and let the catalogue stay wonderfully clear.</p>

            <?php if (!empty($flash)): ?>
                <div class="flash"><?= htmlspecialchars($flash); ?></div>
            <?php endif; ?>

            <div class="toolbar">
                <h2><?= count($products ?? []); ?> products</h2>
                <?php if (($_SESSION['role'] ?? '') === 'admin'): ?>
                    <a class="button" href="<?= site_url('products/create'); ?>">Add product</a>
                <?php endif; ?>
            </div>

            <?php if (!empty($products)): ?>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <?php if (($_SESSION['role'] ?? '') === 'admin'): ?>
                                    <th>Action</th>
                                <?php endif; ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?= (int) ($product['id'] ?? 0); ?></td>
                                    <td>
                                        <div class="product-name"><?= htmlspecialchars($product['product_name'] ?? ''); ?></div>
                                        <div class="description"><?= htmlspecialchars($product['description'] ?? 'No description yet.'); ?></div>
                                    </td>
                                    <td>$<?= number_format((float) ($product['price'] ?? 0), 2); ?></td>
                                    <td><?= (int) ($product['quantity'] ?? 0); ?></td>
                                    <?php if (($_SESSION['role'] ?? '') === 'admin'): ?>
                                        <td class="actions">
                                            <a href="<?= site_url('products/edit/' . (int) ($product['id'] ?? 0)); ?>">Edit</a>
                                            <a href="<?= site_url('products/delete/' . (int) ($product['id'] ?? 0)); ?>" onclick="return confirm('Remove this product from the archive?');">Delete</a>
                                        </td>
                                    <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="empty">Your archive is waiting for its first considered addition.</div>
            <?php endif; ?>
        </main>
    </div>
</body>
</html>
