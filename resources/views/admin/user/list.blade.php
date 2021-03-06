@extends('admin.layout.index')
@section('content')

<!-- Page Content --> 
	
<div class="right_col" role="main">
      <!-- top tiles -->
     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Users
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7">
                  @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}    
                    </div>
                  @endif
                </div>
                
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                     
                        <tr align="center">
                            <th>ID</th>
                            <th>Username</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Employee Type</th>
                            <th>Position </th>
                            <th>Start Date</th>
                            <th>End Date </th>
                            <th>Status</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                     
                    </thead>
                    <tbody>
                       @foreach($user as $value)
                        <tr class="odd gradeX">
                          <td>{{$value->id}}</td>
                          <td>{{$value->username}}</td>
                          <td>{{$value->firstname}}</td>
                          <td>{{$value->lastname}}</td>
                          <td>{{$value->employee_types->type}}</td>
                          <td>
                            @if($value->position == 1)
                              {{"Admin"}}
                            @else
                              {{"User"}}
                            @endif
                          </td>
                          <td>{{$value->start_date}}</td>
                          <td>{{$value->end_date}}</td>
                          <td>
                            @if($value->status == 1)
                              {{"Active"}}
                            @else
                              {{"Close"}}
                            @endif
                          </td>
                          <td class="center"><i class="fa fa-trash-o"></i><a href="admin/user/delete/{{$value->id}}"> Delete</a></td>
                          <td class="center"><i class="fa fa-pencil-square-o"></i> <a href="admin/user/edit/{{$value->id}}">Edit</a></td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                <div style="float: right;">{{ $user->links() }}</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
       
<!-- /#page-wrapper -->	

@endsection