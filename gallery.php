<!DOCTYPE html>
<head>
<title>Gallery</title>
   </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:white;
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
            color: #f15173;
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
        <h1 class="gallery-title">Travel Memories of Previous Visitors</h1>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="images/Gallery/pokhara.jpg" alt="pokhara">
                <div class="caption">Pokhara</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/pokhara2.jpg" alt="pokhara">
                <div class="caption">Pokhara</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/pokhara3.jpg" alt="pokhara">
                <div class="caption">Pokhara</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/pokhara4.jpg" alt="pokhara">
                <div class="caption">Pokhara</div>
            </div>
            <div class="gallery-item">
                <img src="images/topdest1pokh.jpg" alt="pokhara">
                <div class="caption">Pokhara</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/annapurna.jpg" alt="annapurna">
                <div class="caption">Annapurna</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/annapurna2.jpg" alt="annapurna">
                <div class="caption">Annapurna</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/tamang.jpg" alt="tamang">
                <div class="caption">Tamang</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/tamang2.jpg" alt="tamang">
                <div class="caption">Tamang</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/tamang3.jpg" alt="tamang">
                <div class="caption">Tamang</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/chitwan.jpg" alt="chitwan">
                <div class="caption">Chitwan</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/chitwan2.jpg" alt="chitwan">
                <div class="caption">Chitwan</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/chitwan3.jpg" alt="chitwan">
                <div class="caption">Chitwan</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/chitwan4.jpg" alt="chitwan">
                <div class="caption">Chitwan</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/chitwan5.jpg" alt="chitwan">
                <div class="caption">Chitwan</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/chitwan6.jpg" alt="chitwan">
                <div class="caption">Chitwan</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/khopra.jpg" alt="khopra">
                <div class="caption">Khopra</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/khopra2.jpg" alt="khopra">
                <div class="caption">Khopra</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/mardi.jpg" alt="mardi">
                <div class="caption">Mardi</div>
            </div>

            <div class="gallery-item">
                <img src="images/Gallery/mardi2.jpg" alt="mardi">
                <div class="caption">Mardi</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/mardi3.jpg" alt="mardi">
                <div class="caption">Mardi</div>
            </div>
            <div class="gallery-item">
                <img src="images/Gallery/mardi4.jpg" alt="mardi">
                <div class="caption">Mardi</div>
            </div>
        </div>
    </div>
</body>
</html>
