<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css");
.track_tbl td.track_dot {
    width: 50px;
    position: relative;
    padding: 0;
    text-align: center;
}
.track_tbl td.track_dot:after {
    content: "\f111";
    font-family: FontAwesome;
    position: absolute;
    margin-left: -5px;
    top: 11px;
}
.track_tbl td.track_dot span.track_line {
    background: #000;
    width: 3px;
    min-height: 50px;
    position: absolute;
    height: 101%;
}
.track_tbl tbody tr:first-child td.track_dot span.track_line {
    top: 30px;
    min-height: 25px;
}
.track_tbl tbody tr:last-child td.track_dot span.track_line {
    top: 0;
    min-height: 25px;
    height: 10%;
}
body {
    overflow-x: hidden;
    height: 100%;
    background-repeat: no-repeat
}

.card {
    z-index: 0;
    background-color: #ECEFF1;
    padding-bottom: 20px;
    margin-top: 90px;
    margin-bottom: 90px;
    border-radius: 10px
}

.top {
    padding-top: 40px;
    padding-left: 13% !important;
    padding-right: 13% !important
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar .step0:before {
    font-family: FontAwesome;
    content: "\f10c";
    color: #fff
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #C5CAE9;
    border-radius: 50%;
    margin: auto;
    padding: 0px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 12px;
    background: #C5CAE9;
    position: absolute;
    left: 0;
    top: 16px;
    z-index: -1
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%
}

#progressbar li:nth-child(2):after,
#progressbar li:nth-child(3):after {
    left: -50%
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    position: absolute;
    left: 50%
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #651FFF
}

#progressbar li.active:before {
    font-family: FontAwesome;
    content: "\f00c"
}

.icon {
    width: 60px;
    height: 60px;
    margin-right: 15px
}

.icon-content {
    padding-bottom: 20px
}

@media screen and (max-width: 992px) {
    .icon-content {
        width: 50%
    }
}
</style>
</head>
<body>


    <div class="container px-1 px-md-4 py-5 mx-auto">
    <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h5>ORDER <span class="text-primary font-weight-bold">#Y34XDHR</span></h5>
            </div>
            <div class="d-flex flex-column text-sm-right">
                <p class="mb-0">Expected Arrival <span>01/12/19</span></p>
                <p>USPS <span class="font-weight-bold">234094567242423422898</span></p>
            </div>
        </div> <!-- Add class 'active' to progress -->
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    <li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="active step0"></li>
                    <li class="step0"></li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-between top">
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Processed</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Shipped</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>En Route</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Arrived</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="p-4">
    <h3>Order Tracking</h3>
    <table class="table table-bordered track_tbl">
        <thead>
            <tr>
                <th></th>
                <th>S No</th>
                <th>Status</th>
                <th>Distibutor</th>
                <th>Date/Time</th>
            </tr>
        </thead>
        <tbody>
            <tr class="active">
                <td class="track_dot">
                    <span class="track_line"></span>
                </td>
                <td>01</td>
                <td>Dispatched from distibutor address</td>
                <td>Flipkart</td>
                <td>31/07/2018 22:24:PM</td>
            </tr>
            <tr>
                <td class="track_dot">
                    <span class="track_line"></span>
                </td>
                <td>01</td>
                <td>Dispatched from distibutor address</td>
                <td>Flipkart</td>
                <td>31/07/2018 22:24:PM</td>
            </tr>
            <tr>
                <td class="track_dot">
                    <span class="track_line"></span>
                </td>
                <td>01</td>
                <td>Dispatched from distibutor address</td>
                <td>Flipkart</td>
                <td>31/07/2018 22:24:PM</td>
            </tr>
            <tr>
                <td class="track_dot">
                    <span class="track_line"></span>
                </td>
                <td>01</td>
                <td>Dispatched from distibutor address</td>
                <td>Flipkart</td>
                <td>31/07/2018 22:24:PM</td>
            </tr>
            <tr>
                <td class="track_dot">
                    <span class="track_line"></span>
                </td>
                <td>01</td>
                <td>Dispatched from distibutor address</td>
                <td>Flipkart</td>
                <td>31/07/2018 22:24:PM</td>
            </tr>
            <tr>
                <td class="track_dot">
                    <span class="track_line"></span>
                </td>
                <td>01</td>
                <td>Dispatched from distibutor address</td>
                <td>Flipkart</td>
                <td>31/07/2018 22:24:PM</td>
            </tr>
            <tr>
                <td class="track_dot">
                    <span class="track_line"></span>
                </td>
                <td>01</td>
                <td>Dispatched from distibutor address</td>
                <td>Flipkart</td>
                <td>31/07/2018 22:24:PM</td>
            </tr>
        </tbody>
    </table>
    </div>




</body>
</html>