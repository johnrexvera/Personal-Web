<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John Rex F. Vera - BSIT Student</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #0c1a2d 0%, #0f2d4e 100%);
            color: #f0f8ff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
        }
        
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .header h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(to right, #4dabf7, #339af0);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: 1px;
        }
        
        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 60px;
            margin-bottom: 50px;
        }
        
        .profile-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            padding: 40px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 15px 35px rgba(0, 40, 100, 0.3);
            border: 1px solid rgba(100, 180, 255, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .profile-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 60, 150, 0.4);
        }
        
        .photo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        
        .profile-photo {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            object-fit: cover;
            border: 6px solid;
            border-image: linear-gradient(135deg, #339af0, #1864ab) 1;
            box-shadow: 0 10px 25px rgba(51, 154, 240, 0.3);
            background-color: #0c1a2d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
            color: #4dabf7;
            overflow: hidden;
        }
        
        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .profile-photo i {
            margin-top: 10px;
        }
        
        .info-container {
            text-align: center;
        }
        
        .name {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: #ffffff;
            letter-spacing: 0.5px;
        }
        
        .title {
            font-size: 1.3rem;
            color: #74c0fc;
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        .subtitle {
            font-size: 1.1rem;
            color: #a5d8ff;
            margin-bottom: 25px;
            font-weight: 500;
        }
        
        .university {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(51, 154, 240, 0.15);
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 600;
            color: #339af0;
            border: 1px solid rgba(51, 154, 240, 0.3);
        }
        
        .university i {
            font-size: 1.2rem;
        }
        
        .details-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            padding: 40px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 15px 35px rgba(0, 40, 100, 0.3);
            border: 1px solid rgba(100, 180, 255, 0.1);
        }
        
        .section-title {
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: #ffffff;
            position: relative;
            padding-bottom: 10px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, #339af0, #1864ab);
            border-radius: 3px;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(100, 180, 255, 0.1);
        }
        
        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .info-icon {
            width: 50px;
            height: 50px;
            background: rgba(51, 154, 240, 0.15);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: #339af0;
            font-size: 1.3rem;
        }
        
        .info-text h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: #ffffff;
        }
        
        .info-text p {
            color: #a5d8ff;
            font-size: 1rem;
        }
        
        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
        
        .skill {
            background: rgba(51, 154, 240, 0.15);
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.9rem;
            color: #339af0;
            border: 1px solid rgba(51, 154, 240, 0.3);
        }
        
        /* Navigation Buttons */
        .nav-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        
        .nav-button {
            background: linear-gradient(135deg, #339af0, #1864ab);
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            box-shadow: 0 6px 15px rgba(51, 154, 240, 0.3);
        }
        
        .nav-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(51, 154, 240, 0.4);
            background: linear-gradient(135deg, #4dabf7, #1c7ed6);
        }
        
        .nav-button i {
            font-size: 1.2rem;
        }
        
        /* Footer */
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid rgba(100, 180, 255, 0.1);
            width: 100%;
            max-width: 1000px;
            color: #a5d8ff;
        }
        
        .footer-content {
            padding: 0 40px;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        
        .social-link {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(51, 154, 240, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #339af0;
            font-size: 1.3rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(51, 154, 240, 0.3);
            text-decoration: none;
        }
        
        .social-link:hover {
            background: #339af0;
            color: #0c1a2d;
            transform: translateY(-5px);
        }
        
        @media (max-width: 992px) {
            .main-content {
                gap: 40px;
            }
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.2rem;
            }
            
            .profile-card, .details-card {
                padding: 30px 25px;
            }
            
            .name {
                font-size: 1.9rem;
            }
            
            .profile-photo {
                width: 180px;
                height: 180px;
                font-size: 4rem;
            }
            
            .nav-button {
                padding: 12px 24px;
                font-size: 0.95rem;
            }
            
            .footer-content {
                padding: 0 30px;
            }
        }
        
        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.9rem;
            }
            
            .profile-photo {
                width: 150px;
                height: 150px;
                font-size: 3.5rem;
            }
            
            .name {
                font-size: 1.7rem;
            }
            
            .info-item {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .info-icon {
                margin-bottom: 15px;
                margin-right: 0;
            }
            
            .nav-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .nav-button {
                width: 100%;
                max-width: 250px;
                justify-content: center;
            }
            
            .footer-content {
                padding: 0 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Personal Web Application</h1>
        </header>
        
        <main class="main-content">
            <div class="profile-card">
                <div class="photo-container">
                    <div class="profile-photo">
                        <img src="assets/img/profile.jpg" alt="John Rex F. Vera">
                    </div>
                </div>
                
                <div class="info-container">
                    <h2 class="name">John Rex F. Vera</h2>
                    <p class="title">2D • BSIT STUDENT</p>
                    <p class="subtitle">Bachelor of Science in Information Technology</p>
                    
                    <div class="university">
                        <i class="fas fa-university"></i>
                        <span>Eastern Visayas State University (EVSU)</span>
                    </div>
                </div>
            </div>
            
            <div class="details-card">
                <h2 class="section-title">About Me</h2>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="info-text">
                        <h3>Education</h3>
                        <p>Currently pursuing Bachelor of Science in Information Technology at Eastern Visayas State University (EVSU). Focused on software development, web technologies, and database management.</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="info-text">
                        <h3>Technical Skills</h3>
                        <div class="skills-container">
                            <span class="skill">HTML/CSS</span>
                            <span class="skill">JavaScript</span>
                            <span class="skill">Python</span>
                            <span class="skill">Java</span>
                            <span class="skill">PHP</span>
                            <span class="skill">MySQL</span>
                            <span class="skill">React</span>
                            <span class="skill">UI/UX Design</span>
                        </div>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <div class="info-text">
                        <h3>Career Objective</h3>
                        <p>Aspiring to become a full-stack developer with expertise in modern web technologies. Passionate about creating efficient, user-friendly applications that solve real-world problems.</p>
                    </div>
                </div>
            </div>
        </main>
        
        <!-- Navigation Buttons -->
        <div class="nav-buttons">
            <a href="images.php" class="nav-button">
                <i class="fas fa-images"></i>
                View My Images
            </a>
            <a href="projects.html" class="nav-button">
                <i class="fas fa-code-branch"></i>
                View Projects
            </a>
        </div>
        
        <!-- Footer -->
       
    </div>

    <script>
        // Add interactivity to profile photo
        const profilePhoto = document.querySelector('.profile-photo');
        
        profilePhoto.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        profilePhoto.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
        
        // Add animation to skill tags
        document.querySelectorAll('.skill').forEach(skill => {
            skill.addEventListener('mouseenter', function() {
                this.style.backgroundColor = 'rgba(51, 154, 240, 0.3)';
                this.style.transform = 'translateY(-3px)';
            });
            
            skill.addEventListener('mouseleave', function() {
                this.style.backgroundColor = 'rgba(51, 154, 240, 0.15)';
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Check if image loaded successfully
        window.addEventListener('load', function() {
            const profileImg = document.querySelector('.profile-photo img');
            if (profileImg && profileImg.complete && profileImg.naturalHeight === 0) {
                // Image failed to load, show fallback icon
                profileImg.style.display = 'none';
                profilePhoto.innerHTML = '<i class="fas fa-user"></i>';
            }
        });
    </script>
</body>
</html>