<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/assets3/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets3/images/favicon.png" type="image/x-icon">
    <title>viho - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="/assets3/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/assets3/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="/assets3/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/assets3/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/assets3/css/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets3/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets3/css/style.css">
    <link id="color" rel="stylesheet" href="/assets3/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/assets3/css/responsive.css">
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card">
                        <form class="theme-form login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <center><img src="/assets3/images/login/logo.png" style="width: 70px; height: 70px; margin-bottom: 20px"></center>
                            <h4><center>Login</center></h4>
                            <h6><center>Welcome back! Log in to your account.</center></h6>
                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="input-group"><span class="input-group-text"><i
                                            class="icon-email"></i></span>
                                    <input class="form-control" type="email" required="" name="email"
                                        id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" name="password" required=""
                                        name="password" id="password">
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox" name="remember" id="remember">
                                    <label for="checkbox1">Remember password</label>
                                </div><a class="link" href="/password/reset">Forgot password?</a>
                            </div>
                            <div class="form-group">
                              <button class="btn btn-primary" type="submit">Sign in</button>
                            </div>
                            <div class="login-social-title">                
                              <h5>Sign in with</h5>
                            </div>
                            <div class="form-group">
                              <ul class="login-social">
                                <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="linkedin"></i></a></li>
                                <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/login" target="_blank"><i data-feather="facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/login" target="_blank"><i data-feather="instagram"></i></a></li>
                              </ul>
                            </div>
                            <p>Don't have account?<a class="ms-2" href="log-in.html">Create Account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->
    <script src="/assets3/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="/assets3/js/icons/feather-icon/feather.min.js"></script>
    <script src="/assets3/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="/assets3/js/sidebar-menu.js"></script>
    <script src="/assets3/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="/assets3/js/bootstrap/popper.min.js"></script>
    <script src="/assets3/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="/assets3/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->

    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-auth.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // Initialize Firebase
        var firebaseConfig = {
            apiKey: "AIzaSyAc_Pkw1PUqQRadyGr-exhNLk28z7bL3Lc",
            authDomain: "pick-a-bin-app.firebaseapp.com",
            databaseURL: "https://pick-a-bin-app-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "pick-a-bin-app",
            storageBucket: "pick-a-bin-app.appspot.com",
            messagingSenderId: "320940399511",
            appId: "1:320940399511:web:11bec7854bdb3d263102d2"
        };
        firebase.initializeApp(firebaseConfig);
        var facebookProvider = new firebase.auth.FacebookAuthProvider();
        var googleProvider = new firebase.auth.GoogleAuthProvider();
        var facebookCallbackLink = '/login/facebook/callback';
        var googleCallbackLink = '/login/google/callback';
        async function socialSignin(provider) {
            var socialProvider = null;
            if (provider == "facebook") {
                socialProvider = facebookProvider;
                document.getElementById('social-login-form').action = facebookCallbackLink;
            } else if (provider == "google") {
                socialProvider = googleProvider;
                document.getElementById('social-login-form').action = googleCallbackLink;
            } else {
                return;
            }
            firebase.auth().signInWithPopup(socialProvider).then(function(result) {
                result.user.getIdToken().then(function(result) {
                    document.getElementById('social-login-tokenId').value = result;
                    document.getElementById('social-login-form').submit();
                });
            }).catch(function(error) {
                // do error handling
                console.log(error);
            });
        }
    </script>
</body>

</html>