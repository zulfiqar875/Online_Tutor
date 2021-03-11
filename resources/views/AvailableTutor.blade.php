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
        background-image: url('https://i.pinimg.com/originals/e1/7c/09/e17c093ad942d172afeebcc3910c6700.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: grey;
    }
</style>
<body>
        <a href="/" class="text-left"><i id="back" class="fa fa-home fa-2x text-white "> </i></a>
        <h3 class="text-light text-center mt-5 mb-5">Available Teachers Now - {{$data->count()}}</h3>
        {{-- ......................................................................................................... --}}
                                            {{-- REGISTRATION FORM --}}
        {{-- ......................................................................................................... --}}
          
           <div class="col-md-12 col-lg-12 col-xl-12 tableFixHead">
                <table class="table table-striped text-light disabled">
                    <thead>
                        <tr>
                            <th>Teacher Name</th>
                            
                            <th>Subject</th>
                            <th>Level</th>
                            <th>Available Area</th>
                            <th>Available Timing</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $student)
                            <tr>
                                <td class=""><i class="fa fa-user-circle-o fa-1x" aria-hidden="true"> {{$student->Teachername}}</i> </td>
                                <td>{{ $student->Subject }}</td>
                                <td>{{ $student->AvailableArea }}</td>
                                <td>{{ $student->Level }}</td>
                                <td>{{ $student->StartTime}} to {{$student->EndTime}} </td>
                                <td>
                                    <form action="{{url('/see tutor',[$student->Tid, $student->Cid])}}" method="post">
                                        @csrf
                                        <span><input type="submit" value="See Profile" class="btn btn-primary"></span>
                                    </form>
                                    <!-- <a class="btn btn-primary" href="/see tutor,{{$student->Tid}}">SEE PROFILE< -->
                                </td>
                        
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- =============================================================================================== -->
                                                    <!-- CLIENT_PROFILE_FORM -->
            <!-- =============================================================================================== -->


            <!-- =============================================================================================== -->
  
            <div class="container p-3 mt-1">


            </div>
</body>
</html>