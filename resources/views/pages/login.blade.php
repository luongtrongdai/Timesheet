@extends('layout.index')

@section('content')

<style type="text/css">
	.btn-default{
		margin-bottom: 2%;
	}
	.forgot{
		font-style: oblique;
		text-decoration: underline;
		color: blue;
	}
</style>

<!-- Page Content -->
<div class="container">

	<!-- slider -->
	<div class="row carousel-holder">
		<div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-default">
			  	<div class="panel-heading">Login</div>
			  	<div class="panel-body">
			  		 @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}} <br>
                            @endforeach
                        </div>
                    @endif

                    @if(session('thongbao'))
                        <div class="alert alert-danger">
                            {{session('thongbao')}}
                        </div>
                    @endif
			    	<form action="login" method="POST">
			    		<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div>
			    			<label>Username</label>
						  	<input type="email" class="form-control" placeholder="Username" name="email" 
						  	>
						</div>
						<br>	
						<div>
			    			<label>Password</label>
						  	<input type="password" class="form-control" placeholder="Password" name="password">
						</div>
						<br>
						<button type="submit" class="btn btn-default">Login <i class="fa fa-sign-in" aria-hidden="true"></i>
						</button>
						<br>
						<a href="reset" class="forgot">Forgot Your Password?</a>
			    	</form>
			  	</div>
			</div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <!-- end slide -->
</div>
<!-- end Page Content -->
@endsection