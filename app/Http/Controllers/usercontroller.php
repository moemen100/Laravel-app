<?php
namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;
/**
* 
*/
class usercontroller extends Controller
{public function postSignUp(Request $request)
	{
		$email=$request['email'];
		$first_name=$request['first_name'];
		$password=bcrypt($request['password']);
$user=new user();
$user->email=$email;
$user->first_name=$first_name;
$user->password=$password;
$user->save();
return redirect()->back();
	}
	public function postSignIn(Request $request)
	{
		
	}
}