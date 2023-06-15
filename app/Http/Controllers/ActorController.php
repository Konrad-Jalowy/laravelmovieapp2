<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Actor;
use App\Models\User;
class ActorController extends Controller
{
    public function addActorForm(){
        return view('addactorform');
   
    }

    public function storeActor(Request $request) {
        $user = User::findOrFail(Auth::id());
        $actor = new Actor();
        $actor->name= $request['name'];
        $actor->date_of_birth = $request['date_of_birth'];
        $actor->bio = $request['bio'];
        $actor->save();
        return redirect('/')->with('message', 'Note created!');
    }

    public function displayActors(){
        $actors = Actor::all();

        return view('actorlist', compact('actors'));
       
    }


    public function detailActor($id){
        $actor = Actor::findOrFail($id);
        return view('detailactor', compact('actor'));
    }

    public function APIdetailActor($id){
        $actor = Actor::findOrFail($id);
        return response()->json($actor);
    }

    public function APIdisplayActors(){
        $actors = Actor::all();
        return response()->json($actors);
    }

    public function editActorForm($id){
        $actor = Actor::findOrFail($id);
        return view('editactorform', compact('actor'));
    }

    public function editStoreActor(Request $request, $id) {
        $user = User::find(Auth::id());
        $actor = Actor::findOrFail($id);
        $actor->name= $request['name'];
        $actor->date_of_birth = $request['date_of_birth'];
        $actor->bio = $request['bio'];
        $actor->save();
        return redirect('/')->with('message', 'Note created!');
    }

    public function deleteActor($id){
        $actor = Actor::findOrFail($id);
        $actor->delete();
        return redirect('/welcome');
    }

}
