<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seeker;
class SeekerController extends Controller
{
    //
    

    public function seekerlogin(){
    	return view('seeker.login');

    }

    public function login_se(Request  $req){
    		$email=$req->email;
    		$password=$req->password;
    	$user=Seeker::where('email','=',$email)
    	->where('password','=',$password)
    	->get();

    	if($user){
    		echo 'Successfully logged in';

    	}
    	else{
    		echo 'envalid email or password';
    	}

    }

    	// $seeker=Seeker::where('email','=',$req->email)->where('password','=',$req->password)->first()->toArray();
    	// 	if($seeker){
    	// 		if($seeker[0]['status']==1){

    	// 			return Redirect('seeker/dashboard');
    	// 		}
    	// 		else
    	// 		{
    	// 			echo " Account Deactivate";

    	// 		}
    	// 	}else
    	// 		{
    	// 			echo "Email and Password No Match";
    	// 		}		

    public function seeker(){
    	//return view('seeker.dashboard');
    	echo "login";
    	}

    public function seekerregister(){
    	return view('seeker.signup');
    }

    public function store(Request $req){

        // $validatedData = $req->validate([
        // 'name' => 'required|max:100',
        // 'email' => 'required|email|unique:seekers,email',
        // 'gender' => 'required',
        // 'dob' => 'required|date|before:08/28/2020',    
    //]);
    	// $name=$req->name;
    	// $email=$req->email;
    	// $password=$req->password;
    	// $gender=$req->gender;
    	// $dob=$req->dob;
        
    
    	$seeker = new Seeker();

    	$seeker->name=$req->name;
    	$seeker->email=$req->email;
    	$seeker->password=$req->password;
    	$seeker->gender=$req->gender;
        $seeker->dob=$req->dob;
        $seeker->status=0;
        //return response()->json($seeker);
    
    	if($seeker->save()){
    		echo redirect()->back()->with('success','Insert Successful');

    	}
    }


}
