<html>
<head>
    <meta charset="UTF-8">
    <title>Thai Food Delivery</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<?php
require_once('menu.php');
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Payment Details </h3>
                    <div class="checkbox pull-right">
                        <label><input type="checkbox"/>Remember</label>
                    </div>
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <label for="address">TO ADDRESS:</label>
                            <textarea class="form-control" rows="3" id="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cardNumber"> CARD NUMBER</label>
                            <div class="input-group">
                                <input class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                       required autofocus/>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="expityMonth"> EXPIRY DATE</label>
                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                        <input class="form-control" id="expityMonth" placeholder="MM"
                                               required/>
                                    </div>
                                    <div class="col-xs-6 col-lg-6 pl-ziro">
                                        <input class="form-control" id="expityYear" placeholder="YY"
                                               required/></div>
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cvCode"> CV CODE</label>
                                    <input type="password" class="form-control" id="cvCode" placeholder="CV" required/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"><span
                                    class="glyphicon glyphicon-usd"></span>4200</span> Final Payment</a>
                </li>
            </ul>
            <br/>
            <button class="btn btn-success btn-lg btn-block">Pay</button>
        </div>
    </div>
</div>
</body>

<style>
    .panel-title {
        display: inline;
        font-weight: bold;
    }

    .checkbox.pull-right {
        margin: 0;
    }

    .pl-ziro {
        padding-left: 0;
    }
</style>