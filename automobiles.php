<?php
include("assets/db/db_conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bikegiks: Automobiles</title>
    <?php
    include("assets/includes/links.php");
    ?>
    <style>
        .card {
            width: 330px;
            height: 390px;
            border: none;
            box-shadow: 0px 0px 10px grey;
            display: inline-block;
            margin: 20px;
        }

        .bikeContainer {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php
    include("assets/includes/header.php");
    ?>


    <div class="container-fluid my-5 bikeContainer">
        <?php
        $sql = "SELECT * FROM `automobiles` ORDER BY RAND() LIMIT 45";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="card p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="data:image/png;base64,' . base64_encode($row['image']) .'" alt="" style="height:250px;">
                        </div>
                        <div class="col-md-12">
                            <h5>'.$row['name'].'</h5>
                            <a href="automobile-category.php?brand='.$row['brand'].'">
                                <h6 class="badge bg-success">'.$row['brand'].'</h6>
                            </a>
                            <a href="automobile-details.php?automobileId='.$row['id'].'"><button class="btn btn-danger form-control">Know More</button></a>
                        </div>
                    </div>
                </div>

                ';
            }
        }
        ?>


    </div>



    <?php
    include("assets/includes/footer.php");
    ?>
</body>

</html>