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
  <link rel="icon" type="image/ico" href="/images/company.png" />
  <style>
  body, #mynav, #section1 {
      position: relative; 
      background-image: url('https://www.dnnsoftware.com/Portals/0/Images/hero-background-4-3.jpg?ver=2017-08-17-190938-760');
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
      background-attachment: fixed;
  }
  .navlogo
  {
      width: 5%;
  }
  #smart-Reg
  {
      background-image: url('https://www.themeraider.com/wp-content/uploads/2016/05/feat-may-1-1.jpg');
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
      background-attachment: fixed;
  }
  #section2
  {
      background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQv2ByruHxXWMpUIRh9F9JFlihzv9_VIH_Kcg&usqp=CAU');
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
      background-attachment: fixed;
  }
  #section3, #Smart-Reg-HF
  {
    background-image: url('https://image.freepik.com/free-vector/blue-light-line-shadow-dark-grey-luxury-background_33869-977.jpg');
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover;
    background-attachment: fixed;
  }
  #mynav
  {
      position: absolute;
  
      left: 5%;
      right: 5%;
  }
  p
  {
      style: none;
  }
  #jumimg
  {
      background-image: url('https://img.freepik.com/free-photo/modern-office-with-office-supplies-table-with-office-environment-background_67155-5307.jpg?size=626&ext=jpg');
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
      background-attachment: fixed;
  }
  .check:hover
  {
    background-color: gray;
    color: white;
  }
  .logo-img
  {
      width: 30%;
  }
  .scoialmedia
  {
    background-image: url('https://www.themeraider.com/wp-content/uploads/2016/05/feat-may-1-1.jpg');
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover;
    background-attachment: fixed;
    border-radius: 20px;
    
  }
  #socialicon:hover
  {
      
  }
  #section41
  {
    background-image: url('https://www.dnnsoftware.com/Portals/0/Images/hero-background-4-3.jpg?ver=2017-08-17-190938-760');
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover;
    background-attachment: fixed; 
  }
  #smartregister
  {
    background-image: url('https://www.dnnsoftware.com/Portals/0/Images/hero-background-4-3.jpg?ver=2017-08-17-190938-760');
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover;
    background-attachment: fixed; 
  }
  #Teacher
    {
        /* position: absolute; */
        position: fixed;
        width: 140px;
        height: 200px;
        bottom: 8px;
        right: 16px;

    }
    .form-control
    {
        background-color: rgb(1,1,1,0.1);
        border-top: none;
        border-left: none;
        border-right:none;
        border-bottom: 1px solid;
        border-color: white
        
    }
    .form-control:hover
    {
        background-color: rgb(1,1,1,0.1);
        border-top: none;
        border-left: none;
        border-right:none;
        border-bottom: 1px solid;
        border-color: white;
        color: white
    }
    #A:hover
    {
        background-color: black;
        color: white;
    }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar fixed-top" data-offset="50" >

    <div class="main">
       
        <nav id="mynav" class="navbar navbar-expand-sm  navbar-dark fixed-top pt-2">
            <img class="navlogo" style="width:100px" src="/images/Logo.png" alt="onlinetutor">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#section1">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section2">Courses </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/teacherlist">Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section3">About</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link text-warning" href="#section3">Find a Tutor</a> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search fa-1x" aria-hidden="true"> Find a Tutor</i></button>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> <i class="fa fa-user" aria-hidden="true"></i> </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/login">Login</a>
                                <a class="dropdown-item" href="#section42">Register</a>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>

        <!-- ========================================================================================================== -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-primary text-center">
                <h3 class="text-center text-light pt-5">Welcome to Wah Tutors</h3>

                <div class="from-group">
                    <form action="/findtutor" method="post">
                    @csrf
                        <div class="row p-3 mt-5">
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <select name="subject" required id="" placeholder="Select Course" class="form-control text-white">
                                    <option class="text-dark" value="">Select Course</option>
                                    <option value="">-- Select Subject --</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="General Science">General Science</option>
                                    <option value="Mathematice">Mathematics</option>
                                    <option value="English">English</option>
                                    <option value="Urdu & Islymiat">Urdu & Islymait</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <select name="class" required id="" placeholder="Select Course" class="form-control text-white">
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
                        </div>

                        <div class="row p-3 mt-2">
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <select name="area" required id="" placeholder="Select Course" class="form-control text-white">
                                    <option class="text-dark" value="">Area</option>
                                    <option class="text-dark" value="Basthi">Basthi</option>
                                    <option class="text-dark" value="LALAZar">LALA Zar</option>
                                    <option class="text-dark" value="LikALichok">Lik ALi chok</option>
                                    <option class="text-dark" value="AnwarChock">Anwar Chock</option>
                                    <option class="text-dark" value="Barrier2">Barrier 2</option>
                                    <option class="text-dark" value="Barrier3">Barrier 3</option>
                                    <option class="text-dark" value="Barrier1">Barrier 1</option>
                                </select>
                            </div>
                            <div class="col-sm-3 col-lg-3 col-xl-3">
                                <select name="ST" required id="" placeholder="Select Course" class="form-control text-white">
                                    <option class="text-dark" value="">Start Timing</option>
                                    <option class="text-dark" value="9AM">9-AM</option>
                                    <option class="text-dark" value="10AM">10-AM</option>
                                    <option class="text-dark" value="11AM">11-AM</option>
                                    <option class="text-dark" value="12PM">12-PM</option>
                                    <option class="text-dark" value="1PM">1-PM</option>
                                    <option class="text-dark" value="2PM">2-PM</option>
                                    <option class="text-dark" value="3PM">3-PM</option>
                                    <option class="text-dark" value="4PM">4-PM</option>
                                    <option class="text-dark" value="5PM">5-PM</option>
                                    <option class="text-dark" value="6PM">6-PM</option>
                                    <option class="text-dark" value="7PM">7-PM</option>
                                    <option class="text-dark" value="8PM">8-PM</option>
                                    <option class="text-dark" value="9PM">9-PM</option>
                                    
                                </select>
                            </div>
                            <div class="col-sm-3 col-lg-3 col-xl-3">
                                <select name="ET" required id="" placeholder="Select Course" class="form-control text-white">
                                    <option class="text-dark" value="">End Timing</option>
                                    <option class="text-dark" value="10AM">10-AM</option>
                                    <option class="text-dark" value="11AM">11-AM</option>
                                    <option class="text-dark" value="12PM">12-PM</option>
                                    <option class="text-dark" value="1PM">1-PM</option>
                                    <option class="text-dark" value="2PM">2-PM</option>
                                    <option class="text-dark" value="3PM">3-PM</option>
                                    <option class="text-dark" value="4PM">4-PM</option>
                                    <option class="text-dark" value="5PM">5-PM</option>
                                    <option class="text-dark" value="6PM">6-PM</option>
                                    <option class="text-dark" value="7PM">7-PM</option>
                                    <option class="text-dark" value="8PM">8-PM</option>
                                    <option class="text-dark" value="9PM">9-PM</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="row p-3 mt-2 text-center">
                            <div class="col-sm-3 col-lg-3 col-xl-3"></div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <input type="submit" value="SEARCH A TUTOR" class="btn btn-light text-primary from-control">
                            </div>
                        </div>
                    </form>
                </div>
                
                 
            </div>
        </div>
        </div>


        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <div class="modal fade group" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-primary">
                <h3 class="text-center text-light pt-5">Welcome to Wah Tutors</h3>

                <div class="from-group">
                    <form action="/findstudy" method="post">
                    @csrf
                        <div class="row p-3 mt-5">
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <select name="subject" required id="" placeholder="Select Course" class="form-control text-white">
                                    <option class="text-dark" value="">Select Course</option>
                                    <option value="">-- Select Subject --</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="General Science">General Science</option>
                                    <option value="Mathematice">Mathematics</option>
                                    <option value="English">English</option>
                                    <option value="Urdu & Islymiat">Urdu & Islymait</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <select name="class" required id="" placeholder="Select Course" class="form-control text-white">
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
                        </div>

                        <div class="row p-3 mt-2">
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <select name="area" required id="" placeholder="Select Course" class="form-control text-white">
                                    <option class="text-dark" value="">Area</option>
                                    <option class="text-dark" value="Basthi">Basthi</option>
                                    <option class="text-dark" value="LALAZar">LALA Zar</option>
                                    <option class="text-dark" value="LikALichok">Lik ALi chok</option>
                                    <option class="text-dark" value="AnwarChock">Anwar Chock</option>
                                    <option class="text-dark" value="Barrier2">Barrier 2</option>
                                    <option class="text-dark" value="Barrier3">Barrier 3</option>
                                    <option class="text-dark" value="Barrier1">Barrier 1</option>
                                </select>
                            </div>
                            <div class="col-sm-3 col-lg-3 col-xl-3">
                                <input type="date" required name="date" id="" class="text-light form-control">
                            </div>
                            <div class="col-sm-3 col-lg-3 col-xl-3">
                                <input type="time" required name="time" id="" class="text-light form-control">
                            </div>
                        </div>
                        <div class="row p-3 mt-2 text-center">
                            <div class="col-sm-3 col-lg-3 col-xl-3"></div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <input type="submit" value="SEARCH A GROUP STUDY" class="btn btn-light text-primary from-control">
                            </div>
                        </div>
                    </form>
                </div>
                
                 
            </div>
        </div>
        </div>
        <!-- ========================================================================================================== -->
        <div id="section1" class="container-fluid bg-dark" style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h1 class="mb-5 text-primary">Get The Best Free Online Courses</h1>
                <h3 class="text-danger text-center mt-3"></h3>
                <h3> if your actions inspire others to dream more, learn more, do more and <br>
                become more, you are leader</h3>

                <button id="smartregister" type="button" class="btn btn-primary mt-5 p-3 mb-3"><a class="text-white" href="/teacher"><i class="fa fa-handshake-o fa-1x" aria-hidden="true"> Register as Teacher</i></a>  </button>
                <button id="smartregister" type="button" class="btn btn-primary mt-5 p-3 mb-3" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search fa-1x" aria-hidden="true"> Find a Tutor</i>  </button>
                <button id="smartregister" type="button" class="btn btn-primary mt-5 p-3 mb-3" data-toggle="modal" data-target=".group"><i class="fa fa-search fa-1x" aria-hidden="true"> Find a Group Study</i>  </button>
                
               
            </div>
        </div>
            
    </div>
    <div id="section2" class="container-fluid bg-warning text-center" style="padding-top:70px;padding-bottom:70px">
        <h1 class="mb-5 text-white">Courses</h1>
        <div class="row m-3">
            <div class="col-md-4 col-lg-4 col-xl-4 ">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://bonnyrigg-h.schools.nsw.gov.au/content/dam/doe/sws/schools/b/bonnyrigg-h/supporting-our-students/subject-list/English_Banner.jpg.thumb.1280.1280.jpg" alt="Card image cap">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text">English</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://www.indiansinkuwait.com/Newsfile/15201751054946math1.jpg">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text">Math</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://science4fun.info/wp-content/uploads/2014/12/science-topics-300x175.jpg">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text">Science</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <div class="row m-3">
            <div class="col-md-4 col-lg-4 col-xl-4 ">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://www.houseofbots.com/images/news/4219/cover.png">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text">Computer Science</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://cdn.seeklearning.com.au/media/images/career-guide/module/systems-administrator-module.jpg" alt="Card image cap">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text">Programming</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 23rem;">
                    <img class="card-img-top" src="https://images.collegexpress.com/blog/every-high-school-subject.jpg" alt="Card image cap">
                    <a href="" class="check">
                        <div class="card-body">
                            <p class="card-text text-dark">Other Subjects</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div id="section3" class="container-fluid bg-secondary text-center" style="padding-top:70px;padding-bottom:70px">
        <h1 class="text-white">About </h1>
        <p class="text-white">Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>
    <div id="section41" class="container-fluid bg-dark text-center p-5" style="padding-top:70px;padding-bottom:70px">
        <h1 class="text-white">Contact us</h1>
        <div class="row p-5 text-center">
            <div class="col-md-4 col-lg-4-col-xl-5 text-left">
                <img class="logo-img" style="width:150px" src="/images/Logo.png" alt="" srcset="">
            </div>
            <div class="col-md-4 col-lg-4-col-xl-5">
                <i id="back" class="fa fa-phone text-white fa-1x mb-2 "> 0317 - 053 7357 </i> <br>
                <i class="fa fa-envelope text-white" aria-hidden="true"> onlinetutor@gmail.com</i>
            </div>
            <div class="col-md-4 col-lg-4-col-xl-5">
                <button class="btn "> <a class="text-white" href="/login">login</a></button> <br>
                <button class="btn "> <a class="text-white" href="/Register"> Register</a></button>
                <a href=""></a>
            </div>
        </div>
    </div>
    <div class="scoialmedia text-center bg-white mt-5 p-2  text-center rounded-full border border-dark">
        <a href=""><i id="socialicon" class="fa text-dark pl-1 fa-facebook-official " aria-hidden="true"></i></a>
        <a href=""><i id="socialicon" class="fa text-dark pl-1 fa-instagram" aria-hidden="true"></i></a>
        <a href=""><i id="socialicon" class="fa text-dark pl-1 fa-twitter-square" aria-hidden="true"></i></a>
        <a href=""><i id="socialicon" class="fa text-dark pl-1 fa-linkedin-square" aria-hidden="true"></i></a>
    </div>
    <a href="#section1"><img id="Teacher" class="w-20" src="https://i.pinimg.com/originals/ba/76/4b/ba764ba3bcb52bbce8c3280f6dc38256.png"></a>

</body>
</html>
