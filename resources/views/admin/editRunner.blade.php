@extends('layouts.register')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Registrant Details</div>
                <div class="panel-body">
                <div class="text-center"><img src="img/badakman.png"></div>
                    <form class="form-horizontal" method="POST" action="/runners/{{ $runner->id }}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        
                        <div class="form-group" style="padding-top:20px;">
                           <div class="col-md-6"><div class="alert alert-success" role="alert">Race Bib No: <strong>{{ $runner->racebib }}</strong></div></div>
                        </div>
                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}" style="padding-top:20px;">
                            <label for="fname" class="col-md-4 control-label">First Name</label>
                            
                            <div class="col-md-6">
                                 
                                <input id="fname" type="text" class="form-control" name="fname" value="{{ $runner->fname }}" required autofocus>


                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ $runner->lname}} " required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="Gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6 " >
                                <label class="radio">
                                <input type="radio" name="gender" id="optionsGender1" value="male" >
                                Male
                                </label>
                                <label class="radio">
                                <input type="radio" name="gender" id="optionsGender" value="female">
                                Female
                                </label>
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ $runner->dob }}" required>

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
                                <input id="age" type="number" class="form-control" name="age" value="{{ $runner->age }}" required>

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
                                <select name="distance" class="form-control" >
                                    <option>{{ $runner->distance }}</option>
                                    <option>21 K (1250php)</option>
                                    <option>10 K (1000php)</option>
                                    <option>6 K (500php) </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Individual Run / Couple Run</label>

                            <div class="col-md-6">
                                <select name="type" class="form-control" >
                                
                                    <option>{{ $runner->type }}</option>
                                    <option>Individual</option>
                                    <option>Couple(-200)</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="shirtsize" class="col-md-4 control-label">Shirt Size (XL-XS)</label>

                            <div class="col-md-6">
                                <select name="shirtsize" class="form-control" >
                                     <option>{{ $runner->shirtsize }}</option>
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
                                <input id="team" type="text" class="form-control" name="team" value="{{ $runner->team }}" required autofocus>

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
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $runner->phone }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $runner->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div>
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
