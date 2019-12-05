@extends('registeration.registeration_design')
@section('content')
              
<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Operator Registration Form</h2>
                    <form id="operator_registeration" method="POST" action="{{ URL('Operator-Login') }}">
                         {{ csrf_field() }}
                        <!-- =========================first row========================== -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">User Name</label>
                                    <input class="input--style-4" type="text" id="username" name="username">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" id="phone" name="phone">
                                </div>
                            </div>
                        </div>
                        <!-- =========================second row========================== -->
                              <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First name</label>
                                    <input class="input--style-4" type="text" id="firstname" name="firstname">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last name</label>
                                    <input class="input--style-4" type="text" id="lastname" name="lastname">
                                </div>
                            </div>
                        </div>
                         <!-- =========================3rd row========================== -->
          
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" id="email" name="email">
                                </div>
                            </div>
                          <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" id="password" name="password">
                                </div>
                            </div>
                            
                        </div>
                  
                    <!-- username Fname Lname O_Password age M_Number O_rank Service_no O_Address cnic -->
                     <!-- =========================4th row========================== -->
                        <div class="row row-space"> 
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Age</label>
                                    <input class="input--style-4" type="text" id="age" name="age">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" id="birthday" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                           </div>
                       </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" id="gender" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <div class="input-group">
                                    <label class="label">CNIC</label>
                                     <input class="input--style-4" type="text" id="cnic" name="cnic">
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <div class="input-group">
                                    <label class="label">Address</label>
                                     <input class="input--style-4" type="text" id="Address" name="Address">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">Rank</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select  id="rank" name="rank">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    
                                     @foreach($ranks as $rank)
                                         <option>{{ $rank->name }}</option>
                                     @endforeach
                                   
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   @endsection