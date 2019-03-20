@extends('layouts.admin')

@section('content')
        <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Report Summary
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="/admin/registrants" class="list-group-item">
                                    <i class="fa fa-group fa-fw"></i> Total Runners
                                    <span class="pull-right text-muted small"><em><strong>{{ $NumRegistrants }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/gender/Male" class="list-group-item">
                                    <i class="fa fa-group fa-fw"></i> Total Male Runners
                                    <span class="pull-right text-muted small"><em><strong>{{ $totalMale }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/gender/Female" class="list-group-item">
                                    <i class="fa fa-group fa-fw"></i> Total Female Runners
                                    <span class="pull-right text-muted small"><em><strong>{{ $totalFemale }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/distance/21 K" class="list-group-item">
                                    <i class="fa fa-group fa-fw"></i> Total 21k Runners
                                    <span class="pull-right text-muted small"><em><strong>{{ $total21k }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/distance/10 K" class="list-group-item">
                                    <i class="fa fa-group fa-fw"></i> Total 10k Runners
                                    <span class="pull-right text-muted small"><em><strong>{{ $total10k }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/distance/6 K" class="list-group-item">
                                    <i class="fa fa-group fa-fw"></i> Total 6k Runners
                                    <span class="pull-right text-muted small"><em><strong>{{ $total6k }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/payment/paid" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Total Paid Runners
                                    <span class="pull-right text-muted small"><em><strong>{{ $totalPaid }}</strong></em>
                                    </span>
                                </a>
                
                                <a href="/admin/runners/payment/not paid" class="list-group-item">
                                    <i class="fa fa-money  fa-fw"></i> Total Not Paid Runners
                                    <span class="pull-right text-muted small"><em><strong>{{ $totalNotPaid }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/payment/not paid" class="list-group-item">
                                    <i class="fa fa-money  fa-fw"></i> Total Not Paid Runners
                                    <span class="pull-right text-muted small"><em><strong>{{ $totalNotPaid }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/payment/not paid" class="list-group-item">
                                    <i class="fa fa-book  fa-fw"></i> Total XL Shirt Size To Print
                                    <span class="pull-right text-muted small"><em><strong>{{ $totalXL }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/payment/not paid" class="list-group-item">
                                    <i class="fa fa-book  fa-fw"></i> Total L Shirt Size To Print
                                    <span class="pull-right text-muted small"><em><strong>{{ $totalL }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/payment/not paid" class="list-group-item">
                                    <i class="fa fa-book  fa-fw"></i> Total M Shirt Size To Print
                                    <span class="pull-right text-muted small"><em><strong>{{ $totalM }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/payment/not paid" class="list-group-item">
                                    <i class="fa fa-book  fa-fw"></i> Total S Shirt Size To Print
                                    <span class="pull-right text-muted small"><em><strong>{{ $totalS }}</strong></em>
                                    </span>
                                </a>
                                <a href="/admin/runners/payment/not paid" class="list-group-item">
                                    <i class="fa fa-book  fa-fw"></i> Total XS Shirt Size To Print
                                    <span class="pull-right text-muted small"><em><strong>{{ $totalXS }}</strong></em>
                                    </span>
                                </a>
                                
                            </div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
</div>       
<div class="col-lg-9">
        <div class="panel panel-default">
                    <div class="panel-heading"> <i class="fa fa-user fa-fw"></i>List of Registrants</div>
                    <div class="panel-body">
                        <table class="table">
                            
                            <tr>
                                <td>RB No.</td>
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
                                    <a  class="btn btn-primary" role="button" href="{{route('remindMail',$runner->id)}}"> <i class="fa  fa-pencil fa-fw"></i>  Remind Email</a>
                                    <!--<a class="btn " href="updatePayment/{{$runner->id }}">Update Payment</a>-->
                                    <a  class="btn btn-success" href="/runners/{{$runner->id }}/edit"><i class="fa  fa-pencil fa-fw"></i>Edit</a>
                                    <a  class="btn btn-info" href="/admin/runners/{{$runner->id }}"><i class="fa fa-search fa-fw"></i> View</a>
                                    <a  class="btn btn-danger" role="button" href="{{route('delRegRunner',$runner->id)}}" onclick="return confirm('Are you sure you want to delete this Registrant?')"><i class="fa  fa-times fa-fw"></i>Delete</a>
                                </td>
                            
                            </tr>
                            @empty
                            @endforelse
                        </table>
                        <div>{{ $runners->links() }}</div>
                    </div>   
        </div>
        </div>
@endsection
