<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitFlow - Transform Your Body & Mind</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;500;600&display=swap');

        :root {
            --bg-dark: #0a0e12;
            --bg-secondary: #141b23;
            --bg-card: #1a2332;
            --lime: #c6ff00;
            --lime-glow: rgba(198, 255, 0, 0.3);
            --text-primary: #ffffff;
            --text-secondary: #a0aec0;
            --gradient-lime: linear-gradient(135deg, #c6ff00 0%, #7fff00 100%);
            --gradient-dark: linear-gradient(135deg, #0a0e12 0%, #1a2332 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, sans-serif;
            background: var(--bg-dark);
            color: var(--text-primary);
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Background Animation */
        .bg-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.03;
            background-image:
                repeating-linear-gradient(0deg, transparent, transparent 2px, var(--lime) 2px, var(--lime) 4px),
                repeating-linear-gradient(90deg, transparent, transparent 2px, var(--lime) 2px, var(--lime) 4px);
            background-size: 100px 100px;
            pointer-events: none;
            z-index: 0;
        }

        .glow-orb {
            position: fixed;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--lime-glow) 0%, transparent 70%);
            filter: blur(80px);
            pointer-events: none;
            z-index: 0;
            animation: float 20s ease-in-out infinite;
        }

        .glow-orb-1 {
            top: -200px;
            left: -200px;
        }

        .glow-orb-2 {
            bottom: -300px;
            right: -300px;
            animation-delay: -10s;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(50px, -50px) scale(1.1); }
            66% { transform: translate(-50px, 50px) scale(0.9); }
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 1.5rem 5%;
            background: rgba(10, 14, 18, 0.8);
            backdrop-filter: blur(20px);
            z-index: 1000;
            border-bottom: 1px solid rgba(198, 255, 0, 0.1);
            animation: slideDown 0.6s ease-out;
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        nav {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.8rem;
            font-weight: 900;
            color: var(--lime);
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 0 20px var(--lime-glow);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--lime);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--lime);
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .lang-switch {
            background: var(--bg-card);
            border: 1px solid rgba(198, 255, 0, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            color: var(--text-primary);
            font-weight: 500;
            transition: all 0.3s;
        }

        .lang-switch:hover {
            background: var(--lime);
            color: var(--bg-dark);
            border-color: var(--lime);
        }

        .cta-nav {
            background: var(--gradient-lime);
            color: var(--bg-dark);
            padding: 0.7rem 1.5rem;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            box-shadow: 0 0 20px var(--lime-glow);
        }

        .cta-nav:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 30px var(--lime-glow);
        }

        /* Hero Section */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 8rem 5% 4rem;
            overflow: hidden;
        }

        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 10;
        }

        .hero-text {
            animation: fadeInLeft 1s ease-out;
        }

        @keyframes fadeInLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .hero-label {
            display: inline-block;
            background: rgba(198, 255, 0, 0.1);
            border: 1px solid var(--lime);
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            color: var(--lime);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: 4.5rem;
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--text-primary) 0%, var(--lime) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
            max-width: 500px;
            line-height: 1.8;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: var(--gradient-lime);
            color: var(--bg-dark);
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s;
            box-shadow: 0 10px 40px var(--lime-glow);
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 50px var(--lime-glow);
        }

        .btn-secondary {
            background: transparent;
            color: var(--text-primary);
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            border: 2px solid rgba(198, 255, 0, 0.3);
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background: rgba(198, 255, 0, 0.1);
            border-color: var(--lime);
        }

        .hero-image {
            position: relative;
            animation: fadeInRight 1s ease-out;
        }

        @keyframes fadeInRight {
            from { transform: translateX(50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .hero-image-container {
            position: relative;
            width: 100%;
            height: 600px;
            background: var(--bg-card);
            border-radius: 30px;
            overflow: hidden;
            border: 1px solid rgba(198, 255, 0, 0.2);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .hero-image-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, transparent 0%, rgba(198, 255, 0, 0.1) 100%);
            z-index: 1;
        }

        .hero-image-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1a2332 0%, #0a0e12 100%);
            position: relative;
        }

        .hero-image-placeholder svg {
            width: 300px;
            height: 300px;
            opacity: 0.3;
        }

        /* Stats */
        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 4rem;
            animation: fadeInUp 1s ease-out 0.3s backwards;
        }

        @keyframes fadeInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .stat-card {
            background: var(--bg-card);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(198, 255, 0, 0.2);
            text-align: center;
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-color: var(--lime);
            box-shadow: 0 10px 30px var(--lime-glow);
        }

        .stat-number {
            font-family: 'Orbitron', sans-serif;
            font-size: 3rem;
            font-weight: 900;
            color: var(--lime);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-secondary);
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Free Tools Section */
        .free-tools {
            padding: 6rem 5%;
            position: relative;
            z-index: 10;
        }

        .section-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 4rem;
        }

        .section-label {
            color: var(--lime);
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 1rem;
        }

        .section-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .section-description {
            color: var(--text-secondary);
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .calculators-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .calculator-card {
            background: var(--bg-card);
            padding: 2.5rem;
            border-radius: 25px;
            border: 1px solid rgba(198, 255, 0, 0.2);
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
        }

        .calculator-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-lime);
            transform: scaleX(0);
            transition: transform 0.4s;
        }

        .calculator-card:hover {
            transform: translateY(-10px);
            border-color: var(--lime);
            box-shadow: 0 20px 50px var(--lime-glow);
        }

        .calculator-card:hover::before {
            transform: scaleX(1);
        }

        .calc-icon {
            width: 60px;
            height: 60px;
            background: rgba(198, 255, 0, 0.1);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }

        .calculator-card h3 {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: var(--lime);
        }

        .calculator-card p {
            color: var(--text-secondary);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .calc-button {
            background: transparent;
            color: var(--lime);
            border: 2px solid var(--lime);
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .calc-button:hover {
            background: var(--lime);
            color: var(--bg-dark);
            transform: translateX(5px);
        }

        /* Features Section */
        .features {
            padding: 6rem 5%;
            background: var(--bg-secondary);
            position: relative;
            z-index: 10;
        }

        .features-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
        }

        .feature-card {
            text-align: center;
            padding: 2rem;
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient-lime);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.5rem;
            transform: rotate(-5deg);
            transition: all 0.3s;
        }

        .feature-card:hover .feature-icon {
            transform: rotate(0deg) scale(1.1);
        }

        .feature-card h3 {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: var(--text-secondary);
            line-height: 1.8;
        }

        /* Pricing Section */
        .pricing {
            padding: 6rem 5%;
            position: relative;
            z-index: 10;
        }

        .pricing-grid {
            max-width: 1200px;
            margin: 3rem auto 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .pricing-card {
            background: var(--bg-card);
            padding: 3rem 2.5rem;
            border-radius: 30px;
            border: 2px solid rgba(198, 255, 0, 0.2);
            position: relative;
            transition: all 0.4s;
        }

        .pricing-card.featured {
            border-color: var(--lime);
            transform: scale(1.05);
            box-shadow: 0 20px 60px var(--lime-glow);
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            border-color: var(--lime);
        }

        .pricing-badge {
            position: absolute;
            top: -15px;
            right: 30px;
            background: var(--gradient-lime);
            color: var(--bg-dark);
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .pricing-card h3 {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: var(--lime);
        }

        .price {
            font-family: 'Orbitron', sans-serif;
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 0.5rem;
        }

        .price span {
            font-size: 1.2rem;
            color: var(--text-secondary);
        }

        .price-duration {
            color: var(--text-secondary);
            margin-bottom: 2rem;
        }

        .features-list {
            list-style: none;
            margin-bottom: 2rem;
        }

        .features-list li {
            padding: 0.8rem 0;
            border-bottom: 1px solid rgba(198, 255, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .features-list li::before {
            content: '✓';
            color: var(--lime);
            font-weight: 900;
            font-size: 1.2rem;
        }

        /* Testimonials */
        .testimonials {
            padding: 6rem 5%;
            background: var(--bg-secondary);
            position: relative;
            z-index: 10;
        }

        .testimonials-grid {
            max-width: 1400px;
            margin: 3rem auto 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: var(--bg-card);
            padding: 2.5rem;
            border-radius: 25px;
            border: 1px solid rgba(198, 255, 0, 0.2);
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 30px;
            font-size: 8rem;
            font-family: 'Orbitron', sans-serif;
            color: var(--lime);
            opacity: 0.2;
            line-height: 1;
        }

        .testimonial-text {
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: 1.5rem;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--gradient-lime);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--bg-dark);
        }

        .author-info h4 {
            font-weight: 600;
            margin-bottom: 0.2rem;
        }

        .author-info p {
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        /* CTA Section */
        .cta-section {
            padding: 8rem 5%;
            position: relative;
            z-index: 10;
        }

        .cta-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            background: var(--bg-card);
            padding: 4rem 3rem;
            border-radius: 40px;
            border: 2px solid var(--lime);
            box-shadow: 0 30px 80px var(--lime-glow);
            position: relative;
            overflow: hidden;
        }

        .cta-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top right, rgba(198, 255, 0, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .cta-content h2 {
            font-family: 'Orbitron', sans-serif;
            font-size: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .cta-content p {
            font-size: 1.2rem;
            color: var(--text-secondary);
            margin-bottom: 2.5rem;
        }

        /* Footer */
        footer {
            background: var(--bg-secondary);
            padding: 4rem 5% 2rem;
            border-top: 1px solid rgba(198, 255, 0, 0.1);
            position: relative;
            z-index: 10;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-brand h3 {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.8rem;
            color: var(--lime);
            margin-bottom: 1rem;
        }

        .footer-brand p {
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(198, 255, 0, 0.1);
            border: 1px solid var(--lime);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--lime);
            transition: all 0.3s;
            text-decoration: none;
        }

        .social-links a:hover {
            background: var(--lime);
            color: var(--bg-dark);
            transform: translateY(-3px);
        }

        .footer-links h4 {
            font-family: 'Orbitron', sans-serif;
            margin-bottom: 1.5rem;
            color: var(--lime);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links ul li {
            margin-bottom: 0.8rem;
        }

        .footer-links ul li a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.3s;
        }

        .footer-links ul li a:hover {
            color: var(--lime);
            padding-left: 5px;
        }

        .footer-bottom {
            max-width: 1400px;
            margin: 0 auto;
            padding-top: 2rem;
            border-top: 1px solid rgba(198, 255, 0, 0.1);
            text-align: center;
            color: var(--text-secondary);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .hero h1 {
                font-size: 3.5rem;
            }

            .hero p {
                max-width: 600px;
            }

            .hero-image {
                margin-top: 3rem;
            }

            .stats {
                grid-template-columns: repeat(3, 1fr);
            }

            .footer-content {
                grid-template-columns: 1fr 1fr;
            }

            .nav-links {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .pricing-card.featured {
                transform: scale(1);
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .cta-content h2 {
                font-size: 2rem;
            }
        }

        /* RTL Support for Arabic */
        [dir="rtl"] {
            direction: rtl;
        }

        [dir="rtl"] .nav-links {
            flex-direction: row-reverse;
        }

        [dir="rtl"] .hero-buttons {
            justify-content: center;
        }

        [dir="rtl"] .calc-button:hover {
            transform: translateX(-5px);
        }
    </style>
</head>
<body>
<!-- Background Effects -->
<div class="bg-pattern"></div>
<div class="glow-orb glow-orb-1"></div>
<div class="glow-orb glow-orb-2"></div>

<!-- Header -->
<header>
    <nav>
        <div class="logo" id="logo">FITFLOW</div>
        <ul class="nav-links">
            <li><a href="#home" data-en="Home" data-ar="الرئيسية">Home</a></li>
            <li><a href="#tools" data-en="Free Tools" data-ar="أدوات مجانية">Free Tools</a></li>
            <li><a href="#features" data-en="Features" data-ar="المميزات">Features</a></li>
            <li><a href="#pricing" data-en="Pricing" data-ar="الأسعار">Pricing</a></li>
            <li><a href="#contact" data-en="Contact" data-ar="تواصل">Contact</a></li>
        </ul>
        <div style="display: flex; gap: 1rem; align-items: center;">
            <button class="lang-switch" onclick="toggleLanguage()">
                <span id="lang-text">العربية</span>
            </button>
            <a href="#signup" class="cta-nav" data-en="Get Started" data-ar="ابدأ الآن">Get Started</a>
        </div>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-content">
        <div class="hero-text">
            <span class="hero-label" data-en="🔥 TRANSFORM YOUR LIFE" data-ar="🔥 غيّر حياتك">🔥 TRANSFORM YOUR LIFE</span>
            <h1 data-en="Build Your Dream Body" data-ar="اصنع جسمك المثالي">Build Your Dream Body</h1>
            <p data-en="Get personalized workout plans, custom nutrition, and direct access to professional trainers. Your fitness journey starts here." data-ar="احصل على خطط تمارين مخصصة، نظام غذائي مُصمم لك، وتواصل مباشر مع مدربين محترفين. رحلة اللياقة تبدأ هنا.">
                Get personalized workout plans, custom nutrition, and direct access to professional trainers. Your fitness journey starts here.
            </p>
            <div class="hero-buttons">
                <a href="#pricing" class="btn-primary" data-en="Start Free Trial →" data-ar="ابدأ تجربة مجانية ←">
                    Start Free Trial →
                </a>
                <a href="#tools" class="btn-secondary" data-en="Try Free Tools" data-ar="جرّب الأدوات المجانية">
                    Try Free Tools
                </a>
            </div>
        </div>
        <div class="hero-image">
            <div class="hero-image-container">
                <div class="hero-image-placeholder">
                    <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 30C100 30 80 50 80 80C80 110 100 120 100 120C100 120 120 110 120 80C120 50 100 30 100 30Z" fill="#c6ff00" opacity="0.3"/>
                        <circle cx="100" cy="60" r="15" fill="#c6ff00" opacity="0.5"/>
                        <path d="M70 90L85 120L100 110L115 120L130 90" stroke="#c6ff00" stroke-width="3" stroke-linecap="round"/>
                        <path d="M85 120L85 160M115 120L115 160" stroke="#c6ff00" stroke-width="3" stroke-linecap="round"/>
                        <circle cx="85" cy="165" r="5" fill="#c6ff00"/>
                        <circle cx="115" cy="165" r="5" fill="#c6ff00"/>
                        <path d="M60 70L70 90M140 70L130 90" stroke="#c6ff00" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section style="padding: 2rem 5%; position: relative; z-index: 10;">
    <div style="max-width: 1400px; margin: 0 auto;">
        <div class="stats">
            <div class="stat-card">
                <div class="stat-number">10K+</div>
                <div class="stat-label" data-en="Active Members" data-ar="عضو نشط">Active Members</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">50+</div>
                <div class="stat-label" data-en="Expert Trainers" data-ar="مدرب محترف">Expert Trainers</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">98%</div>
                <div class="stat-label" data-en="Success Rate" data-ar="نسبة النجاح">Success Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- Free Tools Section -->
<section class="free-tools" id="tools">
    <div class="section-header">
        <div class="section-label" data-en="FREE TOOLS" data-ar="أدوات مجانية">FREE TOOLS</div>
        <h2 class="section-title" data-en="Calculate Your Fitness Metrics" data-ar="احسب مؤشراتك الصحية">Calculate Your Fitness Metrics</h2>
        <p class="section-description" data-en="Try our free calculators to understand your body better. No signup required!" data-ar="جرّب حاسباتنا المجانية لفهم جسمك بشكل أفضل. لا يتطلب تسجيل!">
            Try our free calculators to understand your body better. No signup required!
        </p>
    </div>
    <div class="calculators-grid">
        <div class="calculator-card">
            <div class="calc-icon">📊</div>
            <h3 data-en="BMI Calculator" data-ar="حاسبة الوزن المثالي">BMI Calculator</h3>
            <p data-en="Calculate your Body Mass Index and understand your health status instantly." data-ar="احسب مؤشر كتلة الجسم وافهم حالتك الصحية فوراً.">
                Calculate your Body Mass Index and understand your health status instantly.
            </p>
            <a href="#bmi" class="calc-button" data-en="Calculate Now →" data-ar="احسب الآن ←">Calculate Now →</a>
        </div>
        <div class="calculator-card">
            <div class="calc-icon">🔥</div>
            <h3 data-en="Calorie Calculator" data-ar="حاسبة السعرات">Calorie Calculator</h3>
            <p data-en="Discover your daily calorie needs based on your activity level and goals." data-ar="اكتشف احتياجك اليومي من السعرات حسب نشاطك وأهدافك.">
                Discover your daily calorie needs based on your activity level and goals.
            </p>
            <a href="#calories" class="calc-button" data-en="Calculate Now →" data-ar="احسب الآن ←">Calculate Now →</a>
        </div>
        <div class="calculator-card">
            <div class="calc-icon">⚡</div>
            <h3 data-en="Macro Calculator" data-ar="حاسبة العناصر الغذائية">Macro Calculator</h3>
            <p data-en="Get your ideal protein, carbs, and fats breakdown for optimal results." data-ar="احصل على التوزيع المثالي للبروتين والكاربوهيدرات والدهون.">
                Get your ideal protein, carbs, and fats breakdown for optimal results.
            </p>
            <a href="#macros" class="calc-button" data-en="Calculate Now →" data-ar="احسب الآن ←">Calculate Now →</a>
        </div>
        <div class="calculator-card">
            <div class="calc-icon">💧</div>
            <h3 data-en="Water Intake" data-ar="حاسبة الماء">Water Intake</h3>
            <p data-en="Calculate how much water you should drink daily for optimal hydration." data-ar="احسب كمية الماء التي يجب شربها يومياً للترطيب الأمثل.">
                Calculate how much water you should drink daily for optimal hydration.
            </p>
            <a href="#water" class="calc-button" data-en="Calculate Now →" data-ar="احسب الآن ←">Calculate Now →</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features" id="features">
    <div class="section-header">
        <div class="section-label" data-en="PREMIUM FEATURES" data-ar="مميزات مميزة">PREMIUM FEATURES</div>
        <h2 class="section-title" data-en="Everything You Need to Succeed" data-ar="كل ما تحتاجه للنجاح">Everything You Need to Succeed</h2>
        <p class="section-description" data-en="Get access to professional trainers, custom plans, and advanced tracking tools." data-ar="احصل على مدربين محترفين وخطط مخصصة وأدوات متابعة متقدمة.">
            Get access to professional trainers, custom plans, and advanced tracking tools.
        </p>
    </div>
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">👤</div>
            <h3 data-en="Personal Trainer" data-ar="مدرب شخصي">Personal Trainer</h3>
            <p data-en="Get matched with a certified trainer who creates custom workout and nutrition plans tailored to your goals." data-ar="احصل على مدرب معتمد يصمم لك خطط تمارين وتغذية مخصصة حسب أهدافك.">
                Get matched with a certified trainer who creates custom workout and nutrition plans tailored to your goals.
            </p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🍎</div>
            <h3 data-en="Custom Nutrition Plans" data-ar="خطط غذائية مخصصة">Custom Nutrition Plans</h3>
            <p data-en="Receive personalized meal plans designed by your trainer with exact macros and calories for your body." data-ar="احصل على وجبات مخصصة من مدربك مع حساب دقيق للسعرات والعناصر الغذائية.">
                Receive personalized meal plans designed by your trainer with exact macros and calories for your body.
            </p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">💪</div>
            <h3 data-en="Workout Programs" data-ar="برامج تمارين">Workout Programs</h3>
            <p data-en="Follow custom workout routines built specifically for you, with video demonstrations and progress tracking." data-ar="اتبع برامج تمارين مصممة خصيصاً لك مع فيديوهات توضيحية ومتابعة التقدم.">
                Follow custom workout routines built specifically for you, with video demonstrations and progress tracking.
            </p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">💬</div>
            <h3 data-en="Direct Communication" data-ar="تواصل مباشر">Direct Communication</h3>
            <p data-en="Chat with your trainer anytime and schedule video calls for personalized coaching sessions." data-ar="تواصل مع مدربك في أي وقت واحجز مكالمات فيديو لجلسات تدريب شخصية.">
                Chat with your trainer anytime and schedule video calls for personalized coaching sessions.
            </p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">📈</div>
            <h3 data-en="Progress Tracking" data-ar="تتبع التقدم">Progress Tracking</h3>
            <p data-en="Monitor your weight, measurements, and progress photos. See your transformation over time with detailed analytics." data-ar="تابع وزنك وقياساتك وصورك. شاهد تحولك عبر الوقت بتحليلات مفصلة.">
                Monitor your weight, measurements, and progress photos. See your transformation over time with detailed analytics.
            </p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🎯</div>
            <h3 data-en="Goal Setting" data-ar="تحديد الأهداف">Goal Setting</h3>
            <p data-en="Set realistic goals and get a personalized roadmap to achieve them with milestones and celebrations." data-ar="حدد أهدافاً واقعية واحصل على خارطة طريق مخصصة لتحقيقها.">
                Set realistic goals and get a personalized roadmap to achieve them with milestones and celebrations.
            </p>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing" id="pricing">
    <div class="section-header">
        <div class="section-label" data-en="PRICING PLANS" data-ar="خطط الأسعار">PRICING PLANS</div>
        <h2 class="section-title" data-en="Choose Your Plan" data-ar="اختر خطتك">Choose Your Plan</h2>
        <p class="section-description" data-en="All plans include personal trainer, custom plans, and direct communication." data-ar="جميع الخطط تشمل مدرب شخصي وخطط مخصصة وتواصل مباشر.">
            All plans include personal trainer, custom plans, and direct communication.
        </p>
    </div>
    <div class="pricing-grid">
        <div class="pricing-card">
            <h3 data-en="Monthly Plan" data-ar="خطة شهرية">Monthly Plan</h3>
            <div class="price">$49<span data-en="/mo" data-ar="/شهر">/mo</span></div>
            <div class="price-duration" data-en="Billed monthly" data-ar="يُدفع شهرياً">Billed monthly</div>
            <ul class="features-list">
                <li data-en="Personal Trainer" data-ar="مدرب شخصي">Personal Trainer</li>
                <li data-en="Custom Meal Plans" data-ar="خطط غذائية مخصصة">Custom Meal Plans</li>
                <li data-en="Custom Workout Plans" data-ar="خطط تمارين مخصصة">Custom Workout Plans</li>
                <li data-en="Unlimited Chat Support" data-ar="دعم غير محدود">Unlimited Chat Support</li>
                <li data-en="2 Video Calls/Month" data-ar="مكالمتان شهرياً">2 Video Calls/Month</li>
                <li data-en="Progress Tracking" data-ar="تتبع التقدم">Progress Tracking</li>
            </ul>
            <a href="#signup" class="btn-primary" style="width: 100%; justify-content: center;" data-en="Get Started" data-ar="ابدأ الآن">Get Started</a>
        </div>
        <div class="pricing-card featured">
            <div class="pricing-badge" data-en="MOST POPULAR" data-ar="الأكثر شعبية">MOST POPULAR</div>
            <h3 data-en="Quarterly Plan" data-ar="خطة ربع سنوية">Quarterly Plan</h3>
            <div class="price">$129<span data-en="/3mo" data-ar="/3 أشهر">/3mo</span></div>
            <div class="price-duration" data-en="Save $18 (12% off)" data-ar="وفّر $18 (خصم 12%)">Save $18 (12% off)</div>
            <ul class="features-list">
                <li data-en="Everything in Monthly" data-ar="كل ميزات الشهرية">Everything in Monthly</li>
                <li data-en="4 Video Calls/Month" data-ar="4 مكالمات شهرياً">4 Video Calls/Month</li>
                <li data-en="Priority Support" data-ar="دعم ذو أولوية">Priority Support</li>
                <li data-en="Nutrition Library Access" data-ar="مكتبة وصفات غذائية">Nutrition Library Access</li>
                <li data-en="Exercise Video Library" data-ar="مكتبة فيديوهات تمارين">Exercise Video Library</li>
                <li data-en="Weekly Check-ins" data-ar="متابعة أسبوعية">Weekly Check-ins</li>
            </ul>
            <a href="#signup" class="btn-primary" style="width: 100%; justify-content: center;" data-en="Get Started" data-ar="ابدأ الآن">Get Started</a>
        </div>
        <div class="pricing-card">
            <h3 data-en="Annual Plan" data-ar="خطة سنوية">Annual Plan</h3>
            <div class="price">$399<span data-en="/year" data-ar="/سنة">/year</span></div>
            <div class="price-duration" data-en="Save $189 (32% off)" data-ar="وفّر $189 (خصم 32%)">Save $189 (32% off)</div>
            <ul class="features-list">
                <li data-en="Everything in Quarterly" data-ar="كل ميزات الربع سنوية">Everything in Quarterly</li>
                <li data-en="Unlimited Video Calls" data-ar="مكالمات غير محدودة">Unlimited Video Calls</li>
                <li data-en="24/7 Trainer Access" data-ar="وصول للمدرب 24/7">24/7 Trainer Access</li>
                <li data-en="Custom Supplement Plan" data-ar="خطة مكملات مخصصة">Custom Supplement Plan</li>
                <li data-en="Quarterly Body Analysis" data-ar="تحليل جسم ربع سنوي">Quarterly Body Analysis</li>
                <li data-en="VIP Community Access" data-ar="وصول لمجتمع VIP">VIP Community Access</li>
            </ul>
            <a href="#signup" class="btn-primary" style="width: 100%; justify-content: center;" data-en="Get Started" data-ar="ابدأ الآن">Get Started</a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials">
    <div class="section-header">
        <div class="section-label" data-en="SUCCESS STORIES" data-ar="قصص نجاح">SUCCESS STORIES</div>
        <h2 class="section-title" data-en="Real Results from Real People" data-ar="نتائج حقيقية من أشخاص حقيقيين">Real Results from Real People</h2>
    </div>
    <div class="testimonials-grid">
        <div class="testimonial-card">
            <p class="testimonial-text" data-en="Lost 25kg in 6 months! My trainer created a perfect plan for me. The video calls helped me stay motivated and fix my form." data-ar="خسرت 25 كغ في 6 أشهر! مدربي صمم لي خطة مثالية. المكالمات ساعدتني أبقى متحمساً وأصحح أدائي.">
                "Lost 25kg in 6 months! My trainer created a perfect plan for me. The video calls helped me stay motivated and fix my form."
            </p>
            <div class="testimonial-author">
                <div class="author-avatar">M</div>
                <div class="author-info">
                    <h4 data-en="Mohammed Ali" data-ar="محمد علي">Mohammed Ali</h4>
                    <p data-en="Lost 25kg" data-ar="خسر 25 كغ">Lost 25kg</p>
                </div>
            </div>
        </div>
        <div class="testimonial-card">
            <p class="testimonial-text" data-en="Finally achieved my dream body! The custom nutrition plan was a game changer. My trainer knew exactly what I needed." data-ar="أخيراً حققت جسم أحلامي! الخطة الغذائية المخصصة كانت تغيير جذري. مدربي عرف بالضبط شو أحتاج.">
                "Finally achieved my dream body! The custom nutrition plan was a game changer. My trainer knew exactly what I needed."
            </p>
            <div class="testimonial-author">
                <div class="author-avatar">S</div>
                <div class="author-info">
                    <h4 data-en="Sarah Hassan" data-ar="سارة حسن">Sarah Hassan</h4>
                    <p data-en="Gained 8kg muscle" data-ar="زادت 8 كغ عضل">Gained 8kg muscle</p>
                </div>
            </div>
        </div>
        <div class="testimonial-card">
            <p class="testimonial-text" data-en="Best investment I ever made. Having a personal trainer without leaving home is incredible. The progress tracking keeps me accountable." data-ar="أفضل استثمار عملته. الحصول على مدرب شخصي بدون مغادرة المنزل شيء رائع. متابعة التقدم خلتني ملتزم.">
                "Best investment I ever made. Having a personal trainer without leaving home is incredible. The progress tracking keeps me accountable."
            </p>
            <div class="testimonial-author">
                <div class="author-avatar">K</div>
                <div class="author-info">
                    <h4 data-en="Khaled Ibrahim" data-ar="خالد إبراهيم">Khaled Ibrahim</h4>
                    <p data-en="12 months member" data-ar="عضو 12 شهر">12 months member</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-content">
        <h2 data-en="Ready to Transform Your Life?" data-ar="جاهز لتغيير حياتك؟">Ready to Transform Your Life?</h2>
        <p data-en="Join thousands of members who achieved their fitness goals with personalized guidance from expert trainers." data-ar="انضم لآلاف الأعضاء اللي حققوا أهدافهم مع إرشاد شخصي من مدربين خبراء.">
            Join thousands of members who achieved their fitness goals with personalized guidance from expert trainers.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="#pricing" class="btn-primary" data-en="Start Your Journey →" data-ar="ابدأ رحلتك ←">Start Your Journey →</a>
            <a href="#tools" class="btn-secondary" data-en="Try Free Tools First" data-ar="جرّب الأدوات المجانية أولاً">Try Free Tools First</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="contact">
    <div class="footer-content">
        <div class="footer-brand">
            <h3>FITFLOW</h3>
            <p data-en="Transform your body and mind with personalized training, custom nutrition, and expert guidance." data-ar="غيّر جسمك وعقلك مع تدريب شخصي وتغذية مخصصة وإرشاد من خبراء.">
                Transform your body and mind with personalized training, custom nutrition, and expert guidance.
            </p>
            <div class="social-links">
                <a href="#" aria-label="Facebook">f</a>
                <a href="#" aria-label="Instagram">📷</a>
                <a href="#" aria-label="Twitter">🐦</a>
                <a href="#" aria-label="YouTube">▶</a>
            </div>
        </div>
        <div class="footer-links">
            <h4 data-en="Product" data-ar="المنتج">Product</h4>
            <ul>
                <li><a href="#features" data-en="Features" data-ar="المميزات">Features</a></li>
                <li><a href="#pricing" data-en="Pricing" data-ar="الأسعار">Pricing</a></li>
                <li><a href="#tools" data-en="Free Tools" data-ar="أدوات مجانية">Free Tools</a></li>
                <li><a href="#" data-en="Trainers" data-ar="المدربين">Trainers</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h4 data-en="Company" data-ar="الشركة">Company</h4>
            <ul>
                <li><a href="#" data-en="About Us" data-ar="من نحن">About Us</a></li>
                <li><a href="#" data-en="Blog" data-ar="المدونة">Blog</a></li>
                <li><a href="#" data-en="Careers" data-ar="وظائف">Careers</a></li>
                <li><a href="#contact" data-en="Contact" data-ar="تواصل">Contact</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h4 data-en="Legal" data-ar="قانوني">Legal</h4>
            <ul>
                <li><a href="#" data-en="Privacy Policy" data-ar="سياسة الخصوصية">Privacy Policy</a></li>
                <li><a href="#" data-en="Terms of Service" data-ar="شروط الخدمة">Terms of Service</a></li>
                <li><a href="#" data-en="Cookie Policy" data-ar="سياسة ملفات تعريف الارتباط">Cookie Policy</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p data-en="© 2025 FitFlow. All rights reserved. Built with 💪 for fitness enthusiasts." data-ar="© 2025 FitFlow. جميع الحقوق محفوظة. صُنع بـ 💪 لعشاق اللياقة.">
            © 2025 FitFlow. All rights reserved. Built with 💪 for fitness enthusiasts.
        </p>
    </div>
</footer>

<script>
    let currentLang = 'en';

    function toggleLanguage() {
        currentLang = currentLang === 'en' ? 'ar' : 'en';
        const html = document.documentElement;

        // Toggle direction
        html.setAttribute('dir', currentLang === 'ar' ? 'rtl' : 'ltr');
        html.setAttribute('lang', currentLang);

        // Update all elements with data-en and data-ar
        document.querySelectorAll('[data-en][data-ar]').forEach(element => {
            element.textContent = element.getAttribute('data-' + currentLang);
        });

        // Update language button text
        document.getElementById('lang-text').textContent = currentLang === 'en' ? 'العربية' : 'English';

        // Update logo if needed
        // document.getElementById('logo').textContent = currentLang === 'ar' ? 'فِت فلو' : 'FITFLOW';
    }

    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add scroll animation for elements
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe cards for animation
    document.querySelectorAll('.calculator-card, .feature-card, .pricing-card, .testimonial-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
</script>
</body>
</html>
