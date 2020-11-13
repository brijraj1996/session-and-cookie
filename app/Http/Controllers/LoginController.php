<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function store(Request $request)
    {

    //                                       Handling Session using request  :

   //     ----------------------------------------------------------------------------
    
        // $request->session()->put('this', $request->input);
        
        // print_r($request->session()->get('this'));


        // $request->session()->flash('Task', 'task is finished');  //flash message 1 which is displayed in the success page.

        // $request->session()->flash('page', 'the page is visible'); //flash message 2 which is displayed in success page.

        // $request->session()->forget('name');

        // return view('success');
        // print_r($request->input());
        
        $request->session()->put('key', $request->input());


        // $request->session()->forget('key'); // deletes the key : 'key'. 
        
        return session()->get('key');
       
        // return $data = $request->session()->get('key');
        
        // return view('success');
       
        // return $value = $request->session()->pull('key',$request->input);
        // if($request->session()->has('password'))
        // {
        //     return 1;
        // }
        // else
        // {
        //     return 0;
        // }

    
    //     return $request->session()->get('key');


        // $request->session()->flash('Task', 'task is successful');
        // dd('hi');
       
        // if($request->session()->exists('key'))
        // {
        //     return 1;
        // }
        // else
        // {
        //     return 0;
        // }


    //
    } 

    public function bond()
    {

    //                      Handling Session using session() : 



    //----------------------------------------------------------
        // $old = session()->get('Seon Connery');

        // $new = session()->get('Roger Moore');

        // echo $old . '<br>' .$new;

        // echo $value = session('Seon Connery');
        // echo $value2 = session('Roger Moore');

        // print_r($data = session()->all()); // Retrieves all session's data.

        

        // if(session()->has('James Bond'))
        // {
        //     return true;
        // }
        
        // else {
        //     return null;
        // }
    }

}
