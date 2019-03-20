@extends('layouts.register')

@section('content')
<div class="container">
    <div class="row">
     <div align="center" style="padding:20px;">

                        <!-- Branding Image -->
                        <a class="text-center" href="{{ url('/') }}">
                        <img src="http://badakman.com/wp-content/uploads/2017/08/MAN-1.png" width="300">
                        </a>
        </div>
        <div class="col-md-8 col-md-offset-2">
           
            <div class="panel panel-default">
                
                <div class="panel-heading">Please Fill up the Registration Form</div>
                <div class="panel-body">
                <div>
                    <form class="form-horizontal" method="POST" action="/runners">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}" style="padding-top:20px;">
                            <label for="fname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                 
                                <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>


                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="lname" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('naaddressme'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="Gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6 " >
                                <label class="radio">
                                <input type="radio" name="gender" id="optionsGender1" value="Male" required>
                                Male
                                </label>
                                <label class="radio">
                                <input type="radio" name="gender" id="optionsGender" value="Female" required> 
                                Female
                                </label>
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control" name="age" value="{{ old('age') }}" required>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="distance" class="col-md-4 control-label">Distance</label>

                            <div class="col-md-6">
                                <select name="distance" class="form-control" required>
                                    <option value="21 K">21 K (1200php)</option>
                                    <option value="10 K">10 K (1000php)</option>
                                    <option value="6 K">6 K (500php) </option>
                                </select>
                            </div>
                        </div>
                        <!--<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Individual Run / Couple Run</label>

                            <div class="col-md-6">
                                <select name="type" class="form-control" >
                                    <option>Individual</option>
                                    <option>Couple(-200)</option>
                                </select>
                            </div>
                        </div>-->
                         <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="shirtsize" class="col-md-4 control-label">Shirt Size (XL-XS)</label>

                            <div class="col-md-6">
                                <select name="shirtsize" class="form-control" required>
                                    <option>XL</option>
                                    <option>L</option>
                                    <option>M</option>
                                    <option>S</option>
                                    <option>XS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('team') ? ' has-error' : '' }}">
                            <label for="team" class="col-md-4 control-label">Team</label>

                            <div class="col-md-6">
                                <input id="team" type="text" class="form-control" name="team" value="{{ old('team') }}" required autofocus>

                                @if ($errors->has('team'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('contactperson') ? ' has-error' : '' }}">
                            <label for="contactperson" class="col-md-4 control-label">Contact Person in case of Emergency</label>

                            <div class="col-md-6">
                                <input id="contactperson" type="text" class="form-control" name="contactperson" value="{{ old('contactperson') }}" required autofocus>

                                @if ($errors->has('contactperson'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contactperson') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('contactnumberperson') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Contact Person Phone Number</label>

                            <div class="col-md-6">
                                <input id="contactnumberperson" type="text" class="form-control" name="contactnumberperson" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('contactnumberperson'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phcontactnumberpersonone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div>
                            

                            <div class="col-md-12">
                                <div class="help-block">
                                <h3 class="text-center">WAIVER/ RELEASE FORM</h3>
                               <p align="justify"> In consideration of my entry. I, my heirs, executors and administrators release and forever discharge the organizers <strong>Badakman Productions</strong> ,its officers, staff, sponsors, servants, agents and subcontractors, instrumentalities, and all voluntary community groups, and all organizations assisting this event, producers, their agents and representatives of all liabilities. Claims damages or cost, which I may have against them arising out of or inaction of any way connected with my participation of this event. I understand this waiver includes claims based on negligence. Action or inaction of any above parties. I fully recognize the difficulties of this event and declare that I am physically fit and able to compete in this event safely, and not have been told otherwise by a medically qualified person, Furthermore, I certify that I have secured for myself a life and accident insurance coverage up to the third party liability to answer for any damages or loss of life and property that may occur in this particular event.
</p><p>I agree that in the event of race cancellation due to storm, rain, inclement weather, wind or any other unforeseeable, or "act of God" conditions, my entry fee shall be nonrefundable.
</p><p>I have carefully read this entry form and agree to abide by all rules and directions of all race officials on the day of the race.

                                </div>
                                <input type="hidden" name="payment" value="not paid">
                                <input type="checkbox" class="text-center" name="agree" value="agree" required>Agree

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
