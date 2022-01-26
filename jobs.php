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

    <div class="container my-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#allCategory" type="button" role="tab" aria-controls="home" aria-selected="true">All Category</button>
            </li>
        </ul>
        <div class="tab-content my-5" id="myTabContent">
            <div class="tab-pane fade show active" id="allCategory" role="tabpanel" aria-labelledby="home-tab">



                <div class="card my-1" style="display:inline-block;">
                    <div class="card-body">
                        <h5 class="card-title">Nurse</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Nursing Management and Child Care</h6>
                        <p class="card-text">Located in Loretteville, the Jardins Katerina residence, managed by</p>
                        <a href="job-details.php?id=4" class="card-link text-reset">View Job</a>
                        <a href="apply.php" class="card-link text-reset">Apply</a>
                    </div>
                </div>

                <div class="card my-1" style="display:inline-block;">
                    <div class="card-body">
                        <h5 class="card-title">Packing Manager</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Food packing</h6>
                        <p class="card-text">Food packaging lies at the very heart of the modern food industry a</p>
                        <a href="job-details.php?id=5" class="card-link text-reset">View Job</a>
                        <a href="apply.php" class="card-link text-reset">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    include("assets/includes/footer.php");
    ?>
</body>

</html>