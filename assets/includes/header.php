<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo.png" alt="" style="width:100px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-danger" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="compare-automobiles.php">Compare</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="automobiles.php">Automobiles</a>
                </li>
            </ul>
            <div class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger" type="submit">Search</button>
            </div>
        </div>
    </div>
</nav>
<!-- Side navbar -->
<?php
include("assets/includes/navbar.php");
?>