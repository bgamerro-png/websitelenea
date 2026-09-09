<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// ---------------- 1. CONFIGURARE & BAZĂ DE DATE ----------------
define('DB_HOST', 'localhost');
define('DB_USER', 'u146243156_usertavigb');
define('DB_PASS', 'Imiplacedb112!');
define('DB_NAME', 'u146243156_tavigb');

// Stripe & BunnyStream Config
define('STRIPE_PAYMENT_LINK', 'https://buy.stripe.com/9B64gs6zp1EWd0l5hweQM0g');
define('BUNNY_LIBRARY_ID', 'LIBRARY_ID_BUNNY'); // Înlocuiește cu ID-ul real BunnyStream
define('BUNNY_CDN_HOST', 'iframe.mediadelivery.net');

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("<div style='color:red; background:#111; padding:20px; font-family:sans-serif;'><h2>Eroare Conexiune DB</h2><p>Asigură-te că baza de date este creată în phpMyAdmin pe Hostinger!</p><p>Detaliu: " . $e->getMessage() . "</p></div>");
}

// Inițializare Automată Tabele SQL dacă nu există
$pdo->exec("
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        stripe_customer_id VARCHAR(255) DEFAULT NULL,
        subscription_status VARCHAR(50) DEFAULT 'inactive',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    CREATE TABLE IF NOT EXISTS videos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        category VARCHAR(100) NOT NULL,
        bunny_video_id VARCHAR(255) NOT NULL,
        thumbnail_url VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
");

// Helper Verificare Abonament
function isSubscribed() {
    return isset($_SESSION['user']) && in_array($_SESSION['user']['subscription_status'], ['active', 'trialing']);
}

// ---------------- 2. ROUTING & LOGICĂ ACȚIUNI ----------------
$page = $_GET['page'] ?? 'home';
$msg = '';

// Deconectare
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    session_destroy();
    header("Location: index.php");
    exit;
}

// Procesare Formulare POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $formType = $_POST['form_type'] ?? '';

    if ($formType === 'register') {
        try {
            $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->execute([$email, password_hash($password, PASSWORD_DEFAULT)]);
            $_SESSION['user'] = ['id' => $pdo->lastInsertId(), 'email' => $email, 'subscription_status' => 'inactive'];
            header("Location: " . STRIPE_PAYMENT_LINK);
            exit;
        } catch (PDOException $e) { $msg = "Email-ul este deja înregistrat!"; }
    } 
    elseif ($formType === 'login') {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = ['id' => $user['id'], 'email' => $user['email'], 'subscription_status' => $user['subscription_status']];
            header("Location: index.php");
            exit;
        } else { $msg = "Date de autentificare incorecte!"; }
    }
    elseif (isset($_POST['action']) && $_POST['action'] === 'cancel_subscription' && isset($_SESSION['user'])) {
        $stmt = $pdo->prepare("UPDATE users SET subscription_status = 'canceled' WHERE id = ?");
        $stmt->execute([$_SESSION['user']['id']]);
        $_SESSION['user']['subscription_status'] = 'canceled';
        $msg = "Abonamentul a fost anulat. Nu vei mai fi taxat după perioada de trial!";
    }
    elseif (isset($_POST['action']) && $_POST['action'] === 'add_video') {
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $category = trim($_POST['category']);
        $bunnyId = trim($_POST['bunny_video_id']);
        $thumb = trim($_POST['thumbnail_url']);

        if (!empty($title) && !empty($bunnyId)) {
            $stmt = $pdo->prepare("INSERT INTO videos (title, description, category, bunny_video_id, thumbnail_url) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$title, $description, $category, $bunnyId, $thumb]);
            $msg = "Episodul a fost publicat cu succes!";
        } else { $msg = "Titlul și Bunny Video ID sunt obligatorii!"; }
    }
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE VAULT | True Crime & Horror Uncensored</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;900&family=Inter:wght@300;400;600;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #050507;
            --card: #0d0d12;
            --card-hover: #14141d;
            --accent: #e50914;
            --accent-glow: rgba(229, 9, 20, 0.4);
            --text: #f0f0f3;
            --muted: #8e8e99;
            --border: #1c1c26;
            --glass: rgba(13, 13, 18, 0.85);
        }
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { background-color: var(--bg); color: var(--text); line-height: 1.6; overflow-x: hidden; }
        
        /* Top Urgent Bar */
        .urgent-bar { 
            background: linear-gradient(90deg, #2b0205, #5e080f, #2b0205); 
            border-bottom: 1px solid rgba(229,9,20,0.4); 
            text-align: center; 
            padding: 9px; 
            font-size: 0.85rem; 
            color: #ff8585; 
            font-weight: 800; 
            letter-spacing: 0.5px;
            text-transform: uppercase;
            animation: pulseBanner 2s infinite alternate;
        }
        @keyframes pulseBanner { 0% { opacity: 0.8; } 100% { opacity: 1; } }
        
        /* Header Glassmorphism */
        header { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 20px 6%; 
            background: var(--glass); 
            backdrop-filter: blur(15px); 
            border-bottom: 1px solid var(--border); 
            position: sticky; 
            top: 0; 
            z-index: 1000; 
        }
        .logo { 
            font-family: 'Cinzel', serif;
            font-size: 1.8rem; 
            font-weight: 900; 
            color: var(--accent); 
            text-decoration: none; 
            letter-spacing: 3px; 
            text-shadow: 0 0 15px var(--accent-glow);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .nav-right { display: flex; align-items: center; gap: 20px; }
        
        .btn { 
            background: var(--accent); 
            color: #fff; 
            padding: 12px 26px; 
            border-radius: 6px; 
            text-decoration: none; 
            font-weight: 800; 
            font-size: 0.95rem; 
            border: none; 
            cursor: pointer; 
            display: inline-flex; 
            align-items: center; 
            gap: 10px;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 4px 20px var(--accent-glow);
        }
        .btn:hover { 
            background: #ff0f1e; 
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 30px rgba(229,9,20,0.7);
        }
        .btn-outline { background: transparent; border: 1px solid var(--border); color: var(--text); box-shadow: none; }
        .btn-outline:hover { border-color: var(--accent); color: var(--accent); background: rgba(229,9,20,0.05); }
        
        .container { padding: 40px 6%; max-width: 1350px; margin: 0 auto; }
        
        /* Ultra Premium Hero for Non-LoggedIn Viewers */
        .hero-premium {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            margin-bottom: 50px;
            border: 1px solid rgba(229,9,20,0.3);
            background: radial-gradient(circle at 50% 30%, #290407 0%, #050507 80%);
            padding: 90px 40px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0,0,0,0.9);
        }
        .hero-premium h1 {
            font-family: 'Cinzel', serif;
            font-size: 3.5rem;
            font-weight: 900;
            line-height: 1.15;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: linear-gradient(180deg, #ffffff 30%, #888899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-premium p {
            color: #b0b0c0;
            font-size: 1.25rem;
            max-width: 750px;
            margin: 0 auto 35px;
            font-weight: 300;
        }
        
        /* Live Counter Badge */
        .live-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(229,9,20,0.15);
            border: 1px solid var(--accent);
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 0.85rem;
            color: #ff6b6b;
            font-weight: 700;
            margin-bottom: 25px;
        }
        .live-dot { width: 8px; height: 8px; background: var(--accent); border-radius: 50%; animation: blink 1.2s infinite; }
        @keyframes blink { 0% { opacity: 0.2; } 100% { opacity: 1; } }

        /* Feature Pillars Grid */
        .pillars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 60px 0;
        }
        .pillar-card {
            background: var(--card);
            border: 1px solid var(--border);
            padding: 30px;
            border-radius: 12px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .pillar-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent);
            box-shadow: 0 10px 30px rgba(0,0,0,0.8);
        }
        .pillar-card i { font-size: 2.2rem; color: var(--accent); margin-bottom: 20px; }
        .pillar-card h3 { font-size: 1.2rem; margin-bottom: 10px; font-weight: 800; }
        .pillar-card p { font-size: 0.9rem; color: var(--muted); }

        /* Video Catalog Grid */
        .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(310px, 1fr)); gap: 30px; }
        
        .card { 
            background: var(--card); 
            border-radius: 12px; 
            overflow: hidden; 
            border: 1px solid var(--border); 
            text-decoration: none; 
            color: inherit; 
            position: relative; 
            transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1);
            display: flex;
            flex-direction: column;
        }
        .card:hover { 
            transform: translateY(-8px) scale(1.02); 
            border-color: rgba(229,9,20,0.6); 
            box-shadow: 0 15px 35px rgba(0,0,0,0.9);
            background: var(--card-hover);
        }
        .card-img-wrapper { position: relative; width: 100%; height: 200px; overflow: hidden; }
        .card img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
        .card:hover img { transform: scale(1.08); filter: brightness(1.1); }
        .card-body { padding: 20px; flex: 1; display: flex; flex-direction: column; justify-content: space-between; }
        .card-tag { font-size: 0.72rem; color: var(--accent); font-weight: 800; text-transform: uppercase; letter-spacing: 1px; }
        .card-title { font-size: 1.1rem; font-weight: 800; margin-top: 6px; line-height: 1.4; }

        .badge-lock { 
            position: absolute; 
            top: 14px; 
            right: 14px; 
            background: rgba(5,5,7,0.9); 
            backdrop-filter: blur(5px);
            color: var(--accent); 
            padding: 5px 12px; 
            font-size: 0.75rem; 
            font-weight: 900; 
            border-radius: 6px; 
            border: 1px solid var(--accent); 
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* FAQ Interactive Accordion */
        .faq-section { margin: 80px 0; max-width: 850px; margin-left: auto; margin-right: auto; }
        .faq-item { background: var(--card); border: 1px solid var(--border); border-radius: 8px; margin-bottom: 12px; overflow: hidden; }
        .faq-question { padding: 20px; font-weight: 700; cursor: pointer; display: flex; justify-content: space-between; align-items: center; }
        .faq-answer { padding: 0 20px 20px; color: var(--muted); font-size: 0.95rem; display: none; }

        .auth-card, .account-box, .admin-box { max-width: 480px; margin: 40px auto; background: var(--card); padding: 40px; border-radius: 14px; border: 1px solid var(--border); box-shadow: 0 20px 40px rgba(0,0,0,0.8); }
        .form-control { width: 100%; padding: 14px; margin: 10px 0 22px; background: #000; border: 1px solid var(--border); color: #fff; border-radius: 6px; font-size: 0.95rem; }
        .form-control:focus { outline: none; border-color: var(--accent); }
    </style>
</head>
<body>

    <div class="urgent-bar">
        <i class="fa-solid fa-triangle-exclamation"></i> ARHIVĂ EXCLUSIVĂ UNCENSORED TRUE CRIME. ACCES NERESTRICTIONAT 7 ZILE GRATUIT!
    </div>

    <header>
        <a href="index.php" class="logo"><i class="fa-solid fa-vault"></i> THE VAULT</a>
        <div class="nav-right">
            <?php if (isset($_SESSION['user'])): ?>
                <a href="index.php?page=account" style="color: var(--text); text-decoration: none; font-weight: 600;"><i class="fa-solid fa-user-gear" style="color: var(--accent);"></i> Contul Meu</a>
                <a href="index.php?page=admin" style="color: var(--muted); text-decoration: none;"><i class="fa-solid fa-lock"></i> Admin</a>
                <a href="index.php?action=logout" style="color: var(--muted); text-decoration: none;"><i class="fa-solid fa-right-from-bracket"></i></a>
            <?php else: ?>
                <a href="index.php?page=login" style="color: var(--text); text-decoration: none; font-weight: 600;">Autentificare</a>
                <a href="index.php?page=register" class="btn"><i class="fa-solid fa-unlock"></i> 7 Zile Free Trial</a>
            <?php endif; ?>
        </div>
    </header>

    <div class="container">
        <?php if ($msg): ?>
            <div style="background: var(--card); border: 1px solid var(--accent); color: var(--text); padding: 14px; border-radius: 8px; margin-bottom: 30px; text-align: center; font-weight:700;"><?= htmlspecialchars($msg) ?></div>
        <?php endif; ?>

        <?php
        // ---------------- PAGINA 1: HOMEPAGE / LANDING PAGE ULTRA PREMIUM ----------------
        if ($page === 'home'):
            $videos = $pdo->query("SELECT * FROM videos ORDER BY id DESC")->fetchAll();
        ?>
            <!-- Hero Section Premium for Non-LoggedIn Viewers -->
            <div class="hero-premium">
                <div class="live-badge">
                    <span class="live-dot"></span> PESTE 1,420+ ABONAȚI ACTIVI ÎN ROMÂNIA
                </div>
                <h1>DOSARELE CARE NU POT FI POSTATE PE YOUTUBE</h1>
                <p>Cele mai obscure investigații True Crime, cazuri neelucidate românești și dosare horror de arhivă. Fără cenzură, fără algoritmi, fără imagini blurate.</p>
                
                <?php if (!isSubscribed()): ?>
                    <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
                        <a href="<?= STRIPE_PAYMENT_LINK ?>" class="btn" style="font-size: 1.15rem; padding: 16px 36px;"><i class="fa-solid fa-play"></i> Începe 7 Zile Gratis (0 LEI Azi)</a>
                        <a href="#catalog" class="btn btn-outline" style="font-size: 1.15rem; padding: 16px 30px;"><i class="fa-solid fa-film"></i> Vezi Teaserele</a>
                    </div>
                    <p style="color: var(--muted); font-size: 0.85rem; margin-top: 15px;">*Introduci cardul, nu ești taxat primele 7 zile. Poți anula oricând dintr-un singur click.</p>
                <?php endif; ?>
            </div>

            <!-- Value Pillars -->
            <div class="pillars-grid">
                <div class="pillar-card">
                    <i class="fa-solid fa-ban-bug"></i>
                    <h3>Zero Cenzură</h3>
                    <p>Accesează probele video, arhivele de poliție neblurate și mărturiile complete pe care marile rețele le demonetizează sau le șterg.</p>
                </div>
                <div class="pillar-card">
                    <i class="fa-solid fa-layer-group"></i>
                    <h3>4 Show-uri / Săptămână</h3>
                    <p>Program fix de lansare: Dosare Românești (Luni), Serial Killers (Miercuri), Dark Web (Vineri) și Midnight Podcast (Duminică).</p>
                </div>
                <div class="pillar-card">
                    <i class="fa-solid fa-headphones"></i>
                    <h3>Audio Background Mode</h3>
                    <p>Ascultă poveștile pe fundal ca pe un podcast exclusiv, în timp ce te joci, lucrezi sau ești pe drum.</p>
                </div>
            </div>

            <!-- Catalog Section -->
            <div id="catalog" style="margin-top: 60px;">
                <div style="display: flex; justify-content: space-between; align-align: flex-end; margin-bottom: 25px;">
                    <div>
                        <h2 style="font-size: 1.8rem; font-weight: 900; border-left: 4px solid var(--accent); padding-left: 14px;">CATALOG EPISOADE & TEASERE</h2>
                        <p style="color: var(--muted); font-size: 0.95rem; margin-top: 4px;">Fă click pe orice episod pentru a vedea teaserul gratuit de 30 secunde.</p>
                    </div>
                </div>

                <div class="grid">
                    <?php if (!empty($videos)): ?>
                        <?php foreach ($videos as $v): ?>
                            <div class="card">
                                <a href="index.php?page=watch&id=<?= $v['id'] ?>" style="text-decoration:none; color:inherit;">
                                    <div class="card-img-wrapper">
                                        <?php if (!isSubscribed()): ?>
                                            <div class="badge-lock"><i class="fa-solid fa-lock"></i> TEASER 30s</div>
                                        <?php else: ?>
                                            <div class="badge-lock" style="border-color:#2ed573; color:#2ed573;"><i class="fa-solid fa-unlock"></i> UNCUT 1080p</div>
                                        <?php endif; ?>
                                        <img src="<?= htmlspecialchars($v['thumbnail_url']) ?>" alt="Thumbnail">
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <span class="card-tag"><?= htmlspecialchars($v['category']) ?></span>
                                            <div class="card-title"><?= htmlspecialchars($v['title']) ?></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p style="grid-column: 1/-1; text-align:center; color: var(--muted); padding: 50px;">Nu există episoade disponibile în baza de date. Adaugă episoade noi accesând panoul <a href="index.php?page=admin" style="color:var(--accent);">Admin</a>.</p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="faq-section">
                <h2 style="text-align: center; margin-bottom: 30px; font-size: 1.8rem; font-weight: 900;">ÎNTREBĂRI FRECVENTE</h2>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">Cum funcționează Free Trial-ul de 7 zile? <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="faq-answer">Creezi un cont, introduci datele cardului pe pagina securizată Stripe și primești acces complet timp de 7 zile pentru 0 RON. Dacă nu anulezi, în ziua 8 se va retrage automat abonamentul lunar de 9.99 RON.</div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">Pot anula abonamentul oricând? <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="faq-answer">Da! Din secțiunea "Contul Meu" poți anula abonamentul dintr-un singur click în orice moment din primele 7 zile fără să fii taxat niciun leu.</div>
                </div>

                <div class="faq-item">
                    <div class="faq-question" onclick="toggleFaq(this)">De ce conținutul nu este pe YouTube? <i class="fa-solid fa-chevron-down"></i></div>
                    <div class="faq-answer">YouTube cenzurează sau demonetizează orice videoclip True Crime care conține arhive reale de poliție, fotografii de la fața locului sau detalii explicite despre cazuri extreme. Pe platforma noastră conținutul este 100% neclasificat.</div>
                </div>
            </div>

            <script>
                function toggleFaq(el) {
                    const ans = el.nextElementSibling;
                    ans.style.display = ans.style.display === 'block' ? 'none' : 'block';
                }
            </script>

        <?php 
        // ---------------- PAGINA 2: WATCH (PLAYER VIDEO & PAYWALL TEASER) ----------------
        elseif ($page === 'watch'):
            $id = (int)($_GET['id'] ?? 0);
            $stmt = $pdo->prepare("SELECT * FROM videos WHERE id = ?");
            $stmt->execute([$id]);
            $video = $stmt->fetch();
            if (!$video): echo "<h2>Video inexistent.</h2>"; else:
                $subscribed = isSubscribed();
        ?>
            <div style="max-width: 980px; margin: 0 auto;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <a href="index.php" class="btn btn-outline" style="padding: 8px 18px;"><i class="fa-solid fa-arrow-left"></i> Înapoi la Catalog</a>
                    <?php if (!$subscribed): ?>
                        <span style="color: var(--accent); font-weight: 800; font-size: 0.9rem;"><i class="fa-solid fa-eye"></i> Previzualizare Teaser (30s)</span>
                    <?php else: ?>
                        <span style="color: #2ed573; font-weight: 800; font-size: 0.9rem;"><i class="fa-solid fa-circle-check"></i> Acces Membru Uncut</span>
                    <?php endif; ?>
                </div>

                <div style="position: relative; background: #000; border-radius: 14px; overflow: hidden; border: 1px solid var(--border); box-shadow: 0 20px 50px rgba(0,0,0,0.9);">
                    <iframe id="video-player" src="https://<?= BUNNY_CDN_HOST ?>/embed/<?= BUNNY_LIBRARY_ID ?>/<?= $video['bunny_video_id'] ?>?autoplay=true" style="width:100%; height:540px; border:none; display:block;" allowfullscreen="true"></iframe>

                    <?php if (!$subscribed): ?>
                        <div id="paywall" style="display:none; position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(5,5,7,0.96); text-align:center; padding-top:140px; backdrop-filter: blur(10px); z-index: 50;">
                            <i class="fa-solid fa-lock" style="font-size: 3.5rem; color: var(--accent); margin-bottom: 20px;"></i>
                            <h2 style="font-size: 2.2rem; color: #fff;">TEASERUL S-A TERMINAT</h2>
                            <p style="color: var(--muted); margin: 15px auto 30px; max-width: 550px; font-size: 1.05rem;">Ai vizionat cele 30 secunde de previzualizare. Pentru a vedea ancheta completă și tot sechestrul de dosare necenzurate, introdu cardul și primești 7 Zile Free Trial.</p>
                            <a href="<?= STRIPE_PAYMENT_LINK ?>" class="btn" style="font-size: 1.15rem; padding: 16px 40px;"><i class="fa-solid fa-credit-card"></i> Deblochează cu 7 Zile Free Trial</a>
                        </div>
                        <script>
                            setTimeout(() => {
                                document.getElementById('video-player').style.display = 'none';
                                document.getElementById('paywall').style.display = 'block';
                            }, 30000); // 30 secunde limită Teaser
                        </script>
                    <?php endif; ?>
                </div>

                <div style="margin-top: 30px; background: var(--card); padding: 30px; border-radius: 14px; border: 1px solid var(--border);">
                    <span class="card-tag"><?= htmlspecialchars($video['category']) ?></span>
                    <h1 style="margin-top: 8px; font-size: 2rem;"><?= htmlspecialchars($video['title']) ?></h1>
                    <p style="color:var(--muted); margin-top: 18px; line-height: 1.8; font-size: 1.05rem;"><?= nl2br(htmlspecialchars($video['description'])) ?></p>
                </div>
            </div>
            <?php endif; ?>

        <?php 
        // ---------------- PAGINA 3: PANOUL CONTULUI & ANULARE ----------------
        elseif ($page === 'account'):
            if (!isset($_SESSION['user'])) { header("Location: index.php?page=login"); exit; }
            $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$_SESSION['user']['id']]);
            $user = $stmt->fetch();
        ?>
            <div class="account-box">
                <h2><i class="fa-solid fa-user-gear" style="color: var(--accent);"></i> Panou Cont</h2>
                <div style="margin: 20px 0;">
                    <p style="color: var(--muted); font-size: 0.9rem;">Adresă Email:</p>
                    <p style="font-size: 1.1rem; font-weight: 700;"><?= htmlspecialchars($user['email']) ?></p>
                </div>
                <div style="margin-bottom: 25px;">
                    <p style="color: var(--muted); font-size: 0.9rem;">Status Abonament:</p>
                    <p style="color:var(--accent); font-weight:900; font-size: 1.2rem;"><?= strtoupper($user['subscription_status']) ?></p>
                </div>

                <?php if (in_array($user['subscription_status'], ['active', 'trialing'])): ?>
                    <form method="POST" onsubmit="return confirm('Ești sigur că vrei să anulezi abonamentul?');">
                        <input type="hidden" name="action" value="cancel_subscription">
                        <button type="submit" class="btn btn-outline" style="color: var(--accent); width:100%; justify-content:center;">Anulează Abonamentul Acum</button>
                    </form>
                <?php else: ?>
                    <a href="<?= STRIPE_PAYMENT_LINK ?>" class="btn" style="width:100%; justify-content:center;">Activează 7 Zile Gratis</a>
                <?php endif; ?>
            </div>

        <?php 
        // ---------------- PAGINA 4: PANOU ADMIN ----------------
        elseif ($page === 'admin'):
        ?>
            <div class="admin-box">
                <h2>Adaugă Episod Nou în Catalog</h2>
                <form method="POST">
                    <input type="hidden" name="action" value="add_video">
                    <label style="color:var(--muted); font-size:0.85rem;">Titlu Episod</label>
                    <input type="text" name="title" class="form-control" required>

                    <label style="color:var(--muted); font-size:0.85rem;">Categorie</label>
                    <select name="category" class="form-control">
                        <option value="Dosare Românești">Dosare Românești</option>
                        <option value="Serial Killers">Serial Killers</option>
                        <option value="Dark Web">Dark Web & Cyber Crime</option>
                        <option value="Midnight Stories">Midnight Audio (45+ min)</option>
                    </select>

                    <label style="color:var(--muted); font-size:0.85rem;">Bunny Video ID</label>
                    <input type="text" name="bunny_video_id" class="form-control" required placeholder="Ex: 8f3a92b1-xxxx">

                    <label style="color:var(--muted); font-size:0.85rem;">Thumbnail Image URL</label>
                    <input type="url" name="thumbnail_url" class="form-control">

                    <label style="color:var(--muted); font-size:0.85rem;">Descriere</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>

                    <button type="submit" class="btn" style="width:100%; justify-content:center;">Publică Episodul</button>
                </form>
            </div>

        <?php 
        // ---------------- PAGINA 5: AUTENTIFICARE & ÎNREGISTRARE ----------------
        elseif ($page === 'login' || $page === 'register'):
            $isReg = ($page === 'register');
        ?>
            <div class="auth-card">
                <h2 style="text-align: center; margin-bottom: 25px;"><?= $isReg ? 'Creează Cont Nou' : 'Autentificare' ?></h2>
                <form method="POST">
                    <input type="hidden" name="form_type" value="<?= $isReg ? 'register' : 'login' ?>">
                    <label style="color:var(--muted); font-size:0.85rem;">Email</label>
                    <input type="email" name="email" class="form-control" required placeholder="nume@example.com">

                    <label style="color:var(--muted); font-size:0.85rem;">Parolă</label>
                    <input type="password" name="password" class="form-control" required placeholder="••••••••">

                    <button type="submit" class="btn" style="width:100%; justify-content:center; padding:14px;">
                        <?= $isReg ? 'Pasul 2: Adaugă Cardul pentru 7 Zile Gratis' : 'Intră în Cont' ?>
                    </button>
                </form>
            </div>
        <?php endif; ?>
    </div>

    <footer style="text-align: center; padding: 50px 20px; color: var(--muted); border-top: 1px solid var(--border); margin-top: 80px; font-size: 0.85rem;">
        &copy; <?= date('Y') ?> THE VAULT MEDIA. Conținut exclusiv True Crime & Horror 18+. Toate drepturile rezervate.
    </footer>
</body>
</html>
