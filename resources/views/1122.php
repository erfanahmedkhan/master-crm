@php
    $title = 'CRM - Complaints';
@endphp
@extends('template')
@section('content')
    <style>
        #submitBtn {
            display: none;
        }

        .form-control {
            font-size: 12px;
        }

        .complaintBtn {
            font-size: 10px !important;
        }
    </style>
    <!-- main-content STARTS -->
    <div class="main-content mt-3">
        <!-- section STARTS -->
        <section class="section">
            <!-- section-body STARTS -->
            <div class="section-body">
                <!-- container STARTS -->
                <div class="container-fluid">
                    <!-- container ROW STARTS -->
                    <div class="row">
                        <div class="col-md-12">


                            @if (session('msg'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('msg') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('error-msg'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>{{ session('error-msg') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <!-- CARD STARTS -->
                            <div class="card">
                                <!-- card-header STARTS -->
                                <div class="card-header">
                                    <i class="fa fa-arrow-circle-left text text-danger" onclick="goback()"
                                        style="cursor: pointer; font-size: 20px"></i>
                                    <strong class="card-title">&nbsp;Customer Complaint Form</strong>
                                </div>
                                <!-- card-body STARTS -->
                                <div class="card-body embed-responsive" style="overflow: auto">
                                    <!-- <div class="card-body"> -->
                                    <!-- ROW STARTS -->
                                    <form id="customerinquiryformid" action="{{ url('add-customer-inquiry') }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="mobile" class="form-label ">Mobile Number <span
                                                        class="asterisk text-danger">*</span></label>
                                                <input type="text" class="form-control shadow-sm  bg-white"
                                                    id="mobile" name="mobile" pattern="[0-9]{12}" required
                                                    value="{{ !empty($customer[0]->mobile) ? $customer[0]->mobile : '92' }}"
                                                    required placeholder="92xxxxxxxxxx" title="Max lenth is 12">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="" class="form-label">Customer Name <span
                                                        class="asterisk text-danger">*</span></label>
                                                <input type="text" class="form-control shadow-sm bg-white rounded"
                                                    id="customername" name="name" required
                                                    value="{{ @$customer[0]->name }}" required placeholder="Customer Name">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control shadow-sm  bg-white"
                                                    id="email" name="email" value="{{ @$customer[0]->email }}"
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                                    placeholder="Email Address">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Select City <i class='text-danger'>*</i></label>
                                                <select class="form-control bg-white " name="city" id="city"
                                                    required onchange="Getcity(this.value)">
                                                    <option value="0">Select City</option>
                                                    @foreach ($city as $cities)
                                                        <option value="{{ $cities->id }}" <?php echo $cities->id == @$customer[0]->city ? 'selected' : ''; ?>>
                                                            {{ $cities->city }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <button type="button" style="float: right;"
                                                    class="btn btn-round btn-primary complaintBtn" id="aftersalecomplainBtn"
                                                    data-type="After Sale" onclick="getcomplaincpt(this);"
                                                    data-toggle="collapse" data-target="#aftersaleComplain"><i
                                                        class="fa fa-comments" aria-hidden="true"></i>&nbsp;After
                                                    Sale</button>
                                                <button type="button" style="float: right;"
                                                    class="btn btn-round btn-primary complaintBtn mr-1" id="salecomplainBtn"
                                                    data-type="Sales" onclick="getcomplaincpt(this);" data-toggle="collapse"
                                                    data-target="#saleComplain"><i class="fa fa-comments"
                                                        aria-hidden="true"></i>&nbsp;Sale</button>
                                                <button type="button" style="float: right;"
                                                    class="btn btn-round btn-primary complaintBtn mr-1"
                                                    id="presalecomplainBtn" data-toggle="collapse"
                                                    data-target="#presaleComplain"><i class="fa fa-comments"
                                                        aria-hidden="true"></i>&nbsp;Pre-Sale </button>
                                                <button type="button" style="float: right;"
                                                    class="btn btn-round btn-primary complaintBtn mr-1"
                                                    id="gencomplainBtn" data-toggle="collapse"
                                                    data-target="#genComplain"><i class="fa fa-comments"
                                                        aria-hidden="true"></i>&nbsp;General </button>
                                            </div>
                                        </div>
                                        <!--General Complaint (general_compaint) starts-->
                                        <div class="row collapse complaint-div" id="genComplain">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <h5><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;General
                                                        Complaint</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="complaint_type_gen" class="form-label">Complaint
                                                        Type</label>
                                                    <input type="text"
                                                        class="form-control shadow-sm p-3 mb-3 bg-white text-center complaint_type"
                                                        name="complaint_type_gen" id="complaint_type_gen" value="General"
                                                        readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="gen_complain_source" class="form-label">Select Source <i
                                                            class='text-danger'>*</i></label>
                                                    <select class="form-control shadow-sm bg-white"
                                                        name="gen_complain_source" id="gen_complain_source">
                                                        @foreach ($source as $general_sources)
                                                            <option value="{{ $general_sources->source }}">
                                                                {{ $general_sources->source }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="gen_complain_dealership" class="form-label">Complain
                                                        Dealership <i class='text-danger'>*</i></label>
                                                    <select class="form-control bg-white complaindealership"
                                                        id="gen_complain_dealership" name="gen_complain_dealership"
                                                        onchange="getDealerships()">
                                                    </select>
                                                </div>
                                                <!-- Complain Type: CPT -->
                                                <div class="col-3">
                                                    <label for="gen_complain_cpt_type" class="form-label">Complaint Type:
                                                        CPT</label>
                                                    <select class="form-control shadow-sm  bg-white cpt complain_cpt_type"
                                                        name="gen_complain_cpt_type" id="gen_complain_cpt_type">
                                                        <option value="">Select Complain CPT</option>
                                                        <option value="3">Publicity and promotion</option>
                                                    </select>
                                                </div>
                                                <!-- Complain Type: SPG -->
                                                <div class="col-3">
                                                    <label for="gen_complain_spg_type" class="form-label">Complaint Type:
                                                        SPG
                                                    </label>
                                                    <select class="form-control shadow-sm  bg-white complain_spg_type"
                                                        name="gen_complain_spg_type" id="">
                                                        <option value="">Select Complain SPG</option>
                                                        <option value="3">Publicity and promotion</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Complain Type: CCC -->
                                                <div class="col-3">
                                                    <label for="gen_complain_ccc_type" class="form-label">Complaint Type:
                                                        CCC
                                                    </label>
                                                    <select class="form-control shadow-sm bg-white complain_ccc_type"
                                                        name="gen_complain_ccc_type" id="gen_complain_ccc_type">
                                                        <option value="">Select Complain CCC</option>
                                                        <option value="1">False propaganda</option>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="" class="form-label mt-2">Complaint
                                                        Priority <i class='text-danger'>*</i></label> <br>

                                                    <label class="radio-inline" for=""> </label>
                                                    <input type="radio" name="gen_complaint_priority"
                                                        class="shadow-sm bg-white" id="" value="High">
                                                    <span>High</span>

                                                    <label class="radio-inline" for=""> </label>
                                                    <input type="radio" name="gen_complaint_priority"
                                                        class="ml-4 shadow-sm bg-white" value="Medium" checked>
                                                    <span>Medium</span>

                                                    <label class="radio-inline" for="complaint_priority"> </label>
                                                    <input type="radio" name="gen_complaint_priority"
                                                        class="ml-4 shadow-sm bg-white" value="Low">
                                                    <span>Low</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12" id="">
                                                    <label for="gen_complain_voc" class="form-label">Write VOC <i
                                                            class='text-danger'>*</i></label>
                                                    <textarea class="form-control shadow-sm bg-white rounded" id="gen_complain_voc" name="gen_complain_voc"
                                                        placeholder="Write customer's complain here..." rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="gen_agent_complain_notes" class="form-label">Agent
                                                        Notes</label>
                                                    <textarea class="form-control shadow-sm bg-white rounded" id="gen_agent_complain_notes"
                                                        name="gen_agent_complain_notes" placeholder="Take notes if necessary..." rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="submit" value="Submit" id=""
                                                        class="btn btn-round btn-primary" style="float: right">
                                                </div>
                                            </div>
                                        </div>
                                        <!--General Complaint (general_compaint) ends-->
                                        <!--Presale complaint starts-->
                                        <div class="row collapse complaint-div" id="presaleComplain">
                                            <div class="row">
                                                <div class="col-md-12 mb-4">
                                                    <h5><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;Complaint
                                                        Details</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="complaint_type_presale" class="form-label">Complaint
                                                        Type</label>
                                                    <input type="text"
                                                        class="form-control shadow-sm p-3 mb-3 bg-white text-center complaint_type"
                                                        name="complaint_type_presale" id="complaint_type_presale"
                                                        value="Pre-Sale" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="form-label">Select source <i
                                                            class='text-danger'>*</i></label>
                                                    <select class="form-control shadow-sm  bg-white"
                                                        name="presale_complain_source" id="presale_complain_source">
                                                        @foreach ($source as $presale_sources)
                                                            <option value="{{ $presale_sources->source }}">
                                                                {{ $presale_sources->source }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="dealership" class="form-label">Complain Dealership <i
                                                            class='text-danger'>*</i></label>
                                                    <select class="form-control bg-white complaindealership"
                                                        id="" name="presale_complain_dealership"
                                                        onchange="getDealerships()">
                                                    </select>
                                                </div>
                                                <!-- Complain Type: CPT -->
                                                <div class="col-3">
                                                    <label for="presale_complain_cpt_type" class="form-label">Complaint
                                                        Type:
                                                        CPT</label>
                                                    <select class="form-control shadow-sm  bg-white cpt complain_cpt_type"
                                                        name="presale_complain_cpt_type" id="">
                                                        <option value="">Select Complain CPT</option>
                                                        <option value="3">Publicity and promotion</option>
                                                    </select>
                                                </div>
                                                <!-- Complain Type: SPG -->
                                                <div class="col-3">
                                                    <label for="presale_complain_spg_type" class="form-label">Complaint
                                                        Type:
                                                        SPG </label>
                                                    <select class="form-control shadow-sm  bg-white complain_spg_type"
                                                        name="presale_complain_spg_type" id="">
                                                        <option value="">Select Complain SPG</option>
                                                        <option value="3">Publicity and promotion</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Complain Type: CCC -->
                                                <div class="col-3">
                                                    <label for="presale_complain_ccc_type" class="form-label">Complaint
                                                        Type:
                                                        CCC </label>
                                                    <select class="form-control shadow-sm bg-white complain_ccc_type"
                                                        name="presale_complain_ccc_type" id="">
                                                        <option value="">Select Complain CCC</option>
                                                        <option value="1">False propaganda</option>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="presale_complaint_priority"
                                                        class="form-label mt-2">Complaint
                                                        Priority <i class='text-danger'>*</i></label> <br>

                                                    <label class="radio-inline" for=""></label>
                                                    <input type="radio" name="presale_complaint_priority"
                                                        class="shadow-sm bg-white" value="High">
                                                    <span>High</span>

                                                    <label class="radio-inline" for="complaint_priority"> </label>
                                                    <input type="radio" name="presale_complaint_priority"
                                                        class="ml-4 shadow-sm bg-white" value="Medium" checked>
                                                    <span>Medium</span>

                                                    <label class="radio-inline" for="complaint_priority"> </label>
                                                    <input type="radio" name="presale_complaint_priority"
                                                        class="ml-4 shadow-sm bg-white" value="Low">
                                                    <span>Low</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="presale_complain_voc" class="form-label">Write VOC <i
                                                            class='text-danger'>*</i></label>
                                                    <textarea class="form-control shadow-sm bg-white rounded" id="" name="presale_complain_voc"
                                                        placeholder="Write Complain Here..." rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="presale_agent_complain_notes" class="form-label">Agent
                                                        Notes</label>
                                                    <textarea class="form-control shadow-sm bg-white rounded" id="presale_agent_complain_notes"
                                                        name="presale_agent_complain_notes" placeholder="Agent Notes..." rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="submit" value="Submit" id=""
                                                        class="btn btn-round btn-primary" style="float: right">
                                                </div>
                                            </div>
                                        </div>
                                        <!--Presale complaints ends-->
                                        <!--Sale complaint starts-->
                                        <div class="row collapse complaint-div" id="saleComplain">
                                            <div class="col-md-12 mb-4">
                                                <h5><i class="fa fa-comments" aria-hidden="true"></i> Complaint Details
                                                </h5>
                                            </div>
                                            <!-- row starts -->
                                            <div class="row">
                                                <div class="col-md-2" id="">
                                                    <label for="complaint_type_sale" class="form-label">Complaint
                                                        Type</label>
                                                    <input type="text"
                                                        class="form-control shadow-sm p-3 mb-3 bg-white text-center complaint_type"
                                                        name="complaint_type_sale" value="Sale" readonly>
                                                </div>
                                            </div>
                                            <!-- row starts -->
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="sale_complain_source" class="form-label">Select source <i
                                                            class='text-danger'>*</i></label>
                                                    <select class="form-control shadow-sm  bg-white"
                                                        name="sale_complain_source" id="">
                                                        <option value="">Select Source</option>
                                                        @foreach ($source as $sale_sources)
                                                            <option value="{{ $sale_sources->source }}">
                                                                {{ $sale_sources->source }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label for="sale_pbo" class="form-label">PBO</label>
                                                    <input type="text" name="sale_pbo" id="sale_pbo"
                                                        class="form-control shadow-sm p-3 mb-3 bg-white dmsfield"
                                                        placeholder="PBO">
                                                </div>

                                                <div class="col-3">
                                                    <label for="sale_customer_vehicle" class="form-label">Vehicle</label>
                                                    <input type="text" name="sale_customer_vehicle"
                                                        id="sale_customer_vehicle"
                                                        class="form-control shadow-sm p-3 mb-3  dmsfield customer_vehicle"
                                                        readonly>
                                                </div>

                                                <div class="col-3">
                                                    <label for="sale_invoice_number" class="form-label">Invoice
                                                        Number</label>
                                                    <input type="text" name="sale_invoice_number"
                                                        id="sale_invoice_number"
                                                        class="form-control shadow-sm p-3 mb-3 dmsfield" readonly>
                                                </div>

                                                <div class="col-3">
                                                    <label for="sale_invoice_date" class="form-label">Invoice Date</label>
                                                    <input type="date" name="sale_invoice_date" id="sale_invoice_date"
                                                        class="form-control shadow-sm p-3 mb-3  dmsfield" readonly>
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label">Sales Order Number</label>
                                                    <input type="text" name="sale_sale_order_number"
                                                        id="sale_sale_order_number"
                                                        class="form-control shadow-sm p-3 mb-3 bg-white"
                                                        placeholder="Sales Order Number">
                                                </div>
                                                <div class="col-3">
                                                    <label for="sale_vehicle_colour" class="form-label ">Vehicle Colour <i
                                                            class='text-danger'>*</i></label>
                                                    <input type="text" name="sale_vehicle_colour"
                                                        id="sale_vehicle_colour" class="form-control shadow-sm p-3 mb-3"
                                                        readonly>
                                                </div>
                                            </div>
                                            <hr>
                                            <!-- row starts -->
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="dealership" class="form-label">Complain Dealership <i
                                                            class='text-danger'>*</i></label>
                                                    <select class="form-control bg-white complaindealership"
                                                        id="" name="sale_complain_dealership"
                                                        onchange="getDealerships()">
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label ">Complain Type: CPT <i
                                                            class='text-danger'>*</i></label>
                                                    <select class="form-control shadow-sm  bg-white cpt complain_cpt_type"
                                                        id="sale_complain_cpt_type" name="sale_complain_cpt_type"
                                                        onchange="Getcpt(this.value)">
                                                        <option value="">Select Complain CPT</option>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label ">Complain Type: SPG </label>
                                                    <select class="form-control shadow-sm  bg-white complain_spg_type"
                                                        id="sale_complain_spg_type" name="sale_complain_spg_type"
                                                        onchange="Getspg(this.value)"></select>
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label ">Complain Type: CCC </label>
                                                    <select class="form-control shadow-sm bg-white complain_ccc_type"
                                                        id="sale_complain_ccc_type"
                                                        name="sale_complain_ccc_type"></select>
                                                </div>
                                            </div>
                                            <!-- row starts -->
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="" class="form-label mt-2">Complaint Priority <i
                                                            class='text-danger'>*</i></label> <br>

                                                    <label class="radio-inline" for=""> </label>
                                                    <input type="radio" name="sale_complaint_priority"
                                                        class="shadow-sm bg-white" value="High">
                                                    <span>High</span>

                                                    <label class="radio-inline" for="complaint_priority"> </label>
                                                    <input type="radio" name="sale_complaint_priority"
                                                        class="ml-4 shadow-sm bg-white" value="Medium" checked>
                                                    <span>Medium</span>

                                                    <label class="radio-inline" for="complaint_priority"> </label>
                                                    <input type="radio" name="sale_complaint_priority"
                                                        class="ml-4 shadow-sm bg-white" value="Low">
                                                    <span>Low</span>
                                                </div>
                                            </div>
                                            <!-- row starts -->
                                            <div class="row">
                                                <div class="col-12 mt-2">
                                                    <label for="sale_complain_voc" class="form-label">Write VOC <i
                                                            class='text-danger'>*</i></label>
                                                    <textarea class="form-control shadow-sm bg-white rounded" id="sale_complain_voc" name="sale_complain_voc"
                                                        rows="5" placeholder="Write customer's complain here..."></textarea>
                                                </div>
                                            </div>
                                            <!-- row starts -->
                                            <div class="row">
                                                <div class="col-12 mt-2">
                                                    <label for="sale_agent_complain_notes" class="form-label">Agent
                                                        Notes</label>
                                                    <textarea class="form-control shadow-sm bg-white rounded" id="sale_agent_complain_notes"
                                                        name="sale_agent_complain_notes" rows="5" placeholder="Take notes if necessary..."></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="submit" value="Submit" id=""
                                                        class="btn btn-round btn-primary" style="float: right">
                                                </div>
                                            </div>
                                        </div>

                                        <!--Sale complaints ends-->
                                        <!--After Sale complaint starts-->
                                        <div class="row collapse complaint-div" id="aftersaleComplain">
                                            <div class="col-md-12 mb-4">
                                                <h5><i class="fa fa-comments" aria-hidden="true"></i> Complaint Details
                                                </h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2" id="">
                                                    <label for="complaint_type_aftersale" class="form-label">Complaint
                                                        Type</label>
                                                    <input type="text"
                                                        class="form-control shadow-sm p-3 mb-3 bg-white text-center complaint_type"
                                                        name="complaint_type_aftersale" value="After Sale" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3" id="">
                                                    <label class="form-label">Select source <i
                                                            class='text-danger'>*</i></label>
                                                    <select class="form-control shadow-sm  bg-white"
                                                        name="aftersale_complain_source" id="">
                                                        <option value="">Select Source</option>
                                                        @foreach ($source as $aftersale_sources)
                                                            <option value="{{ $aftersale_sources->source }}">
                                                                {{ $aftersale_sources->source }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label">Registered Vehicles <i
                                                            class='text-danger'>*</i></label>
                                                    <select class="form-control shadow-sm bg-white customer_vehicle"
                                                        id="" name="aftersale_customer_vehicle">
                                                        <option value="">Select Customer Vehicle</option>>
                                                        @foreach ($vehicles as $Vehicle)
                                                            <option value="{{ $Vehicle->vehicle_name }}">
                                                                {{ $Vehicle->vehicle_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label">Chasis Number</label>
                                                    <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                        name="aftersale_chasis_number" id="aftersale_chasis_number"
                                                        placeholder="Chasis Number">
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label">Engine Number</label>
                                                    <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                        name="aftersale_engine_number" id="aftersale_engine_number"
                                                        placeholder="Engine Number">
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label">PBO</label>
                                                    <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                        id="aftersale_pbo" name="aftersale_pbo" placeholder="PBO">
                                                </div>
                                                <div class="col-3 ">
                                                    <label class="form-label">Registration Number</label>
                                                    <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                        name="aftersale_registration_number"
                                                        id="aftersale_registration_number"
                                                        placeholder="Registration Number">
                                                </div>
                                                <div class="col-3">
                                                    <label for="aftersale_vehicle_colour" class="form-label">Vehicle
                                                        Colour <i class='text-danger'>*</i></label>
                                                    <input type="text" name="aftersale_vehicle_colour"
                                                        id="aftersale_vehicle_colour"
                                                        class="form-control shadow-sm p-3 mb-3"
                                                        placeholder="Color" readonly>

                                                </div>
                                                <div class="col-3 ">
                                                    <label class="form-label">Invoice Date</label>
                                                    <input type="date" class="form-control shadow-sm p-3 mb-3"
                                                        name="aftersale_invoice_date" id="aftersale_invoice_date" readonly>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-3 ">
                                                    <label for="dealership" class="form-label">Complain Dealership <i
                                                            class='text-danger'>*</i></label>
                                                    <select class="form-control bg-white complaindealership"
                                                        id="complain_dealership" name="aftersale_complain_dealership"
                                                        onchange="getDealerships()">
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label ">Complain Type: CPT <i
                                                            class='text-danger'>*</i></label>
                                                    <select class="form-control shadow-sm  bg-white cpt complain_cpt_type"
                                                        id="aftersale_complain_cpt_type"
                                                        name="aftersale_complain_cpt_type"
                                                        onchange="two_function(this.value)">
                                                        <option value="">Select Complain CPT</option>
                                                    </select>
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label ">Complain Type: SPG </label>
                                                    <select class="form-control shadow-sm  bg-white complain_spg_type"
                                                        id="complain_spg_type" name="aftersale_complain_spg_type"
                                                        onchange="Getspg(this.value)"></select>
                                                </div>
                                                <div class="col-3">
                                                    <label class="form-label ">Complain Type: CCC </label>
                                                    <select class="form-control shadow-sm bg-white complain_ccc_type"
                                                        id="complain_ccc_type"
                                                        name="aftersale_complain_ccc_type"></select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="" class="form-label mt-2">Complaint Priority <i
                                                            class='text-danger'>*</i></label> <br>
                                                    <label class="radio-inline" for=""> </label>
                                                    <input type="radio" name="aftersale_complaint_priority"
                                                        class="shadow-sm bg-white" value="High">
                                                    <span>High</span>
                                                    <label class="radio-inline" for="complaint_priority"> </label>
                                                    <input type="radio" name="aftersale_complaint_priority"
                                                        class="ml-4 shadow-sm bg-white" value="Medium" checked>
                                                    <span>Medium</span>
                                                    <label class="radio-inline" for="complaint_priority"> </label>
                                                    <input type="radio" name="aftersale_complaint_priority"
                                                        class="ml-4 shadow-sm bg-white" value="Low">
                                                    <span>Low</span>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <label for="aftersale_complain_voc" class="form-label">Write VOC <i
                                                            class='text-danger'>*</i></label>
                                                    <textarea class="form-control shadow-sm bg-white rounded" id="aftersale_complain_voc" name="aftersale_complain_voc"
                                                        rows="5" placeholder="Write customer's complain here..."></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-12">
                                                    <label for="aftersale_agent_complain_notes" class="form-label">Agent
                                                        Notes</label>
                                                    <textarea class="form-control shadow-sm bg-white rounded" id="aftersale_agent_complain_notes"
                                                        name="aftersale_agent_complain_notes" rows="5" placeholder="Take notes if necessary..."></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" value="Submit" id=""
                                                        class="btn btn-round btn-primary" style="float: right">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- After Sale complaints ends-->

                                        <div class="row collapse" id="Complain">
                                            <div class="col-md-12 mb-4">
                                                <h5><i class="fa fa-comments" aria-hidden="true"></i> Complain Details
                                                </h5>
                                            </div>
                                            <div class="col-md-4" id="">
                                                <label class="form-label">Select source <i
                                                        class='text-danger'>*</i></label>
                                                <select class="form-control shadow-sm  bg-white" name="complain_source"
                                                    id="">
                                                    <option value="">Select Source</option>
                                                    <option value="Call">Call</option>
                                                    <option value="SMS">SMS</option>
                                                    <option value="Email">Email</option>
                                                    <option value="WhatsApp">WhatsApp</option>
                                                    <option value="Facebook">Facebook</option>
                                                    <option value="Instagram">Instagram</option>
                                                    <option value="Web Form">Web Form</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label ">Customer Registered Vehicles <i
                                                        class='text-danger'>*</i></label>
                                                <select class="form-control shadow-sm bg-white cpt" id="customer_vehicle"
                                                    name="customer_vehicle">
                                                    <option value="">Select Customer Vehicle</option>
                                                    <option value="Changan M8">Changan M8</option>
                                                    <option value="Changan M9">Changan M9</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label ">Complain Type: CPT <i
                                                        class='text-danger'>*</i></label>
                                                <select class="form-control shadow-sm  bg-white cpt" id=""
                                                    name="complain_cpt_type" onchange="Getcpt(this.value)">
                                                    <option value="">Select Complain CPT</option>
                                                    @foreach ($complain_cpt as $cpt)
                                                        <option value="{{ $cpt->complain_id }}">{{ $cpt->complain_type }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label ">Complain Type: SPG </label>
                                                <select class="form-control shadow-sm  bg-white" id=""
                                                    name="complain_spg_type" onchange="Getspg(this.value)"></select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label ">Complain Type: CCC </label>
                                                <select class="form-control shadow-sm bg-white" id=""
                                                    name="complain_ccc_type"></select>
                                            </div>
                                            <div class="col-md-4 ">
                                                <label for="dealership" class="form-label">Complain Dealership <i
                                                        class='text-danger'>*</i></label>
                                                <select class="form-control bg-white complaindealership"
                                                    id="complain_dealership" name="complain_dealership"
                                                    onchange="getDealerships()">
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">PBO</label>
                                                <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                    name="pbo" placeholder="PBO">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Chasis Number</label>
                                                <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                    name="chasis_number" placeholder="Chasis Number">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Engine Number</label>
                                                <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                    name="engine_number" placeholder="Engine Number">
                                            </div>
                                            <div class="col-md-4 ">
                                                <label class="form-label">Registration Number</label>
                                                <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                    name="registration_number" placeholder="Registration Number">
                                            </div>
                                            <div class="col-md-4 ">
                                                <label class="form-label">Invoice Number</label>
                                                <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                    name="invoice_number" placeholder="Invoice Number">
                                            </div>
                                            <div class="col-md-4 ">
                                                <label class="form-label">Invoice Date</label>
                                                <input type="date" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                    name="invoice_date" placeholder="Invoice Date">
                                            </div>
                                            <div class="col-md-4 ">
                                                <label class="form-label">Sales order number</label>
                                                <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                    name="sale_order_number" placeholder="Sales order number">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label">Mileage</label>
                                                <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                    name="milage" placeholder="Mileage">
                                            </div>
                                            <div class="col-md-4" id="">
                                                <label for="reason" class="form-label">Write VOC <i
                                                        class='text-danger'>*</i></label>
                                                <textarea class="form-control shadow-sm bg-white rounded" id="complain_voc" name="complain_voc"
                                                    placeholder="Customer Complain"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="existing_vehicle" class="form-label">Agent Notes</label>
                                                <input type="text" class="form-control shadow-sm p-3 mb-3 bg-white"
                                                    name="agent_complain_notes" placeholder="Agent Notes">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="complaint_priority" class="form-label mt-2">Complaint Priority
                                                    <i class='text-danger'>*</i></label> <br>
                                                <label class="radio-inline" for="complaint_priority"> </label>
                                                <input type="radio" name="complaint_priority"
                                                    class="shadow-sm bg-white" id="complaint_priority" value="High">
                                                <span>High</span>
                                                <label class="radio-inline" for="complaint_priority"> </label>
                                                <input type="radio" name="complaint_priority"
                                                    class="ml-4 shadow-sm bg-white" value="Medium">
                                                <span>Medium</span>
                                                <label class="radio-inline" for="complaint_priority"> </label>
                                                <input type="radio" name="complaint_priority"
                                                    class="ml-4 shadow-sm bg-white" value="Low">
                                                <span>Low</span>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-label mt-2">Upload Document</label>
                                                <input type="file" class="bg-white rounded" id="upload_docs"
                                                    name="upload_docs">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <input type="submit" value="Submit" id="submitBtn"
                                                    class="btn btn-round btn-primary" style="float: right">
                                            </div>
                                        </div>

                                        <!--row ends-->

                                    </form>


                                </div>
                                <!-- card-body ENDS -->
                            </div>
                            <!-- CARD ENDS -->
                        </div>
                        <!-- ROW ENDS -->
                    </div>
                    <!-- container ROW ENDS -->
                </div>
                <!-- container ENDS -->
            </div>
            <!-- section-body ENS -->
        </section>
        <!-- section STARTS -->
    </div>
    <!-- main-content ENDS -->

    <script src="{{ asset('scripts/common.js') }}"></script>
    <script src="{{ asset('scripts/complainform.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.complaint-div').hide(); // Hide all divs initially

            // Click event handler for buttons
            $('[data-toggle="collapse"]').click(function() {
                var target = $(this).data('target'); // Get the target div id
                $('.complaint-div').not(target).hide(); // Hide all divs except the target
                $(target).toggle(); // Toggle the visibility of the target div
            });
        });
    </script>
@endsection
