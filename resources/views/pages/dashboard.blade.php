@extends('partials._head')
@extends ('partials._javascript')

@section('title','| Dashboard Page')

{!! Html:: style('css/parsley.css') !!}
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    tinymce.init({
    selector:'textarea',
    plugins:'link',
    menubar:false,
    toolbar:"link"
  file_browser_callback: function(field_name, url, type, win) {
    win.document.getElementById('menu').value = 'my browser value';
  }
    });
</script>

<html>
<body class="body" style="background-image:url('/images/fastfood.jpg')">

	<nav class="navbar navbar-default">
        <div class="container-fluid">
	        <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
	      		</button>
	     	</div>

        	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<ul class="nav navbar-nav">              
	            	<a  id="dropbtn" class="dropbtn">
	            	<span class="glyphicon glyphicon-plus"></span> New Restaurant</a>
	            	<div class="dropdown">
	                	<a type="button" class="dropbtn" href="admin/view.php">
	                	<span class="glyphicon glyphicon-cutlery"></span> Restaurants</a>
	                	<div class="dropdown-content">
	                	</div>               
	            	</div>
            	</ul>
        		<ul class="nav navbar-nav navbar-right">

					@if(Auth::check())       
        				<li class="dropdown">
          					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Hello, {{ Auth::user()->name }} <span class="caret"></span></a>
     
     				    <ul class="dropdown-menu">
				            <li role="separator" class="divider"></li>
				            <li><a href="{{route('home')}}">Profile</a></li>
				            <li><a href="{{route('logout')}}">Logout</a></li>
				        </ul>
        				</li>

       				 @else 	
				        <a href="{{ route('login')}}" class="btn btn-default">Login</a>
				        <a href="{{route('register')}}" class="btn btn-default">Register</a>
        			@endif

              	</ul>
            </div>
        </div>
    </nav>

    

        {{ Form::open() }} 
            <div id="myModal" class="modal " >
            <div class="modal-content" style="background-image:url('/images/foodismood.jpg')">

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add New Restaurant</h4>
                </div>

                <div class="modal-body">
                    {{Form::label('name','Name:')}}
                    {{Form::text('name',null,['class'=>'form-control'])}}

                    {{Form::label('phone','Phone:')}}
                    {{Form::text('phone',null,['class'=>'form-control'])}}
                              
                    {{Form::label('address','Address:')}}
                    {{Form::text('address',null,['class'=>'form-control'])}}

                    {{Form::label('addressDetails','Address Details:')}}
                    {{Form::text('addressDetails',null,['class'=>'form-control'])}}

                    {{Form::label('cuisine','Cuisine:')}}
                    {{Form::text('cuisine',null,['class'=>'form-control'])}}
                    
                    {{Form::label('menu','Menu:')}}
                    {{Form::textarea('menu',null,['class'=>'form-control','rows' => 8])}}

                    {{Form::hidden('active','1',['class'=>'form-control'])}}
                </div>

                <div class="modal-footer">
                    <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Save" onclick="return validate()"></button>
                </div>
            </div>
            </div>
        {{ Form::close() }}   
   

</body>
</html>












