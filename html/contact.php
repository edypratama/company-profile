<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b5d5371b3c.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="navbar">
        <div class="navbar-logo">
            <h1 class="text-logo">
                <h1 class="d">Edy</h1>
                <h1>Studio</h1>
            </h1>
            <div class="gambar">
                <img src="../media/robot.png" alt="">
            </div>
        </div>

        <input type="checkbox" id="toggler">
        <label for="toggler"><i class="fa-solid fa-bars"></i></label>

        <div class="hamburger">
            <ul class="list">
                <li><a href="../html/index.html">Home</a></li>
                <li><a href="../html/Layanan.html">Services</a> </li>
                <li><a href="../html/Porofolio.html">Portofolio</a> </li>
                <li><a href="../html/contact.html">Contact</a> </li>
                <li><a href="../html/about.html">About</a> </li>
        </div>
    </div>

    <section id="contact" class="contact">

        <h2 class="title">Contact</h2>


        <div class="row">
            <div class="form-container">
                <form method="POST" action="submit.php">

                    <input class="name" name="nama_depan" type="text" placeholder="first name">
                    <input class="name" name="nama_belakang" type="text" placeholder="last name">
                    
                    <input class="email" name="email" type="email" placeholder="email" required>
                    <textarea class="masage" name="pesan" id="" placeholder="message"></textarea>
                    <button class="submit" name="submit" type="submit">Send</button>

                </form>
            </div>
        </div>
    </section>

    <div class="footer">
        <div class="navigasi">
            <div class="search">
                <a class="a2" href="../html/index.html">Home</a>
                <a class="a2" href="../html/Layanan.html">Services</a>
                <a class="a2" href="../html/Porofolio.html">Portofolio</a>
                <a class="a2" href="../html/contact.html">Contact</a>
                <a class="a2" href="../html/about.html">About</a>
            </div>
            <div class="sosial-media">
                <p>Social Media</p>
                <div class="icons">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-whatsapp"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&#169; Copyright 2022 Edy Pratama</p>
    </div>

</body>

</html>