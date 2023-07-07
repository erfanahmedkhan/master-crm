<!DOCTYPE html>
<html lang="en">


<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Call Center Dashboard </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <!-- plugins:css -->

    <link rel="stylesheet" href="https://www.bootstrapdash.com/demo/steelui/template/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.1.96/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://www.bootstrapdash.com/demo/steelui/template/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://www.bootstrapdash.com/demo/steelui/template/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="https://www.bootstrapdash.com/demo/steelui/template/css/horizontal-layout/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="https://changan.com.pk/images/favicon.png" />

    <style>
        body {
            background-color: #F3F4F7 !important;
            font-size: 13px !important;
        }

        h6 {
            font-size: 14px !important;
        }

        a:active {
            background-color: yellow;
        }

        a.nav-link {
            font-size: 13px !important;
        }

        .top-navbar {
            background-color: #F3F4F7 !important;
            height: 50px !important;
            font-size: 13px !important;
        }

        .horizontal-menu .top-navbar {
            font-weight: 500;
            background: #F3F4F7 !important;
            border-bottom: 1px solid #F3F4F7 !important;
            font-size: 13px !important;
        }

        .bottom-navbar {
            background-color: #F3F4F7 !important;
            height: 50px !important;
            font-size: 13px !important;
        }

        .nav-link {
            color: #ffffff !important;
            padding: 10px 0px !important;
            line-height: 1 !important;
            font-size: 13px !important;

        }

        .nav-link img {
            height: 20px !important;
        }

        .nav-link span {
            font-size: 13px !important;
            color: black;
            font-weight: bold;
        }


        .content-wrapper {
            height: 570px !important;
            overflow: auto !important;
        }

        .text-success {
            color: #28a745 !important;
        }

        .text-primary {
            color: #17467e !important;
        }

        .text-warning {
            color: #f58935 !important;
        }

        .card {
            font-size: 13px !important;
        }

        .card .card-body {
            padding: 0.5rem 0.5rem !important;
            font-size: 13px !important;
        }

        .icon-wrap {
            background: #e9e9e9 !important;
            height: auto !important;
            font-size: 13px !important;
        }

        .channels {
            height: fit-content;
            font-size: 13px !important;
        }

        .channels img {
            height: 50px !important;
            margin-top: 10px !important;
            margin-left: 10px !important;
        }

        .channels h4 {
            /* font-size: 1rem; */
            font-size: 13px !important;
        }
        .channels h3 {
            /* font-size: 1rem; */
            font-size: 13px !important;
        }

        .channels a {
            text-decoration: none;
            color: black;
            font-size: 13px !important;
        }

        .channels a:hover {
            color: #17467e !important;
        }

        a.disabled {
            pointer-events: none;

        }

        .channels-row {
            margin-left: 10px !important;
        }

        table th {
            font-weight: bold !important;
            font-size: 13px !important;
        }

        .dataTables_length {
            box-sizing: border-box !important;
            display: none !important;
        }

        .dataTables_length label {
            box-sizing: border-box !important;
            display: none !important;
        }

        .dataTables_info {
            display: none !important;
        }

        .dataTables_paginate {
            display: none !important;
        }

        th.sorting_asc:before {
            display: none !important;
        }

        th.sorting_asc:after {
            display: none !important;
        }

        th.sorting:before {
            display: none !important;
        }

        th.sorting:after {
            display: none !important;
        }

        th.sorting_desc:after {
            display: none !important;
        }

        th.sorting_desc:before {
            display: none !important;
        }

        .sorting_asc:before {
            display: none !important;
        }

        .sorting_asc:after {
            display: none !important;
        }

        div.dataTables_wrapper div.dataTables_filter {
            box-sizing: border-box !important;
            width: fit-content !important;
            float: right !important;
        }

        .dataTables_filter label input {
            border: 2px solid #17467e !important;
            box-shadow: inset 0 0.5rem 2rem 0px #fff !important;
        }

        /* div.dataTables_wrapper div.dataTables_filter input {
            box-sizing: border-box !important;
            background: rgb(255, 255, 255) !important;
            margin-left: 0 !important;
            display: inline-block !important;
            width: auto !important;
            height: 10px !important;
        } */

        #ct7 {
            color: #17467e !important;
            font-size: 13px !important;
        }

        #ct8 {
            color: #17467e !important;
            font-size: small !important;
            font-weight: bold !important;
            font-size: 13px !important;
        }

        .footer {
            background: #e9e9e9 !important;
            padding: 10px 1rem !important;
            font-weight: bold;
            font-size: 13px !important;
        }

        .shadow {
            box-shadow: inset 0 0.5rem 2rem 0px #a9a9a926 !important;
        }

        .form-control {
            font-weight: 400;
            font-size: 13px !important;
            box-shadow: inset 2px 2px 5px #e9e9e9, inset -3px -3px 7px #e9e9e9;
            height: 10px;
        }

        a {
            font-size: 13px !important;
        }
    </style>
</head>

<body class="body">
    <div class="container-scroller">
        <!-- partial:partials/_horizontal-navbar.html -->
        <div class="horizontal-menu shadow mb-5 bg-primary rounded">

            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between w-100">
                        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/Changan-Auto-logo - black.png') }}" alt="" style="height: 100px !important;padding-bottom: 10px;">
                            <div class="welcome-message d-lg-flex d-none"></div>
                        </div>
                        
                        <div class="col-md-4 navbar-menu-wrapper d-flex align-items-center ">
                            <ul class="navbar-nav navbar-nav-right">
                                <h6 id="ct8" style="margin-right: 40px;"></h6>

                            </ul>
                          
                        </div>
                        <div class="col-md-4 navbar-menu-wrapper d-flex align-items-center justify-content-between">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item dropdown">
                                    <a class="nav-link " id="notificationDropdown" href="#" data-toggle="dropdown">
                                        <i class="fa fa-user-circle fa-2x text-primary"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-success text-center">&nbsp;&nbsp;
                                                    <i class="fa fa-user text-center fa-10x"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <span class="preview-subject font-weight-medium">View Profile</span>

                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ url('logout') }}" class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-danger">&nbsp;&nbsp;
                                                    <i class="fa fa-power-off text-center"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <span class="preview-subject font-weight-medium">Logout</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </li>

                            </ul>
                            <!-- <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                                <span class="mdi mdi-menu"></span>
                            </button> -->
                        </div>
                    </div>

                </div>
            </nav>

            <nav class="bottom-navbar">
                <div class="container">
                    <div class="row"></div>
                    <ul class="nav page-navigation">
                        <!-- <li class="nav-item">
                            <img src="{{ asset('images/Changan-Auto-logo - black.png') }}" alt="" style="height: 50px;">
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('steel-dashboard') }}">
                                <img src="{{ asset('icons/dashboard.png') }}" alt="" class="rounded img-fluid">
                                <span>&nbsp;Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('customers') }}">
                                <img src="{{ asset('icons/customers.png') }}" alt="" class="rounded img-fluid">
                                <span>&nbsp;Customers</span>

                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('call-center-call') }}">
                                <img src="{{ asset('images/Icons/Call.svg') }}" alt="" class="rounded img-fluid">
                                <span>&nbsp;Call Center</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('social-media-whatsapp') }}" class="rounded img-fluid">
                                <img src="{{ asset('images/Icons/meta.svg') }}" alt="" class="rounded img-fluid">
                                <span>&nbsp;Meta</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="">
                                <img src="{{ asset('images/Icons/CRMLogs.svg') }}" alt="" class="rounded img-fluid">
                                <span>&nbsp;CRM Logs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('complaint-management') }}">
                                <img src="{{ asset('icons/complaint-management.png') }}" alt="" class="rounded img-fluid">
                                <span>&nbsp;Complaint Management</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('customer-inquiries-list') }}" class="rounded img-fluid">
                                <img src="{{ asset('images/Icons/Inquiry.svg') }}" alt="">
                                <span>&nbsp;&nbsp;Inquiries</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>



        <!-- partial -->
        <!-- COL-MD-3 starts -->

        <div class="col-md-3" style="float: right; background-color: #F3F4F7 !important;">
            <div class="container-fluid page-body-wrapper">
                <!-- main-panel starts -->
                <div class="main-panel " style="background-color: #f3f4f7 !important;">

                    <!-- content-wrapper starts -->
                    <div class="content-wrapper m-0 p-0">
                        <div class="row mb-2  ml-2">
                            <h3>AGENTS <i class="fa fa-headset"></i></h3>
                        </div>

                        <div class="row ml-2 ">
                            <h4>Agent's Status</h4>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                            <h5 class="mt-2 mb-2">Total</h5>
                                            <div class="d-flex mt-2">
                                                <div class="icon-wrap text-primary">
                                                    <b>5</b>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                            <h5 class="mt-2 mb-2">Online</h5>
                                            <div class="d-flex mt-2">
                                                <div class="icon-wrap text-primary">
                                                    <b>4</b>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                            <h5 class="mt-2 mb-2">Offline</h5>
                                            <div class="d-flex mt-2">
                                                <div class="icon-wrap text-danger">
                                                    <b>1</b>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                            <h5 class="mt-2 mb-2">Active</h5>
                                            <div class="d-flex mt-2">
                                                <div class="icon-wrap text-success">
                                                    <b>2</b>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                            <h5 class="mt-2 mb-2">On-Call</h5>
                                            <div class="d-flex mt-2">
                                                <div class="icon-wrap text-warning">
                                                    <b>1</b>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                            <h5 class="mt-2 mb-2">Break</h5>
                                            <div class="d-flex mt-2">
                                                <div class="icon-wrap text-danger">
                                                    <b>1</b>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title text-success">Active Agents</h4>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead style="font-weight: bold !important;">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>
                                                            Profile
                                                        </th>
                                                        <th>
                                                            Agent
                                                        </th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td class="py-1">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/4789/4789117.png" alt="image">
                                                        </td>
                                                        <td>
                                                            Mrs. Elena
                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td class="py-1">
                                                            <img src="https://cdn4.vectorstock.com/i/1000x1000/89/38/call-center-agent-service-icon-vector-13298938.jpg" alt="image">
                                                        </td>
                                                        <td>
                                                            Hassan Imam
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title text-warning">Agents On Break</h4>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead style="font-weight: bold !important;">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>
                                                            Profile
                                                        </th>
                                                        <th>
                                                            Agent
                                                        </th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>4</td>
                                                        <td class="py-1">
                                                            <img src="https://cdn4.vectorstock.com/i/1000x1000/89/38/call-center-agent-service-icon-vector-13298938.jpg" alt="image">
                                                        </td>
                                                        <td class="text-danger">
                                                            Hassan Imam
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-2">
                            <div class="col-md-12  ">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title text-primary">Rewards Table</h4>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>
                                                            User
                                                        </th>
                                                        <th>
                                                            Agent
                                                        </th>

                                                        <th>
                                                            Points
                                                        </th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td class="py-1">
                                                            <img src="https://cdn4.vectorstock.com/i/1000x1000/89/38/call-center-agent-service-icon-vector-13298938.jpg" alt="image">
                                                        </td>
                                                        <td>
                                                            Hassan Imam
                                                        </td>
                                                        <td>
                                                            70
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td class="py-1">
                                                            <img src="https://cdn4.vectorstock.com/i/1000x1000/89/38/call-center-agent-service-icon-vector-13298938.jpg" alt="image">
                                                        </td>
                                                        <td>
                                                            Hassan Imam
                                                        </td>
                                                        <td>
                                                            65
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td class="py-1">
                                                            <img src="https://cdn-icons-png.flaticon.com/512/4789/4789117.png" alt="image">
                                                        </td>
                                                        <td>
                                                            Hassan Imam
                                                        </td>
                                                        <td>
                                                            65
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td class="py-1">
                                                            <img src="https://cdn4.vectorstock.com/i/1000x1000/89/38/call-center-agent-service-icon-vector-13298938.jpg" alt="image">
                                                        </td>
                                                        <td>
                                                            Hassan Imam
                                                        </td>
                                                        <td>
                                                            60
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td class="py-1">
                                                            <img src="https://cdn4.vectorstock.com/i/1000x1000/89/38/call-center-agent-service-icon-vector-13298938.jpg" alt="image">
                                                        </td>
                                                        <td>
                                                            Hassan Imam
                                                        </td>
                                                        <td>
                                                            60
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                </div>
                <!-- main-panel ends -->
            </div>
        </div>

        <!-- COL-MD-3 ends -->
        <!-- COL-MD-9 starts -->
        <div class="col-md-9">
            <!-- page-body-wrapper starts -->
            <div class="container-fluid page-body-wrapper ">
                <!-- main-panel starts -->
                <div class="main-panel ">
                    <!-- content-wrapper starts -->
                    <div class="content-wrapper m-0 p-0 style="background-color: #F3F4F7!important;">

                        <div class="row mb-2  ml-2">
                            <h3>DASHBOARD</h3>
                        </div>

                        <div class="row ml-2 ">
                            <h4 style="background-color: #F3F4F7">CHANNELS</h4>
                        </div>

                        <!-- CHANNELS CARD ROW STARTS -->
                        <div class="row mt-1 mb-1">
                            <!-- Facebook -->
                            <div class="col-md-2 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body channels">
                                        <a href="social-media-facebook">
                                            <img src="{{asset('images/facebook.png')}}" alt="Facebook" srcset="">
                                            <p>
                                                <h4 class="ml-2">Facebook</h4>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Instagram -->
                            <div class="col-md-2 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body channels">
                                        <a href="social-media-instagram">
                                            <img src="{{asset('images/instagram.png')}}" alt="Instagram" srcset="">
                                            <p>
                                                <h4 class="ml-2">Instagram</h4>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- WhatsApp -->
                            <div class="col-md-2 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body channels">
                                        <a href="social-media-whatsapp">
                                            <img src="{{asset('images/whatsapp.png')}}" alt="WhatsApp" srcset="">
                                            <p>
                                                <h4 class="ml-2">WhatsApp</h4>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Calls -->
                            <div class="col-md-2 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body channels">
                                        <a href="call-center-call">
                                            <img src="{{asset('images/call.png')}}" alt="Calls" srcset="">
                                            <p>
                                                <h4 class="ml-2">Calls</h4>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="col-md-2 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body channels">
                                        <a href="marketing-campaign-email">
                                            <img src="{{asset('images/outlook.png')}}" alt="Email" srcset="">
                                            <p>
                                                <h4 class="ml-2">Email</h4>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Webform -->
                            <div class="col-md-2 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body channels">
                                        <a href="web-forms-management" class="disabled">
                                            <img src="{{asset('images/webform.png')}}" alt="Webform" srcset="">
                                            <p>
                                                <h4 class="ml-2">Webform</h4>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CHANNELS CARD ROW ENDS -->

                        <div class="row ml-2 ">
                            <h4>TODAY</h4>
                        </div>

                        <!-- TODAY CARD ROW STARTS -->
                        <div class="row">
                            <!-- Follow-Up Calls -->
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Follow-Up Calls</h6>
                                        <div class="d-flex mt-3">
                                            <div class="icon-wrap">
                                                <i class="fa fa-phone text-primary"></i>
                                            </div>
                                            <div class="mt-2 ml-4">
                                                <p class="font-weight-bold">
                                                <h1 class="text-primary">25</h1>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Follow-Up Calls -->

                            <!-- Completed Calls -->
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Total Success Calls</h6>
                                        <div class="d-flex  mt-3">
                                            <div class="icon-wrap">
                                                <i class="fa fa-check text-success"></i>
                                            </div>
                                            <div class="mt-2 ml-4">
                                                <p class="font-weight-bold">
                                                <h1 class="text-success">25</h1>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Completed Calls -->

                            <!-- Calls on Queue -->
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Calls on Queue</h6>
                                        <div class="d-flex mt-3">
                                            <div class="icon-wrap">
                                                <i class="fa fa-mobile-screen-button text-warning"></i>
                                            </div>
                                            <div class="mt-2 ml-4">
                                                <p class="font-weight-bold">
                                                <h1 class="text-warning">25</h1>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Calls on Queue -->

                            <!-- Customers Feedback -->
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Customers Feedback</h6>
                                        <div class="d-flex mt-3">
                                            <div class="icon-wrap">
                                                <i class="fa fa-message text-warning"></i>
                                            </div>
                                            <div class="mt-2 ml-4">
                                                <p class="font-weight-bold">
                                                <h1 class="text-warning">25</h1>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Customers Feedback -->
                        </div>
                        <!-- TODAY CARD ROW ENDS -->

                        <div class="row ml-2 ">
                            <h5>INBOUND & OUTBOUND CALLS</h5>
                        </div>

                        <!-- INBOUND & OUTBOUND CALLS ROW STARTS -->
                        <div class="row">
                            <!-- TODAY'S INBOUND -->
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Today's Inbound Success</h6>
                                        <div class="d-flex mt-3">
                                            <div class="icon-wrap">
                                                <i class="fa fa-arrow-down text-primary"></i>
                                                <i class="fa fa-arrow-down text-primary"></i>
                                            </div>
                                            <div class="mt-2 ml-4">
                                                <p class="font-weight-bold">
                                                <h1 class="text-primary">25</h1>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Weekly Inbound -->
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Today's Inbound Abandoned</h6>
                                        <div class="d-flex  mt-3">
                                            <div class="icon-wrap">
                                                <i class="fa fa-arrow-down text-primary"></i>
                                                <i class="fa fa-arrow-down text-primary"></i>
                                            </div>
                                            <div class="mt-2 ml-4">
                                                <p class="font-weight-bold">
                                                <h1 class="text-primary">25</h1>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- TODAY'S OUTBOUND -->
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="text-warning">Today's Outbound Success</h6>
                                        <div class="d-flex mt-3">
                                            <div class="icon-wrap">
                                                <i class="fa fa-arrow-up text-warning"></i>
                                                <i class="fa fa-arrow-up text-warning"></i>
                                            </div>
                                            <div class="mt-2 ml-4">
                                                <p class="font-weight-bold">
                                                <h1 class="text-warning">25</h1>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Weekly Outbound -->
                            <div class="col-md-3 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="text-warning" style="font-size: 14px; font-weight:bold;">Today's Outbound Abandoned</span>
                                        <div class="d-flex  mt-3">
                                            <div class="icon-wrap">
                                                <i class="fa fa-arrow-up text-warning"></i>
                                                <i class="fa fa-arrow-up text-warning"></i>
                                            </div>
                                            <div class="mt-2 ml-4">
                                                <p class="font-weight-bold">
                                                <h1 class="text-warning">25</h1>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- INBOUND & OUTBOUND CALLS ROW ENDS -->

                        <div class="row ml-2">
                            <h5>TODAY'S FOLLOW-UP</h5>
                        </div>

                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card">

                                    <!-- <h6>Current Date Time (PST)</h6>
                                <h6 id="ct7"></h6> -->

                                    <div class=" mt-2 table-sorter-wrapper col-md-12 table-responsive">
                                        <table class="data-table-search table">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Next Follow-Up</th>
                                                    <th>Agent Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>Ammar</td>
                                                    <td>Ammar@gmail.com</td>
                                                    <td>03021260860</td>
                                                    <td>03:00PM</td>
                                                    <td>Hasan Imam</td>
                                                    <td>
                                                        <a href="http://sodabaz.com/MasterMotor/public/customers" data-placement="top" title="View more details" class="badge bg-primary text-white float-left">
                                                            <i class="fa fa-info-circle"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Zamran</td>
                                                    <td>Zamran@gmail.com</td>
                                                    <td>03021260861</td>
                                                    <td>03:30PM</td>
                                                    <td>Hasan Imam</td>
                                                    <td>
                                                        <a href="javascript:;" data-placement="top" title="View more details" class="badge bg-primary text-white float-left">
                                                            <i class="fa fa-info-circle"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Asad</td>
                                                    <td>Asad@gmail.com</td>
                                                    <td>03021260862</td>
                                                    <td>04:00PM</td>
                                                    <td>Hasan Imam</td>
                                                    <td>
                                                        <a href="javascript:;" data-placement="top" title="View more details" class="badge bg-primary text-white float-left">
                                                            <i class="fa fa-info-circle"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Rehman</td>
                                                    <td>Rehman@gmail.com</td>
                                                    <td>03021260863</td>
                                                    <td>04:30PM</td>
                                                    <td>Hasan Imam</td>
                                                    <td>
                                                        <a href="javascript:;" data-placement="top" title="View more details" class="badge bg-primary text-white float-left">
                                                            <i class="fa fa-info-circle"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Ahmed</td>
                                                    <td>Ahmed@gmail.com</td>
                                                    <td>03021260864</td>
                                                    <td>05:00PM</td>
                                                    <td>Hasan Imam</td>
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
                    <!-- content-wrapper ends -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- COL-MD-9 ends -->

        <!-- partial ends-->

        <!-- FOOTER STARTS -->
        <footer class="footer fixed-bottom" style="background-color: #F3F4F7 !important;">
            <div class="row">
                <div class="col-md-4 w-100 clearfix">
                    <h6 class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2022
                        <a href="http://sodabaz.com/MasterMotor/public/" target="_blank">CHANGAN AUTO</a>. All rights
                        reserved.
                    </h6>
                </div>

                <div class="col-md-4 text-center" id="ct7"></div>
                <div class="col-md-4">
                    <h6 class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                        DEVELOPED BY <a href="https://www.qbsco.net/" class=" title='Tooltip on top'">QBS</a>
                    </h6>
                </div>
            </div>

        </footer>
        <!-- FOOTER ENDS -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/dashboard.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- End custom js for this page-->

    <script>
        function display_ct7() {
            var x = new Date()
            var ampm = x.getHours() >= 12 ? ' PM' : ' AM';
            hours = x.getHours() % 12;
            hours = hours ? hours : 12;
            hours = hours.toString().length == 1 ? 0 + hours.toString() : hours;

            var minutes = x.getMinutes().toString()
            minutes = minutes.length == 1 ? 0 + minutes : minutes;

            var seconds = x.getSeconds().toString()
            seconds = seconds.length == 1 ? 0 + seconds : seconds;

            var month = (x.getMonth() + 1).toString();
            month = month.length == 1 ? 0 + month : month;

            var dt = x.getDate().toString();
            dt = dt.length == 1 ? 0 + dt : dt;

            var x1 = month + "/" + dt + "/" + x.getFullYear();
            x1 = x1 + "  " + hours + ":" + minutes + ":" + seconds + " " + ampm;
            document.getElementById('ct7').innerHTML = x1;
            document.getElementById('ct8').innerText = x1;
            display_c7();
        }

        function display_c7() {
            var refresh = 1000; // Refresh rate in milli seconds
            mytime = setTimeout('display_ct7()', refresh)
        }
        display_c7()
    </script>
</body>

</html> <!-- plugins:js -->
<script src="https://www.bootstrapdash.com/demo/steelui/template/vendors/js/vendor.bundle.base.js"></script>
<script src="https://www.bootstrapdash.com/demo/steelui/template/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<script src="https://www.bootstrapdash.com/demo/steelui/template/js/off-canvas.js"></script>
<script src="https://www.bootstrapdash.com/demo/steelui/template/js/hoverable-collapse.js"></script>
<script src="https://www.bootstrapdash.com/demo/steelui/template/js/template.js"></script>
<script src="https://www.bootstrapdash.com/demo/steelui/template/js/settings.js"></script>
<script src="https://www.bootstrapdash.com/demo/steelui/template/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('assets/js/steel-dashboard.js')}}"></script>
<script src="https://www.bootstrapdash.com/demo/steelui/template/js/todolist.js"></script>
<!-- <script src="https://www.bootstrapdash.com/demo/steelui/template/js/data-table.js"></script> -->
<!-- End custom js for this page-->
</body>


<!-- DATA TABLE SCRIPT -->
<script>
    (function($) {
        'use strict';
        $(function() {
            $('.data-table-search').DataTable({
                "aLengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ],

                "language": {
                    search: ""
                }
            });
            $('.data-table-search').each(function() {
                var datatable = $(this);
                // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
                search_input.attr('placeholder', 'Search');
                search_input.removeClass('form-control-sm');
                // LENGTH - Inline-Form control
                var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
                length_sel.removeClass('form-control-sm');
            });
        });
    })(jQuery);
</script>

</html>