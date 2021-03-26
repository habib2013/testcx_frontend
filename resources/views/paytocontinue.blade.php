<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proceed to payment</title>
    <link rel="stylesheet" href="../assets/css/custom.css" />
    <link rel="stylesheet" href="../assets/css/shorthand.min.css" />
    <link rel="stylesheet" href="../assets/css/slick-theme.css" />
    <link rel="stylesheet" href="../assets/css/slick.min.css" />

</head>

<body>

    <button id="paymentBtn" style="margin-top:5%;margin-left:30%;  background-color: #d1212a; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;">Make Payment</button>

    <!-- Include paystack blade directive -->
    @paystack

    <script>



        document.getElementById('paymentBtn').onclick = function (e) {
            e.preventDefault();

            var cusMail = localStorage.getItem('usermail');
            var cusFullname = localStorage.getItem('fullname');
            var userId = localStorage.getItem('userId');

            console.log(cusMail);
            console.log(userId);

            var amount = 1000;
            var email = cusMail;
            var meta = {
                custom_fields: [
                    {
                        display_name: "Name",
                        variable_name: "name",
                        value: cusFullname
                    }
                ]
            };

            //display checkout form
            payWithPaystack(amount, email, meta, onPaymentCompleted, onPaymentCancelled);
        };

        // Callback when payment is complete.
        function onPaymentCompleted(response) {
                console.log('running');

            localStorage.removeItem('fullname');
            localStorage.removeItem('usermail');
            // window.open('mailto:test@example.com?subject=subject&body=body');

            var userId = localStorage.getItem('userId');


            window.location.href ='/confirmation/'+ userId;
          
            // alert('payment completed!');
            // do what you like here with the response data returned
        }

        // Callback when checkout form is closed.
        function onPaymentCancelled() {
            alert('payment cancelled!');
        }

    </script>
</body>

</html>
