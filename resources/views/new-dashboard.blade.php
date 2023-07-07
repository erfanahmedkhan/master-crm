<html>

<head>
  <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/selectFX/css/cs-skin-elastic.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .socialmediaicons img {
   
    height: 50%;

  }
    #DataTables_Table_0_filter{
      margin: 0;
      float: right;
    }

    #DataTables_Table_0_paginate {
      float: right;
    }

    #DataTables_Table_0_length{
      display: none
    }

    .card-body {
      padding: 5px !important;
    }

    thead input {
      width: 100%;
    }

    #nav {
      display: flex;
      padding-left: 25px;
    }

    #nav ol {
      display: flex;
      margin-left: 25px;
      margin-top: 2%;
    }

    #nav ol a {
      color: black;
      font-size: 12.5px;
    }

    #nav ol a:hover {
      color: #f58935;
    }

    .navbar-default .active {
      text-decoration-color: #f58935;
    }

    .topbar {
      height: 34px;
    }

    footer {
      margin-top: 46%;
      margin-bottom: 1%;
      height: 55px;
    }

    body {
      /* background-image: url("{{asset('images/bg.png')}}"); */
      /* background-image: url("{{asset('images/bg-white.png')}}"); */
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-color: #fff;
    }



    .dropdown-menu {
      background-color: #17467e;
    }

    .dropdown-item {
      color: #fff;
      font-weight: bold;
    }

    .container-fluid {
      background-color: #17467e;
      background-image: url("{{asset('images/navbar-bg.png')}}");
    }

    .col-sm-3 {
      height: 87vh;
    }

    .col-sm-9 {
      height: 87vh;
    }

    .fa-check {
      font-size: 33px;
      margin-bottom: 10px;

    }

    .fa-phone {
      font-size: 33px;
      color: #17467e;
      margin-bottom: 10px;
    }

    .fa-clock-o {
      font-size: 33px;
      color: #17467e;
      margin-bottom: 10px;
    }

    .fa-envelope {
      font-size: 33px;
      color: #f58935;
      margin-bottom: 10px;
    }

    .fa-mobile {
      font-size: 33px;
      color: #f58935;
      margin-bottom: 10px;
    }

    .text-primary {
      color: #17467e;
    }

    #CompletedCalls {
      width: 100%;
    }

    .rounded {
      border-radius: 1.25rem !important;
    }

    .badge {
      float: right;
      margin-right: 10%;
 
    }

    .Rectangle-1564 {
      width: 333px;
      height: 154px;
      margin: 38px 36px 5px 45px;
      padding: 26px 149px 18px 40px;
      border-radius: 16px;
      box-shadow: 0 3px 20px 0 rgba(0, 0, 0, 0.16);
      background-color: #fff;
    }

    .points {
      color: #f58935 !important;
      font-weight: bold;
    }

    .bg-warning {
      color: #f58935 !important;
      background-color: #f58935 !important;
    }

    thead input {
        width: 100%;
    }
        #nav
        {
            display: flex;
            padding-left: 25px;
        }

        #nav ol
        {
            display: flex;
            margin-left: 25px;
            margin-top: 2%;
        }

        #nav ol a
        {
            color: black;
            font-size: 12.5px;
        }

        #nav ol a:hover
        {
            color: #f58935;
        }

        .navbar-default .active
        {
            text-decoration-color: #f58935;
        }

        .topbar
        {
            height: 34px;
        }

        footer
        {
            margin-top: 46%;
    margin-bottom: 1%;
    height: 55px;
        }
  </style>
</head>


<body>
  <!-- NAVBAR STARTS -->
  <!-- container-fluid STARTS -->
  <div class="sticky-top">

    <div class="topbar bg bg-primary text-white">
      <div class="container">
        <div class="navbar-left">
          <div id="liveclock"></div>
        </div>

        <div class="navbar-right">
          <div class="user-area dropdown float-right">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{-- <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar"> --}}
              <span class="fa fa-user-circle-o text-white" style="font-size: 24px; color: black; float: right; margin-top: 4px"></span>
              <div style="margin-top:5px; float:right;">
                <span style="margin-right: 5px; color: white;">{{ session()->get('isLogin')[0]['name'] }}</span>
              </div>
            </a>

            <div class="user-menu dropdown-menu">
              <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

              <a class="nav-link" href="{{ url('logout') }}"><i class="fa fa-power-off"></i> Logout</a>
            </div>

          </div>

        </div>

        <div class="navbar-center" style="text-align:center">
          <h6 class="p-2">CHANGAN AUTO CRM</h6>
        </div>
      </div>
    </div>

    <div class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="btn btn-secondary navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars"></span>
          </button>

          <a style="float: left;" class="navbar-brand hidden-sm" href="{{ url('/') }}">
            <img src="{{asset('images/Changan-Auto-logo - black.png')}}" style="width: 150px" alt="QBS Icon" />
          </a>

          <nav>
            <ul id="nav">

              <ol>

                <a href="{{ url('/') }}">
                  <img src="{{ asset('icons/dashboard.png') }}" width="25" height="25" alt="">
                  Dashboard
                </a>
              </ol>

              <ol class="nav-item {{ Request::is('customers') ? 'active' : '' }}">
                <a href="{{ url('customers') }}">
                  <img src="{{ asset('icons/customers.png') }}" width="25" height="25" alt="">
                  Customers
                </a>
              </ol>

              <ol>
                <a href="{{ url('call-center-call') }}">
                  <img src="{{ asset('images/Icons/Call.svg') }}" width="25" height="25" alt="">
                  Call Center
                </a>
              </ol>

              <ol>
                <span class="fa fa-whatsapp" style="font-size: 24px;color: orange;"></span>

                <a href="{{ url('social-media-whatsapp') }}" style="margin-left: 6px;">
                  Social Media Pages
                </a>
              </ol>

              <ol>
                <a href="">
                  <img src="{{ asset('images/Icons/CRMLogs.svg') }}" width="25" height="25" alt="">
                  CRM Logs
                </a>
              </ol>

              <ol>
                <a href="{{ url('complaint-management') }}">
                  <img src="{{ asset('icons/complaint-management.png') }}" width="25" height="25" alt="">
                  Complaint Management
                </a>
              </ol>

              <ol>
                <a href="{{ url('customer-inquiries-list') }}">
                  <img src="{{ asset('images/Icons/Inquiry.svg') }}" width="25" height="25" alt="">
                  Inquiries
                </a>
              </ol>

            </ul>
          </nav>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

            <li class="text-white">
              <a href="{{ url('customers') }}" title="" class="menu-icon">
                <img src="{{asset('icons/customers.png')}}" border="0" alt="Module Icon" /><br />
                Customers
              </a>
            </li>

            <li class="">
              <a href="" title="" class="menu-icon">
                {{-- <img src="" border="0" alt="Module Icon"/><br/> --}}
                Home
              </a>
            </li>

            <li class="">
              <a href="" title="" class="menu-icon">
                {{-- <img src="" border="0" alt="Module Icon"/><br/> --}}
                Home
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>

  </div>
  <!-- container-fluid ENDS -->
  <!-- NAVBAR ENDS -->

  <!-- container-fluid STARTS -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 bg-white">


        <div class="col-md-12 mt-2 ml-2 ">
          <h3>
            <center><strong>AGENTS</strong></center>
          </h3>



          <table class="table table-responsive{-sm|-md|-lg|-xl} table-borderless table-hover  ">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><i class="fa fa-user-circle-o" style="font-size: 33px; "></i></td>
                <td>Zamran</td>
                <td class="points">10</td>
              </tr>
              <tr>
                <td>2</td>
                <td><i class="fa fa-user-circle-o" style="font-size: 33px; "></i></td>
                <td>Ammar</td>
                <td class="points">15</td>
              </tr>
              <tr>
                <td>3</td>
                <td><i class="fa fa-user-circle-o" style="font-size: 33px; "></i></td>
                <td>Asim</td>
                <td class="points">30</td>
              </tr>
              <tr>
                <td>4</td>
                <td><i class="fa fa-user-circle-o" style="font-size: 33px; "></i></td>
                <td>Osama</td>
                <td class="points">20</td>
              </tr>
              <tr>
                <td>5</td>
                <td><i class="fa fa-user-circle-o" style="font-size: 33px; "></i></td>
                <td>Sheikh</td>
                <td class="points">15</td>
              </tr>


            </tbody>
          </table>
        </div>

      </div>

      <!-- col-md-9 STARTS -->
      <div class="col-md-9 bg-white">

        <div class="row mt-2 mb-2 ml-4 ">
          <h3><strong>DASHBOARD</strong></h3>
        </div>

        <div class="row ml-2">
          <!-- Calls on Queue -->
          <div class="col-md-3 mt-2 ml-4  p-2 shadow  bg-white rounded ">
            <strong>
              <h4 class="ml-4">Completed Calls</h4>
            </strong> <br>
            <span>
              <i class="fa fa-check ml-4 text-success">&nbsp; &nbsp;<strong>235</strong></i>
            </span>
          </div>

          <!-- Scheduled Calls -->
          <div class="col-md-3 mt-2 ml-4 p-2 shadow  bg-white rounded">
            <strong>
              <h4 class="ml-4">Scheduled Calls</h4>
            </strong> <br>
            <span>
              <i class="fa fa-phone ml-4">&nbsp; &nbsp;<strong>25</strong></i>
            </span>
          </div>

          <!-- Calls on Queue -->
          <div class="col-md-3 mt-2  ml-4 p-2 shadow  bg-white rounded">
            <strong>
              <h4 class="ml-4">Calls on Queue</h4>
            </strong> <br>
            <span>
              <i class="fa  fa-mobile ml-4">&nbsp; &nbsp;<strong>5</strong></i>
            </span>
          </div>
        </div>

        <div class="row ml-1">

          <div class="col-md-3 mt-2 ml-4 p-2 ">
            <div class="card bg-white rounded">
              <div class="card-body shadow p-3 bg-white rounded">
                <center>
                  <h6> Number of Inquries </h6>
                  <canvas id="inquriesBarChart"></canvas>
                </center>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-2 ml-4 p-2 ">
            <div class="card bg-white rounded">
              <div class="card-body shadow p-3 bg-white rounded">
                <center>
                  <h6> Number of Complaints </h6>
                  <canvas id="complaintBarChart"></canvas>
                </center>
              </div>
            </div>
          </div>


          <div class="col-md-3 mt-2 ml-4 p-2 ">
            <div class="col-md-12  p-2 shadow  bg-white rounded">
              <strong>
                <h6 class="ml-4"><strong>Avg Call Response Time</strong></h6>
              </strong> <br>
              <span>
                <i class="fa fa-clock-o ml-4 text-secondary ">&nbsp; &nbsp;<strong>37 Sec</strong></i>
              </span>
            </div>
            <br>
            <div class="col-md-12 mt-3  p-2 shadow  bg-white rounded">
              <strong>
                <h6 class="ml-4"><strong>Customer Feedback</strong></h6>
              </strong> <br>
              <span>
                <i class="fa fa-envelope ml-4">&nbsp; &nbsp;<strong>5</strong></i>
              </span>
            </div>
          </div>

        </div>

        <div class="row ml-2">
          <div class="col-md-12">

            <div class="container mt-3">

              <div id="accordion">
                <div class="card ">
                  <div class="card-header bg-primary text-white">
                    <a class="btn text-white" data-bs-toggle="collapse" href="#collapseOne">
                      <h4>Today's Follow-Up</h4>
                    </a>
                  </div>
                  <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                    <div class="card-body">
                      <table class="table table-striped table-bordered datatable">
                        <thead class="bg-primary text-white">
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Next Follow-Up</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>Zamran</td>
                            <td>Zamran@gmail.com</td>
                            <td>03021260860</td>
                            <td>03:00PM</td>
                            <td>
                              <a href="javascript:;" data-placement="top" title="View more details" class="badge bg-primary text-white float-left">
                                <i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>Zamran</td>
                            <td>Zamran@gmail.com</td>
                            <td>03021260860</td>
                            <td>03:30PM</td>
                            <td>
                              <a href="javascript:;" data-placement="top" title="View more details" class="badge bg-primary text-white float-left">
                                <i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>Zamran</td>
                            <td>Zamran@gmail.com</td>
                            <td>03021260860</td>
                            <td>04:00PM</td>
                            <td>
                              <a href="javascript:;" data-placement="top" title="View more details" class="badge bg-primary text-white float-left">
                                <i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>Zamran</td>
                            <td>Zamran@gmail.com</td>
                            <td>03021260860</td>
                            <td>04:30PM</td>
                            <td>
                              <a href="javascript:;" data-placement="top" title="View more details" class="badge bg-primary text-white float-left">
                                <i class="fa fa-info-circle"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>Zamran</td>
                            <td>Zamran@gmail.com</td>
                            <td>03021260860</td>
                            <td>05:00PM</td>
                            <td>
                              <a href="javascript:;" data-placement="top" title="View more details" class="badge bg-primary text-white float-left">
                                <i class="fa fa-info-circle"></i></a>
                            </td>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              
                
              </div>
            </div>

          </div>

        </div>




        <div class="row ml-2">
          <div class="col-md-6 ml-4 mr-1 shadow bg-white rounded">
            <!-- Inbound Close Rate -->
            <div class="col-md-6" style="float:left;">
              <h6 class="ml-4"><strong>Inbound Calls</strong></h6>
              <div class=" mt-2 ">
                <strong>
                  <span style="float:left"> Daily</span>
                  <span style="float:right;"> 85%</span></strong> <br>
                <div class="progress mt-2">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                  </div>
                </div>
                <strong>
                  <span style="float:left"> 78 of 96</span>
                  <span style="float:right;color:green;"> +15%</span></strong> <br>
              </div>

              <div class=" mt-4 ">
                <strong>
                  <span style="float:left"> Weekly</span>
                  <span style="float:right;"> 72%</span></strong> <br>
                <div class="progress mt-2">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                  </div>
                </div>
                <strong>
                  <span style="float:left"> 78 of 96</span>
                  <span style="float:right;color:red;"> -10%</span>
                </strong>
              </div>

            </div>
            <!-- Outbound Close Rate -->
            <div class="col-md-6" style="float:left;">
              <h6 class="ml-4"><strong>Outbound Calls</strong></h6>
              <div class=" mt-2 ">
                <strong>
                  <span style="float:left"> Daily</span>
                  <span style="float:right;"> 85%</span></strong> <br>
                <div class="progress mt-2">
                  <div class="progress-bar bg-warning " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                  </div>
                </div>
                <strong>
                  <span style="float:left"> 78 of 96</span>
                  <span style="float:right;color:green;"> +15%</span></strong> <br>
              </div>

              <div class=" mt-4 ">
                <strong>
                  <span style="float:left"> Weekly</span>
                  <span style="float:right;"> 72%</span></strong> <br>
                <div class="progress mt-2">
                  <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;">
                  </div>
                </div>
                <strong>
                  <span style="float:left"> 78 of 96</span>
                  <span style="float:right;color:red;"> -10%</span>
                </strong>
              </div>

            </div>
          </div>
          
            <div class="col-md-6 ml-4 mt-2 shadow p-3 bg-white rounded">
            <div class="card ml-4 bg-white rounded">
              <div class="card-body  ">
                <center>
                  <h6> Transferred Calls</h6>
                  <canvas id="lineChart"></canvas>
                </center>
              </div>
            </div>
          </div>
        </div>
        
        <a class="btn btn-primary">Hell</a>

        <div class="row mt-2 ml-4 ">
      
        </div>







        <div class="col-md-12">
          <div class="row mt-4  ml-4 ">
            <h3>Social Media</h3>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row mt-4 mb-2 ml-4 socialmediaicons">
            <div class="col-md-2">
              <span class="badge badge-notification bg-danger">10</span>
              <img src="{{asset('images/facebook.png')}}" alt="" srcset="">
              &nbsp;<strong>Facebook</strong>
            </div>
            <div class="col-md-2">
              <span class="badge badge-notification bg-danger">2</span>
              <img src="{{asset('images/instagram.png')}}" alt="" srcset="">
              &nbsp;<strong>Instagram</strong>
            </div>
            <div class="col-md-2">
              <span class="badge badge-notification bg-danger">5</span>
              <img src="{{asset('images/whatsapp.png')}}" alt="" srcset="">
              &nbsp;<strong>WhatsApp</strong>
            </div>
            <div class="col-md-2">
              <span class="badge badge-notification bg-danger">10</span>
              <img src="{{asset('images/call.png')}}" alt="" srcset="">
              &nbsp; &nbsp;<strong>Calls</strong>
            </div>
            <div class="col-md-2">
              <span class="badge badge-notification bg-danger">5</span>
              <img src="{{asset('images/email.png')}}" alt="" srcset=""> <br>
                 &nbsp; &nbsp;<strong>E-mail</strong>
            </div>
            <div class="col-md-2">
              <span class="badge badge-notification bg-danger">4</span>
              <img src="{{asset('images/webform.png')}}" alt="" srcset="" >
              &nbsp; &nbsp;<strong>Webform</strong>
            </div>
          </div>
        </div>

      </div>

      <!-- col-md-9 ENDS -->

    </div>
    <!-- row ENDS -->



  </div>
  <!-- container-fluid ENDS -->




  </div>
  </div>
  <script src="assets/js/init-scripts/flot-chart/curvedLines.js"></script>
  <script src="assets/js/init-scripts/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js"></script>
  <script src="assets/js/init-scripts/flot-chart/flot-chart-init.js"></script>
  <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
  <!--  Chart js -->
  <script src="{{asset('vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>

  <script>
    (function($) {
      "use strict";



      // inquriesslBarChart
      var ctx = document.getElementById("inquriesBarChart");
      ctx.height = 200;
      ctx.width = 250;
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
          datasets: [{
              label: "Total Number of Inquries",
              data: [25, 50, 75, 90, 70, 25, 50],
              datawidth: "2",
              borderColor: "black",
              borderWidth: "1",
              backgroundColor: "#17467e"
            },
            {
              label: "Resolved Inquries",
              data: [15, 30, 45, 50, 50, 15, 40],
              datawidth: "2",
              borderColor: "#00BC26",
              borderWidth: "1",
              backgroundColor: "#00BC26"
            }
          ]
        }
      });
    })(jQuery);
  </script>
  <script>
    (function($) {
      "use strict";

      //linechat

      var ctxL = document.getElementById("lineChart");
      ctxL.height = 170;
      ctxL.width = 300;
      var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
          labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
          datasets: [{
            label: "Transferred Calls",
            data: [55, 50, 45, 40, 30, 25, 27],
            backgroundColor: "#25D366",
            borderColor: "#00BC26",
            borderWidth: 2
          }]
        },
        options: {
          responsive: true
        }
      });

      // complaintslBarChart
      var ctx = document.getElementById("complaintBarChart");
      ctx.height = 200;
      ctx.width = 250;
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
          datasets: [{
              label: "Total Number of Complaints",
              data: [25, 50, 75, 90, 70, 25, 50],
              datawidth: "2",
              borderColor: "#f58935",
              borderWidth: "1",
              backgroundColor: "#f58935"
            },
            {
              label: "Resolved Complaints",
              data: [15, 30, 45, 50, 50, 15, 40],
              datawidth: "2",
              borderColor: "#00BC26",
              borderWidth: "1",
              backgroundColor: "#00BC26"
            }
          ]
        }
      });

      // inquriesslBarChart
      var ctx = document.getElementById("inquriesBarChart");
      ctx.height = 200;
      ctx.width = 250;
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
          datasets: [{
              label: "Total Number of Inquries",
              data: [25, 50, 75, 90, 70, 25, 50],
              datawidth: "2",
              borderColor: "black",
              borderWidth: "1",
              backgroundColor: "#17467e"
            },
            {
              label: "Resolved Inquries",
              data: [15, 30, 45, 50, 50, 15, 40],
              datawidth: "2",
              borderColor: "#00BC26",
              borderWidth: "1",
              backgroundColor: "#00BC26"
            }
          ]
        }
      });
    })(jQuery);
  </script>
  <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="vendors/jquery/dist/jquery.min.js"></script>
  <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>


  <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="vendors/jszip/dist/jszip.min.js"></script>
  <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
  <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
  <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

</html>