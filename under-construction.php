<?php
// Under Construction Page for Silver Palace
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Construction | Silver Palace</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #3b82f6;
            --primary-dark: #2563eb;
            --secondary: #f59e0b;
            --dark: #0f172a;
            --white: #ffffff;
            --font-sans: 'Outfit', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--dark);
            color: var(--white);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: url('assets/img/under-construction.png') center/cover no-repeat;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.85) 0%, rgba(15, 23, 42, 0.4) 100%);
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 40px;
            max-width: 800px;
            width: 90%;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1.5s ease-out;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 30px;
            letter-spacing: -1px;
        }

        .logo span {
            color: var(--primary);
        }

        .logo i {
            color: var(--secondary);
            margin-right: 10px;
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            background: linear-gradient(to right, #ffffff, #94a3b8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 20px;
            background: rgba(59, 130, 246, 0.2);
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 50px;
            color: var(--primary);
            font-weight: 600;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .status-badge i {
            animation: pulse 2s infinite;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }

        .social-links a {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.25rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-5px);
            border-color: var(--primary);
            box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
        }

        .footer-text {
            position: absolute;
            bottom: 30px;
            left: 0;
            width: 100%;
            text-align: center;
            color: rgba(255, 255, 255, 0.4);
            font-size: 0.875rem;
            z-index: 2;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.2); }
            100% { opacity: 1; transform: scale(1); }
        }

        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            p { font-size: 1.1rem; }
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    
    <div class="content">
        <div class="status-badge">
            <i class="fas fa-circle"></i> SITE PROGRESS: 85%
        </div>
        
        <div class="logo">
            <i class="fas fa-h-square"></i>SILVER <span>PALACE</span>
        </div>
        
        <h1>Something Remarkable is Coming Soon</h1>
        
        <p>We're currently refining our digital experience to better serve your needs in documentation, construction, and cleaning services. Stay tuned for our grand reveal.</p>
        
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>

    <div class="footer-text">
        &copy; <?php echo date('Y'); ?> Silver Palace. All rights reserved.
    </div>
</body>
</html>
