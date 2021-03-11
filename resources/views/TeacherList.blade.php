<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>OnlineTutor</title>
</head>
<style>
    body
    {
        background-image: url('https://www.dnnsoftware.com/Portals/0/Images/hero-background-4-3.jpg?ver=2017-08-17-190938-760');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: grey;
    }
</style>
<body>
        <a href="/" class="text-left"><i id="back" class="fa fa-home fa-2x text-white "> </i></a>
        <h3 class="text-light text-center mt-5 mb-5">Online Tutor List</h3>
        {{-- ......................................................................................................... --}}
                                            {{-- REGISTRATION FORM --}}
        {{-- ......................................................................................................... --}}
          
        <div class="container">
            @foreach ($Course as $student)
                <div class="row ml-5 border border-white bg-dark p-3">
                    <div class="col-sm-1 col-lg-1 col-xl-1">
                        <i class="fa fa-user-circle-o fa-3x text-white" aria-hidden="true"></i>
                    </div>
                    <div class="col-sm-10 col-lg-10 col-xl-10 text-white">
                        <h5>{{ $student->FirstName }} {{ $student->LastName }}, {{ $student->Institute }} {{ $student->Education }} </h5>
                        <h5>{{ $student->Country }}, {{ $student->City }}</h5>
                        <h5> Contact: {{ $student->Contact }} Email: {{ $student->Email }} {{ $student->Area }}</h5>
                        
                    </div>
                </div>
            @endforeach
        </div>
     
        <div class="container p-3 mt-5 text-center">

            <img class="logo-img" style="width:100px" src="/images/Logo.png" alt="" srcset=""> <br>
            <a href="" class="text-light">onlinetutor@gmail.com</a>

        </div>
</body>
</html>