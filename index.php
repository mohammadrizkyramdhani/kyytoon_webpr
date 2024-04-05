<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KyyToon</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="container">
        <div class="sidebar" id="sidebar">
        <div class="menu-toggle" id="menu-toggle">&#9776;</div>
        <h2>KyyToon</h2>
        <ul class="menu">
        <li><a href="#" id="dashboard-link">Dashboard</a></li>
        <li><a href="#" id="author-link">Upload Karya</a></li>
        <li><a href="#" id="karya-link">Karyaku</a></li>
        </ul>
        <button class="logout-btn">Logout</button>
        </div>
            <div class="content" id="content">
            <h3>Dashboard</h3>
            <h1>Selamat Datang KyyToon-ers!</h1>
            <!-- <button class="logout-btn">Logout</button> -->
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

                <div id="author-content" class="author-content" style="display: none;"> <!-- Konten Author -->
                    <h3>Upload Karya</h3>
                    <h1> Mau Upload Komik, KyyToon-ers?</h1>
                    <button class="up-btn">+ Upload Komik</button>
                    <table>
                        <thead>
                        <tr>
                            <th>User ID</th>
                            <th>No HP</th>
                            <th>Author</th>
                            <th>Genre</th>
                            <th>Buat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Isi tabel disini -->
                        <tr>
                            <td>1</td>
                            <td>089697068777</td>
                            <td>Nan Kyyme</td>
                            <td>Mystery</td>
                            <td>
                            <button>Edit</button>
                            <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>089697068777</td>
                            <td>Nan Kyyme</td>
                            <td>Romance</td>
                            <td>
                            <button>Edit</button>
                            <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>088697068777</td>
                            <td>Nan Kyyme</td>
                            <td>Horror</td>
                            <td>
                            <button>Edit</button>
                            <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>089697068777</td>
                            <td>Nan Kyyme</td>
                            <td>Horror</td>
                            <td>
                            <button>Edit</button>
                            <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>089697068777</td>
                            <td>Nan Kyyme</td>
                            <td>Slice Of Life</td>
                            <td>
                            <button>Edit</button>
                            <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>089697068777</td>
                            <td>Nan Kyyme</td>
                            <td>Action</td>
                            <td>
                            <button>Edit</button>
                            <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>089697068777</td>
                            <td>Nan Kyyme</td>
                            <td>Romance</td>
                            <td>
                            <button>Edit</button>
                            <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>089697068777</td>
                            <td>Nan Kyyme</td>
                            <td>Drama</td>
                            <td>
                            <button>Edit</button>
                            <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>089697068777</td>
                            <td>Nan Kyyme</td>
                            <td>Drama</td>
                            <td>
                            <button>Edit</button>
                            <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>089697068777</td>
                            <td>Nan Kyyme</td>
                            <td>Fantasy</td>
                            <td>
                            <button>Edit</button>
                            <button>Delete</button>
                            </td>
                        </tr>
                        
                        <!-- Contoh data, Anda dapat menambahkan data sesuai kebutuhan -->
                        </tbody>
                    </table>
                  
                </div>
                
                <div id="karya-content" class="karya-content" style="display: none;"> <!-- Konten Karyaku -->
                    <h3>Karya ku</h3>
                    <div class="comic-container" >
                        <div class="comic">
                            <img src="assets/cover dd.png" alt="Comic 1">
                            <h4>Dream Dimensions</h4>
                            <ul class="comic-info">
                                <li><i class="fa-solid fa-at"></i> Nan Kyyme</li>
                                <li><i class="fas fa-certificate"></i> Mystery</li>
                                <li><i class="fas fa-calendar-alt"></i> August 12, 2023</li>
                            </ul>
                            <button class="read-btn">Insight</button>
                        </div>



                        <div class="comic">
                            <img src="assets/cover pd.jpg" alt="Comic 2">
                            <h4>Diverse Personality</h4>
                            <ul class="comic-info">
                                <li><i class="fa-solid fa-at"></i>Nan Kyyme</li>
                                <li><i class="fas fa-certificate"></i> Romance</li>
                                <li><i class="fas fa-calendar-alt"></i> September 3, 2023</li>
                            </ul>
                            <button class="read-btn">Insight</button>
                        </div>
                    </div>
                </div>
    </div>
  <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/1eca64e1a9.js" crossorigin="anonymous"></script>
</body>
</html>
