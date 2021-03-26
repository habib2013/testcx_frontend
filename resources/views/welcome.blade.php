<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capital X - Premium Banking, Personalized Convenience</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shorthandcss@1.1.1/dist/shorthand.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" /> -->
    <link rel="stylesheet" href="../assets/css/custom.css" />
    <link rel="stylesheet" href="../assets/css/shorthand.min.css" />
    <link rel="stylesheet" href="../assets/css/slick-theme.css" />
    <link rel="stylesheet" href="../assets/css/slick.min.css" />
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>

<body class="bg-black muli">
    <nav class="w-100pc flex flex-column md-flex-row md-px-10 py-5 bg-black">
        <div class="flex justify-between">
            <a href="index.html#" class="flex items-center p-2 mr-4 no-underline">
                <img class=" w-auto" src="../assets/images/logo1.png" />
            </a>
            <a data-toggle="toggle-nav" data-target="#nav-items" href="#"
                class="flex items-center ml-auto md-hidden red-lighter opacity-50 hover-opacity-100 ease-300 p-1 m-3">
                <!-- <i data-feather="menu"></i> -->
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div id="nav-items" class="hidden flex sm-w-100pc flex-column md-flex md-flex-row md-justify-end items-center">
            <a href="#home" class="fs-s1 mx-3 py-3 white no-underline hover-underline">Home</a>
            <a href="#features" class="fs-s1 mx-3 py-3 white no-underline hover-underline">Features</a>
            <a href="#pricing" class="fs-s1 mx-3 py-3 white no-underline hover-underline">Pricing</a>
            <a href="#blog" class="fs-s1 mx-3 py-3 white no-underline hover-underline">Blog</a>
            <a href="#" class="button bg-white black fw-600 no-underline mx-5">Register</a>
        </div>
    </nav>

    <!-- form section -->
                <div class="w-200pc md-w-70pc mx-auto py-10">
      <h2 class="white fs-l0 md-fs-xl1 fw-900 lh-2 absolute-center">Subscription</h2>

    </div>
  <br>
  <br>
  <br>
  <br>
    <br>
  <br>
  <br>

    <section class="form d-flex  h-50 py-3">

        <form id="login-form" method="post" onsubmit="return AddSubscription()" role="form" style="display: block;">
            @csrf


            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="fullname" id="fullname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Registered Email Address</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="row justify-content-between">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="">Last 4 Digits </label>
                        <input type="text" name="last4" id="last4" class="form-control" maxlength="4" required>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="">Account Type </label>
                        <select name="accounttype" id="accounttype" required>
                            <option value="Titanium Black"> Titanium Black</option>
                            <option value="Titanium Pro"> Titanium Pro</option>
                            <option value="Titanium Savers"> Titanium Savers</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="">What do you do ?</label>
                        <select name="work_status" id="work_status" required>
                            <option value="Student"> Student </option>
                            <option value="Employee"> Employee</option>
                            <option value="Self-employed"> Self-employed</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="">What will you prefer ?</label>
                        <select name="preference" id="preference" required>
                            <option value="Discounted data"> Discounted data </option>
                            <option value="Discounted transaction fees"> Discounted transaction fees</option>
                            <option value="Cash backs"> Cash backs</option>
                            <option value="Hotel booking discounts"> Hotel booking discounts</option>
                            <option value="Others"> Others</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="">How often do you travel locally ?</label>
                        <select name="how_often" id="how_often" required>
                            <option value="Very Often"> Very Often </option>
                            <option value=" Once or twice"> Once or twice</option>
                            <option value=" Rarely"> Rarely</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="">How do you travel ?</label>
                        <select name="how_you_travel" id="how_you_travel" required>
                            <option value="Air"> Air</option>
                            <option value="Sea"> Sea</option>
                            <option value="Road"> Road</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" id="register_button"  value="Submit" class="btn btn-danger btn-block">
            </div>
        </form>

    </section>


    <!-- footer -->
    <footer class="p-5 md-p-l5 bg-red-lightest-10">
        <div class="flex flex-wrap">
            <div class="md-w-25pc mb-10">
                <img src="../assets/images/logo1.png" class="w-l5" alt="">
                <div class="white opacity-70 fs-s2 mt-4 md-pr-10">
                    <p>Capital X is a premium digital bank. We are not just reimagining the entire banking and payment system in Nigeria, we are redefining what convenience means and reshaping how people pay for services. </p>
                    <br>
                    <p>All deposits are domiciled with our CBN licensed banking partners and safely insured by NDIC.</p>
                </div>
            </div>
            <div class="w-100pc md-w-50pc">
                <div class="flex justify-around">
                    <div class="w-33pc md-px-10 mb-10">
                        <h5 class="white">Company</h5>
                        <ul class="list-none mt-5 fs-s2">
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">About
                                    Us</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Jobs</a>
                            </li>
                            <li class="my-3"><a href="#"
                                    class="white opacity-70 no-underline hover-underline">Terms & Conditions</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Credit Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-33pc md-px-10 mb-10">
                        <h5 class="white">Product</h5>
                        <ul class="list-none mt-5 fs-s2">
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Expense Cards</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">Premium Banking</a>
                            </li>
                            <li class="my-3"><a href="#"
                                    class="white opacity-70 no-underline hover-underline">Savings</a></li>
                            <li class="my-3"><a href="https://getmerchantpay.com" class="white opacity-70 no-underline hover-underline">Merchant Pay</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-33pc md-px-10 mb-10">
                        <h5 class="white">Contact</h5>
                        <ul class="list-none mt-5 fs-s2">
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">support@capitalx.cards</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline">sales@capitalx.cards</a>
                            </li>
                            <li class="my-3"><a href="#"
                                    class="white opacity-70 no-underline hover-underline">1A Hughes Avenue, Yaba 100001, Lagos State.</a></li>
                            <li class="my-3"><a href="#" class="white opacity-70 no-underline hover-underline"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-100pc md-w-25pc">
                <div class="flex w-75pc md-w-100pc mx-auto">
                    <input type="text"
                        class="input flex-grow-1 bw-0 fw-200 bg-red-lightest-10 white ph-red-lightest focus-white opacity-80 fs-s3 py-5 br-r-0"
                        placeholder="Email Address">
                    <button class="button bg-red red-lightest fw-300 fs-s3 br-l-0">Start</button>
                </div>
                <div class="flex justify-around my-8">
                    <a href="#" class="relative p-5 bg-red br-round white hover-scale-up-1 ease-400"><i
                            data-feather="twitter" class="absolute-center h-4"></i></a>
                    <a href="#" class="relative p-5 bg-red br-round white hover-scale-up-1 ease-400"><i
                            data-feather="facebook" class="absolute-center h-4"></i></a>
                    <a href="#" class="relative p-5 bg-red br-round white hover-scale-up-1 ease-400"><i
                            data-feather="instagram" class="absolute-center h-4"></i></a>
                </div>
            </div>
        </div>
    </footer>


        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
        <script src="./assets/js/script.js"></script>

        <script type="text/javascript">

            function AddSubscription()
            {
                var token    = $("input[name=_token]").val();
                var fullname    = $("input[name=fullname]").val();
                var email    = $("input[name=email]").val();
                var phone    = $("input[name=phone]").val();
                var last4    = $("input[name=last4]").val();
                var accounttype = $("select[name=accounttype]").val();
                var work_status = $("select[name=work_status]").val();
                var preference = $("select[name=preference]").val();
                var how_often = $("select[name=how_often]").val();
                var how_you_travel = $("select[name=how_you_travel]").val();


                var data = {
                    _token:token,
                    fullname:fullname,
                    email:email,
                    phone:phone,
                    last4:last4,
                    accounttype:accounttype,
                    work_status:work_status,
                    preference:preference,
                    how_often:how_often,
                    how_you_travel:how_you_travel,
                };
                // Ajax Post
                $.ajax({
                    type: "post",
                    url: "/saveToDB",
                    data: data,
                    cache: false,
                    beforeSend:function(){
                      $("#register_button").attr("disabled", "disabled");
                            $("#register_button").html('Proccessing . . <i class="fas fa-spinner fa-spin text-white"></i>')

                    },

                    success: function (data)
                    {
                        console.log('register request sent !');
        if(data.status == 'success'){
        swal({
            title: data.status,
            text: data.message,
            type: "success",
            showCancelButton: false,
            dangerMode: false,
            cancelButtonClass: '#4FE870',
                confirmButtonColor: '#4FE870',
                confirmButtonText: 'OKAY!',
        }
        ,
        function(){
            if(data.status == 'success'){
                var usermail = data.usermail;
                var fullname = data.userFullname;
                var userId = data.userId;
                localStorage.setItem('usermail', usermail);
                localStorage.setItem('fullname', fullname);
                localStorage.setItem('userId', userId);

                 window.location.href ='/paytocontinue';
            }
            else{

            }

        }

        );
        }
        if(data.status == 'error') {

        swal({
            title: data.status,
            text: data.message,
            type: "error",
            dangerMode: true,
            showCancelButton: false,
            dangerMode: false,
            confirmButtonText: 'ERROR!',
        }
        );

        }

                        $("#login_button").removeAttr("disabled");
                            $("#login_button").html('LOGIN');

                    },

                    error: function (data){
                      console.log('Fail to run Login..');
                        // alert("Fail to run Login..");


                    }
                });
                return false;
            }
        </script>


    </body>

</html>
