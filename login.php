<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- //google-fonts -->

    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">

</head>

<body>
<section class="w3l-contacts-12">
    <div class="contact-top pt-5">
        <div class="container py-lg-5 py-2">
            <div class="title-heading-w3 mx-auto text-center mb-sm-5 mb-4">
                <h3 class="w3l-title-main">Halaman Login</h3>
            </div>
            <div class="d-grid cont-main-top">
                <!-- contact form -->
                <div class="contacts12-main">
                    <form action="proses_login.php" method="post" class="main-input">
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="Username" name="username" id="w3lName" required="">
                            <input type="password" name="password" placeholder="Password" id="w3lSender" required="">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btn-style">Login</button>
                        </div>
                    </form>
                    <p>Belum punya akun? <a href="register.php">Register</a> sekarang</p>
                </div>
                <!-- //contact form -->
            </div>
        </div>
        <!-- //map -->
    </div>
</section>
<!-- //contact -->
</body>
</html>
