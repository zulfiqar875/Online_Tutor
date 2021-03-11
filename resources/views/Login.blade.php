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
    <title>Scramble Section</title>
    <link rel="icon" type="image/ico" href="https://1.bp.blogspot.com/-DvtUHtRRFzs/T-mp0tyb8fI/AAAAAAAAAJ0/EXorYRoWv8Y/s1600/logo.png" />
</head>
<style>
    body
    {
      background-image: url('https://thumbs.dreamstime.com/b/r%C3%A9seau-de-pointe-de-digital-se-reliant-%C3%A0-la-ligne-fond-de-r%C3%A9sum%C3%A9-th%C3%A8me-noir-et-blanc-89491859.jpg');
        /* height: 1000px;  */
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
        background-attachment: fixed;
    }
     .box
    {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }
    .containter
    {
        background-color: rgba(255, 255, 255, 0.310);
        border-radius: 30px;
        margin-top: 40px;
        width: 400px;
        height: 500px;
        padding: 20px;
        
    }
    body
    {
      background-image: url('https://transcosmos.co.uk/wp-content/uploads/2016/02/Merlin-Tech-Support1.jpg');
      /* height: 1000px;  */
      background-position: center; 
      background-repeat: no-repeat; 
      background-size: cover;
      background-attachment: fixed;
    } 
    label
    {
        color: orange;
        font-size: 20px;
        font-family: calibri;
    }
    #B
    {
        background-color: rgba(61, 47, 9, 0.030);
        color: white;
        border: none;
        border-bottom: 1px solid white;
        
    }
    #A
    {
        background-color:rgba(61, 47, 9, 0.111);
        color: orange;
        font-size: 20px;
        border-radius: 20px;

    }
    #A:hover
    {
        background-color: rgba(255, 255, 255, 0.308);
        border:1px solid rgba(61, 47, 9, 0.175);
        color: white;
        font-size: 22px;
    }
    .LB:hover
    {
        color: blue;
    }

    .logo
    {
        width: 30%;
        Height: 30%;
    }

    .fa:hover
    {
        color:red;
    }

    /* ---------------------------------------------------------- */
 }

</style>


<body>
<div class="box ">
    <div class="containter  ">
    <a href="/" class="text-left"><i id="back" class="fa fa-home text-white "> </i></a><h3 style="text-align: center; margin-bottom: 10px; color: Blue; font-family: geneva; font-size: 30px;">Online Tutor</h1>
        <div class="text-center mb-3">
        <img class="navlogo mt-1" style="width:150px" src="/images/Logo.png" alt="onlinetutor">
        </div>
        <div class="form-group">
            <form action="/Auth" method="post">
            @csrf
                <div class="row">
                    <div class="col-12">
                        <label for="">Username</label>
                        <input id="B" type="text" name="username" id="" id="" required class="form-control">
                    </div>
                </div>
                <div class="row">
                        <div class="col-12">
                            <label for="">Password</label>
                            <input id="B"type="password" name="password" id="" required class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for=""></label>
                            <input id="A" type="submit" value="LOGIN" class=" form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <p class="text-light">Don’t have an account?<a href="/Signup" style="text-decoration:none" class="text-primary LB"> Get Register here</a></p>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>