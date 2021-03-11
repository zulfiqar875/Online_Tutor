<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;
use App\Models\Course;
use App\Models\Group;


class TeacherController extends Controller
{
    public function Login (Request $request)
    {
        $data = Teacher::where('Username',$request->username)->where('Password',$request->password)->first();
        if($data!=null)
        {
            $course = $data->Course;
            $group = $data->Group;
             return view ('Teacher',compact('data','course','group'));
             
        }
        else
        {
            alert()->warning('Wrong Username and Password');
            return view ('Login');
        }

    }

    public function AddData (Request $request)
    {
        $dataT = new Teacher();
        $dataC = new Course();
        $total = Teacher::count();

        $dataT->FirstName = $request->Firstname;
        $dataT->Lastname = $request->Lastname;
        $dataT->Gender = $request->Gender;
        $dataT->CNIC = $request->CNIC;
        $dataT->Age = $request->Age;
        $dataT->Education = $request->education;
        $dataT->Institute = $request->institue;
        $dataT->City = $request->City;
        $dataT->Email = $request->Email;
        $dataT->Country = $request->Country;
        $dataT->Province = $request->province;
        $dataT->Username = $request->Username;
        $dataT->Password = $request->Password;
        $dataT->Contact = $request->Phoneno;
        $dataT->Contact2 = $request->phoneno2;
        $dataT->Address = $request->Address;
        $dataT->ScreatQuestion = $request->Squestion;
        $dataT->Answer = $request->Answer;
        $dataT->save();
    
        $dataC->Tid = $total+1;
        $dataC->Teachername =  $request->Firstname;
        $dataC->Subject = $request->subject;
        $dataC->Level = $request->level;
        $dataC->AvailableArea = $request->CA;
        $dataC->StartTime = $request->ST;
        $dataC->EndTime = $request->ET;
        $dataC->save();

        alert()->success('Successfully you are Register');
        return view ('Login');

    }


    public function findtutor (Request $reg)
    {
        $data = Course::where('Subject',$reg->subject)->where('Level',$reg->class)->where('AvailableArea',$reg->area)->where('StartTime',$reg->ST)->get();
        if($data!=Null)
        {
            
            return view ('AvailableTutor',compact('data'));
        }
        else
        {
            echo "Data not found...!";
        }
    }

    
    public function findgroup (Request $reg)
    {
        $data = Group::where('Subject',$reg->subject)->where('Class',$reg->class)->where('Location',$reg->area)->where('Date',$reg->date)->get();
        if($data!=Null)
        {
            
            return view ('Groupstudy',compact('data'));
        }
        else
        {
            echo "Data not found...!";
        }
    }


    public function teacherlist()
    {
        
        $Course = Teacher::all();
        if($Course!=Null)
        {
            
            return view ('TeacherList',compact('Course'));
            
            
        }
    }

    public function seetutor ($Tid,$Cid)
    {
        $data = Teacher::where('Tid',$Tid)->first();
        if($data!=null)
        {
            $course = Course::where('Cid',$Cid)->first();
             return view ('Tutor', compact('data','course'));
        }
        else{
            
        }
    }

    public function groupdetail ($Tid,$Gid)
    {
        $data = Teacher::where('Tid',$Tid)->first();
        if($data!=null)
        {
            $group = Group::where('Gid',$Gid)->first();
             return view ('GroupDetail', compact('data','group'));
        }
        else{
            
        }
    }

    public function addnewsub (Request $Req, $Tid, $FirstName)
    {
        $data = new Course();
        $data->Tid = $Tid;
        $data->Teachername = $FirstName;
        $data->Subject = $Req->subject;
        $data->Level = $Req->level;
        $data->AvailableArea = $Req->CA;
        $data->StartTime = $Req->ST;
        $data->EndTime = $Req->ET;
        $data->save();
        echo '<script type="text/javascript">'
               , 'history.go(-1);'
               ,'window = window.location.reload();'
			   , '</script>';
    }

// ===================================================================================
    public function AddGroupStudy(Request $req, $Tid, $Teachername){
        $group = new Group();
        $group->Tid = $Tid;
        $group->Tname = $Teachername;
        $group->Subject = $req->subject;
        $group->Class = $req->class;
        $group->Date = $req->date;
        $group->Time = $req->time;
        $group->Location = $req->area;
        $group->save();
        echo '<script type="text/javascript">'
               , 'history.go(-1);'
               ,'window = window.location.reload();'
			   , '</script>';


    }

    public function cancel($Gid)
    {
        $cancel = Group::where('Gid',$Gid);
        $cancel->delete();
        echo '<script type="text/javascript">'
               , 'history.go(-1);'
               ,'window = window.location.reload();'
			   , '</script>';
    }

    // --------------------     ANDRO API ROUTE    ----------------

    public function apiteacherlist()
    {
        $teacher = Teacher::all()->toJson(JSON_PRETTY_PRINT);
        return response($teacher, 200);
    }
    public function apicourselist()
    {
        $course = Course::all()->toJson(JSON_PRETTY_PRINT);
        return response($course, 200);
    }

    public function apigrouplist()
    {
        $grp = Group::all()->toJson(JSON_PRETTY_PRINT);
        return response($grp, 200);
    }


    public function apiteachregister (Request $request)
    {
        $dataT = new Teacher();
        $dataC = new Course();

        $dataT->FirstName = $request->firstName;
        $dataT->Lastname = $request->lastName;
        $dataT->Gender = $request->gender;
        $dataT->CNIC = $request->cnic;
        $dataT->Age = $request->age;
        $dataT->Education = $request->education;
        $dataT->Institute = $request->institute;
        $dataT->City = $request->city;
        $dataT->Email = $request->email;
        $dataT->Country = $request->country;
        $dataT->Province = $request->province;
        $dataT->Username = $request->username;
        $dataT->Password = $request->password;
        $dataT->Contact = $request->phoneno;
        $dataT->Contact2 = $request->phoneno2;
        $dataT->Address = $request->address;
        $dataT->ScreatQuestion = $request->sQuestion;
        $dataT->Answer = $request->answer;
        $dataT->save();
        
        $dataT->id; //Gets currently added Row's Primary key.
    
        $dataC->Tid = $dataT->id;
        $dataC->Teachername =  $request->firstName;
        $dataC->Subject = $request->subject;
        $dataC->Level = $request->level;
        $dataC->AvailableArea = $request->availableArea;
        $dataC->StartTime = $request->startTime;
        $dataC->EndTime = $request->endTime;
        $dataC->save();

        $teacher = Teacher::where('Tid', $dataT->id)->first();
        if($teacher!=null)
        {
            // $course = $teacher->Course;
            //  return view ('Teacher',compact('data','course'));
            return response($teacher->toJson(JSON_PRETTY_PRINT), 200);
             
        }
        else
        {
            // alert()->warning('Wrong Username and Password');
            return response("Teacher registration failed", 500);
        }
        
        // return response("Teacher Register", 200);

    }

    public function apiteachlogin (Request $request)
    {
        $data = Teacher::where('Username',$request->username)->where('Password',$request->password)->first();
        if($data!=null)
        {
            // $course = $data->Course;
            //  return view ('Teacher',compact('data','course'));
            return response($data->toJson(JSON_PRETTY_PRINT), 200);
             
        }
        else
        {
            // alert()->warning('Wrong Username and Password');
            return response("Invalid Credentials or No User available", 500);
        }

    }


    public function apiAddCourse(Request $req){
        $course = new Course();
        $course->Tid = $req->tId;
        $course->Teachername = $req->teacherName;
        $course->Subject = $req->subject;
        $course->Level = $req->level;
        $course->AvailableArea = $req->availableArea;
        $course->StartTime = $req->startTime;
        $course->EndTime = $req->endTime;
        $course->save();

        $crs = Course::where('Cid',$course->id)->first();
        if($crs!=null)
        {
            // $course = $teacher->Course;
            //  return view ('Teacher',compact('data','course'));
            return response($crs->toJson(JSON_PRETTY_PRINT), 200);
             
        }
        else
        {
            // alert()->warning('Wrong Username and Password');
            return response("Error in adding course", 500);
        }
    }




    public function apiAddGroupStudy(Request $req){
        $group = new Group();
        $group->Tid = $req->tId;
        $group->Tname = $req->teacherName;
        $group->Subject = $req->subject;
        $group->Class = $req->class;
        $group->Date = $req->date;
        $group->Time = $req->time;
        $group->Location = $req->location;
        $group->save();

        $grp = Group::where('Gid',$group->id)->first();
        if($grp!=null)
        {
            // $course = $teacher->Course;
            //  return view ('Teacher',compact('data','course'));
            return response($grp->toJson(JSON_PRETTY_PRINT), 200);
             
        }
        else
        {
            // alert()->warning('Wrong Username and Password');
            return response("Error in adding group", 500);
        }
        


    }
// ===================================================================================
}
