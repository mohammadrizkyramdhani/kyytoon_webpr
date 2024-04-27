<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>KyyToon</title>
    <link rel="stylesheet" href="styles_ds.css">
</head>
<body>
<div class="container">

        
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">=</button>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">KyyToon</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="sidebar" id="sidebar">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="index.php">Upload Karya</a></li>
            <li> <a href="profil.php">Profil</a></li>
        </div>
        </div>
        
        </div>
            <div class="content" id="content">
            <h3>Dashboard</h3>
            <h1>Selamat Datang KyyToon-ers!</h1>
            
                <div class="comic-container" >
                    <div class="comic">
                        <img src="assets/cover dd.png" alt="Comic 1">
                        <h4>Dream Dimensions</h4>
                        <ul class="comic-info">
                            <li><i class="fa-solid fa-at"></i> Nan Kyyme</li>
                            <li><i class="fas fa-certificate"></i> Mystery</li>
                            <li><i class="fas fa-calendar-alt"></i> August 12, 2024</li>
                        </ul>
                        <button class="read-btn">Baca</button>
                    </div>



                    <div class="comic">
                        <img src="assets/cover pd.jpg" alt="Comic 2">
                        <h4>Diverse Personality</h4>
                        <ul class="comic-info">
                            <li><i class="fa-solid fa-at"></i> Nan Kyyme</li>
                            <li><i class="fas fa-certificate"></i>Romance</li>
                            <li><i class="fas fa-calendar-alt"></i> September 3, 2023</li>
                        </ul>
                        <button class="read-btn">Baca</button>
                    </div>

                    <div class="comic">
                        <img src="assets/cover sk.jpg" alt="Comic 3">
                        <h4>Sakamoto Days
                        </h4>
                        <ul class="comic-info">
                            <li><i class="fa-solid fa-at"></i> John Doe</li>
                            <li><i class="fas fa-certificate"></i> Ongoing</li>
                            <li><i class="fas fa-calendar-alt"></i> January 1, 2024</li>
                        </ul>
                        <button class="read-btn">Baca</button>
                    </div>

                    <div class="comic">
                        <img src="assets/cover km.jpg" alt="Comic 4">
                        <h4>Komi Can't Communicate</h4>
                        <ul class="comic-info">
                            <li><i class="fa-solid fa-at"></i> John Doe</li>
                            <li><i class="fas fa-certificate"></i> Ongoing</li>
                            <li><i class="fas fa-calendar-alt"></i> January 1, 2024</li>
                        </ul>
                        <button class="read-btn">Baca</button>
                    </div>

                    <div class="comic">
                        <img src="assets/cover or.jpg" alt="Comic 5">
                        <h4>My Teen Romantic Comedy SNAFU</h4>
                        <ul class="comic-info">
                            <li><i class="fa-solid fa-at"></i> Wataru Watari</li>
                            <li><i class="fas fa-certificate"></i> Romance</li>
                            <li><i class="fas fa-calendar-alt"></i> Maret 18, 2011</li>
                        </ul>
                        <button class="read-btn">Baca</button>
                    </div>

                    <div class="comic">
                        <img src="assets/cover gi.jpg" alt="Comic 6">
                        <h4>Genshin Impact</h4>
                        <ul class="comic-info">
                            <li><i class="fa-solid fa-at"></i> David Jiang</li>
                            <li><i class="fas fa-certificate"></i> Fantasy</li>
                            <li><i class="fas fa-calendar-alt"></i> September 28, 2020</li>
                        </ul>
                        <button class="read-btn">Baca</button>
                    </div>

                    <div class="comic">
                        <img src="assets/cover nr.jpg" alt="Comic 7">
                        <h4>Naruto</h4>
                        <ul class="comic-info">
                            <li><i class="fa-solid fa-at"></i> Masashi Kishimoto</li>
                            <li><i class="fas fa-certificate"></i> Fantasy</li>
                            <li><i class="fas fa-calendar-alt"></i> September 1, 2004</li>
                        </ul>
                        <button class="read-btn">Baca</button>
                    </div>

                    <div class="comic">
                        <img src="assets/cover ds.jpg" alt="Comic 8">
                        <h4>Demon Slayer</h4>
                        <ul class="comic-info">
                            <li><i class="fa-solid fa-at"></i> Koyoharu Gotoge</li>
                            <li><i class="fas fa-certificate"></i> Fantasy</li>
                            <li><i class="fas fa-calendar-alt"></i> February 15, 2016</li>
                        </ul>
                        <button class="read-btn">Baca</button>
                    </div>
                </div>
        </div>
    
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/1eca64e1a9.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>   
</body>
</html>