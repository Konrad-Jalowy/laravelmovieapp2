<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Director;
use App\Models\User;
class DirectorController extends Controller
{
    public function addDirectorForm(){
        return view('adddirectorform');
   
    }

    public function storeDirector(Request $request) {
        $user = Auth::user();
        $director = new Director();
        $director->name= $request['name'];
        $director->date_of_birth = $request['date_of_birth'];
        $director->bio = $request['bio'];
        $director->save();
        return redirect('/')->with('message', 'Note created!');
    }

    public function displayDirectors(){
        $directors = Director::all();

        return view('directorlist', compact('directors'));
       
    }


    public function detailDirector($id){
        // $director = Director::find($id);
        $director = Director::with('movies')->findOrFail($id);
        return view('detaildirector', compact('director'));
    }

    public function APIdetailDirector($id){
        // $director = Director::find($id);
        $director = Director::with('movies')->findOrFail($id);
        return response()->json($director);
    }

    public function APIdisplayDirectors(){
        $directors = Director::all();
        return response()->json($directors);
    }

    public function editDirectorForm($id){
        $director = Director::findOrFail($id);
        return view('editdirectorform', compact('director'));
    }

    public function editStoreDirector(Request $request, $id) {
        $user = Auth::user();
        $director = Director::findOrFail($id);
        $director->name= $request['name'];
        $director->date_of_birth = $request['date_of_birth'];
        $director->bio = $request['bio'];
        $director->save();
        return redirect('/')->with('message', 'Note created!');
    }

    public function deleteDirector($id){
        $director = Director::findOrFail($id);
        $director->delete();
        return redirect('/welcome');
    }
}
