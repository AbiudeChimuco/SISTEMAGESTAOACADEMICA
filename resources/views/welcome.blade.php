
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGAO — Sistema de Gestão Académica Origami</title>

    <meta name="description"
        content="SGAO é uma plataforma SaaS de gestão académica para alunos, professores, turmas, matrículas, avaliações, notas e frequência.">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>

        :root {

            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --primary-light: #eff6ff;

            --dark: #101828;
            --dark-2: #0f172a;

            --text: #344054;
            --muted: #667085;

            --border: #eaecf0;

            --background: #f8fafc;

            --white: #ffffff;

        }


        * {

            margin: 0;
            padding: 0;

            box-sizing: border-box;

        }


        html {

            scroll-behavior: smooth;

        }


        body {

            font-family: 'Inter', sans-serif;

            color: var(--text);

            background: white;

            line-height: 1.6;

        }


        a {

            text-decoration: none;

            color: inherit;

        }


        button {

            font-family: inherit;

        }


        .container {

            width: min(1180px, 92%);

            margin: auto;

        }


        /* =====================================================
           TOPBAR
        ====================================================== */

        .topbar {

            background: #0f172a;

            color: #cbd5e1;

            font-size: 11px;

            padding: 8px 0;

        }


        .topbar-inner {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

        }


        .topbar-left,
        .topbar-right {

            display: flex;

            align-items: center;

            gap: 22px;

        }


        .topbar-right {

            gap: 18px;

        }


        .topbar a {

            transition: .2s;

        }


        .topbar a:hover {

            color: white;

        }


        /* =====================================================
           HEADER
        ====================================================== */

        .header {

            height: 76px;

            background: rgba(255,255,255,.97);

            backdrop-filter: blur(14px);

            border-bottom: 1px solid var(--border);

            position: sticky;

            top: 0;

            z-index: 1000;

        }


        .header-inner {

            height: 100%;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 25px;

        }


        /* LOGO */

        .brand {

            display: flex;

            align-items: center;

            gap: 11px;

            flex-shrink: 0;

        }


        .brand-icon {

            width: 40px;

            height: 40px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 10px;

            background: linear-gradient(
                135deg,
                #2563eb,
                #1d4ed8
            );

            color: white;

            font-size: 19px;

            font-weight: 800;

            box-shadow:
                0 7px 18px rgba(37,99,235,.20);

        }


        .brand-name {

            font-size: 20px;

            font-weight: 800;

            letter-spacing: -.7px;

            color: #111827;

        }


        .brand-name span {

            color: var(--primary);

        }


        .brand-subtitle {

            display: block;

            font-size: 8px;

            color: #98a2b3;

            font-weight: 600;

            letter-spacing: .6px;

            text-transform: uppercase;

            margin-top: -2px;

        }


        /* =====================================================
           NAVIGATION
        ====================================================== */

        .main-nav {

            display: flex;

            align-items: center;

            gap: 25px;

            margin-left: auto;

        }


        .nav-item {

            position: relative;

            display: flex;

            align-items: center;

            gap: 5px;

            color: #475467;

            font-size: 12px;

            font-weight: 600;

            padding: 28px 0;

            transition: .2s;

        }


        .nav-item:hover {

            color: var(--primary);

        }


        .nav-arrow {

            font-size: 9px;

            color: #98a2b3;

        }


        /* =====================================================
           DROPDOWN
        ====================================================== */

        .dropdown {

            position: relative;

        }


        .dropdown-menu {

            position: absolute;

            top: 65px;

            left: -20px;

            width: 250px;

            background: white;

            border: 1px solid var(--border);

            border-radius: 12px;

            padding: 8px;

            box-shadow:
                0 18px 45px rgba(16,24,40,.12);

            opacity: 0;

            visibility: hidden;

            transform: translateY(7px);

            transition: .2s;

        }


        .dropdown:hover .dropdown-menu {

            opacity: 1;

            visibility: visible;

            transform: translateY(0);

        }


        .dropdown-link {

            display: flex;

            align-items: flex-start;

            gap: 11px;

            padding: 11px;

            border-radius: 8px;

        }


        .dropdown-link:hover {

            background: #f8fafc;

        }


        .dropdown-icon {

            width: 30px;

            height: 30px;

            flex-shrink: 0;

            border-radius: 7px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: var(--primary-light);

            color: var(--primary);

            font-size: 13px;

        }


        .dropdown-content strong {

            display: block;

            color: #1d2939;

            font-size: 12px;

            margin-bottom: 2px;

        }


        .dropdown-content span {

            display: block;

            color: #98a2b3;

            font-size: 10px;

            line-height: 1.4;

        }


        /* =====================================================
           HEADER ACTIONS
        ====================================================== */

        .header-actions {

            display: flex;

            align-items: center;

            gap: 8px;

            flex-shrink: 0;

        }


        .btn-login {

            padding: 10px 14px;

            color: #344054;

            font-size: 12px;

            font-weight: 700;

            border-radius: 8px;

            transition: .2s;

        }


        .btn-login:hover {

            color: var(--primary);

            background: var(--primary-light);

        }


        .btn-primary {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 11px 18px;

            background: var(--primary);

            color: white;

            border-radius: 8px;

            font-size: 12px;

            font-weight: 700;

            box-shadow:
                0 7px 17px rgba(37,99,235,.20);

            transition: .2s;

        }


        .btn-primary:hover {

            background: var(--primary-dark);

            transform: translateY(-1px);

        }


        /* =====================================================
           HERO
        ====================================================== */

        .hero {

            position: relative;

            overflow: hidden;

            padding: 92px 0 100px;

            background:
                radial-gradient(
                    circle at 80% 15%,
                    rgba(37,99,235,.10),
                    transparent 30%
                ),
                linear-gradient(
                    180deg,
                    #f8fbff,
                    #ffffff
                );

        }


        .hero-grid {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 70px;

            align-items: center;

        }


        .eyebrow {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            color: var(--primary);

            font-size: 10px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1px;

            margin-bottom: 18px;

        }


        .eyebrow-dot {

            width: 7px;

            height: 7px;

            border-radius: 50%;

            background: var(--primary);

        }


        .hero h1 {

            font-size: clamp(42px, 5vw, 61px);

            line-height: 1.06;

            letter-spacing: -3px;

            color: #101828;

            margin-bottom: 22px;

        }


        .hero h1 span {

            color: var(--primary);

        }


        .hero-description {

            max-width: 600px;

            color: var(--muted);

            font-size: 15px;

            margin-bottom: 30px;

        }


        .hero-actions {

            display: flex;

            align-items: center;

            gap: 12px;

            flex-wrap: wrap;

        }


        .btn-outline {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            padding: 11px 18px;

            border: 1px solid #d0d5dd;

            background: white;

            border-radius: 8px;

            color: #344054;

            font-size: 12px;

            font-weight: 700;

            transition: .2s;

        }


        .btn-outline:hover {

            border-color: var(--primary);

            color: var(--primary);

        }


        .hero-trust {

            margin-top: 21px;

            color: #98a2b3;

            font-size: 10px;

        }


        /* =====================================================
           DASHBOARD MOCKUP
        ====================================================== */

        .dashboard {

            background: white;

            border: 1px solid #e4e7ec;

            border-radius: 16px;

            overflow: hidden;

            box-shadow:
                0 30px 70px rgba(16,24,40,.12),
                0 8px 20px rgba(16,24,40,.05);

        }


        .browser-bar {

            height: 43px;

            display: flex;

            align-items: center;

            gap: 5px;

            padding: 0 14px;

            background: #fbfcfd;

            border-bottom: 1px solid var(--border);

        }


        .browser-dot {

            width: 7px;

            height: 7px;

            border-radius: 50%;

            background: #d0d5dd;

        }


        .browser-address {

            margin-left: 10px;

            font-size: 9px;

            color: #98a2b3;

        }


        .dashboard-content {

            display: grid;

            grid-template-columns: 145px 1fr;

            min-height: 370px;

        }


        .dashboard-sidebar {

            background: #0f172a;

            padding: 17px 11px;

        }


        .dash-logo {

            color: white;

            font-size: 12px;

            font-weight: 800;

            padding: 7px 8px;

            margin-bottom: 18px;

        }


        .dash-menu {

            padding: 8px;

            border-radius: 6px;

            color: #94a3b8;

            font-size: 9px;

            font-weight: 600;

            margin-bottom: 4px;

        }


        .dash-menu.active {

            background: var(--primary);

            color: white;

        }


        .dashboard-main {

            padding: 20px;

            background: #f8fafc;

        }


        .dash-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 17px;

        }


        .dash-header h3 {

            font-size: 15px;

            color: #101828;

        }


        .dash-header span {

            font-size: 8px;

            color: #98a2b3;

        }


        .dash-cards {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 9px;

        }


        .dash-card {

            background: white;

            border: 1px solid var(--border);

            border-radius: 8px;

            padding: 12px;

        }


        .dash-card-label {

            color: #98a2b3;

            font-size: 8px;

            margin-bottom: 5px;

        }


        .dash-card-value {

            color: #101828;

            font-size: 17px;

            font-weight: 800;

        }


        .dash-card-change {

            color: #16a34a;

            font-size: 7px;

            margin-top: 3px;

        }


        .dash-panel {

            background: white;

            border: 1px solid var(--border);

            border-radius: 8px;

            margin-top: 10px;

            padding: 12px;

        }


        .dash-panel-title {

            color: #344054;

            font-size: 9px;

            font-weight: 700;

            margin-bottom: 5px;

        }


        .dash-chart {

            width: 100%;

            height: 120px;

        }


        .dash-chart polyline {

            fill: none;

            stroke: #2563eb;

            stroke-width: 3;

            stroke-linecap: round;

            stroke-linejoin: round;

        }


        /* =====================================================
           FEATURE STRIP
        ====================================================== */

        .feature-strip {

            border-top: 1px solid var(--border);

            border-bottom: 1px solid var(--border);

            padding: 24px 0;

            background: white;

        }


        .feature-strip-inner {

            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 20px;

        }


        .strip-item {

            display: flex;

            align-items: center;

            gap: 10px;

        }


        .strip-icon {

            width: 34px;

            height: 34px;

            border-radius: 8px;

            background: var(--primary-light);

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 14px;

        }


        .strip-item strong {

            display: block;

            font-size: 11px;

            color: #344054;

        }


        .strip-item span {

            display: block;

            font-size: 9px;

            color: #98a2b3;

        }


        /* =====================================================
           SECTIONS
        ====================================================== */

        section {

            padding: 90px 0;

        }


        .section-header {

            max-width: 700px;

            margin: 0 auto 50px;

            text-align: center;

        }


        .section-title {

            color: #101828;

            font-size: 35px;

            line-height: 1.15;

            letter-spacing: -1.5px;

            margin-bottom: 14px;

        }


        .section-description {

            color: var(--muted);

            font-size: 14px;

        }


        /* =====================================================
           ABOUT
        ====================================================== */

        .about-grid {

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 80px;

            align-items: center;

        }


        .about h2 {

            color: #101828;

            font-size: 36px;

            line-height: 1.15;

            letter-spacing: -1.5px;

            margin-bottom: 18px;

        }


        .about p {

            color: var(--muted);

            font-size: 14px;

            margin-bottom: 14px;

        }


        .check-list {

            display: grid;

            gap: 13px;

            margin-top: 24px;

        }


        .check-item {

            display: flex;

            align-items: center;

            gap: 10px;

            font-size: 12px;

            font-weight: 600;

            color: #344054;

        }


        .check {

            width: 23px;

            height: 23px;

            border-radius: 50%;

            display: flex;

            align-items: center;

            justify-content: center;

            background: var(--primary-light);

            color: var(--primary);

            font-size: 10px;

            font-weight: 800;

        }


        .about-card {

            background: #0f172a;

            color: white;

            border-radius: 18px;

            padding: 40px;

            min-height: 360px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            position: relative;

            overflow: hidden;

        }


        .about-card::before {

            content: "";

            position: absolute;

            width: 280px;

            height: 280px;

            border-radius: 50%;

            background: rgba(37,99,235,.20);

            right: -120px;

            top: -120px;

        }


        .about-card-icon {

            width: 54px;

            height: 54px;

            border-radius: 13px;

            background: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 22px;

            margin-bottom: 25px;

            position: relative;

        }


        .about-card h3 {

            font-size: 24px;

            line-height: 1.25;

            margin-bottom: 13px;

            position: relative;

        }


        .about-card p {

            color: #94a3b8;

            font-size: 13px;

            position: relative;

        }


        /* =====================================================
           SOLUTIONS
        ====================================================== */

        .solutions {

            background: var(--background);

        }


        .solutions-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 17px;

        }


        .solution-card {

            background: white;

            border: 1px solid var(--border);

            border-radius: 13px;

            padding: 28px;

            transition: .25s;

        }


        .solution-card:hover {

            transform: translateY(-4px);

            border-color: #d6e4fa;

            box-shadow:
                0 15px 35px rgba(16,24,40,.07);

        }


        .solution-icon {

            width: 45px;

            height: 45px;

            border-radius: 10px;

            background: var(--primary-light);

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 18px;

            margin-bottom: 18px;

        }


        .solution-card h3 {

            color: #101828;

            font-size: 15px;

            margin-bottom: 8px;

        }


        .solution-card p {

            color: var(--muted);

            font-size: 12px;

            line-height: 1.7;

        }


        /* =====================================================
           LEVELS
        ====================================================== */

        .levels {

            margin-top: 50px;

            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 10px;

        }


        .level {

            padding: 9px 15px;

            background: white;

            border: 1px solid #dfe3e8;

            border-radius: 30px;

            color: #475467;

            font-size: 11px;

            font-weight: 600;

        }


        .level:hover {

            border-color: var(--primary);

            color: var(--primary);

        }


        /* =====================================================
           FEATURES
        ====================================================== */

        .features-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 18px;

        }


        .feature-card {

            padding: 25px;

            border: 1px solid var(--border);

            border-radius: 12px;

            background: white;

        }


        .feature-number {

            color: #cbd5e1;

            font-size: 11px;

            font-weight: 800;

            margin-bottom: 14px;

        }


        .feature-card h3 {

            color: #101828;

            font-size: 14px;

            margin-bottom: 7px;

        }


        .feature-card p {

            color: var(--muted);

            font-size: 12px;

        }


        /* =====================================================
           HOW IT WORKS
        ====================================================== */

        .steps {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 40px;

        }


        .step {

            text-align: center;

        }


        .step-number {

            width: 48px;

            height: 48px;

            border-radius: 50%;

            background: var(--primary-light);

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 17px;

            font-size: 12px;

            font-weight: 800;

        }


        .step h3 {

            color: #101828;

            font-size: 15px;

            margin-bottom: 7px;

        }


        .step p {

            color: var(--muted);

            font-size: 12px;

            max-width: 280px;

            margin: auto;

        }


        /* =====================================================
           SAAS
        ====================================================== */

        .saas-section {

            background: #f8fafc;

        }


        .saas-grid {

            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 15px;

        }


        .saas-box {

            background: white;

            border: 1px solid var(--border);

            border-radius: 12px;

            padding: 24px;

        }


        .saas-box strong {

            display: block;

            color: #101828;

            font-size: 13px;

            margin-bottom: 7px;

        }


        .saas-box span {

            color: var(--muted);

            font-size: 11px;

        }


        /* =====================================================
           CTA
        ====================================================== */

        .cta {

            padding-top: 30px;

            padding-bottom: 90px;

        }


        .cta-box {

            padding: 55px;

            border-radius: 20px;

            background:
                radial-gradient(
                    circle at 85% 20%,
                    rgba(255,255,255,.13),
                    transparent 28%
                ),
                linear-gradient(
                    135deg,
                    #1d4ed8,
                    #2563eb
                );

            color: white;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 40px;

        }


        .cta-box h2 {

            font-size: 31px;

            line-height: 1.2;

            letter-spacing: -.8px;

            margin-bottom: 10px;

        }


        .cta-box p {

            color: rgba(255,255,255,.80);

            max-width: 610px;

            font-size: 13px;

        }


        /* CONTACT INFO */

        .contact-info {

            display: flex;

            align-items: flex-start;

            gap: 35px;

            margin-top: 22px;

        }


        .contact-info div {

            display: flex;

            flex-direction: column;

            gap: 3px;

        }


        .contact-info strong {

            font-size: 9px;

            text-transform: uppercase;

            letter-spacing: .6px;

            color: rgba(255,255,255,.65);

        }


        .contact-info span {

            font-size: 12px;

            color: white;

        }


        .btn-white {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            flex-shrink: 0;

            padding: 13px 21px;

            border-radius: 8px;

            background: white;

            color: var(--primary);

            font-size: 12px;

            font-weight: 800;

            transition: .2s;

        }


        .btn-white:hover {

            transform: translateY(-2px);

            box-shadow:
                0 10px 25px rgba(0,0,0,.15);

        }


        /* =====================================================
           FOOTER
        ====================================================== */

        footer {

            background: #0f172a;

            color: white;

            padding: 55px 0 25px;

        }


        .footer-grid {

            display: grid;

            grid-template-columns: 2fr 1fr 1fr 1fr;

            gap: 45px;

            padding-bottom: 45px;

        }


        .footer-brand {

            max-width: 310px;

        }


        .footer-brand .brand-name {

            color: white;

            display: inline-block;

            margin-bottom: 13px;

        }


        .footer-brand p {

            color: #94a3b8;

            font-size: 11px;

            line-height: 1.8;

        }


        .footer-column h4 {

            font-size: 11px;

            margin-bottom: 15px;

            color: white;

        }


        .footer-column a {

            display: block;

            color: #94a3b8;

            font-size: 10px;

            margin-bottom: 9px;

            transition: .2s;

        }


        .footer-column a:hover {

            color: white;

        }


        .footer-bottom {

            border-top: 1px solid #1e293b;

            padding-top: 22px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

        }


        .footer-bottom span {

            color: #64748b;

            font-size: 9px;

        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media(max-width: 1050px) {

            .main-nav {

                gap: 14px;

            }


            .nav-item {

                font-size: 11px;

            }


            .header-actions .btn-primary {

                display: none;

            }


            .hero-grid,
            .about-grid {

                grid-template-columns: 1fr;

            }


            .solutions-grid,
            .features-grid {

                grid-template-columns: repeat(2, 1fr);

            }


            .saas-grid {

                grid-template-columns: repeat(2, 1fr);

            }


            .footer-grid {

                grid-template-columns: repeat(2, 1fr);

            }

        }


        @media(max-width: 760px) {

            .topbar {

                display: none;

            }


            .header {

                height: auto;

                min-height: 68px;

            }


            .header-inner {

                padding: 12px 0;

            }


            .main-nav {

                display: none;

            }


            .header-actions .btn-login {

                display: inline-flex;

            }


            .hero {

                padding: 65px 0 70px;

            }


            .hero h1 {

                font-size: 40px;

                letter-spacing: -2px;

            }


            .dashboard-content {

                grid-template-columns: 95px 1fr;

            }


            .feature-strip-inner {

                grid-template-columns: repeat(2, 1fr);

            }


            .solutions-grid,
            .features-grid,
            .saas-grid,
            .steps {

                grid-template-columns: 1fr;

            }


            .steps {

                gap: 30px;

            }


            section {

                padding: 65px 0;

            }


            .section-title,
            .about h2 {

                font-size: 29px;

            }


            .cta-box {

                padding: 35px 25px;

                flex-direction: column;

                align-items: flex-start;

            }


            .cta-box h2 {

                font-size: 26px;

            }


            .contact-info {

                flex-direction: column;

                gap: 15px;

            }


            .footer-grid {

                grid-template-columns: 1fr;

            }


            .footer-bottom {

                flex-direction: column;

                align-items: flex-start;

            }

        }


        @media(max-width: 480px) {

            .brand-subtitle {

                display: none;

            }


            .brand-name {

                font-size: 18px;

            }


            .brand-icon {

                width: 36px;

                height: 36px;

            }


            .header-actions .btn-login {

                padding: 8px 10px;

                font-size: 11px;

            }


            .hero h1 {

                font-size: 35px;

            }


            .hero-description {

                font-size: 14px;

            }


            .dashboard {

                transform: scale(.94);

                transform-origin: center;

            }


            .feature-strip-inner {

                grid-template-columns: 1fr;

            }


            .dash-cards {

                grid-template-columns: 1fr;

            }

        }

    </style>

</head>


<body>


    <!-- =====================================================
         TOP BAR
    ====================================================== -->

    <div class="topbar">

        <div class="container topbar-inner">

            <div class="topbar-left">

                <span>
                    Plataforma SaaS de Gestão Escolar
                </span>

                <span>
                    Para todos os níveis de ensino
                </span>

            </div>


            <div class="topbar-right">

                <span>
                    ☎ 957 008 342
                </span>

                <a href="#contactos">
                    Contactos
                </a>

            </div>

        </div>

    </div>



    <!-- =====================================================
         HEADER
    ====================================================== -->

    <header class="header">

        <div class="container header-inner">


            <!-- LOGO -->

            <a href="#inicio" class="brand">

                <div class="brand-icon">
                    S
                </div>

                <div>

                    <div class="brand-name">
                        SGA<span>O</span>
                    </div>

                    <span class="brand-subtitle">
                        Gestão Académica
                    </span>

                </div>

            </a>



            <!-- MENU -->

            <nav class="main-nav">


                <a href="#inicio" class="nav-item">
                    Início
                </a>


                <!-- PLATAFORMA -->

                <div class="dropdown">

                    <a href="#sobre" class="nav-item">

                        Plataforma

                        <span class="nav-arrow">
                            ▾
                        </span>

                    </a>


                    <div class="dropdown-menu">


                        <a href="#sobre" class="dropdown-link">

                            <div class="dropdown-icon">
                                ◈
                            </div>

                            <div class="dropdown-content">

                                <strong>
                                    Sobre o SGAO
                                </strong>

                                <span>
                                    Conheça a plataforma.
                                </span>

                            </div>

                        </a>


                        <a href="#solucoes" class="dropdown-link">

                            <div class="dropdown-icon">
                                ◫
                            </div>

                            <div class="dropdown-content">

                                <strong>
                                    Soluções
                                </strong>

                                <span>
                                    Ferramentas para a escola.
                                </span>

                            </div>

                        </a>


                        <a href="#funcionalidades" class="dropdown-link">

                            <div class="dropdown-icon">
                                ✓
                            </div>

                            <div class="dropdown-content">

                                <strong>
                                    Funcionalidades
                                </strong>

                                <span>
                                    Recursos da plataforma.
                                </span>

                            </div>

                        </a>


                    </div>

                </div>



                <!-- SOLUÇÕES -->

                <div class="dropdown">

                    <a href="#solucoes" class="nav-item">

                        Soluções

                        <span class="nav-arrow">
                            ▾
                        </span>

                    </a>


                    <div class="dropdown-menu">


                        <a href="#solucoes" class="dropdown-link">

                            <div class="dropdown-icon">
                                👨‍🎓
                            </div>

                            <div class="dropdown-content">

                                <strong>
                                    Gestão de alunos
                                </strong>

                                <span>
                                    Dados dos estudantes.
                                </span>

                            </div>

                        </a>


                        <a href="#solucoes" class="dropdown-link">

                            <div class="dropdown-icon">
                                👨‍🏫
                            </div>

                            <div class="dropdown-content">

                                <strong>
                                    Gestão de professores
                                </strong>

                                <span>
                                    Gestão da equipa pedagógica.
                                </span>

                            </div>

                        </a>


                        <a href="#solucoes" class="dropdown-link">

                            <div class="dropdown-icon">
                                🏫
                            </div>

                            <div class="dropdown-content">

                                <strong>
                                    Gestão académica
                                </strong>

                                <span>
                                    Turmas e matrículas.
                                </span>

                            </div>

                        </a>


                        <a href="#solucoes" class="dropdown-link">

                            <div class="dropdown-icon">
                                📊
                            </div>

                            <div class="dropdown-content">

                                <strong>
                                    Notas e avaliações
                                </strong>

                                <span>
                                    Acompanhamento académico.
                                </span>

                            </div>

                        </a>


                    </div>

                </div>



                <a href="#funcionalidades" class="nav-item">
                    Funcionalidades
                </a>


                <a href="#sobre" class="nav-item">
                    Sobre nós
                </a>


                <a href="#contactos" class="nav-item">
                    Contactos
                </a>


            </nav>



            <!-- ACTIONS -->

            <div class="header-actions">


                @if (Route::has('login'))

                    <a href="{{ route('login') }}"
                       class="btn-login">

                        Entrar

                    </a>

                @endif


                @if (Route::has('register'))

                    <a href="{{ route('register') }}"
                       class="btn-primary">

                        Começar agora

                    </a>

                @endif


            </div>


        </div>

    </header>



    <main>


        <!-- =====================================================
             HERO
        ====================================================== -->

        <section class="hero" id="inicio">

            <div class="container hero-grid">


                <div>


                    <div class="eyebrow">

                        <span class="eyebrow-dot"></span>

                        Plataforma de Gestão Académica

                    </div>


                    <h1>

                        Uma nova forma de

                        <span>
                            gerir a sua escola.
                        </span>

                    </h1>


                    <p class="hero-description">

                        O <strong>SGAO</strong> é um sistema SaaS
                        desenvolvido para simplificar a gestão escolar,
                        centralizando alunos, professores, turmas,
                        matrículas, avaliações, notas e frequência
                        numa única plataforma.

                    </p>


                    <div class="hero-actions">


                        @if (Route::has('login'))

                            <a href="{{ route('login') }}"
                               class="btn-primary">

                                Entrar no SGAO →

                            </a>

                        @endif


                        <a href="#sobre"
                           class="btn-outline">

                            Conhecer a plataforma

                        </a>


                    </div>


                    <div class="hero-trust">

                        ✓ Plataforma online

                        &nbsp;&nbsp; • &nbsp;&nbsp;

                        ✓ Gestão centralizada

                        &nbsp;&nbsp; • &nbsp;&nbsp;

                        ✓ Todos os níveis de ensino

                    </div>


                </div>



                <!-- DASHBOARD -->

                <div class="dashboard">


                    <div class="browser-bar">

                        <span class="browser-dot"></span>

                        <span class="browser-dot"></span>

                        <span class="browser-dot"></span>

                        <span class="browser-address">
                            www.SGAO.edu.ao/dashboard
                        </span>

                    </div>


                    <div class="dashboard-content">


                        <aside class="dashboard-sidebar">


                            <div class="dash-logo">
                                SGAO
                            </div>


                            <div class="dash-menu active">
                                Dashboard
                            </div>


                            <div class="dash-menu">
                                Alunos
                            </div>


                            <div class="dash-menu">
                                Professores
                            </div>


                            <div class="dash-menu">
                                Turmas
                            </div>


                            <div class="dash-menu">
                                Matrículas
                            </div>


                            <div class="dash-menu">
                                Avaliações
                            </div>


                            <div class="dash-menu">
                                Frequência
                            </div>


                        </aside>


                        <div class="dashboard-main">


                            <div class="dash-header">

                                <h3>
                                    Visão geral
                                </h3>

                                <span>
                                    Ano lectivo 2026
                                </span>

                            </div>


                            <div class="dash-cards">


                                <div class="dash-card">

                                    <div class="dash-card-label">
                                        Alunos
                                    </div>

                                    <div class="dash-card-value">
                                        1.248
                                    </div>

                                    <div class="dash-card-change">
                                        +8,4% este ano
                                    </div>

                                </div>


                                <div class="dash-card">

                                    <div class="dash-card-label">
                                        Professores
                                    </div>

                                    <div class="dash-card-value">
                                        86
                                    </div>

                                    <div class="dash-card-change">
                                        Equipa activa
                                    </div>

                                </div>


                                <div class="dash-card">

                                    <div class="dash-card-label">
                                        Turmas
                                    </div>

                                    <div class="dash-card-value">
                                        42
                                    </div>

                                    <div class="dash-card-change">
                                        Ano lectivo
                                    </div>

                                </div>


                            </div>


                            <div class="dash-panel">

                                <div class="dash-panel-title">
                                    Desempenho académico
                                </div>


                                <svg class="dash-chart"
                                     viewBox="0 0 500 120"
                                     preserveAspectRatio="none">

                                    <polyline
                                        points="
                                        0,100
                                        55,85
                                        110,90
                                        165,64
                                        220,72
                                        275,50
                                        330,57
                                        390,30
                                        450,43
                                        500,25
                                        "
                                    />

                                </svg>

                            </div>


                        </div>

                    </div>

                </div>


            </div>

        </section>



        <!-- =====================================================
             FEATURE STRIP
        ====================================================== -->

        <div class="feature-strip">

            <div class="container feature-strip-inner">


                <div class="strip-item">

                    <div class="strip-icon">
                        ☁
                    </div>

                    <div>

                        <strong>
                            100% Online
                        </strong>

                        <span>
                            Acesso através da internet
                        </span>

                    </div>

                </div>


                <div class="strip-item">

                    <div class="strip-icon">
                        ◈
                    </div>

                    <div>

                        <strong>
                            Gestão centralizada
                        </strong>

                        <span>
                            Tudo numa única plataforma
                        </span>

                    </div>

                </div>


                <div class="strip-item">

                    <div class="strip-icon">
                        
                    </div>

                    <div>

                        <strong>
                            Simples de utilizar
                        </strong>

                        <span>
                            Interface moderna e intuitiva
                        </span>

                    </div>

                </div>


                <div class="strip-item">

                    <div class="strip-icon">
                        
                    </div>

                    <div>

                        <strong>
                            Acesso controlado
                        </strong>

                        <span>
                            Gestão de utilizadores
                        </span>

                    </div>

                </div>


            </div>

        </div>



        <!-- =====================================================
             SOBRE
        ====================================================== -->

        <section id="sobre">

            <div class="container about-grid">


                <div class="about">


                    <div class="eyebrow">
                        Sobre o SGAO
                    </div>


                    <h2>
                        Tecnologia para uma gestão escolar mais simples.
                    </h2>


                    <p>

                        O SGAO nasce para ajudar instituições
                        de ensino a abandonar processos dispersos
                        e adoptar uma gestão mais organizada,
                        integrada e digital.

                    </p>


                    <p>

                        Como plataforma SaaS, o sistema disponibiliza
                        as ferramentas necessárias através da internet,
                        permitindo que a instituição tenha uma solução
                        centralizada para a sua gestão.

                    </p>


                    <div class="check-list">


                        <div class="check-item">

                            <div class="check">
                                ✓
                            </div>

                            Gestão de alunos e professores

                        </div>


                        <div class="check-item">

                            <div class="check">
                                ✓
                            </div>

                            Matrículas e gestão académica

                        </div>


                        <div class="check-item">

                            <div class="check">
                                ✓
                            </div>

                            Notas, avaliações e frequência

                        </div>


                        <div class="check-item">

                            <div class="check">
                                ✓
                            </div>

                            Acesso através de uma única plataforma

                        </div>


                    </div>


                </div>


                <div class="about-card">


                    <div class="about-card-icon">
                        ☁
                    </div>


                    <h3>
                        Software como Serviço para instituições de ensino.
                    </h3>


                    <p>

                        O SGAO foi pensado para acompanhar
                        diferentes instituições e níveis de ensino,
                        oferecendo uma experiência de gestão digital
                        simples, moderna e acessível.

                    </p>


                </div>


            </div>

        </section>



        <!-- =====================================================
             SOLUÇÕES
        ====================================================== -->

        <section class="solutions" id="solucoes">

            <div class="container">


                <div class="section-header">

                    <div class="eyebrow">
                        Soluções
                    </div>


                    <h2 class="section-title">
                        Tudo o que a escola precisa para gerir melhor.
                    </h2>


                    <p class="section-description">

                        O SGAO reúne os principais processos
                        académicos numa experiência única e integrada.

                    </p>

                </div>


                <div class="solutions-grid">


                    <div class="solution-card">

                     

                        <h3>
                            Alunos
                        </h3>

                        <p>

                            Centralize informações dos estudantes
                            e tenha uma visão organizada da
                            comunidade escolar.

                        </p>

                    </div>


                    <div class="solution-card">

                     

                        <h3>
                            Professores
                        </h3>

                        <p>

                            Organize os dados dos professores
                            e facilite a gestão da equipa pedagógica.

                        </p>

                    </div>


                    <div class="solution-card">

                      

                        <h3>
                            Turmas
                        </h3>

                        <p>

                            Estruture turmas, disciplinas e
                            a organização académica da instituição.

                        </p>

                    </div>


                    <div class="solution-card">

                      
                        <h3>
                            Matrículas
                        </h3>

                        <p>

                            Simplifique o processo de matrícula
                            e mantenha os dados académicos organizados.

                        </p>

                    </div>


                    <div class="solution-card">

                        

                        <h3>
                            Notas e avaliações
                        </h3>

                        <p>

                            Registe e acompanhe avaliações e
                            resultados académicos de forma centralizada.

                        </p>

                    </div>


                    <div class="solution-card">

                        

                        <h3>
                            Frequência
                        </h3>

                        <p>

                            Acompanhe a assiduidade dos alunos
                            e mantenha um histórico organizado.

                        </p>

                    </div>


                </div>


                <div class="levels">


                    <span class="level">
                        Educação Infantil
                    </span>


                    <span class="level">
                        Ensino Primário
                    </span>


                    <span class="level">
                        Ensino Secundário
                    </span>


                    <span class="level">
                        Ensino Técnico
                    </span>


                    <span class="level">
                        Ensino Superior
                    </span>


                    <span class="level">
                        Outros níveis de ensino
                    </span>


                </div>


            </div>

        </section>




        <section id="funcionalidades">

            <div class="container">


                <div class="section-header">

                    <div class="eyebrow">
                        Funcionalidades
                    </div>


                    <h2 class="section-title">
                        Uma plataforma pensada para simplificar.
                    </h2>


                    <p class="section-description">

                        Ferramentas organizadas para tornar
                        a gestão académica mais eficiente.

                    </p>

                </div>


                <div class="features-grid">


                    <div class="feature-card">

                        <div class="feature-number">
                            01
                        </div>

                        <h3>
                            Cadastro de alunos
                        </h3>

                        <p>
                            Mantenha os dados dos estudantes
                            organizados e disponíveis num único ambiente.
                        </p>

                    </div>


                    <div class="feature-card">

                        <div class="feature-number">
                            02
                        </div>

                        <h3>
                            Gestão de professores
                        </h3>

                        <p>
                            Organize informações e responsabilidades
                            dos professores da instituição.
                        </p>

                    </div>


                    <div class="feature-card">

                        <div class="feature-number">
                            03
                        </div>

                        <h3>
                            Organização de turmas
                        </h3>

                        <p>
                            Crie e organize turmas e a estrutura
                            académica da instituição.
                        </p>

                    </div>


                    <div class="feature-card">

                        <div class="feature-number">
                            04
                        </div>

                        <h3>
                            Matrículas
                        </h3>

                        <p>
                            Digitalize e centralize informações
                            relacionadas com as matrículas.
                        </p>

                    </div>


                    <div class="feature-card">

                        <div class="feature-number">
                            05
                        </div>

                        <h3>
                            Avaliações
                        </h3>

                        <p>
                            Registe avaliações e acompanhe
                            o desempenho académico dos alunos.
                        </p>

                    </div>


                    <div class="feature-card">

                        <div class="feature-number">
                            06
                        </div>

                        <h3>
                            Frequência
                        </h3>

                        <p>
                            Registe e acompanhe a frequência
                            dos estudantes durante o período lectivo.
                        </p>

                    </div>


                </div>

            </div>

        </section>



        <!-- =====================================================
             COMO FUNCIONA
        ====================================================== -->

        <section class="solutions" id="como-funciona">

            <div class="container">


                <div class="section-header">

                    <div class="eyebrow">
                        Como funciona
                    </div>


                    <h2 class="section-title">
                        Começar é simples.
                    </h2>


                    <p class="section-description">

                        O SGAO foi pensado para oferecer
                        uma experiência simples desde o primeiro acesso.

                    </p>

                </div>


                <div class="steps">


                    <div class="step">

                        <div class="step-number">
                            01
                        </div>

                        <h3>
                            Aceda à plataforma
                        </h3>

                        <p>

                            Entre no SGAO através do seu navegador
                            e aceda ao ambiente da instituição.

                        </p>

                    </div>


                    <div class="step">

                        <div class="step-number">
                            02
                        </div>

                        <h3>
                            Configure a escola
                        </h3>

                        <p>

                            Organize alunos, professores, turmas,
                            matrículas e os restantes dados académicos.

                        </p>

                    </div>


                    <div class="step">

                        <div class="step-number">
                            03
                        </div>

                        <h3>
                            Faça a gestão
                        </h3>

                        <p>

                            Utilize a plataforma diariamente para
                            acompanhar a gestão da instituição.

                        </p>

                    </div>


                </div>

            </div>

        </section>



        <!-- =====================================================
             SAAS
        ====================================================== -->

        <section class="saas-section">

            <div class="container">


                <div class="section-header">

                    <div class="eyebrow">
                        Modelo SaaS
                    </div>


                    <h2 class="section-title">
                        Uma plataforma preparada para acompanhar a escola.
                    </h2>


                    <p class="section-description">

                        O SGAO é disponibilizado como serviço,
                        permitindo uma experiência de gestão digital contínua.

                    </p>

                </div>


                <div class="saas-grid">


                    <div class="saas-box">

                        <strong>
                            Acesso online
                        </strong>

                        <span>
                            Utilize a plataforma através da internet.
                        </span>

                    </div>


                    <div class="saas-box">

                        <strong>
                            Plataforma centralizada
                        </strong>

                        <span>
                            As informações ficam reunidas num único sistema.
                        </span>

                    </div>


                    <div class="saas-box">

                        <strong>
                            Experiência moderna
                        </strong>

                        <span>
                            Interface desenvolvida para facilitar a utilização.
                        </span>

                    </div>


                    <div class="saas-box">

                        <strong>
                            Escalável
                        </strong>

                        <span>
                            Pensado para diferentes instituições e níveis.
                        </span>

                    </div>


                </div>

            </div>

        </section>



        <!-- =====================================================
             CONTACTOS / CTA
        ====================================================== -->

        <section class="cta" id="contactos">

            <div class="container">


                <div class="cta-box">


                    <div>

                        <h2>
                            Leve a gestão da sua escola para o digital.
                        </h2>


                        <p>

                            Conheça o SGAO e descubra como
                            uma plataforma SaaS pode tornar a gestão
                            académica mais simples, organizada e eficiente.

                        </p>


                        <div class="contact-info">


                            <div>

                                <strong>
                                    Telefone
                                </strong>

                                <span>
                                    957 008 342
                                </span>

                            </div>


                            <div>

                                <strong>
                                    Morada
                                </strong>

                                <span>
                                    Lobito, Compão, Cidade de Cabinda
                                </span>

                            </div>


                        </div>

                    </div>


                    @if (Route::has('login'))

                        <a href="{{ route('login') }}"
                           class="btn-white">

                            Aceder ao SGAO →

                        </a>

                    @endif


                </div>

            </div>

        </section>


    </main>



    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <footer>

        <div class="container">


            <div class="footer-grid">


                <!-- BRAND -->

                <div class="footer-brand">


                    <a href="#inicio">

                        <div class="brand-name">
                            SGA<span>O</span>
                        </div>

                    </a>


                    <p>

                        Plataforma SaaS de gestão escolar criada
                        para simplificar processos académicos e
                        ajudar instituições de ensino a gerir melhor.

                    </p>

                </div>



                <!-- PLATAFORMA -->

                <div class="footer-column">

                    <h4>
                        Plataforma
                    </h4>


                    <a href="#sobre">
                        Sobre o SGAO
                    </a>


                    <a href="#solucoes">
                        Soluções
                    </a>


                    <a href="#funcionalidades">
                        Funcionalidades
                    </a>


                    <a href="#como-funciona">
                        Como funciona
                    </a>

                </div>



                <!-- SOLUÇÕES -->

                <div class="footer-column">

                    <h4>
                        Soluções
                    </h4>


                    <a href="#solucoes">
                        Alunos
                    </a>


                    <a href="#solucoes">
                        Professores
                    </a>


                    <a href="#solucoes">
                        Turmas
                    </a>


                    <a href="#solucoes">
                        Matrículas
                    </a>


                    <a href="#solucoes">
                        Notas e avaliações
                    </a>


                    <a href="#solucoes">
                        Frequência
                    </a>

                </div>



                <!-- CONTACTOS -->

                <div class="footer-column">

                    <h4>
                        Contactos
                    </h4>


                    <a href="tel:957008342">
                        ☎ 957 008 342
                    </a>


                    <a href="#contactos">
                        Lobito, Compão
                    </a>


                    <a href="#contactos">
                        Cidade de Cabinda
                    </a>


                    @if (Route::has('login'))

                        <a href="{{ route('login') }}">
                            Entrar no sistema
                        </a>

                    @endif

                </div>


            </div>



            <!-- FOOTER BOTTOM -->

            <div class="footer-bottom">


                <span>
                    © {{ date('Y') }} SGAO.
                    Todos os direitos reservados.
                </span>


                <span>
                    Sistema SaaS de Gestão Escolar
                </span>


            </div>


        </div>

    </footer>


</body>

</html>