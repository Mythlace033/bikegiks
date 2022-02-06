<?php
include("assets/db/db_conn.php");
if (!isset($_GET['automobileId'])) {
    echo '
        <script>
            window.location.href= "index.php";
        </script>
    ';
} else {
    $specificationId = $_GET['automobileId'];
    $sql = "SELECT `id` FROM `specification` WHERE `automobile_id` = '$specificationId'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    } else {
        echo '
                <script>
                    window.location.href= "index.php";
                </script>
            ';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bikegiks: Automobile Specification</title>
    <?php
    include("assets/includes/links.php");
    ?>
</head>

<body>
    <?php
    include("assets/includes/header.php");
    ?>




    <div class="container-fluid">
        <div class="row">

            <?php
            $specificationId = $_GET['automobileId'];
            $sql = "SELECT * FROM `specification` WHERE `automobile_id` = '$specificationId'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <div class="col-md-5">
                        <img src="data:image/png;base64,' . base64_encode($row['image']) . '" alt="">
                    </div>
                    <div class="col-md-7 p-3">
                        <br>
                        <h2 class="text-danger">Dominar D400</h2>
                        <h5>BAJAJ</h5>
                        <br><br>
                        <p>Discription lorem ipsum dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda libero dolorum inventore ratione a, corrupti ullam atque possimus numquam laboriosam, facere accusamus similique repudiandae iste accusantium ipsa soluta, quibusdam cumque.</p>
                    </div>
                    <div class="col-md-7 p-2 mx-auto table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>Dominar D400</td>
                                </tr>
                                <tr>
                                    <th>Performance</th>
                                    <td>25mm Max Torque, 373.3cc Engine Capacity, 40ps Engine Output, 13L full Tank, 184KGS kerb Weight </td>
                                </tr>
                                <tr>
                                    <th>Engine</th>
                                    <td>Type: Liquid cooled, Single cylinder, DOHC
                                        Max Power: 39.9 PS @ 8650 rpm
                                        Max Torque: 35 @ 7000 (Nm @ RPM)
                                        Displacement: 373.27 cc
                                        Max Speed:148 Kmph (internally tested)
                                    </td>
                                </tr>
                                <tr>
                                    <th>Vechile</th>
                                    <td>Wheel Base: 1453 mm
                                        Length x Width x Height: 2156 mm x 836 mm x 1112 mm
                                        Ground Clearance: 157 mm
                                        Suspension Front: USD Forks
                                        Kerb Weight: 184.5 Kg
                                        Fuel Tank (Reserve / Usable): 13 L
                                        Suspension Rear: Mono suspension with Nitrox
                                    </td>
                                </tr>
                                <tr>
                                    <th>Breaks & Tyres</th>
                                    <td>Brake Size Front: Disc
                                        Brake Size Rear: Disc
                                        Tyre Front: 110/70- 17 Radial
                                        Tyre Rear: 150/60-17 Radial
                                        Brake Type Front: ABS
                                        Brake Type Rear: ABS
                                    </td>
                                </tr>
                                <tr>
                                    <th>Electrical</th>
                                    <td>Battery: 12V, 8Ah VRLA
                                        Head Lamps: Full LED with Auto Headlamp On (AHO)
                                    </td>
                                </tr>
                                <tr>
                                    <th>Other</th>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos amet rerum quam reiciendis, distinctio, facilis ducimus velit hic nostrum dignissimos, nulla facere veniam. Nemo alias, quisquam sed quam qui ipsum.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    ';
                }
            }
            ?>
        </div>
    </div>

    <?php
    include("assets/includes/footer.php");
    ?>
</body>

</html>