<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tasks;
use Illuminate\Support\Str;
use  Illuminate\Support\Facades\File;

class BasicController extends Controller
{
    public function index()
    {
        $allpost = Tasks::latest()->get();
    	return view('jobbey.jobs',compact('allpost'));
    }

    public function showUserRegister()
    {
    	return view('jobbey.users.registration');
    }    

    public function showUserLogin()
    {
    	return view('jobbey.users.userlogin');
    }    


    public function showUserProfile()
    {
        return view('jobbey.profile');
    }


    public function editUser(Request $request)
    {
  
           
        $storeID = $request -> getmyid;
        $re = User::findOrFail($storeID);


       



         if ($request -> hasFile('profileimage')) {

            $img = $request -> file('profileimage');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);

            File::delete('public/media/work/'.$request-> oldimage);
        }else{

          $unique_file_name = $request -> oldimage;

        }


         $postage = [

      
            'lastname' => $request -> lastname,
            'birthday' => $request -> birthday,
            'description' => $request -> description,
            'tagline' => $request -> tagline,
            'language' => $request -> language,
            // 'skills' => $request -> skills,
            'payrate' => $request -> payrate,
            'available' => $request -> available,
            'experience' => $request -> tags,
            'location' => $request -> location,
            'website1' => $request -> website1,
            'website2' => $request -> website2,
            'website3' => $request -> website3,






         ];







        $re -> profile = json_encode($postage);
        $re -> name = $request -> name;
        $re -> email = $request -> email;
        $re -> profileimage = $unique_file_name;
        $re -> update();


        return redirect()-> route('user.profile');




    }
}
