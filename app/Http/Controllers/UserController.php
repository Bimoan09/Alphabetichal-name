<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    
    public function getUser(){
        $data = User::select('name')->orderBy('name', 'asc')->get();

       

        $result = [];
        foreach ($data as $item) {
            $firstLetter = substr($item->name, 0, 1);
            $result[$firstLetter][] = $item->name;
        }


        return view('welcome', compact('data','result'));
    }

    public function getUserAlphabet(){
        $array = User::select('name')->orderBy('name', 'asc')->get();
       
    
        
        // $previous = null;
        // foreach($array as $value) {
        // $firstLetter = substr($value, 0, 1);
        // if($previous !== $firstLetter) echo "\n".$firstLetter."\n---\n\n";
        // $previous = $firstLetter;
        // echo $value."&nbsp";

        // }

        $result = [];
        foreach ($array as $item) {
            $firstLetter = substr($item->name, 0, 1);
            $result[$firstLetter][] = $item->name;
        }


        return view('user', compact('result'));
    }
}
