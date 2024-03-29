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
<!-- yutr -->
    <!-- Populr Brand -->
    <?php
        include("assets/includes/popularBrand.php");
    ?>

    <!-- News -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 my-5">
                <h1 class="text-primary">Trending News</h1>
                <hr class="col-4 p-1 bg-success">
            </div>

            <div class="col-md-6">
                <a class="news text-reset" href="full-news.php?id=16" style="text-decoration:none;" target="_blank">
                    <h2 class="text-dark">Upcoming bikes launching in 2022</h2>
                    <p class="text-secondary">By BIkegiks: <date>January 27, 2022</date>
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
