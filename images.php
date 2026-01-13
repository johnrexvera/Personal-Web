<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Images - John Rex F. Vera</title>
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
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 40px;
            padding-top: 20px;
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
        
        .header p {
            color: #a5d8ff;
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(51, 154, 240, 0.15);
            color: #339af0;
            padding: 12px 24px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            border: 1px solid rgba(51, 154, 240, 0.3);
            transition: all 0.3s ease;
        }
        
        .back-button:hover {
            background: rgba(51, 154, 240, 0.3);
            transform: translateY(-2px);
        }
        
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }
        
        .image-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 40, 100, 0.3);
            border: 1px solid rgba(100, 180, 255, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 300px;
        }
        
        .image-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 60, 150, 0.4);
        }
        
        .image-container {
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: #0c1a2d;
            position: relative;
        }
        
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .image-card:hover .image-container img {
            transform: scale(1.05);
        }
        
        .no-images {
            text-align: center;
            padding: 60px 20px;
            color: #a5d8ff;
            grid-column: 1 / -1;
        }
        
        .no-images i {
            font-size: 4rem;
            color: #339af0;
            margin-bottom: 20px;
        }
        
        .footer {
            text-align: center;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid rgba(100, 180, 255, 0.1);
            color: #a5d8ff;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.2rem;
            }
            
            .gallery {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }
            
            .image-card {
                height: 250px;
            }
        }
        
        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.9rem;
            }
            
            .gallery {
                grid-template-columns: 1fr;
            }
            
            .image-card {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>My Images Gallery</h1>
            <p>A collection of my favorite photos and projects</p>
            <a href="index.php" class="back-button">
                <i class="fas fa-arrow-left"></i>
                Back to Home
            </a>
        </header>
        
        <div class="gallery">
            <!-- Image 1 -->
            <div class="image-card">
                <div class="image-container">
                    <img src="assets/img/img1.jpg" alt="Web Development Project" 
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'">
                </div>
            </div>
            
            <!-- Image 2 -->
            <div class="image-card">
                <div class="image-container">
                    <img src="assets/img/img2.jpg" alt="Database Design"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1516116216624-53e697fedbea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1256&q=80'">
                </div>
            </div>
            
            <!-- Image 3 -->
            <div class="image-card">
                <div class="image-container">
                    <img src="assets/img/img3.jpg" alt="Mobile App UI Design"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80'">
                </div>
            </div>
            
            <!-- Image 4 -->
            <div class="image-card">
                <div class="image-container">
                    <img src="assets/img/img4.jpg" alt="Team Collaboration"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80'">
                </div>
            </div>
            
            <!-- Image 5 -->
            <div class="image-card">
                <div class="image-container">
                    <img src="assets/img/img5.jpg" alt="EVSU Campus"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80'">
                </div>
            </div>
            
            <!-- Image 6 -->
            <div class="image-card">
                <div class="image-container">
                    <img src="assets/img/img6.jpg" alt="Python Programming"
                         onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'">
                </div>
            </div>
        </div>
        
        <footer class="footer">
            <p>&copy; 2023 John Rex F. Vera. All rights reserved.</p>
            <p>Image Gallery - BSIT Student Portfolio</p>
        </footer>
    </div>

    <script>
        // JavaScript to handle image loading errors more gracefully
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.image-container img');
            
            images.forEach(img => {
                img.addEventListener('error', function() {
                    console.log('Image failed to load:', this.src);
                    // Keep the fallback image that's already set via onerror attribute
                });
                
                // Optional: Add loading animation
                img.addEventListener('load', function() {
                    this.style.opacity = '1';
                });
                
                img.style.opacity = '0';
                img.style.transition = 'opacity 0.3s ease';
                
                // Trigger load event in case image is already cached
                if (img.complete) {
                    img.style.opacity = '1';
                }
            });
        });
    </script>
</body>
</html>