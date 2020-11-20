<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  <script src="js/bootstrap.min.js"></script>
    <title>Student Admission</title>
</head>
<style>
    .vertical-menu {
      width: 200px;
    }
    
    .vertical-menu a {
      background-color: rgb(109, 108, 114);
      color: black;
      display: block;
      padding: 12px;
      text-decoration: none;
    }
    
    .vertical-menu a:hover {
      background-color: #ccc;
    }
    
    .vertical-menu a.active {
      background-color:rgb(51, 51, 73);
      color: white;
    }
    </style>
<body>
    
    <header style="background-color: rgb(55, 55, 88);">
        <div class="row">
            <div class="col-md-12 p-3 pl-5">
                <h1 style="color: white;">Student Admission</h1>
            </div>
            
        </div>
    </header>
    <img src="{{asset('image/student.jpg')}}">
      
    
    <div class="row">
      <div class="col-md-3">
      <div class="vertical-menu">
          <a href="/home">Home</a>
          <a href="/adminlogin">Login</a>
          <a href="/admission">New Admission</a>
          <a href="/details"> Admission details</a>
          <!-- <a href="#">Link 4</a> -->
        </div>
      </div>
        <div class="col-md-8">
            @yield('content')
            <h1>Rameesa</h1>
        </div>
    </div>
   
    
</body>
</html>