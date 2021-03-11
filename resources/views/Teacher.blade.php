<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>OnlineTutor</title>
    <link rel="icon" type="image/ico" href="https://1.bp.blogspot.com/-DvtUHtRRFzs/T-mp0tyb8fI/AAAAAAAAAJ0/EXorYRoWv8Y/s1600/logo.png" />
</head>
<style>
    body
    {
        background-image: url('https://www.themeraider.com/wp-content/uploads/2016/05/feat-may-1-1.jpg');
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
        background-attachment: fixed;
    }

    #mynav
    {
        margin-top: 10px; 
        background-color: rgb(100,100,100,0.50);
        border-radius: 50px;
        padding:1%;
    }
    .navlogo
    {
        margin-left: 20px;
        width: 5%;
    }
    #jumimg, #section41
    {
        background-color: rgb(100,100,100,0.30);
    }
    .logo-img
    {
        width:50%;
    }
    .scoialmedia
    {
        border-radius: 50px;
        background-color: rgb(100,100,100,0.1);
    }
    #smartregister
    {
        border: none;
        background-color: none;
    }
    #Smart-Reg-HF, #smart-Reg
    {
        background-image: url('https://image.freepik.com/free-vector/blue-light-line-shadow-dark-grey-luxury-background_33869-977.jpg');
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
        background-attachment: fixed;
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
    .badge
    {
        position: absolute;
        top: 10px;
        right: ;
        padding: 3px 5px;
        border: 1px solid;
        border-radius: 50%;
        
        color: white;
    }
</style>
<body>
   <div class="dashobard">
   <nav id="mynav" class="navbar navbar-scroll navbar-expand-sm  navbar-dark fixed-top ml-5 mr-5">
            <img class="navlogo" style="width:100px" src="/images/Logo.png" alt="onlinetutor">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#Home">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Courses">Courses </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#Group">Group Study </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#Annocuments">Annocuments <span class="badge text-danger">3</span> </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> <i class="fa fa-user text-success" aria-hidden="true"> {{$data->Username}} </i> </a>
                            <div class="dropdown-menu bd-dark text-white">
                                <button id="smartregister" type="button" class="pl-5 ml-1 text-center " data-toggle="modal" data-target="#exampleModalCenter"> Profile </button>
                                <button id="smartregister" type="button" class="pl-5 ml-1 " data-toggle="modal" data-target="#exampleModalCenter"> Setting </button>
                                <button id="smartregister"><a class="dropdown-item pl-5" href="/login">Logout</a></button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>

        <!-- **************************************************************************************************************** -->
        
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header" id="Smart-Reg-HF">
                                <h5 class="modal-title text-white text-center" id="exampleModalLongTitle">Profile</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body" id="smart-Reg">
                            <div class="form" action="/register" method="post"> 
                                <form action="/register" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <i class="far fa-edit text-danger ml-4"> Edit</i>
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->FirstName}} {{$data->LastName}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->CNIC}}" disabled  required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->City}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Country}}" disabled required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Education}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Institute}}" disabled required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Age}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Gender}}" disabled required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Contact}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Email}}" disabled required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Username}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Password}}" disabled required class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="row m-1">
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->ScreatQuestion}}" disabled required class="form-control" id="">
                                        </div>
                                        <div class="col-md-6 col-lg-6 md-xl-6">
                                            <input type="text" name="" placeholder="" value="{{$data->Answer}}" disabled required class="form-control" id="">
                                        </div>
                                    </div>
                                    
                                    <div class="row m-1">
                                        <div class="col-md-12 col-lg-12 md-xl-12">
                                        <input type="text" name="" disabled placeholder="{{$data->Address}}, {{$data->City}}" value="" disabledd required class="form-control" id="" >
                                        </div>
                                    </div>
                                    <!-- <div class="row m-1">
                                        <div class="col-md-12 col-lg-12 md-xl-12">
                                            <input id="A" type="submit" value="Save changes" class=" form-control  text-white">
                                        </div>
                                    </div> -->
                                </form>
                            </div>

                        </div>
                        <div class="modal-footer" id="Smart-Reg-HF">
                            <h6 class="text-center text-white">@OnlineTutor</h6>
                        </div>
                        </div>
                    </div>
                </div>

        <!-- **************************************************************************************************************** -->

        <div id="Home" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h2 class="text-center text-white"> Dashboard</h2>
                <div class="row text-center mt-5">
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-3 border border-white"><h4>Perviouse Courses : </h2> <h6 class="text-success">none</h6></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-3 border border-white"><h4>Enroll Courses : </h2> <h6 class="text-success">{{$course->count()}}</h6></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-3 border border-white"><h4>Status : </h2> <h6 class="text-danger">Active</h6></div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <h4 class="text-center text-white">Teacher Rating</h4>
                        <div class="progress ml-5 mr-5 mt-4">
                            <div class="progress-bar progress-bar-striped progress-bar-animated  " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- **************************************************************************************************************** -->

        <div id="Courses" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h2 class="text-center text-white mb-5 "> Active Courses</h2>

                <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#addsubject">
                    Add New Course
                </button>

                <!-- Modal -->
        <div class="modal fade" id="addsubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Subject</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/addnewsub',[$data->Tid, $data->FirstName])}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
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
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
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
                                <div class="col-sm-6">
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
                            <div class="row">
                                <div class="col-sm-6">
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
                                <div class="col-sm-6">
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
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" value="ADD" class="form-control btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                    </div>
                </div>
            </div>
        </div>

                <div class="row text-center ">
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-1 border border-white"><h6>Subject Name </h2></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-1 border border-white"><h6>Subject Rating</h2></div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-white p-1 border border-white"><h6>Subject Status</h2></div>
                </div>
                <div class="row text-center m-2 ">
                    
                    @foreach ($course as $c)
                        <div class="col-md-4 col-lg-4 col-xl-4 text-primary p-2 border border-white">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Subject">
                                {{$c->Subject}}
                            </button>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 text-white p-2 border border-white">
                            <div class="progress mt-1 ml-2 mr-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 text-primary p-2 border border-white"><h6>Active</h2></div>
                    @endforeach
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="Subject" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Subject Detial</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12"> <input type="text" name="" class="form-control mt-2" value="{{$c->Subject}}" disabled id=""></div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> <input type="text" name="" class="form-control mt-2" value="{{$c->Level}}" disabled id=""></div>
                    <div class="col-sm-6"> <input type="text" name="" class="form-control mt-2" value="{{$c->AvailableArea}}" disabled id=""></div>
                </div>
                <div class="row">
                    <div class="col-sm-6"> <input type="text" name="" class="form-control mt-2" value="{{$c->StartTime}}" disabled id=""></div>
                    <div class="col-sm-6"> <input type="text" name="" class="form-control mt-2" value="{{$c->EndTime}}" disabled id=""></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>


        <!-- ----------------------------------------------------------------------- -->
        <div class="modal fade bd-example-modal-lg  videomodel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-header bg-dark" id="">
                    <h5 class="modal-title text-white text-center" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-content  text-center">
                    <iframe width="800" height="400" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        


        <!-- **************************************************************************************************************** -->


        <div id="Group" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h2 class="text-center text-white mb-5 "> Group Study</h2>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Groupstudy">
                    Add Group Study
                </button>


                <table class="table table-striped table-dark mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Subject</th>
                            <th scope="col">Class</th>
                            <th scope="col">Location</th>
                            <th scope="col">Date/Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($group as $grp)
                            <tr>
                                <th scope="row">{{$grp->Subject}}</th>
                                <td>{{$grp->Class}}</td>
                                <td>{{$grp->Location}}</td>
                                <td>{{$grp->Date}} / {{$grp->Time}}</td>
                                <td><a href="{{url('/cancel',$grp->Gid)}}" class="btn btn-danger"> Cancel  </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                <!-- Modal -->
                    <div class="modal fade" id="Groupstudy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Group Study</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/group',[$c->Tid, $c->Teachername])}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <select name="subject" id="" class=" bg-dark form-control mb-2">
                                            <option value="">-- Select Subject --</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="General Science">General Science</option>
                                            <option value="Mathematice">Mathematics</option>
                                            <option value="English">English</option>
                                            <option value="Urdu & Islymiat">Urdu & Islymait</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <select name="class" id="" class=" bg-dark form-control mb-2">
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

                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <select name="area" id="" placeholder="" class=" bg-dark form-control mb-2">
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
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <input type="date" placeholder="Date" class=" bg-dark form-control" name="date" id="">
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <input type="time" placeholder="Date" class=" bg-dark form-control" name="time" id="">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-success" value="ADD">
                                </div>
                            </form>
                        </div>
                        
                        </div>
                    </div>
                    </div>
            </div>
        </div

                <!-- **************************************************************************************************************** -->

        <div id="Annocuments" class="container-fluid " style="padding-top:70px;padding-bottom:70px">
            <div id="jumimg" class="jumbotron text-center mt-5">
                <h2 class="text-center text-white mb-5 "> Annocuments <i class="fas fa-bullhorn text-danger"></i></h2>
                <h5 class="Text-center text-success mt-5 mb-5"> Temporary no Annocuments</h5>
            </div>
        </div>


        <!-- **************************************************************************************************************** -->
        <div id="section41" class="container-fluid  text-center p-5" style="padding-top:70px;padding-bottom:70px">
            <h1 class="text-white">Contact us</h1>
            <div class="row p-5 text-center">
                <div class="col-md-4 col-lg-4-col-xl-5 text-left">
                    <img class="" style="width:150px" src="/images/Logo.png" alt="onlinetutor">
                </div>
                <div class="col-md-4 col-lg-4-col-xl-5">
                    <i id="back" class="fa fa-phone text-white fa-1x mb-2 "> 0317 - 053 7357 </i> <br>
                    <i class="fa fa-envelope text-white" aria-hidden="true"> OnlineTutor@gmail.com</i>
                </div>
                <div class="col-md-4 col-lg-4-col-xl-5">
                    <button class="btn "> <a class="text-white" href="/login">login</a></button> <br>
                    <button class="btn "> <a class="text-white" href="/Register"> Register</a></button>
                    <a href=""></a>
                </div>
            </div>
        </div>

        <div class="scoialmedia text-center mt-5 p-2">
            <a href=""><i id="socialicon" class="fa text-light pl-1 fa-facebook-official " aria-hidden="true"></i></a>
            <a href=""><i id="socialicon" class="fa text-light pl-1 fa-instagram" aria-hidden="true"></i></a>
            <a href=""><i id="socialicon" class="fa text-light pl-1 fa-twitter-square" aria-hidden="true"></i></a>
            <a href=""><i id="socialicon" class="fa text-light pl-1 fa-linkedin-square" aria-hidden="true"></i></a>
        </div>
        
        

   </div>
    
</body>
</html>



