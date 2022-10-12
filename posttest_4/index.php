<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest4</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <input type="checkbox" id="check">
    <nav>
        <div class="icon">Betta <b style="color:rgb(255, 0, 0)">F</b>ish</div>
        <div class="search_box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" class="input" placeholder="Search...">
        </div>
        <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="AboutMe.php">About Me</a></li>
            <li><a href="Form.php">Add Fish</a></li>
        </ol>
        <div class="tipe">
            <button class="dark-mode" onclick="myFunction()">Mode</button>
            <i class="bi bi-brightness-high-fill" id="toggleDark"></i>
        </div>
        <!-- <script src="javascript.js"></script> -->
    </nav>
    <main>
        <div class="gambar">
            <img src="Betta.jpg" alt="ini gambar">
        </div>
        <div class="headercontent">
            <h3>Product</h3>
            <button class="tombol" onclick="myFunction1()">Tampilkan</button>
            <!-- <i class="bi bi-brightness-high-fill" id="toggleDark"></i> -->
        </div>
        <div class="content" style="display: none;" id="product">
            <div class="card">
                <div class="img">
                    <img src="Betta1.jpg" alt="Bluerim" width="253px">
                    <p>Betta Bluerim</p>
                    <h5>Rp. 200.000</h5>
                </div>
            </div>
    
            <div class="card">
                <div class="img">
                    <img src="Betta2.jpg" alt="Multicolor" width="165px">
                    <p>Betta Multicolor</p>
                    <h5>Rp 150.000</h5>
                </div>
            </div>

            <div class="card">
                <div class="img">
                    <img src="Betta3.jpg" alt="Black Samurai" width="143px">
                    <p>Betta Black Samurai</p>
                    <h5>Rp 250.000</h5>
                </div>
            </div>

            <div class="card">
                <div class="img">
                    <img src="Betta4.jpg" alt="Halfmoon" width="255px">
                    <p>Betta Halfmoon</p>
                    <h5>Rp 100.000</h5>
                </div>
            </div>
        </div>
    </main> 
    <footer>
        <p>@Copyright 2022<br>
        <a>by- Rahmad Ramadhan</a></p>
    </footer>
    <script src="javascript.js"></script>
</body>
</html>