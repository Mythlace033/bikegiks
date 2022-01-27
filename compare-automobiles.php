<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Bikegiks: Compare Automobiles</title>
    <?php
    include("assets/includes/links.php");
    ?>
</head>

<body>
    <?php
    include("assets/includes/header.php");
    ?>

    <div class="container my-3">
        <div class="row">
            <div class="col-md-11 mx-auto shadow p-2">
                <div class="compareBox">
                    <div class="row p-3">
                        <div class="col-md-4 p-2">
                            <select class="form-control">
                                <option value="" class="form-control">Select one</option>
                                <option value="" class="form-control">Aption1</option>
                                <option value="" class="form-control">Bption2</option>
                                <option value="" class="form-control">Cption3</option>
                                <option value="" class="form-control">Dption4</option>
                            </select>
                        </div>
                        <div class="col-md-4 p-2">
                            <select class="form-control">
                                <option value="" class="form-control">Select one</option>
                                <option value="" class="form-control">Aption1</option>
                                <option value="" class="form-control">Bption2</option>
                                <option value="" class="form-control">Cption3</option>
                                <option value="" class="form-control">Dption4</option>
                            </select>
                        </div>
                        <div class="col-md-4 p-2">
                            <input type="submit" value="Compare" class="form-control btn btn-danger">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 p-2 mx-auto table-responsive">
                <table class="table table-borderless table-striped">
                    <tbody>
                        <!-- <tr>
                            <td></td>
                            <td class="text-center"><img src="assets\images\dominar-d400.png" style="widtd:200px" alt=""></td>
                            <td class="text-center"><img src="assets\images\dominar-d400.png" style="widtd:200px" alt=""></td>
                        </tr> -->
                        <tr>
                            <td>Name</td>
                            <td><strong>Dominar D400</strong></td>
                            <td><strong>Dominar D400</strong></td>
                        </tr>
                        <tr>
                            <td>Performance</td>
                            <td>25mm Max Torque, 373.3cc Engine Capacity, 40ps Engine Output, 13L full Tank, 184KGS kerb Weight </td>
                            <td>25mm Max Torque, 373.3cc Engine Capacity, 40ps Engine Output, 13L full Tank, 184KGS kerb Weight </td>
                        </tr>
                        <tr>
                            <td>Engine</td>
                            <td>Type: Liquid cooled, Single cylinder, DOHC
                                Max Power: 39.9 PS @ 8650 rpm
                                Max Torque: 35 @ 7000 (Nm @ RPM)
                                Displacement: 373.27 cc
                                Max Speed:148 Kmph (internally tested)
                            </td>
                            <td>Type: Liquid cooled, Single cylinder, DOHC
                                Max Power: 39.9 PS @ 8650 rpm
                                Max Torque: 35 @ 7000 (Nm @ RPM)
                                Displacement: 373.27 cc
                                Max Speed:148 Kmph (internally tested)
                            </td>
                        </tr>
                        <tr>
                            <td>Vechile</td>
                            <td>Wheel Base: 1453 mm
                                Lengtd x Widtd x Height: 2156 mm x 836 mm x 1112 mm
                                Ground Clearance: 157 mm
                                Suspension Front: USD Forks
                                Kerb Weight: 184.5 Kg
                                Fuel Tank (Reserve / Usable): 13 L
                                Suspension Rear: Mono suspension witd Nitrox
                            </td>
                            <td>Wheel Base: 1453 mm
                                Lengtd x Widtd x Height: 2156 mm x 836 mm x 1112 mm
                                Ground Clearance: 157 mm
                                Suspension Front: USD Forks
                                Kerb Weight: 184.5 Kg
                                Fuel Tank (Reserve / Usable): 13 L
                                Suspension Rear: Mono suspension witd Nitrox
                            </td>
                        </tr>
                        <tr>
                            <td>Breaks & Tyres</td>
                            <td>Brake Size Front: Disc
                                Brake Size Rear: Disc
                                Tyre Front: 110/70- 17 Radial
                                Tyre Rear: 150/60-17 Radial
                                Brake Type Front: ABS
                                Brake Type Rear: ABS
                            </td>
                            <td>Brake Size Front: Disc
                                Brake Size Rear: Disc
                                Tyre Front: 110/70- 17 Radial
                                Tyre Rear: 150/60-17 Radial
                                Brake Type Front: ABS
                                Brake Type Rear: ABS
                            </td>
                        </tr>
                        <tr>
                            <td>Electrical</td>
                            <td>Battery: 12V, 8Ah VRLA
                                Head Lamps: Full LED witd Auto Headlamp On (AHO)
                            </td>
                            <td>Battery: 12V, 8Ah VRLA
                                Head Lamps: Full LED witd Auto Headlamp On (AHO)
                            </td>
                        </tr>
                        <tr>
                            <td>Otder</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos amet rerum quam reiciendis, distinctio, facilis ducimus velit hic nostrum dignissimos, nulla facere veniam. Nemo alias, quisquam sed quam qui ipsum.
                            </td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos amet rerum quam reiciendis, distinctio, facilis ducimus velit hic nostrum dignissimos, nulla facere veniam. Nemo alias, quisquam sed quam qui ipsum.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?php
    include("assets/includes/footer.php");
    ?>
</body>

</html>