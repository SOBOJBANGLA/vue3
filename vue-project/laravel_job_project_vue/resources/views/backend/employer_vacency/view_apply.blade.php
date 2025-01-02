@extends('backend.layouts.app')

@section('css')
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

<!-- Datatables css -->
<link href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />

<!-- App css -->
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('js')
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>        

<!-- Datatables js -->
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>

<!-- dataTables.bootstrap5 -->
<script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>

<!-- buttons.colVis -->
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>

<!-- buttons.bootstrap5 -->
<script src="{{ asset('assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>

<!-- dataTables.keyTable -->
<script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js') }}"></script>

<!-- dataTable.responsive -->
<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>

<!-- dataTables.select -->
<script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-select-bs5/js/select.bootstrap5.min.js') }}"></script>

<!-- Datatable Demo App Js -->
<script src="{{ asset('assets/js/pages/datatable.init.js') }}"></script>

<!-- App js-->
<script src="{{ asset('assets/js/app.js') }}"></script>
@endsection


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    @if(session('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                        @elseif(session('dlt'))
                        <div class="alert alert-danger">{{session('dlt')}}</div>
                        @elseif(session('upt'))
                        <div class="alert alert-info">{{session('upt')}}</div>
                        @endif
                <h5 class="card-title mb-0">Company List</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>C.V</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$item->name}}</td>
								<td>{{$item->email}}</td>
                                <td>{{$item->contact}}</td>
                                <td><a href="{{asset($item->cv)}}">CV</a></td>
                                <td>
                                <form action="{{ route('employee.updateApplicantStatus', $item->id) }}" method="POST">
                                    @csrf 
                                   <select name="status"> 
                                    <option value="Apply Approved" {{ $item->status == 'Apply Approved' ? 'selected' : '' }}>Approved</option> 
                                    <option value="Apply Decline" {{ $item->status == 'Apply Decline' ? 'selected' : '' }}>Decline</option> 
                                   <option value="Apply Pending" {{ $item->status == 'Apply Pending' ? 'selected' : '' }}>Pending</option> 
                                   </select>
                                    <button type="submit">Update</button> 
                                   </form>
                                </td>
							</tr>
						@endforeach
                       
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection


