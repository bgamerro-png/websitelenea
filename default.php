<?php
// Configuration pour Airbnb et détails de la propriété
$airbnb_link = "https://www.airbnb.fr/rooms/1566057199736093922?unique_share_id=ad9e7340-faaa-4d72-b3c0-b5353fc9bea1&viralityEntryPoint=1&s=76&source_impression_id=p3_1787952719_P3UCMr7Ti9J7nx2U";
$property_name = "Villa Romantique Intime Prestige";
$address = "6 Imp. St Mamert, 38200 Vienne, France";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO TITLE & METAS OPTIMISÉS POUR GOOGLE -->
    <title>Love Room Vienne (Près de Lyon) - Jacuzzi Privatif & Spa | Airbnb Réservation</title>
    <meta name="description" content="Réservez votre Love Room à Vienne (38200), à seulement 25 min de Lyon. 76m² privatifs avec Jacuzzi balnéo, table de massage & mobilier tantra. Réservation directe sur Airbnb.">
    <meta name="keywords" content="love room vienne, love room lyon, airbnb love room vienne, love room vienne reservation, chambre jacuzzi privatif vienne, nuit romantique lyon, love room isere">
    <link rel="canonical" href="https://villaromantique.fr/" />

    <!-- SEO Local Meta Tags -->
    <meta name="geo.region" content="FR-38">
    <meta name="geo.placename" content="Vienne">
    <meta name="geo.position" content="45.5258;4.8748">
    <meta name="ICBM" content="45.5258, 4.8748">

    <!-- Schema.org Rich Snippets (Google Local & Hotel/Love Room) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Hotel",
      "name": "Love Room Vienne - Villa Romantique Intime Prestige",
      "description": "Love Room d'exception avec Jacuzzi privatif, table de massage et fauteuil tantra située à Vienne, proche de Lyon.",
      "image": ["photo1.jpg", "photo2.jpg", "photo3.jpg"],
      "priceRange": "€€",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "6 Impasse Saint Mamert",
        "addressLocality": "Vienne",
        "postalCode": "38200",
        "addressRegion": "Isère",
        "addressCountry": "FR"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 45.5258,
        "longitude": 4.8748
      },
      "url": "<?php echo $airbnb_link; ?>",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.95",
        "reviewCount": "48",
        "bestRating": "5"
      },
      "amenityFeature": [
        { "@type": "LocationFeatureSpecification", "name": "Jacuzzi Privatif Balnéo", "value": "True" },
        { "@type": "LocationFeatureSpecification", "name": "Table de Massage", "value": "True" },
        { "@type": "LocationFeatureSpecification", "name": "Mobilier Tantra Sensuel", "value": "True" },
        { "@type": "LocationFeatureSpecification", "name": "Climatisation", "value": "True" }
      ]
    }
    </script>

    <!-- Google Fonts & FontAwesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #8c2a42;
            --primary-dark: #5c182a;
            --accent: #d4af37;
            --accent-light: #fbf6eb;
            --airbnb-red: #ff385c;
            --airbnb-hover: #d70466;
            --booking-blue: #003580;
            --bg-light: #faf8f5;
            --dark: #141414;
            --muted: #666666;
            --white: #ffffff;
            --shadow-sm: 0 4px 15px rgba(0,0,0,0.04);
            --shadow-lg: 0 15px 35px rgba(140, 42, 66, 0.12);
            --transition: all 0.35s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Montserrat', sans-serif; background-color: var(--bg-light); color: var(--dark); line-height: 1.5; overflow-x: hidden; }
        h1, h2, h3, h4 { font-family: 'Cormorant Garamond', serif; font-weight: 700; }

        .fade-in-up { opacity: 0; transform: translateY(25px); transition: opacity 0.7s ease-out, transform 0.7s ease-out; }
        .fade-in-up.visible { opacity: 1; transform: translateY(0); }

        .navbar {
            position: fixed; top: 0; left: 0; width: 100%;
            background: rgba(255, 255, 255, 0.96); backdrop-filter: blur(15px);
            z-index: 1000; padding: 0.7rem 5%; display: flex;
            justify-content: space-between; align-items: center;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }

        .logo { font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 700; color: var(--primary); text-decoration: none; text-transform: uppercase; letter-spacing: 1px; }

        .nav-links { display: flex; gap: 2rem; list-style: none; }
        .nav-links a { color: var(--muted); text-decoration: none; font-size: 0.82rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; transition: var(--transition); }
        .nav-links a:hover { color: var(--primary); }

        .btn-airbnb-nav {
            background-color: var(--airbnb-red); color: var(--white);
            padding: 0.55rem 1.2rem; border-radius: 30px; font-weight: 600;
            text-decoration: none; font-size: 0.82rem; transition: var(--transition);
            display: inline-flex; align-items: center; gap: 0.5rem;
            box-shadow: 0 4px 12px rgba(255, 56, 92, 0.25);
        }
        .btn-airbnb-nav:hover { background-color: var(--airbnb-hover); transform: translateY(-2px); }

        .hero-video-wrapper {
            position: relative; width: 100%; height: 75vh; min-height: 540px; max-height: 750px;
            background: #000; overflow: hidden; margin-top: 55px;
            display: flex; align-items: center; justify-content: center;
        }

        .hero-video-wrapper video { width: 100%; height: 100%; object-fit: cover; opacity: 0.85; filter: brightness(0.85); }
        .video-overlay-gradient { position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.8) 100%); z-index: 10; pointer-events: none; }
        .video-overlay-controls { position: absolute; top: 15px; left: 15px; z-index: 25; }
        
        .btn-sound {
            background: rgba(0, 0, 0, 0.7); color: #fff; border: 1px solid rgba(255,255,255,0.4);
            padding: 0.45rem 0.9rem; border-radius: 30px; cursor: pointer;
            backdrop-filter: blur(8px); font-size: 0.75rem; font-weight: 500;
            display: flex; align-items: center; gap: 0.4rem; transition: var(--transition);
        }

        .hero-caption { position: absolute; bottom: 65px; left: 5%; z-index: 25; color: #fff; max-width: 750px; width: 90%; text-align: left; }
        .hero-caption h1 { font-size: 2.6rem; line-height: 1.15; text-shadow: 0 3px 12px rgba(0,0,0,0.8); }
        .hero-caption p { font-size: 1rem; opacity: 0.95; margin-top: 0.4rem; font-weight: 300; text-shadow: 0 2px 8px rgba(0,0,0,0.8); margin-bottom: 1.2rem; }

        .hero-buttons { display: flex; gap: 1rem; flex-wrap: wrap; }
        .btn-hero-primary {
            background: var(--airbnb-red); color: #fff; padding: 0.8rem 1.8rem; border-radius: 30px;
            font-weight: 700; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; gap: 0.6rem; transition: var(--transition);
            box-shadow: 0 4px 15px rgba(255, 56, 92, 0.3);
        }
        .btn-hero-primary:hover { background: var(--airbnb-hover); transform: translateY(-2px); }

        .btn-hero-secondary {
            background: rgba(255,255,255,0.15); color: #fff; padding: 0.8rem 1.8rem; border-radius: 30px;
            font-weight: 600; font-size: 0.9rem; text-decoration: none; backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.3); transition: var(--transition);
        }
        .btn-hero-secondary:hover { background: rgba(255,255,255,0.3); }

        .rating-bar {
            display: grid; grid-template-columns: repeat(4, 1fr);
            gap: 0.8rem; background: var(--white); padding: 1.3rem 1.5rem;
            border-radius: 20px; box-shadow: var(--shadow-lg); margin: -45px auto 3rem;
            max-width: 1050px; position: relative; z-index: 30; text-align: center;
            border: 1px solid rgba(212, 175, 55, 0.2);
        }
        .rating-score { font-size: 1.9rem; font-weight: 700; color: var(--primary); font-family: 'Cormorant Garamond', serif; line-height: 1; }
        .rating-label { font-size: 0.7rem; color: var(--muted); text-transform: uppercase; font-weight: 600; margin-top: 0.25rem; }

        .container { max-width: 1050px; margin: 0 auto; padding: 0 1.2rem 3.5rem; }

        .section-header { text-align: center; margin-bottom: 2rem; }
        .section-header h2 { font-size: 2.2rem; color: var(--primary); margin-bottom: 0.3rem; }
        .section-header p { color: var(--muted); font-size: 0.92rem; max-width: 550px; margin: 0 auto; }

        .fomo-banner {
            background: #fff5f5; border: 1px solid #fecaca; color: #991b1b;
            padding: 0.75rem 1.2rem; border-radius: 30px; display: flex;
            align-items: center; justify-content: center; gap: 0.6rem;
            font-size: 0.85rem; font-weight: 600; margin: 0 auto 2.5rem; max-width: 700px;
            box-shadow: var(--shadow-sm);
        }
        .fomo-dot { width: 8px; height: 8px; background: #dc2626; border-radius: 50%; display: inline-block; animation: blink 1.2s infinite; }
        @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0.3; } }

        .bienvenue-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2.5rem; align-items: center; margin-bottom: 3.5rem; }
        .bienvenue-text p { color: var(--muted); font-size: 0.92rem; margin-bottom: 1.2rem; font-weight: 400; line-height: 1.6; }
        
        .capsule-group { display: flex; flex-wrap: wrap; gap: 0.6rem; margin-top: 1.2rem; }
        .capsule { border: 1px solid rgba(140, 42, 66, 0.2); padding: 0.4rem 1rem; border-radius: 20px; font-size: 0.75rem; color: var(--primary); font-weight: 600; background: var(--accent-light); }

        .bienvenue-collage { display: grid; grid-template-columns: 1fr 1fr; gap: 0.8rem; }
        .collage-img-main { grid-column: span 2; height: 230px; border-radius: 14px; overflow: hidden; }
        .collage-img-sub { height: 150px; border-radius: 14px; overflow: hidden; }
        .bienvenue-collage img { width: 100%; height: 100%; object-fit: cover; transition: var(--transition); }
        .bienvenue-collage img:hover { transform: scale(1.03); }

        .equipements-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.2rem; margin-bottom: 3.5rem; }
        .eq-card { background: var(--white); padding: 1.5rem; border-radius: 16px; box-shadow: var(--shadow-sm); border: 1px solid rgba(0,0,0,0.04); text-align: center; transition: var(--transition); }
        .eq-card:hover { transform: translateY(-5px); box-shadow: var(--shadow-lg); border-color: rgba(212, 175, 55, 0.4); }
        .eq-icon { width: 52px; height: 52px; background: var(--accent-light); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; margin: 0 auto 0.9rem; transition: var(--transition); }
        .eq-card:hover .eq-icon { background: var(--primary); color: var(--white); }
        .eq-card h3 { font-size: 1.15rem; margin-bottom: 0.3rem; color: var(--primary-dark); }
        .eq-card p { font-size: 0.82rem; color: var(--muted); }

        .gallery-tabs { display: flex; justify-content: center; gap: 0.6rem; flex-wrap: wrap; margin-bottom: 1.8rem; }
        .tab-btn { background: var(--white); border: 1px solid rgba(0,0,0,0.08); color: var(--muted); padding: 0.45rem 1.1rem; border-radius: 20px; font-size: 0.78rem; font-weight: 600; cursor: pointer; transition: var(--transition); }
        .tab-btn.active, .tab-btn:hover { background: var(--primary); color: var(--white); border-color: var(--primary); }

        .slider-wrapper { position: relative; width: 100%; height: 480px; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-lg); margin-bottom: 3.5rem; background: #000; }
        .slider-track { display: flex; width: 500%; height: 100%; transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1); }
        .slide-container { width: 20%; height: 100%; position: relative; overflow: hidden; display: flex; align-items: center; justify-content: center; background: #000; }
        .slide-img-main { width: 100%; height: 100%; object-fit: cover; }
        
        .slider-btn { position: absolute; top: 50%; transform: translateY(-50%); width: 44px; height: 44px; background: rgba(0, 0, 0, 0.65); color: #fff; border: 1px solid rgba(255,255,255,0.3); border-radius: 50%; cursor: pointer; z-index: 20; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; transition: var(--transition); backdrop-filter: blur(5px); }
        .slider-btn:hover { background: rgba(140, 42, 66, 0.9); border-color: var(--accent); }
        .slider-btn.prev { left: 15px; } .slider-btn.next { right: 15px; }

        .location-section { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; background: var(--white); padding: 2.2rem; border-radius: 20px; box-shadow: var(--shadow-sm); margin-bottom: 3.5rem; align-items: center; border: 1px solid rgba(0,0,0,0.04); }
        .location-info h3 { font-size: 1.6rem; color: var(--primary); margin-bottom: 0.6rem; }
        .location-info p { color: var(--muted); font-size: 0.9rem; margin-bottom: 1.2rem; line-height: 1.6; }
        .location-list { list-style: none; font-size: 0.88rem; color: #333; }
        .location-list li { margin-bottom: 0.6rem; display: flex; align-items: center; gap: 0.6rem; }
        .location-list li i { color: var(--primary); font-size: 0.9rem; }
        .map-wrapper { width: 100%; height: 260px; border-radius: 14px; overflow: hidden; box-shadow: var(--shadow-sm); }
        .map-wrapper iframe { width: 100%; height: 100%; border: 0; }

        .reviews-slider-wrapper { position: relative; width: 100%; background: var(--white); border-radius: 20px; padding: 2rem 2.5rem; box-shadow: var(--shadow-sm); border: 1px solid rgba(0,0,0,0.04); margin-bottom: 3.5rem; overflow: hidden; }
        .reviews-slider-track { display: flex; width: 600%; transition: transform 0.5s ease-in-out; }
        .review-slide { width: 16.666%; padding: 0 0.5rem; display: flex; flex-direction: column; justify-content: space-between; }
        .review-stars { color: var(--accent); font-size: 0.85rem; margin-bottom: 0.6rem; display: flex; align-items: center; gap: 0.3rem; }
        .review-text { font-style: italic; font-size: 0.92rem; color: #333; margin-bottom: 1.2rem; line-height: 1.5; min-height: 75px; }
        .review-meta { display: flex; justify-content: space-between; align-items: center; font-size: 0.82rem; border-top: 1px solid #f0f0f0; padding-top: 0.8rem; }
        .review-author { font-weight: 700; color: var(--dark); }
        .review-tag { padding: 0.2rem 0.6rem; border-radius: 6px; font-weight: 600; font-size: 0.75rem; display: flex; align-items: center; gap: 0.3rem; }
        .review-tag.airbnb { background: #fff0f3; color: var(--airbnb-red); }
        .review-tag.booking { background: #f0f4fa; color: var(--booking-blue); }

        .booking-cta-section { background: linear-gradient(135deg, #ffffff 0%, #fff0f3 100%); padding: 2.5rem; border-radius: 22px; box-shadow: var(--shadow-lg); border: 2px solid rgba(255, 56, 92, 0.2); text-align: center; margin-bottom: 3.5rem; }
        .booking-cta-title { font-size: 2rem; color: var(--airbnb-red); margin-bottom: 0.4rem; }
        .booking-cta-sub { color: var(--muted); font-size: 0.92rem; margin-bottom: 1.5rem; }

        .btn-airbnb-pulse { display: inline-flex; align-items: center; justify-content: center; gap: 0.7rem; background: var(--airbnb-red); color: var(--white); padding: 1.1rem 2.5rem; border-radius: 12px; font-weight: 700; font-size: 1.1rem; text-decoration: none; transition: var(--transition); box-shadow: 0 8px 25px rgba(255, 56, 92, 0.35); animation: pulseAirbnb 2s infinite; }
        .btn-airbnb-pulse:hover { background: var(--airbnb-hover); transform: translateY(-3px); }

        footer { background: var(--dark); color: var(--white); text-align: center; padding: 2.2rem 1rem; font-size: 0.82rem; opacity: 0.95; }

        @media (max-width: 850px) { .bienvenue-grid, .location-section { grid-template-columns: 1fr; } .nav-links { display: none; } }
        @media (max-width: 768px) { .navbar { padding: 0.6rem 0.8rem; } .logo { font-size: 1rem; } .btn-airbnb-nav { padding: 0.45rem 0.8rem; font-size: 0.75rem; } .hero-caption h1 { font-size: 1.6rem; } .rating-bar { grid-template-columns: repeat(2, 1fr); gap: 0.6rem; padding: 1rem; margin: -45px 1rem 2.5rem; } .slider-wrapper { height: 280px; } .btn-airbnb-pulse { width: 100%; font-size: 0.95rem; } }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <nav class="navbar">
        <a href="#" class="logo">Villa Romantique</a>
        <ul class="nav-links">
            <li><a href="#bienvenue">Découvrir</a></li>
            <li><a href="#equipements">Équipements</a></li>
            <li><a href="#galerie">Galerie</a></li>
            <li><a href="#avis">Avis</a></li>
        </ul>
        <a href="<?php echo $airbnb_link; ?>" target="_blank" class="btn-airbnb-nav">
            <i class="fa-brands fa-airbnb"></i> Réserver sur Airbnb
        </a>
    </nav>

    <!-- HERO SECTION OPTIMISÉE SEO (LOVE ROOM VIENNE & LYON) -->
    <div class="hero-video-wrapper">
        <video id="promoVideo" autoplay loop muted playsinline poster="photo1.jpg">
            <source src="presentation.mp4" type="video/mp4">
        </video>
        <div class="video-overlay-gradient"></div>

        <div class="video-overlay-controls">
            <button class="btn-sound" onclick="toggleSound()">
                <i id="soundIcon" class="fa-solid fa-volume-xmark"></i> <span id="soundText">Activer le son</span>
            </button>
        </div>
        
        <div class="hero-caption">
            <!-- H1 Targetat pe keywords principale -->
            <h1>Love Room Vienne — Jacuzzi Privatif & Spa Proche de Lyon</h1>
            <p>Un cocon d'exception pour deux — jacuzzi privatif, table de massage, fauteuil tantra et ambiance romantique personnalisable à Vienne (38200).</p>
            
            <div class="hero-buttons">
                <a href="<?php echo $airbnb_link; ?>" target="_blank" class="btn-hero-primary">
                    <i class="fa-brands fa-airbnb"></i> Love Room Vienne Réservation
                </a>
                <a href="#galerie" class="btn-hero-secondary">Voir la galerie</a>
            </div>
        </div>
    </div>

    <!-- HERO STATS BAR -->
    <div class="rating-bar fade-in-up">
        <div>
            <div class="rating-score">76 m²</div>
            <div class="rating-label">Surface Privative</div>
        </div>
        <div>
            <div class="rating-score">2 Pers.</div>
            <div class="rating-label">Capacité Max</div>
        </div>
        <div>
            <div class="rating-score">4.95 / 5</div>
            <div class="rating-label">Avis Airbnb</div>
        </div>
        <div>
            <div class="rating-score">100%</div>
            <div class="rating-label">Romantique & Intime</div>
        </div>
    </div>

    <div class="container">

        <!-- FOMO Alert Banner -->
        <div class="fomo-banner fade-in-up">
            <span class="fomo-dot"></span>
            Forte demande pour cette Love Room — Seules quelques dates restent disponibles ce mois-ci sur Airbnb.
        </div>

        <!-- BIENVENUE & SEO CONTENT -->
        <div id="bienvenue" class="section-header fade-in-up">
            <h2>Love Room Vienne : Votre Échappée Romantique</h2>
            <p>Le cocon parfait à 25 minutes de Lyon pour une nuit inoubliable à deux</p>
        </div>

        <div class="bienvenue-grid fade-in-up">
            <div class="bienvenue-text">
                <p>
                    Bienvenue dans notre <strong>Love Room à Vienne (38200)</strong>, une suite de luxe de 76 m² sur deux niveaux entièrement conçue pour les amoureux. Si vous cherchez une <em>Love Room proche de Lyon</em> pour fêter un anniversaire ou une escapade improvisée, la Villa Romantique Intime Prestige vous offre intimité et sérénité.
                </p>
                <p>
                    Profitez d'un jacuzzi privatif balnéo avec chromothérapie, d'un espace massage et d'une ambiance romantique personnalisable.
                </p>
                <div class="capsule-group">
                    <span class="capsule">Love Room Vienne</span>
                    <span class="capsule">Love Room Lyon</span>
                    <span class="capsule">Réservation Airbnb</span>
                </div>
            </div>

            <div class="bienvenue-collage">
                <div class="collage-img-main">
                    <img src="photo1.jpg" alt="Love Room Vienne Jacuzzi Privatif Airbnb">
                </div>
                <div class="collage-img-sub">
                    <img src="photo2.jpg" alt="Spa Privatif Love Room Lyon">
                </div>
                <div class="collage-img-sub">
                    <img src="photo3.jpg" alt="Chambre Romantique Vienne Reservation">
                </div>
            </div>
        </div>

        <!-- ÉQUIPEMENTS -->
        <div id="equipements" class="section-header fade-in-up">
            <h2>Équipements Love Room & Spa Privatif</h2>
            <p>Des prestations de prestige intégrées pour votre séjour</p>
        </div>

        <div class="equipements-grid fade-in-up">
            <div class="eq-card">
                <div class="eq-icon"><i class="fa-solid fa-hot-tub-person"></i></div>
                <h3>Jacuzzi Privatif</h3>
                <p>Baignoire balnéo 2 places chauffée à température idéale.</p>
            </div>
            <div class="eq-card">
                <div class="eq-icon"><i class="fa-solid fa-spa"></i></div>
                <h3>Table de Massage</h3>
                <p>Espace bien-être dédié avec table pro à disposition.</p>
            </div>
            <div class="eq-card">
                <div class="eq-icon"><i class="fa-solid fa-heart"></i></div>
                <h3>Fauteuil Tantra</h3>
                <p>Mobilier sensuel pour des moments uniques en couple.</p>
            </div>
            <div class="eq-card">
                <div class="eq-icon"><i class="fa-solid fa-shield-cat"></i></div>
                <h3>Intimité Totale (76m²)</h3>
                <p>Villa entière sans vis-à-vis avec balcon privatif.</p>
            </div>
        </div>

        <!-- GALERIE FOTO -->
        <div id="galerie" class="section-header fade-in-up">
            <h2>Galerie Photos Love Room</h2>
            <p>Découvrez chaque espace en détail</p>
        </div>

        <div class="gallery-tabs fade-in-up">
            <button class="tab-btn active">Tous</button>
            <button class="tab-btn">Jacuzzi</button>
            <button class="tab-btn">Chambre</button>
            <button class="tab-btn">Salon</button>
            <button class="tab-btn">Salle de Bain</button>
        </div>

        <div class="slider-wrapper fade-in-up">
            <button class="slider-btn prev" onclick="moveSlide(-1)"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="slider-btn next" onclick="moveSlide(1)"><i class="fa-solid fa-chevron-right"></i></button>

            <div class="slider-track" id="sliderTrack">
                <div class="slide-container"><img src="photo1.jpg" class="slide-img-main" alt="Love Room Vienne Jacuzzi"></div>
                <div class="slide-container"><img src="photo2.jpg" class="slide-img-main" alt="Love Room Lyon Lit Romantique"></div>
                <div class="slide-container"><img src="photo3.jpg" class="slide-img-main" alt="Espace Massage Spa Vienne"></div>
                <div class="slide-container"><img src="photo4.jpg" class="slide-img-main" alt="Balcon Privatif Villa Romantique"></div>
                <div class="slide-container"><img src="photo5.jpg" class="slide-img-main" alt="Salle de Bain Luxe Vienne"></div>
            </div>
        </div>

        <!-- SEO LOCAL & MAP (VIENNE / LYON) -->
        <div class="section-header fade-in-up">
            <h2>Localisation : Love Room Vienne (38200) Près de Lyon</h2>
            <p>Un emplacement calme et discret idéal pour s'évader du quotidien</p>
        </div>

        <div class="location-section fade-in-up">
            <div class="location-info">
                <h3>Vienne — À 25 minutes de Lyon</h3>
                <p>Située au <strong>6 Impasse Saint Mamert (38200 Vienne)</strong>, la villa permet un accès rapide tout en restant à l'abri des regards.</p>
                <ul class="location-list">
                    <li><i class="fa-solid fa-location-dot"></i> <strong>Proche de Lyon :</strong> Seule 28 km (25 min via A7)</li>
                    <li><i class="fa-solid fa-train"></i> <strong>Gare de Vienne :</strong> À 5 min seulement</li>
                    <li><i class="fa-solid fa-square-parking"></i> Stationnement discret et facile aux alentours</li>
                </ul>
            </div>
            <div class="map-wrapper">
                <iframe src="https://maps.google.com/maps?q=6%20Impasse%20Saint%20Mamert%2C%2038200%20Vienne%2C%20France&t=&z=14&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <!-- AIRBNB CTA BOX -->
        <div class="booking-cta-section fade-in-up">
            <h2 class="booking-cta-title">Love Room Vienne Réservation Airbnb</h2>
            <p class="booking-cta-sub">
                Réservation sécurisée en direct sur la plateforme officielle Airbnb
            </p>

            <a href="<?php echo $airbnb_link; ?>" target="_blank" class="btn-airbnb-pulse">
                <i class="fa-brands fa-airbnb"></i> Réserver la Love Room sur Airbnb
            </a>
        </div>

        <!-- REVIEWS SLIDER -->
        <div id="avis" class="section-header fade-in-up">
            <h2>Avis Voyageurs Love Room</h2>
            <p>Retours d'expérience authentiques vérifiés</p>
        </div>

        <div class="reviews-slider-wrapper fade-in-up">
            <div class="reviews-slider-track" id="revTrack">
                <div class="review-slide">
                    <div>
                        <div class="review-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <div class="review-text">« Super logement qui correspond aux photos. Jacuzzi fonctionnel, très propre. La meilleure Love Room testée près de Lyon ! »</div>
                    </div>
                    <div class="review-meta">
                        <span class="review-author">Tiffany G.</span>
                        <span class="review-tag airbnb"><i class="fa-brands fa-airbnb"></i> Airbnb</span>
                    </div>
                </div>

                <div class="review-slide">
                    <div>
                        <div class="review-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <div class="review-text">« Un paradis du bien-être. Zone wellness avec table de massage parfaite. Idéal pour une escapade Love Room Vienne. »</div>
                    </div>
                    <div class="review-meta">
                        <span class="review-author">Audrey M.</span>
                        <span class="review-tag booking"><i class="fa-solid fa-hotel"></i> Booking</span>
                    </div>
                </div>

                <div class="review-slide">
                    <div>
                        <div class="review-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                        <div class="review-text">« Réservation Airbnb simple et rapide. Logement super propre et décoré avec taste. Je recommande vivement ! »</div>
                    </div>
                    <div class="review-meta">
                        <span class="review-author">Lynda R.</span>
                        <span class="review-tag airbnb"><i class="fa-brands fa-airbnb"></i> Airbnb</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> <?php echo $property_name; ?> · Love Room Vienne (38200) France</p>
        <p style="margin-top: 0.3rem; font-size: 0.72rem; opacity: 0.7;">Redirection officielle pour votre réservation Airbnb Love Room Vienne</p>
    </footer>

    <!-- SCRIPTS -->
    <script>
        function toggleSound() {
            const video = document.getElementById('promoVideo');
            const soundIcon = document.getElementById('soundIcon');
            const soundText = document.getElementById('soundText');

            if (video.muted) {
                video.muted = false;
                soundIcon.className = 'fa-solid fa-volume-high';
                soundText.innerText = 'Couper le son';
            } else {
                video.muted = true;
                soundIcon.className = 'fa-solid fa-volume-xmark';
                soundText.innerText = 'Activer le son';
            }
        }

        let currentSlide = 0;
        const totalSlides = 5;
        function updateSlider() { document.getElementById('sliderTrack').style.transform = `translateX(-${currentSlide * 20}%)`; }
        function moveSlide(dir) { currentSlide = (currentSlide + dir + totalSlides) % totalSlides; updateSlider(); }

        let currentRev = 0;
        setInterval(() => {
            currentRev = (currentRev + 1) % 3;
            document.getElementById('revTrack').style.transform = `translateX(-${currentRev * 33.33}%)`;
        }, 5500);

        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
            }, { threshold: 0.1 });
            document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>