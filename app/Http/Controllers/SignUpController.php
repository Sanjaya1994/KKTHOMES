<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;
use\App\User;
use\App\Message;
use\Illuminate\Support\Facades\Auth;
class SignUpController extends Controller
{
    public function getabout(){
        return view('about');
    }
    public function updateTaskAsCompleted($id){
        $message=Message::find($id);
        $message->Read=1;
        $message->save();
        return redirect()->back();
    
    }
    public function updateTaskAsNotCompleted($id){
        $message=Message::find($id);
        $message->Read=0;
        $message->save();
        return redirect()->back();
    
    }
    public function getmessage(){
        return view('message');
    }
    public function indexhome(){
        return view('index');
    }
    public function getourteam(){
        return view('our-team');
    }
    public function getservice(){
        return view('service');
    }
    public function getservicetwocolumn(){
        return view('service-two-column');
    }
    public function getprojects(){
        return view('projects');
    }
    public function getprojectsthree(){
        return view('projects-three');
    }
    public function getindex01(){
        return view('index-1');
    }
    public function getcontact(){
        return view('contact');
    }
    public function getcommingsoon(){
        return view('coming-soon');
    }
    public function getadmin(){
        return view('admin');
    }
    public function getservicesignle(){
        return view('service-signle');
    }
    public function getservicesignle02(){
        return view('service-signle02');
    }
    public function getcharity(){
        return view('charity');
    }

    public function postmessage(Request $request){

       
        $name=$request['name'];
        $phone_number=$request['phone_number'];            
        $email=$request['email'];  
        $messages=$request['messages'];       
    
        $message=new Message();
        $message->name=$name;
        $message->phone_number=$phone_number;       
        $message->email=$email;
        $message->messages=$messages;
       
            $message->save();
        return redirect()->route('index');
        $user=User::all();
     
    }


    public function postSignUp(Request $request){

       
        $first_name=$request['first_name'];
        $last_name=$request['last_name'];
        $user_name=$request['user_name'];       
        $email=$request['email'];  
        $password=$request['password'];  
        $password02=$request['password02'];       
    
        $user=new User();
        $user->first_name=$first_name;
        $user->last_name=$last_name;       
        $user->email=$email;
        $user->user_name=$user_name;
        $user->password=$password;
        $user->password02=$password02;
            $user->save();
        return redirect()->route('index');
        $user=User::all();
     
    }
    public function postLogin(Request $req){
     
            // if (Auth::attempt(['user_name' => $request['user_name'], 'password' => $request['password'],])) {
            //     return redirect()->route('admin');
            // }
            //  dd($request);
         
           
            
            $user_name = $req->input('user_name');
            $password = $req->input('password');
      
            $checkLogin = DB::table('users')->where(['user_name'=>$user_name,'password'=>$password,'password02'=>1,])->get();
            if(count($checkLogin)  >0)
            {
                return redirect()->route('admin');
            }
            else
            {
                return redirect()->route('index');
            }
           }
           public function getLogout(){
            Auth::logout();
            return redirect()->route('index');
        }
      }