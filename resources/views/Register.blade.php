<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
        <h3 class="text-light text-center mt-5">REGISTER NOW</h3>
        {{-- ......................................................................................................... --}}
                                            {{-- REGISTRATION FORM --}}
        {{-- ......................................................................................................... --}}
            <div class="container p-3 mt-4" style="border:dotted white ; background-color:rgb(1, 1, 1, 0.556);">
                <div class="form-group">
                    <h5 >Personal Information</h5>
                    <form action="{{url('/TeacherAdd')}}" method="POST">
                     @CSRF
                        <div class="row">
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="Firstname" placeholder="Fullname" class="form-control mb-2">
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="Lastname" placeholder="Last Name" class="form-control mb-2">
                            </div>
                            <div class="col-sm-2 col-lg-2 col-xl-2">
                                <input type="text" name="Gender" placeholder="Gender" class="form-control mb-2">
                            </div>
                            <div class="col-sm-2 col-lg-2 col-xl-2">
                                <input type="text" name="Age" placeholder="Age" class="form-control mb-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="CNIC" placeholder="CNIC NO" class="form-control mb-2">
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="education" placeholder="Education" class="form-control mb-2">
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="institue" placeholder="Institute" class="form-control mb-2">
                            </div>

                        </div>
                        <h5>Account Details</h5>
                        <div class="row">
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="Username" placeholder="Username" class="form-control mb-2">
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="Password" placeholder="Password" class="form-control mb-2">
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="Re-typepassowrd" placeholder="Re-type Password" class="form-control mb-2">
                            </div>
                        </div>
                        <h5>Contact Information</h5>
                        <div class="row">
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="Phoneno" placeholder="Phone No 1" class="form-control mb-2">
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="phoneno2" placeholder="Phone No 2" class="form-control mb-2">
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="Email" placeholder="Email" class="form-control mb-2">
                            </div>
                        </div>
                        <h5 class="bt">Address Information</h5>
                        <div class="row">
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="Country" placeholder="Country" class="form-control mb-2">
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="province" placeholder="Province" class="form-control mb-2">
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="City" placeholder="City" class="form-control mb-2">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="Address" placeholder="Address" class="form-control mb-2">
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="Squestion" placeholder="Secret Question" class="form-control mb-2">
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <input type="text" name="Answer" placeholder="Answer" class="form-control mb-2">
                            </div>

                        </div>
                        <h5 class="bt">Services</h5>
                        <div class="row">
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <select name="subject" id="" class="form-control mb-2">
                                    <option value="">-- Select Subject --</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="General Science">General Science</option>
                                    <option value="Mathematice">Mathematics</option>
                                    <option value="English">English</option>
                                    <option value="Urdu & Islymiat">Urdu & Islymait</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                                <select name="level" id="" class="form-control mb-2">
                                    <option value="">-- Level --</option>
                                    <option value="5th Class">5th Class</option>
                                    <option value="6th Class">6th Class</option>
                                    <option value="7th Class">7th Class</option>
                                    <option value="8th Class">8th Class</option>
                                    <option value="9th Class">9th Class</option>
                                    <option value="10th Class">10th Class</option>
                                    <option value="Hight Edu">Higher Edu</option>
                                </select>
                            </div>
                            
                            <div class="col-sm-4 col-lg-4 col-xl-4">
                            <select name="CA" id="" placeholder="" class="form-control mb-2">
                                <option value="">-- Area --</option>
                                <option value="Basthi">Basthi</option>
                                <option value="LALAZar">LALA Zar</option>
                                <option value="LikALichok">Lik ALi chok</option>
                                <option value="AnwarChock">Anwar Chock</option>
                                <option value="Barrier2">Barrier 2</option>
                                <option value="Barrier3">Barrier 3</option>
                                <option value="Barrier1">Barrier 1</option>
                            </select>
                            </div>
                        </div>
                        <h5 class="bt">Available Time</h5>
                        <div class="row">
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                            <select name="ST" id="" class="form-control mb-2">
                                    <option value="">-- START TIME --</option>
                                    <option value="9AM">9AM</option>
                                    <option value="10AM ">10AM</option>
                                    <option value="11AM ">11AM</option>
                                    <option value="12AM ">12AM</option>
                                    <option value="1PM ">1PM</option>
                                    <option value="2PM ">2PM</option>
                                    <option value="3PM ">3PM</option>
                                    <option value="4PM ">4PM</option>
                                    <option value="5PM ">5PM</option>
                                    <option value="6PM ">6PM</option>
                                    <option value="7PM ">7PM</option>
                                    <option value="8PM ">8PM</option>
                                    <option value="9PM ">9PM</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                            <select name="ET" id="" class="form-control mb-2">
                                    <option value="">-- END TIME --</option>
                                    <option value="10AM ">10AM</option>
                                    <option value="11AM ">11AM</option>
                                    <option value="12AM ">12AM</option>
                                    <option value="1PM ">1PM</option>
                                    <option value="2PM ">2PM</option>
                                    <option value="3PM ">3PM</option>
                                    <option value="4PM ">4PM</option>
                                    <option value="5PM ">5PM</option>
                                    <option value="6PM ">6PM</option>
                                    <option value="7PM ">7PM</option>
                                    <option value="8PM ">8PM</option>
                                    <option value="9PM ">9PM</option>
                                </select>
                            </div>


                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-3 col-lg-3 col-xl-3"></div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                            <button class="btn btn-primary btn-block">Register Now</button>
                            </div>
                        </div>
                    </form>
                    {{-- <div class="row">
                        <div class="col-6">
                            <p class="text-light">Forget your password??? <a href="" class="text-primary">click here</a> </p>
                        </div>
                    </div> --}}
              </div>
            </div>
            <div class="container p-3 mt-1">
                    {{-- <div class="form-group"> --}}
                        <div class="row">
                            <div class="col-3">
                                
                                <p><img src="{{url('/images/fb.png')}}" alt="" width="30" height="30"><a href="http://" class="text-light"> Login with facebook</a></p>
                            </div>
                            <div class="col-3">
                                
                                <p> <img src="{{url('/images/tw.png')}}" alt="" width="30" height="30" ><a href="http://" class="text-light"> Login with Twitter</a></p>
                            </div>
                            <div class="col-3">
                                
                                <p><img src="{{url('/images/google.png')}}" alt="" width="30" height="30"><a href="http://" class="text-light"> Login with Google+</a></p>
                            </div>
                            <div class="col-3">
                                
                                <p><img src="{{url('/images/ld.png')}}" alt="" width="30" height="30"><a href="http://" class="text-light"> Login with Linkedin</a></p>
                            </div>
                            
                        </div>    
                    </div>
                </div>
</body>
</html>