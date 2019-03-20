@extends('layouts.admin')

@section('content')
    
<div class="col-lg-12">
        <div class="panel panel-default">
                    <div class="panel-heading"> <i class="fa fa-user fa-fw"></i>List of Registrants | <strong>{{ $NumRegistrants }}</strong></div>
                    <div class="panel-body">
                    <div></div>
                        <table class="table">
                            
                            <tr>
                                <td>RB No. </td>
                                <td>Full Name </td>
                                <td>Distance</td>
                                <td>Gender</td>
                                <td>T-Shirt Size</td>
                                <td>Payment</td>
                                <td>Action</td>
                            
                            
                            </tr>
                            @forelse($runners as $runner)
                            <tr>
                                <td>{{ $runner->racebib }}</td>
                                <td>{{ $runner->fname }} {{ $runner->lname }}</td>
                                <td>{{ $runner->distance }}</td>
                                <td>{{ $runner->gender }}</td>
                                <td>{{ $runner->shirtsize }}</td>
                                <td>{{ $runner->payment }}</td>
                                <td>
                                    <a  class="btn btn-primary" role="button" href="{{route('updatePayment',$runner->id)}}"> <i class="fa  fa-pencil fa-fw"></i>  Update Payment</a>
                                    <!--<a class="btn " href="updatePayment/{{$runner->id }}">Update Payment</a>-->
                                    <a  class="btn btn-success" href="/runners/{{$runner->id }}/edit"><i class="fa  fa-pencil fa-fw"></i>Edit</a>
                                    <a  class="btn btn-info" href="/admin/runners/{{$runner->id }}"><i class="fa fa-search fa-fw"></i> View</a>
                                    <a  class="btn btn-danger" role="button" href="{{route('delRegRunner',$runner->id)}}" onclick="return confirm('Are you sure you want to delete this Registrant?')"><i class="fa  fa-times fa-fw"></i>Delete</a>
                                </td>
                            
                            </tr>
                            @empty
                            <tr><td colspan="6">
                            <div class="alert alert-danger text-center">
                                No Runners Found!...
                            </div>
                            </td></tr>
                             
                            @endforelse
                        </table>
                        <div>{{ $runners->links() }}</div>
                    </div>   
        </div>
        </div>
@endsection
