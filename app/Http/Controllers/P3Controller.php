<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;
use P3\Http\Requests;
use P3\Http\Controllers\Controller;
use P3\Http\Requests\UserFormRequest;
use P3\Http\Requests\LoremFormRequest;
use \Faker;
use \Joyabia\Jpasswdgen\Joypasswd;
use \Badcow\LoremIpsum\Generator;

class P3Controller extends Controller
{
public function index()
{
	return view('index');
}

 public function userstore(UserFormRequest $request)
{

{ 

//GET number of users requested	
  $users = $request->input('users');
  $profile = $request->input('profile');
  $password = $request->input('password');
  $address = $request->input('address');
   $faker = Faker\Factory::create();
 $password_generator = new Joypasswd();
  
 //Initialize username array. For example purposes I will just use one array.
//Username will store all the users that will be generated

    
//The $users variable should be the number of users that need to be created
     for ($i = 0; $i < $users; $i++) 
     {
     	$usercred ="Username:  ". $faker->name;
     	$usercred .='%';
     	//check if variables are set
     	if(isset($password)){
     		$usercred .= "Password:  ". $password_generator->passwdgen();
     		$usercred .='%';
     		
     	}
     	if(isset($address)){
     		$usercred .= "Address:  ".$faker->address;
     		$usercred .='%';
     	}

     	if(isset($profile)){
     		$usercred .= "Profile:  " .$faker->text;
			     	
     	}
         //loop and store each username into the username array
          //$username = array($faker->name, $faker->address,  $password_generator->passwdgen());
          
         // $userprofile[] = $faker->text;
          

         //// $useraddress[] = $faker->address;
         //$userpassword[] = $password_generator->passwdgen();
     	$username []= $usercred;
     }




    return view('store.userstore', ['username' => $username, 'usercred'=>$usercred] );
 
 }
 
 
 }

 public function loremstore(LoremFormRequest $request)
{

 //return \Redirect::route('contact');
 // $paragraph = $request->input('paragraph');
    
 
 $generator = new Generator();
$paragraphs = $request->input('paragraph');

$userparagraph = $generator->getParagraphs($paragraphs);
  
   return view('store.loremstore')->with('userparagraph', $userparagraph);

 }
}
