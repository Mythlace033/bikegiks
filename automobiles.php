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
            border:none;
            box-shadow: 0px 0px 10px grey;
            display: inline-block;
            margin: 20px;
        }
        .bikeContainer{
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php
    include("assets/includes/header.php");
    ?>


    <div class="container-fluid my-5 bikeContainer">
        <div class="card p-3">
           <div class="row">
                <div class="col-md-12">
                    <img src="assets\images\dominar-d400.png" alt="">
                </div>
               <div class="col-md-12">
                   <h5>Dominar-400</h5>
                   <a href="automobile-category.php?category=bike"> <h6 class="badge bg-success">Bajaj</h6></a>
                   <p>Product details in breif lorem ipsum dolor saving and clik to know more</p>
                   <a href="automobile-details.php?automobileId=12"><button class="btn btn-danger form-control">Know More</button></a>
               </div>
           </div>
        </div>
        <div class="card p-3">
           <div class="row">
                <div class="col-md-12">
                    <img src="assets\images\dominar-d400.png" alt="">
                </div>
               <div class="col-md-12">
                   <h5>Dominar-400</h5>
                   <h6 class="badge bg-success">Bajaj</h6>
                   <p>Product details in breif lorem ipsum dolor saving and clik to know more</p>
                   <a href=""><button class="btn btn-danger form-control">Know More</button></a>
               </div>
           </div>
        </div>
        <div class="card p-3">
           <div class="row">
                <div class="col-md-12">
                    <img src="assets\images\KTM-RC-390-Studio-Shot.jpg" alt="">
                </div>
               <div class="col-md-12">
                   <h5>KTM RC 390</h5>
                   <h6 class="badge bg-success">KTM</h6>
                   <p>The RC 390 is due for a major update, and it will get one in 2022.</p>
                   <a href="automobile-details.php?automobileId=12"><button class="btn btn-danger form-control">Know More</button></a>
               </div>
           </div>
        </div>
        <div class="card p-3">
           <div class="row">
                <div class="col-md-12">
                    <img src="assets\images\dominar-d400.png" alt="">
                </div>
               <div class="col-md-12">
                   <h5>Dominar-40</h5>
                   <h6 class="badge bg-success">Bajaj</h6>
                   <p>Product details in breif lorem ipsum dolor saving and clik to know more</p>
                   <a href=""><button class="btn btn-danger form-control">Know More</button></a>
               </div>
           </div>
        </div>
 
        <div class="card p-3">
           <div class="row">
                <div class="col-md-12">
                    <img src="assets\images\dominar-d400.png" alt="">
                </div>
               <div class="col-md-12">
                   <h5>Dominar-400</h5>
                   <h6 class="badge bg-success">Bajaj</h6>
                   <p>Product details in breif lorem ipsum dolor saving and clik to know more</p>
                   <a href=""><button class="btn btn-danger form-control">Know More</button></a>
               </div>
           </div>
        </div>
    </div>



    <?php
    include("assets/includes/footer.php");
    ?>
</body>

</html>