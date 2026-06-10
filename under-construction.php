<?php
// Service Suspension Notice for Silver Palace
// This page is active due to non-payment for development and social media services.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Suspended | Silver Palace</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #ff4757;
            --primary-dark: #ee5253;
            --accent: #fbc531;
            --dark: #0c0d10;
            --card-bg: rgba(20, 21, 26, 0.8);
            --text-main: #f1f2f6;
            --text-dim: #a4b0be;
            --font-sans: 'Outfit', sans-serif;
            --font-serif: 'Playfair Display', serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--dark);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            overflow-x: hidden;
            background: radial-gradient(circle at center, #1e1f26 0%, #0c0d10 100%);
        }

        .background-animated {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            opacity: 0.1;
            pointer-events: none;
        }

        .content-wrapper {
            position: relative;
            z-index: 10;
            max-width: 900px;
            width: 100%;
            animation: slideUp 1s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .main-card {
            background: var(--card-bg);
            backdrop-filter: blur(25px);
            border: 1px solid rgba(255, 71, 87, 0.2);
            border-radius: 40px;
            padding: 60px;
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.8), inset 0 0 20px rgba(255, 71, 87, 0.05);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .main-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--accent), var(--primary));
            background-size: 200% 100%;
            animation: gradientMove 3s linear infinite;
        }

        .status-header {
            margin-bottom: 40px;
        }

        .alert-icon {
            font-size: 4rem;
            color: var(--primary);
            margin-bottom: 20px;
            filter: drop-shadow(0 0 15px rgba(255, 71, 87, 0.4));
            animation: pulseIcon 2s infinite;
        }

        .status-badge {
            display: inline-block;
            padding: 8px 24px;
            background: rgba(255, 71, 87, 0.15);
            border: 1px solid var(--primary);
            color: var(--primary);
            border-radius: 100px;
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        h1 {
            font-family: var(--font-serif);
            font-size: 3.5rem;
            line-height: 1.1;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #ffffff 0%, #a4b0be 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .statement {
            font-size: 1.2rem;
            color: var(--text-dim);
            line-height: 1.8;
            margin-bottom: 50px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .dispute-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 50px;
            text-align: left;
        }

        .profile-box {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 24px;
            padding: 30px;
            transition: transform 0.3s ease;
        }

        .profile-box:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.1);
        }

        .profile-label {
            color: var(--accent);
            font-size: 0.8rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
            display: block;
        }

        .profile-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            background: #25262e;
            object-fit: cover;
            border: 2px solid rgba(255, 255, 255, 0.1);
        }

        .profile-details h3 {
            font-size: 1.3rem;
            margin-bottom: 5px;
            color: #fff;
        }

        .profile-details p {
            font-size: 0.9rem;
            color: var(--text-dim);
        }

        .payment-status {
            background: rgba(255, 71, 87, 0.1);
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 40px;
            border-left: 5px solid var(--primary);
        }

        .payment-status p {
            font-size: 1.1rem;
            font-weight: 600;
            color: #ff8e98;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .btn {
            padding: 16px 35px;
            border-radius: 100px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--primary);
            color: #fff;
            box-shadow: 0 10px 30px rgba(255, 71, 87, 0.3);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(255, 71, 87, 0.4);
        }

        .footer-note {
            margin-top: 40px;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.3);
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            100% { background-position: 200% 50%; }
        }

        @keyframes pulseIcon {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.7; }
            100% { transform: scale(1); opacity: 1; }
        }

        @media (max-width: 768px) {
            .dispute-grid { grid-template-columns: 1fr; }
            h1 { font-size: 2.2rem; }
            .main-card { padding: 40px 20px; }
        }

        /* Image Modal Styles */
        .image-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.95);
            backdrop-filter: blur(15px);
            cursor: zoom-out;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease;
        }

        .modal-content {
            max-width: 90%;
            max-height: 85vh;
            border-radius: 20px;
            box-shadow: 0 0 60px rgba(0,0,0,0.8);
            border: 2px solid rgba(255, 255, 255, 0.1);
            animation: zoomIn 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .close-modal {
            position: absolute;
            top: 30px;
            right: 40px;
            color: #fff;
            font-size: 35px;
            transition: 0.3s;
            cursor: pointer;
            opacity: 0.5;
        }

        .close-modal:hover {
            opacity: 1;
            color: var(--primary);
            transform: rotate(90deg);
        }

        @keyframes zoomIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="background-animated">
        <!-- SVG or pattern can go here -->
    </div>

    <div class="content-wrapper">
        <div class="main-card">
            <div class="status-header">
                <div class="alert-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="status-badge">Payment Overdue</div>
                <h1>Service Temporarily Suspended</h1>
            </div>

            <p class="statement">
                This website, <strong>www.silverpalacebh.com</strong>, and its associated digital platforms have been administrativey suspended due to the failure of the owner to settle outstanding invoices for professional development and marketing services.
            </p>

            <div class="dispute-grid">
                <!-- Developer Info -->
                <div class="profile-box">
                    <span class="profile-label">Software Developer</span>
                    <div class="profile-info">
                        <div class="profile-img">
                            <i class="fas fa-code" style="font-size: 2rem; display: flex; align-items: center; justify-content: center; height: 100%; color: #57606f;"></i>
                        </div>
                        <div class="profile-details">
                            <h3>Haroon</h3>
                            <p>Lead Developer & Social Media Manager</p>
                        </div>
                    </div>
                </div>

                <!-- Owner Info -->
                <div class="profile-box">
                    <span class="profile-label">Client / Business Owner</span>
                    <div class="profile-info">
                        <img src="assets/images/owner.jpg" alt="M Mansha Shan" class="profile-img" onclick="openImageModal(this)" style="cursor: zoom-in; border-color: var(--accent);" onerror="this.innerHTML='<i class=\'fas fa-user-tie\'></i>'; this.type='span';">
                        <div class="profile-details">
                            <h3>M Mansha Shan (CEO)</h3>
                            <p>Silver Palace, Hamad Town, Bahrain</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="payment-status">
                <p><i class="far fa-clock"></i> Status: Payment pending for over 3 months</p>
                <p style="font-size: 0.9rem; color: var(--text-dim); margin-top: 5px; font-weight: normal;">Daily follow-ups have been non-responsive regarding the settlement of dues.</p>
            </div>

            <div class="actions">
                <a href="tel:+923455641907" class="btn btn-primary"><i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call Administration</a>
            </div>

            <div class="footer-note">
                &copy; <?php echo date('Y'); ?> Service Suspension Notice. Full functionality will be restored immediately upon payment of the agreed-upon dues.
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="imgModal" class="image-modal" onclick="closeModal()">
        <span class="close-modal">&times;</span>
        <img class="modal-content" id="modalImg">
    </div>

    <script>
        function openImageModal(img) {
            const modal = document.getElementById("imgModal");
            const modalImg = document.getElementById("modalImg");
            modal.style.display = "flex";
            modalImg.src = img.src;
        }

        function closeModal() {
            document.getElementById("imgModal").style.display = "none";
        }

        // Close on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === "Escape") closeModal();
        });
    </script>
</body>
</html>

