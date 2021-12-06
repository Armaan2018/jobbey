<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\User;
use App\Models\Applied;
use Illuminate\Support\Facades\Validator;


class TaskController extends Controller
{
    public function index()
    {
    	return view('jobbey.postatask');
    }        

    public function agreeShow()
    {
        return view('jobbey.agreement');
    }    


    public function store(Request $request)
    {


    	$rules = [

    		'title' => 'required',
    		'description' => 'required',
    		'test_cat' => 'required',
    		'experience' => 'required',
    		'budget' => 'required',
    		'location' => 'required',
    		'test_skill' => 'required',




    	];


    	$custom_msg = [

    		'test_cat.required' => 'Please Select A Category',
    		'test_skill.required' => 'Please Select Skills',


    	];

    	$this -> validate($request,$rules,$custom_msg);

           
           $unique_file_name = '';

           if ($request -> hasFile('cv_files')) {

            $img = $request -> file('cv_files');

            $unique_file_name = md5(time().rand()).'.'. $img -> getClientOriginalExtension();

            $img -> move(public_path('public/media/work/'), $unique_file_name);

   
        }


        $budget = [

        	'min' => $request -> min_budget,
        	'max' => $request -> max_budget,
        	'type_of' => $request -> budget


        ];


  



    	$dataTask = Tasks::create([

    		'title' => $request -> title,
    		'description' => $request -> description,
    		'test_cat' => $request -> test_cat,
    		'experience' => $request -> experience,
    		'budget'    => json_encode($budget),
    		'location' => $request -> location,
    		'test_skill' => json_encode($request -> test_skill),
    		'cv_files'   => $unique_file_name




    	]);

    	        $dataTask -> users() -> attach($request -> get_user_id);


    	        return redirect() -> route('job.alljob');
    	



    }


    public function singleTask($id)
    {
    	$single = Tasks::where('id',$id)->take(1)->get();
    	return view('jobbey.singletask',compact('single'));
    }


    public function singleConfirm(Request $request)
    {
        
       $applied = Applied::create([

            'bid_budget' => $request -> bid_budget,
            'delivary_days' => $request -> delivary_days,



        ]);


       $applied -> users() -> attach($request -> get_freelancer);
       $applied -> tasks() -> attach($request -> get_task);


       return redirect() -> back();



        
    }


    public function deleteApplicants($id)
    {
      $jj = Applied::findOrFail($id);

      $jj -> users()-> detach();
    }   


     public function agreeFinal($id)
    {
      $rj = Tasks::findOrFail($id);

      $rj -> status = false;

      $rj -> update;


      return redirect() -> route('');
    }
}
