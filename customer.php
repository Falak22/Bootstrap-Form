<!DOCTYPE html>
<html>

<head>
    <style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }

    h3 {}
    </style>
    <meta charset="utf-8">
    <!--BOOTSTRAP JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!--BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <section class="h-100 bg-dark">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col">
                        <div class="card card-registration my-4">
                            <div class="row g-0">
                                <div class="col-xl-6 d-none d-xl-block">
                                    <img src="https://images.unsplash.com/photo-1496115965489-21be7e6e59a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80&h=1500&w=600"
                                        alt="Sample photo" class="img-fluid"
                                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-5 text-uppercase"
                                            style="font-family:times-new-roman; text-decoration:underline;">Customer
                                            registration form</h3>

                                        <div class="row">
                                            <div class="col-md-12 mb-6">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m">
                                                        <h3 style="font-family:times-new-roman">First name:</h3>
                                                    </label>
                                                    <input type="text" id="form3Example1m"
                                                        class="form-control form-control-lg" placeholder="John" required
                                                        maxlength="30" />

                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-6">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">
                                                        <h3 style="font-family:times-new-roman">Last name:</h3>
                                                    </label>
                                                    <input type="text" id="form3Example1n"
                                                        class="form-control form-control-lg" placeholder="Doe" required
                                                        maxlength="30" />

                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 mb-6">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m1">
                                                        <h3 style="font-family:times-new-roman">Contact:
                                                    </label>
                                                    <input type="tel" id="form3Example1m1"
                                                        class="form-control form-control-lg" placeholder="8938438222"
                                                        required maxlength="10" />

                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-6">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n1">
                                                        <h3 style="font-family:times-new-roman">Registration code:</h3>
                                                    </label>
                                                    <input type="text" id="form3Example1n1"
                                                        class="form-control form-control-lg" placeholder="590002"
                                                        required maxlength="6" />

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">
                                                <h3 style="font-family:times-new-roman">Address</h3>
                                            </label>
                                            <textarea id="form3Example8" class="form-control form-control-lg"
                                                placeholder="xysso street 23rd cross" required
                                                maxlength="40"></textarea>

                                        </div>
                                        <h3 class="mb-0 me-4" style="font-family:times-new-roman">Gender: </h3>
                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">



                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="femaleGender" value="option1" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="maleGender" value="option2" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="otherGender" value="option3" />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 mb-6">
                                                <label>
                                                    <h3 style="font-family:times-new-roman">State:</h3>
                                                </label>
                                                <select class="form-control" required>
                                                    <option value="1" disabled>State</option>
                                                    <option value="2">Karnataka</option>
                                                    <option value="3">Tamil Nadu</option>
                                                    <option value="4">Maharashtra</option>
                                                </select>

                                            </div>
                                            <div class="col-md-12 mb-6">
                                                <label>
                                                    <h3 style="font-family:times-new-roman">City: </h3>
                                                </label>
                                                <select class="form-control">
                                                    <option value="1" disabled>City</option>
                                                    <option value="2">Bangalore</option>
                                                    <option value="3">Belgaum</option>
                                                    <option value="4">Pune</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example9">
                                                <h3 style="font-family:times-new-roman" required>DOB:</h3>
                                            </label>
                                            <input type="date" id="form3Example9"
                                                class="form-control form-control-lg" />

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example90">
                                                <h3 style="font-family:times-new-roman">Pincode:<h3>
                                            </label>
                                            <input type="text" id="form3Example90" class="form-control form-control-lg"
                                                placeholder="590010" required maxlength="6" />

                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example97">
                                                <h3 style="font-family:times-new-roman">Email ID:</h3>
                                            </label>
                                            <input type="email" id="form3Example97"
                                                class="form-control form-control-lg" />

                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example99">
                                                <h3 style="font-family:times-new-roman">Additional Info:</h3>
                                            </label>
                                            <input type="textarea" id="form3Example99"
                                                class="form-control form-control-lg" maxlength="50" />

                                        </div>



                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-dark btn-lg"
                                                style="margin-right:8px;">Reset all</button>
                                            <button type="button" class="btn btn-warning btn-lg ms-2"
                                                name="submit" > Submit
                                                form</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>
<script>
    function formcheck()
    </scrip>


</html>