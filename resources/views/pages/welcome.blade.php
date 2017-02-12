@extends('main')
@section('title','| HomePage')

@section('content')     
    <div class="row" >
        <div class="col-md-12">
             <div class="jumbotron" style="background-image: url('/images/fastfood.jpg');">
                <div class="container">
                    <h1 class="h1">Welcome to my Website!</h1>
                    <form>
                    <div class="form-group h1">
                    <div class="row">
                        <div class="col-md-8">
                       <input id="search" name="search" value="What are you Craving now?" class="form-control">
                       </div>
                       <div class="col-md-4">
                        <p><a class="btn btn-primary btn-lg search" href="#" role="button">Search</a></p>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-4">
                       <input id="location" name="location" value="location" class="form-control">
                       </div>
                       <div class="col-md-4">
                       <input id="cuisine" name="Cuisine" value="Cuisine" class="form-control">
                       </div>
                       <div class="col-md-4">
                        <p><a class="btn btn-primary btn-lg search" href="#" role="button">Explore</a></p>
                        </div>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>

  <div class="row">
    <div class="col-md-12">
<h2 style="margin-left: 420px;">DISCOVER BASED ON YOUR MOOD</h2>
            <form id="Form" action="user/restaurants.php" method="POST">
                <div class="image">                
                    <a href="#"><img id="icon1" src="/images/foul.jpg" style="float: left; width:22%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon2" src="/images/breakfast.jpg" style="float: left; width: 22%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon3" src="/images/chocolate-towers.jpg" style="float: left; width:21%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon4" src="/images/burgers.jpg" style="float: left; width:20%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon5" src="/images/icecream.jpg" style="float: left; width:22%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon6" src="/images/shwarema.jpg" style="float: left; width:22%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon7" src="/images/drive-in.jpg" style="float: left; width:21%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <a href="#"><img id="icon8" src="/images/healthy.jpeg" style="float: left; width:20%; margin-right: 3%; margin-bottom: 0.95em;" alt=""/></a>
                    <p style="clear: both;">
                </div>
            </form>    
    </div>
  </div>  
@endsection

</html>
