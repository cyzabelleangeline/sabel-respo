<style>
    :root {
        --bg: #07111d;
        --bg-soft: #0f172a;
        --card: rgba(15, 23, 42, 0.8);
        --line: rgba(148, 163, 184, 0.2);
        --text: #edf5ff;
        --muted: #b1bfd9;
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
        background:
            radial-gradient(circle at top left, rgba(139, 92, 246, 0.2), transparent 28%),
            radial-gradient(circle at bottom right, rgba(236, 72, 153, 0.12), transparent 26%),
            linear-gradient(135deg, #020817, #0b1020 40%, #111827);
        color: var(--text);
    }
    .shell {
        width: min(1150px, 94vw);
        margin: 36px auto;
    }
    .topbar {
        background: rgba(15, 23, 42, 0.82);
        border: 1px solid var(--line);
        border-radius: 18px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 18px 22px;
        margin-bottom: 26px;
        box-shadow: 0 14px 36px rgba(2, 6, 23, 0.35);
    }
    .brand {
        color: var(--text);
        text-decoration: none;
        font-size: 1.3rem;
        font-weight: 700;
        letter-spacing: -0.05em;
    }
    .brand span {
        color: var(--primary);
    }
    .topbar nav {
        display: flex;
        align-items: center;
        gap: 14px;
        color: var(--muted);
    }
    .topbar nav a {
        color: var(--muted);
        text-decoration: none;
    }
    main {
        background: rgba(15, 23, 42, 0.82);
        border: 1px solid var(--line);
        border-radius: 22px;
        padding: 28px;
        box-shadow: 0 30px 80px rgba(2, 6, 23, 0.58);
    }
    .eyebrow {
        margin: 0 0 10px;
        text-transform: uppercase;
        letter-spacing: 0.12em;
        color: #c4b5fd;
        font-size: 0.74rem;
        font-weight: 700;
    }
    h1 {
        margin: 0 0 10px;
        font-size: clamp(2.2rem, 5vw, 4rem);
        letter-spacing: -0.08em;
    }
    .intro {
        color: var(--muted);
        max-width: 760px;
        font-size: 1.04rem;
        line-height: 1.7;
        margin-bottom: 28px;
    }
    .toolbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 18px;
        margin: 10px 0 20px;
    }
    .toolbar h2 {
        font-size: 1rem;
        color: var(--muted);
        margin: 0;
        letter-spacing: 0.06em;
        text-transform: uppercase;
    }
    .button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, var(--primary), var(--primary-2));
        color: white;
        text-decoration: none;
        padding: 12px 16px;
        border-radius: 12px;
        font-weight: 700;
    }
    .flash {
        background: rgba(34, 197, 94, 0.12);
        border: 1px solid rgba(34, 197, 94, 0.32);
        color: #dcfce7;
        border-radius: 12px;
        padding: 12px 14px;
        margin-bottom: 18px;
    }
    .table-wrap {
        overflow-x: auto;
        border: 1px solid var(--line);
        border-radius: 16px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        background: rgba(15, 23, 42, 0.75);
    }
    th, td {
        padding: 15px 16px;
        border-bottom: 1px solid var(--line);
        text-align: left;
        vertical-align: top;
    }
    th {
        font-size: 0.78rem;
        text-transform: uppercase;
        letter-spacing: 0.09em;
        color: var(--muted);
        background: rgba(17, 24, 39, 0.8);
    }
    tbody tr:hover {
        background: rgba(139, 92, 246, 0.04);
    }
    .product-name {
        font-weight: 700;
        margin-bottom: 6px;
    }
    .description {
        color: var(--muted);
        line-height: 1.6;
    }
    .actions {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    .actions a {
        color: #dbeafe;
        text-decoration: none;
        padding: 8px 10px;
        border-radius: 8px;
        border: 1px solid var(--line);
    }
    .empty {
        background: rgba(148, 163, 184, 0.08);
        border: 1px dashed var(--line);
        border-radius: 14px;
        padding: 26px;
        color: var(--muted);
    }
    @media (max-width: 720px) {
        .topbar { flex-direction: column; gap: 12px; }
        .toolbar { flex-direction: column; align-items: flex-start; }
    }
</style>
