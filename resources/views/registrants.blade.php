@extends('layouts.register')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">List of Registrants | <a href="/">Register Now! </a></div>
                <div class="panel-body">
                    <table class="table">
                        
                        <tr>
                            <td>Race Bib No:</td>
                            <td>Full Name </td>
                            <td>Distance</td>
                            <td>Gender</td>
                            <td>T-Shirt Size</td>
                            <td>Payment</td>
                            <td>Action</td>
                          
                        
                        </tr>
                        @forelse($runners as $runner)
                        <tr>
                            <td><strong>{{ $runner->racebib }}</strong></td>
                            <td>{{ $runner->fname }} {{ $runner->lname }}</td>
                            <td>{{ $runner->distance }}</td>
                             <td>{{ $runner->gender }}</td>
                            <td>{{ $runner->shirtsize }}</td>
                            <td>{{ $runner->payment }}</td>
                            <td>
                                <a class="btn " href="/runners/{{$runner->id }}"><i class="icon-search"></i> View</a>
                            </td>
                        
                        </tr>
                        @empty
                        @endforelse
                    </table>
                    <div>{{ $runners->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
