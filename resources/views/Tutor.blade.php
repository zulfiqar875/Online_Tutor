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
  <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
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
        <h5 class="text-light text-center mt-5"> (GROUP STUDY DETAIL)</h3>
        <h3 class="text-light  mt-5 mb-3 ml-5">{{$data->FirstName}} Teacher</h3>
        {{-- ......................................................................................................... --}}
                                            {{-- Profile FORM --}}
        {{-- ......................................................................................................... --}}

        <div class="box ml-5">
            <div class="row">
                <div class="col-sm-6 col-lg-6 col-xl-6">
                <i class="fa fa-user-circle-o fa-3x text-white" aria-hidden="true"></i>
                    <span><h4 class="text-white">Personal Information</h2></span>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label class="text-light" for="">Teacher Name</label> <br>
                            <input type="text" disabled value="{{$data->FirstName}} {{$data->LastName}}" id="" class="form-control">
                        </div>
                        <div class="col-sm-3 col-lg-3 col-xl-3">
                            <label class="text-light" for="">Education</label> <br>
                            <input type="text" disabled value="{{$data->Education}}" id="" class="form-control">
                        </div>
                        <div class="col-sm-3 col-lg-3 col-xl-3">
                            <label class="text-light" for="">Institute Name</label> <br>
                            <input type="text" disabled value="{{$data->Institute}}" id="" class="form-control">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label class="text-light" for="">Country</label> <br>
                            <input type="text" disabled value="{{$data->Country}}" id="" class="form-control">
                        </div>
                        <div class="col-sm-3 col-lg-3 col-xl-3">
                            <label class="text-light" for="">City</label> <br>
                            <input type="text" disabled value="{{$data->City}}" id="" class="form-control">
                        </div>
                        <div class="col-sm-3 col-lg-3 col-xl-3">
                            <label class="text-light" for="">Province</label> <br>
                            <input type="text" disabled value="{{$data->Province}}" id="" class="form-control">
                        </div>
                        
                    </div>

                    <h4 class="text-white mt-3">Subject Information</h2>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label class="text-light" for="">Subject Name</label> <br>
                            <input type="text" disabled value="{{$course->Subject}}" id="" class="form-control">
                        </div>
                        <div class="col-sm-3 col-lg-3 col-xl-3">
                            <label class="text-light" for="">Class</label> <br>
                            <input type="text" disabled value="{{$course->Level}}" id="" class="form-control">
                        </div>
                        <div class="col-sm-3 col-lg-3 col-xl-3">
                            <label class="text-light" for="">Area</label> <br>
                            <input type="text" disabled value="{{$course->AvailableArea}}" id="" class="form-control">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label class="text-light" for="">Availabily Area</label> <br>
                            <input type="text" disabled value="{{$course->AvailableArea}}" id="" class="form-control">
                        </div>
                        <div class="col-sm-3 col-lg-3 col-xl-3">
                            <label class="text-light" for="">Start Time</label> <br>
                            <input type="text" disabled value="{{$course->StartTime}}" id="" class="form-control">
                        </div>
                        <div class="col-sm-3 col-lg-3 col-xl-3">
                            <label class="text-light" for="">End Time</label> <br>
                            <input type="text" disabled value="{{$course->EndTime}}" id="" class="form-control">
                        </div>
                    </div>

                    <h4 class="text-white mt-3">Contact Information</h2>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                        <label class="text-light" for="">Phone No-1</label> <br>
                            <input type="text" disabled value="{{$data->Contact}}" id="" class="form-control">
                        </div>
                        <div class="col-sm-6 col-lg-6 col-xl-6">
                            <label class="text-light" for="">Email</label> <br>
                            <input type="text" disabled value="{{$data->Email}}" id="" class="form-control">
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 col-xl-6">
                <i class="fa fa-map-marker fa-3x text-light" aria-hidden="true"></i>
                    <h4 class="text-light">Online Location</h4>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="auto" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q={{$data->Address}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://123movies-org.net"></a>
                        </div>
                        <style>
                            .mapouter{
                                position:relative;
                                text-align:left;
                                height:500px;
                                width:auto;
                                }
                            .gmap_canvas {
                                overflow:hidden;
                                background:none!important;
                                height:500px;
                                width:auto;
                                }
                            </style>
                        </div>
                </div>  
            </div>
        </div>


            <!-- =============================================================================================== -->
                                                    <!-- CLIENT_PROFILE_FORM -->
            <!-- =============================================================================================== -->


            <!-- =============================================================================================== -->
  
</body>
</html>