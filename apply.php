<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bikegiks: Application for Job</title>
    <?php
    include("assets/includes/links.php");
    ?>
</head>

<body>
    <?php
    include("assets/includes/header.php");
    ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card shadow" style="border-radius: 10px;">
                    <div class="card-body">
                        <form action="/apply.php" method="post" enctype="multipart/form-data">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <h6 class="mb-0">Full name</h6>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control form-control-lg" required />
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <h6 class="mb-0">Email address</h6>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="your_email@gmail.com" required />
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="mobile" class="form-control form-control-lg" placeholder="9812345678" required />
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <h6 class="mb-0">Country</h6>
                                </div>
                                <div class="col-md-9">
                                    <select name="country" id="country" class="form-control form-control-lg" required>
                                        <option value="country" disabled selected>Select Country</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <h6 class="mb-0">Upload CV</h6>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control form-control-lg" name="image" id="formFileLg" type="file" required />
                                    <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file size 5 MB</div>
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="px-5 py-4">
                                <button type="submit" name="submit" value="apply" class="btn btn-outline-success btn-lg">Send application</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                type: "get",
                url: "https://restcountries.com/v2/all",
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    for (var i = 0; i < data.length; i++) {
                        $("#country").append("<option value='" + data[i].name + "'>" + data[i].name + "</option>")
                    }
                }

            });
        });
    </script>

    <?php
    include("assets/includes/footer.php");
    ?>
</body>

</html>