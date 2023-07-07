 @extends('template')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/supervisor-dashboard.css') }}">
    <div class='secondSection'>
        <div class='primDiv'>
            <div class="badgeContainer">
                <div id="agentBadge">
                </div>
                <img onclick="infoFunction()" src="./images/avatar/3.jpg" class="imgStyleSideBar" alt="">
            </div>
            <div class="badgeContainer">
                <div id="agentBadge1">
                </div>
                <img onclick="infoFunction()" src="./images/avatar/1.jpg" class="imgStyleSideBar" alt="">
            </div>
            <div class="badgeContainer">
                <div id="agentBadge3">
                </div>
                <img onclick="infoFunction()" src="./images/avatar/2.jpg" class="imgStyleSideBar" alt="">
            </div>
            <div class="badgeContainer">
                <div id="agentBadge">
                </div>
                <img onclick="infoFunction()" src="./images/avatar/4.jpg" class="imgStyleSideBar" alt="">
            </div>
            <div class="badgeContainer">
                <div id="agentBadge2">
                </div>
                <img onclick="infoFunction()" src="./images/avatar/5.jpg" class="imgStyleSideBar" alt="">
            </div>
        </div>
        <div id="click">
            <div class="agentInfoDiv">
                <div class="innerAgentBox1">
                    <img src="./images/avatar/3.jpg" class="innerImgStyle" alt="">
                    <p class="agentInfo">Sarah Connor</p>
                    <p class="agentInfo">Status : On Call</p>
                </div>
                <div class="innerAgentBox">
                    <p class="agentInfo">Inbound Success Call</p>
                    <p class="agentInfo">20 min</p>
                </div>
                <div class="innerAgentBox">
                    <p class="agentInfo">Inbound Avg Talk Time</p>
                    <p class="agentInfo">20 min</p>
                </div>
                <div class="innerAgentBox">
                    <p class="agentInfo">Outbound Success Call</p>
                    <p class="agentInfo">20 min</p>
                </div>
                <div class="innerAgentBox">
                    <p class="agentInfo">Attempted Calls</p>
                    <p class="agentInfo">20 min</p>
                </div>
                <div class="innerAgentBox">
                    <p class="agentInfo">Active Time</p>
                    <p class="agentInfo">20 min</p>
                </div>
                <div class="innerAgentBox">
                    <p class="agentInfo">Break Time</p>
                    <p class="agentInfo">20 min</p>
                </div>
                <div class="innerAgentBox">
                    <p class="agentInfo">Call on queue</p>
                    <p class="agentInfo">20</p>
                </div>
                <div class="innerAgentBox">
                    <p class="agentInfo">Total Inquiry Generated</p>
                    <p class="agentInfo">20</p>
                </div>
                <div class="innerAgentBox">
                    <p class="agentInfo">Total Complaint Generated</p>
                    <p class="agentInfo">20</p>
                </div>
            </div>
        </div>
        <div class='secDiv'>
            <div class='socialChannelsContainer'>
                <a class='iconsContainer3'  href='https://sodabaz.com/MasterMotor/public/social-media-facebook'>
                    <!--< class='iconAhref'>-->
                    <div class='badgeDiv'>
                        <h5 class='badge'>2</h5>
                    </div>
                    <img src="{{ asset('images/f.png') }}" alt="" class='facebookIcon'>
                    <h5 class='iconsName'>facebook</h5>
                    <!--</a>-->
                </a>
                <a class='iconsContainer2'  href='https://sodabaz.com/MasterMotor/public/instagram-chats'>
                    <div class='badgeDiv'>
                        <h5 class='badge'>2</h5>
                    </div>
                    <img src="{{ asset('images/insta.png') }}" alt="" class='facebookIcon'>
                    <h5 class='iconsName'>instagram</h5>
                </a>
                <a class='iconsContainer5' href='https://sodabaz.com/MasterMotor/public/social-media-whatsapp'>
                    <div class='badgeDiv'>
                        <h5 class='badge'>2</h5>
                    </div>
                    <img src="{{ asset('images/whats.png') }}" alt="" class='facebookIcon'>
                    {{-- <img src="{{ asset('images/whats.png') }}" alt="" class='facebookIcon'> --> --}}
                    <h5 class='iconsName'>whatsapp</h5>
                </a>
                <div class='iconsContainer1'>
                    <div class='badgeDiv'>
                        <h5 class='badge'>2</h5>
                    </div>
                    <img src="{{ asset('images/mail.png') }}" class='facebookIcon'>
                    <h5 class='iconsName' id='iconsNameId'>mail</h5>
                </div>
                <div class='iconsContainer4'>
                    <div class='badgeDiv'>
                        <h5 class='badge'>2</h5>
                    </div>
                    <img src="{{ asset('images/calls.png') }}" alt="" class='mailIcon'>
                    <h5 class='iconsName'>calls</h5>
                </div>
                <div class='iconsContainer6'>
                    <div class='badgeDiv'>
                        <h5 class='badge'>2</h5>
                    </div>

                    <img src="{{ asset('images/image.png') }}" alt="" class='facebookIcon'>
                    <h5 class='iconsName'>webform</h5>
                </div>
            </div>
            {{-- <div class='inBoundCalls'> --}}


            <div class='VerticalDiv'>
                <div class='VerticalSubDiv'>
                    <div class='inBoundCallsSub2'>
                        <div class='callsDiv10'>
                            <div class='mainDiv'>
                                <p class='checkClassSuccess'>Inbound Call</p>
                            </div>
                            <div class='divSub'>
                                {{-- <div> --}}
                                <div>
                                    <img src="{{ asset('images/tick-icon.png') }}" alt="" class='tick-icon'>
                                </div>
                                <div>
                                    <p class='SuccessText'>Success Calls</p>
                                    <p class='numberClass'>20</p>
                                </div>

                                {{--
                                    </div> --}}
                                {{-- <div> --}}
                                <div>
                                    <img src="{{ asset('images/abandd-icon.png') }}" alt="" class='tick-icon'>
                                </div>
                                <div>
                                    <p class='SuccessText'>Avg Talk time</p>
                                    <p class='numberClass'>20</p>
                                </div>

                                {{--
                                    </div> --}}
                            </div>
                        </div>
                        <div class='callsDiv10'>
                            <div class='mainDiv'>
                                <p class='checkClassSuccess'>Outbound Call</p>
                            </div>
                            <div class='divSub'>
                                {{-- <div> --}}
                                <div>
                                    <img src="{{ asset('images/tick-icon.png') }}" alt="" class='tick-icon'>
                                </div>
                                <div>
                                    <p class='SuccessText'>Success Calls</p>
                                    <p class='numberClass'>20</p>
                                </div>

                                {{--
                                    </div> --}}
                                {{-- <div> --}}
                                <div>
                                    <img src="{{ asset('images/abandd-icon.png') }}" alt="" class='tick-icon'>
                                </div>
                                <div>
                                    <p class='SuccessText'>Attempted Calls</p>
                                    <p class='numberClass'>20</p>
                                </div>

                                {{--
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class='inBoundCallsSub1'>
                    <div class="callsDiv2">
                        <div class="single_crm">
                           
                                
                              
                            <div class="feedbackDiv">
                                <div class="feedbackIconDiv">
                                <p class='numberClass'>20</p>
                                <img src="{{ asset('images/que.png') }}" alt="" class='feedback-icon'>
                                </div>
                                <p class='feedbackText'>Calls on<br /> Queue</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='inBoundCallsSub111'>
                <div class="callsDiv22111">
                    <div class="single_crm">

                        <div class="feedbackDiv">
                            <div class="feedbackIconDiv">
                                <p class='numberClass'>{{$total_pendingcomplains}}</p>
                                <img src="{{ asset('images/genrate.png') }}" alt="" class='feedback-icon'>
                            </div>

                            <p class='feedbackText'>Pending<br /> Complain</p>
                        </div>
                    </div>
                </div>

                <div class="callsDiv22111">
                    <div class="single_crm">

                        <div class="feedbackDiv">
                            <div class="feedbackIconDiv">
                                <p class='numberClass'>{{$todays_generatedcomplains}}</p>
                                <img src="{{ asset('images/genrate.png') }}" alt="" class='feedback-icon'>
                            </div>

                            <p class='feedbackText'>Today Complain <br /> Generated</p>
                        </div>
                    </div>
                </div>
                <div class="callsDiv22111">
                    <div class="single_crm">

                        <div class="feedbackDiv">
                            <div class="feedbackIconDiv">
                                <p class='numberClass'>{{$todays_generatedinquiries}}</p>
                                <img src="{{ asset('images/genrate.png') }}" alt="" class='feedback-icon'>
                            </div>
                            <p class='feedbackText'>Today Inquiry<br /> Generated</p>
                        </div>
                    </div>
                </div>
                <div class="callsDiv22111">
                    <div class="single_crm">

                        <div class="feedbackDiv">
                            <div class="feedbackIconDiv">
                                <p class='numberClass'>20</p>
                                <img src="{{ asset('images/active-time.png') }}" alt="" class='feedback-icon'>
                            </div>

                            <p class='feedbackText'>Active<br /> Time</p>
                        </div>
                    </div>
                </div>
                <div class="callsDiv22111">
                    <div class="single_crm">

                        <div class="feedbackDiv">
                            <div class="feedbackIconDiv">
                                <p class='numberClass'>20</p>
                                <img src="{{ asset('images/break.png') }}" alt="" class='feedback-icon'>
                            </div>

                            <p class='feedbackText'>Break<br /> Time</p>
                        </div>
                    </div>
                </div>
                <div class="callsDiv22111">
                    <div class="single_crm">

                        <div class="feedbackDiv">
                            <div class="feedbackIconDiv">
                                <p class='numberClass'>20</p>
                                <img src="{{ asset('images/feed-back.png') }}" alt="" class='feedback-icon'>
                            </div>

                            <p class='feedbackText'> Survey </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tableMainContainer">
                <table class="tablePrimary">
                    <thead class="theadPrimary">
                        <tr class=''>
                            <th class='headingText'>Names</th>
                            <th class='headingText'>Email</th>
                            <th class='headingText'>Mobile</th>
                            <th class='headingText' style="padding-left: 20px">Next Follow-Up</th>
                            <th class='headingText'>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class=''>
                            <td class='nameText1'><span class='nameCustomer'>Sara Smith</span></td>
                            <td class='nameText'>iPhone X</td>
                            <td class='nameText'>
                                <span>United States</span>
                            </td>

                            <td class='nameText'><i class="fa fa-circle-o text-success  mr-2"></i>
                                Paid</td>
                            <td class='nameText'>
                                <span>Last Login</span>
                            </td>
                        </tr>
                        <tr class='nameTextTr'>
                            <td class='nameText1'><span class='nameCustomer'>
                                    Walter R. </span></td>
                            <td class='nameText'>Pixel 2</td>
                            <td class='nameText'><span>Canada</span></td>

                            <td class='nameText'><i class="fa fa-circle-o text-success  mr-2"></i>
                                Paid</td>
                            <td class='nameText'>
                                <span>Last Login</span>
                            </td>
                        </tr>
                        <tr class=''>
                            <td class='nameText1'><span class='nameCustomer'>Andrew D.</span></td>
                            <td class='nameText'>OnePlus</td>
                            <td class='nameText'><span>Germany</span></td>

                            <td class='nameText'><i class="fa fa-circle-o text-warning  mr-2"></i>
                                Pending</td>
                            <td class='nameText'>
                                <span>Last Login</span>
                            </td>
                        </tr>

                        <tr class='nameTextTr'>
                            <td class='nameText1'> <span class='nameCustomer'>Megan S.</span></td>
                            <td class='nameText'>Galaxy</td>
                            <td class='nameText'><span>Japan</span></td>

                            <td class='nameText'><i class="fa fa-circle-o text-success  mr-2"></i>
                                Paid</td>
                            <td class='nameText'>
                                <span>Last Login</span>
                            </td>
                        </tr>
                        <tr class=''>
                            <td class='nameText1'><span class='nameCustomer'>
                                    Doris R. </span></td>
                            <td class='nameText'>Moto Z2</td>
                            <td class='nameText'><span>England</span></td>

                            <td class='nameText'><i class="fa fa-circle-o text-success  mr-2"></i>
                                Paid</td>
                            <td class='nameText'>
                                <span>Last Login</span>
                            </td>
                        </tr>
                    </tbody>
                </table>


                <table class="tableSecondary">
                    <thead>
                        <tr>
                            <th class='headingText'>Leads</th>
                            <th class='headingText'>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <td class='nameText'>Shahzil </br> <span>0333221123</span></td>
                            <td class='nameText1'><span class='nameCustomer'>Pending </span>
                            </td>
                        </tr>
                        <tr class='nameTextTr'>
                            <td class='nameText'>Shahzil </br> <span>0333221123</span></td>
                            <td class='nameText1'><span class='nameCustomer'>Pending </span>
                            </td>
                        </tr>
                        <tr>
                            <td class='nameText'>Shahzil </br> <span>0333221123</span></td>
                            <td class='nameText1'><span class='nameCustomer'>Pending </span>
                            </td>
                        </tr>
                        <tr class='nameTextTr'>
                            <td class='nameText'>Shahzil </br> <span>0333221123</span></td>
                            <td class='nameText1'><span class='nameCustomer'>Pending </span>
                            </td>
                        </tr>
                        <tr>
                            <td class='nameText'>Shahzil </br> <span>0333221123</span></td>
                            <td class='nameText1'><span class='nameCustomer'>Pending </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        {{-- Right Section --}}

        <div class='agentContainer'>
            <div class='agentList'>
                <h3 class='textAgent'>Follow-Up Reminder</h3>
                @php
                $today = date('Y-m-d');
                @endphp
                <!--<h6 class='dateText'>Jan 3, 2022 </h6>-->
                <h6 class='dateText'>{{ $today }}</h6>
                @foreach ($todays_followups as $row)
                <div class='followUpDiv'>
                    <div class='paraDiv'>
                        <!--<p class='nameTextCalender'>Steve Smith</p>-->
                        <!--<p class='timeText'>10:00</p>-->
                        <p class='nameTextCalender'>{{$row->assigned_agent}}</p>
                        <p class='timeText'>{{$row->followup_prefered_time}}</p>
                    </div>
                    <div class='divCalender'>
                        <button class='callButton'>
                            <img src="./images/icon.png" class="callIcon" alt="">
                        </button>
                        <button class='callButton'>
                            <img src="./images/details.png" class="callIcon" alt="">
                        </button>
                    </div>
                </div>
                @endforeach
                <br />
                @php
                $today = date('Y-m-d');
                $after1day = date('Y-m-d', strtotime($today . ' +1 days'));
                @endphp
                <h6 class='dateText'>{{ $after1day}}</h6>
                @foreach ($tomorrows_followups as $row2)
                <div class='followUpDiv'>
                    <div class='paraDiv'>
                            <p class='nameTextCalender'>{{$row2->assigned_agent}}</p>
                            <p class='timeText'>{{$row2->followup_prefered_time}}</p>
                    </div>
                    <div class='divCalender'>
                            <button class='callButton'>
                                <img src="./images/icon.png" class="callIcon" alt="">
                            </button>
                            <button class='callButton'>
                                <img src="./images/details.png" class="callIcon" alt="">
                            </button>
                    </div>
                </div>
                @endforeach
                <!--<h6 class='dateText'>Jan 4, 2022 </h6>-->
                <!--<div class='followUpDiv'>-->
                <!--    <div class='paraDiv'>-->
                <!--        <p class='nameTextCalender'>Steve Smith</p>-->
                <!--        <p class='timeText'>10:00</p>-->
                <!--    </div>-->
                <!--    <div class='divCalender'>-->
                <!--        <button class='callButton'>-->
                <!--            <img src="./images/icon.png" class="callIcon" alt="">-->
                <!--        </button>-->
                <!--        <button class='callButton'>-->
                <!--            <img src="./images/details.png" class="callIcon" alt="">-->
                <!--        </button>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class='followUpDiv'>-->
                <!--    <div class='paraDiv'>-->
                <!--        <p class='nameTextCalender'>Steve Smith</p>-->
                <!--        <p class='timeText'>10:00</p>-->
                <!--    </div>-->
                <!--    <div class='divCalender'>-->
                <!--        <button class='callButton'>-->
                <!--            <img src="./images/icon.png" class="callIcon" alt="">-->
                <!--        </button>-->
                <!--        <button class='callButton'>-->
                <!--            <img src="./images/details.png" class="callIcon" alt="">-->
                <!--        </button>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class='followUpDiv'>-->
                <!--    <div class='paraDiv'>-->
                <!--        <p class='nameTextCalender'>Steve Smith</p>-->
                <!--        <p class='timeText'>10:00</p>-->
                <!--    </div>-->
                <!--    <div class='divCalender'>-->
                        
                <!--        <button class='callButton'>-->
                <!--            <img src="./images/icon.png" class="callIcon" alt="">-->
                <!--        </button>-->
                <!--        <button class='callButton'>-->
                <!--            <img src="./images/details.png" class="callIcon" alt="">-->
                <!--        </button>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- <div class='followUpDiv'></div> -->
            </div>
        </div>
    </div>
    </div>
@endsection('content')
