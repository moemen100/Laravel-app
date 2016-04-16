<?php
namespace app\Http\Controllers;
use app\user;
use Illuminate\Http\Request;
/**
* 
*/
class usercontroller extends Controller
{
	
	public function postsignup(Request $request)
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
}