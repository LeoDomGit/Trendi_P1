<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<body class="account-body">

    <!-- Log In page -->
    <div class="row vh-100">
        <div class="col-lg-3  pr-0">
            <div class="card mb-0 shadow-none">
                <div class="card-body">

                    <div class="px-3">
                        <div class="media">
                            <a href="index.html" class="logo logo-admin"><img src="assets/images/logo-sm.png"
                                    height="55" alt="logo" class="my-3"></a>
                            <div class="media-body ml-3 align-self-center">
                                <h4 class="mt-0 mb-1">Register</h4>
                                <p class="text-muted mb-0">Sign up to continue to.</p>
                            </div>
                        </div>

                        <form class="form-horizontal my-4" action="/">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="mdi mdi-account-outline font-16"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="email" placeholder="Email ...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i
                                                class="mdi mdi-key font-16"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter password ...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i
                                                class="mdi mdi-key font-16"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="password1"
                                        placeholder="Enter password ...">
                                </div>
                            </div>

                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="button"
                                        id="register_btn">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="account-social text-center">
                        <h6 class="my-4">Or Login With</h6>
                        <ul class="list-inline mb-4">
                            <li class="list-inline-item">
                                <a href="" class="">
                                    <i class="fab fa-facebook-f facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="">
                                    <i class="fab fa-twitter twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="">
                                    <i class="fab fa-google google"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-2">
                                <a class="btn btn-primary btn-block waves-effect waves-light" href="/">Login </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 p-0 d-flex justify-content-center">
            <div class="accountbg d-flex align-items-center">
                <div class="account-title text-white text-center">
                    <img src="assets/images/logo-sm.png" alt="" class="thumb-sm">
                    <h4 class="mt-3">Welcome To Frogetor</h4>
                    <div class="border w-25 mx-auto border-primary"></div>
                    <h1 class="">Let's Get Started</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Log In page -->


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Set up jQuery to include the CSRF token in all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });

            register()
        });

        function register() {
            $("#register_btn").click(function(e) {
                var email = $("#email").val();
                var password = $("#password").val();
                var password1 = $("#password1").val();
                if (email == '') {
                    alert("Thiếu email")
                } else if (password == '' || password1 == '') {
                    alert("Thiếu mật khẩu")
                } else if (password != password1) {
                    console.log(password, password1);

                    alert("Vui lòng nhập lại đúng mật khẩu !")
                } else {
                    $.ajax({
                        type: "post",
                        url: "/register",
                        data: {
                            email: email,
                            password: password
                        },
                        dataType: "JSON",
                        success: function(res) {
                            if(res.check==true){
                                window.location.replace('/')
                            }else if(res.check==false){
                                if(res.msg){
                                    alert(res.msg);
                                }
                            }

                        }
                    });
                }
            });
        }
    </script>

</body>

</html>
