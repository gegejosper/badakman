@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default">
                <div class="panel-heading">Registrant's Details</div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="profile-header-container">   
                        <div class="profile-header-img">
                            <img class="img-circle" src="/public/img/runner.jpg" />
                            <!-- badge -->
                            <div class="rank-label-container">
                                <span class="label label-default rank-label">RB No:{{ $runner->racebib }}</span>
                            </div>
                        </div>
                    </div> 
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            {{ ucfirst($runner->fname) }}
                            {{ ucfirst($runner->lname) }}</h4>
                            Gender: <small> <strong>{{ $runner->gender }}</strong></cite></small>
                        <p>
                            Distance: <strong>{{ $runner->distance }}</strong> 
                            <br />
                            Address: <strong>{{ $runner->address }}</strong> 
                            <br />
                            Age: <strong>{{ $runner->age }}</strong>
                            <br />
                            Team: <strong>{{ $runner->team }}</strong>
                            <br />
                            Shirt Size: <strong>{{ $runner->shirtsize }}</strong>
                            <br />
                            Phone No: <strong>{{ $runner->phone }}</strong>
                            <br />
                            Email: <strong>{{ $runner->email }}</strong>
                            <br />
                            Contact Person: <strong>{{ $runner->contactperson }}</strong>
                            <br />
                            Phone No: <strong>{{ $runner->contactnumberperson }}</strong>
                            <br />
                            Ref No: <strong>{{ $runner->refNo }}</strong>
                            </p>
                            <a class="btn btn-outline-success btn-sm" href="/admin/registrants" role="button"><span class="fa fa-reply  "></span> Back </a>
                            <br/>
                            <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
