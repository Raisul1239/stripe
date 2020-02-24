<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .StripeElement {
        box-sizing: border-box;

        height: 40px;

        padding: 10px 12px;

        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;

        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2 align="center">Laravel payment gateway Integration</h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-primary text-center">
                        <h3>checkout</h3>
                    </div>
                    <div class="card-body">
                        <dic class="row">
                            <div class="col-lg-6">Product 1</divf>
                                <div class="col-lg-6 text-right">$10</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">Product 2</div>
                                <div class="col-lg-6 text-right">$20</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">Product 3</div>
                                <div class="col-lg-6 text-right">$30</div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="row" style="...">
                            <div class="col-lg-6">Total</div>
                            <div class="col-lg-6 text-right">$60</div>
                        </div>
                        <br>
                        <script src="https://js.stripe.com/v3/"></script>

                        <form action="/charge" method="post" id="payment-form">
                            <div class="form-row">
                                <label for="card-element">
                                    Credit or debit card
                                </label>
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>

                            <button>Submit Payment</button>
                        </form>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
            </div>
        </div>
</body>
<script>

</script>

</html>