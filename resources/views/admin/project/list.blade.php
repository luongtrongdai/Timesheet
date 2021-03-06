@extends('admin.layout.index')
@section('content')

<!-- Page Content --> 
    
<div class="right_col" role="main">
      <!-- top tiles -->
     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Project
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
                            <th>Name</th>
                            <th>Department</th>
                            <th>Status</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Customer Name</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($project as $value)
                        <tr class="odd gradeX">
                          <td>{{$value->id}}</td>
                          <td>{{$value->name}}</td>
                          <td>{{$value->department }}</td>
                          <td>
                            @if($value->status == 1)
                                {{"Active"}}
                            @else
                                {{"Close"}}
                            @endif
                          </td>
                          <td>{{$value->start_date }}</td>
                          <td>{{$value->end_date}}</td>
                          <td>{{$value->customer->name}}</td>
                          <td><i class="fa fa-trash-o"></i><a href="admin/project/delete/{{$value->id}}"> Delete</a></td>
                          <td><i class="fa fa-pencil-square-o"></i> <a href="admin/project/edit/{{$value->id}}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="float: right;">{{ $project->links() }}</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
       
<!-- /#page-wrapper --> 

@endsection
