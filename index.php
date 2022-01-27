<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bikegiks: Home</title>
    <?php
    include("assets/includes/links.php");
    ?>
</head>

<body>
    <?php
    include("assets/includes/header.php");
    ?>
    <!-- Hero Menu -->
    <div class="container col-xxl-12 px-4 py-2">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-12 col-sm-12 col-lg-7">
                <img src="assets\images\dominar-d400.png" class="d-block mx-lg-auto img-fluid" loading="lazy" style="width:100%">
            </div>
            <div class="col-lg-5">
                <h1 class="display-5 fw-bold lh-1 mb-3">One step towards your better future</h1>
                <p class="lead">
                    You are yet on the single platform for all your checklists for processing your visa application, tests, counseling, onboarding process, and assisting services since 2013.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="news.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">News</button></a>
                    <a href="announcement.php"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Announcement</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Menu -->

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets\images\rx1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>Royal Enfield</h3>
                    <p>Adventure Touring, Motorcycle!</p>
                </div>
            </div> 
            <div class="carousel-item">
                <img src="assets\images\himalayan-right-front-three-quarter.jpeg" alt="Chicago" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>Royal Enfield</h3>
                    <p>Adventure Touring, Motorcycle!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets\images\himalayan-left-front-three-quarter.jpeg" alt="New York" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>Royal Enfield</h3>
                    <p>Adventure Touring, Motorcycle!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- News -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 my-5">
                <h1 class="text-primary">Trending News</h1>
                <hr class="col-4 p-1 bg-success">
            </div>

            <div class="col-md-6">
                <a class="news text-reset" href="full-news.php?id=16" style="text-decoration:none;" target="_blank">
                    <h2 class="text-dark">Nepal Bars Entry for South Africans</h2>
                    <p class="text-secondary">Posted on: <date>2022-01-21</date>
                        <hr />
                    </p>
                </a>
            </div>

            <div class="col-md-6">
                <a class="news text-reset" href="full-news.php?id=14" style="text-decoration:none;" target="_blank">
                    <h2 class="text-dark">UK Eases Travel Rules for Nepalis.</h2>
                    <p class="text-secondary">Posted on: <date>2022-01-19</date>
                        <hr />
                    </p>
                </a>
            </div>

            <div class="col-md-6">
                <a class="news text-reset" href="full-news.php?id=13" style="text-decoration:none;" target="_blank">
                    <h2 class="text-dark">World Bank Agrees �NPR 7.12 Bn Loan� for Improving Nepal�s Higher Education!</h2>
                    <p class="text-secondary">Posted on: <date>2022-01-18</date>
                        <hr />
                    </p>
                </a>
            </div>

            <div class="col-md-6">
                <a class="news text-reset" href="full-news.php?id=12" style="text-decoration:none;" target="_blank">
                    <h2 class="text-dark">Traveling to Dubai during Covid-19: What you need to know before you go</h2>
                    <p class="text-secondary">Posted on: <date>2022-01-12</date>
                        <hr />
                    </p>
                </a>
            </div>
        </div>
    </div>
    <!-- News -->


    <?php
    include("assets/includes/footer.php");
    ?>
</body>

</html>