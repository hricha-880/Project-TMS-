<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Management System - Photo Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .gallery-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 10px;
        }

        .gallery-title {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .gallery-item {
            overflow: hidden;
            position: relative;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item .caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 10px;
            text-align: center;
            font-size: 0.9rem;
            display: none;
        }

        .gallery-item:hover .caption {
            display: block;
        }

        @media (max-width: 768px) {
            .gallery-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="gallery-container">
        <h1 class="gallery-title">Travel Memories</h1>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="images/bardiya.jpg" alt="Beautiful Beach">
                <div class="caption">Beautiful Beach</div>
            </div>
            <div class="gallery-item">
                <img src="images/swayambhunath.jpg" alt="Mountain Hike">
                <div class="caption">Mountain Hike</div>
            </div>
            <div class="gallery-item">
                <img src="images/topdest3lumbi.jpg" alt="City Skyline">
                <div class="caption">City Skyline</div>
            </div>
            <div class="gallery-item">
                <img src="images/topdest1pokh.jpg" alt="Serene Lake">
                <div class="caption">Serene Lake</div>
            </div>
            <div class="gallery-item">
                <img src="images/topdest1pokh.jpg" alt="Desert Adventure">
                <div class="caption">Desert Adventure</div>
            </div>
        </div>
    </div>
</body>
</html>
