<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;
use App\Models\User;
use App\Models\Category;
use App\Models\Director;
class MovieController extends Controller
{
    public function addMovieForm(){
        $categories = Category::all();
        $directors = Director::all();
        return view('addmovieform', compact('categories', 'directors'));
   
    }

    public function welcome(){
        
        return view('welcomeview');
   
    }

    public function storeMovie(Request $request) {
        $user = Auth::user();
        $movie = new Movie();
        $director = Director::findOrFail($request['director']);
        $movie->title= $request['title'];
        $movie->director_id = $request['director'];
        $movie->review = $request['review'];
        $movie->date_of_publishing = $request['date_of_publishing'];
        $movie->movie_length = $request['movie_length'];
        $movie->category_id = $request['category'];
        $movie->grade = $request['grade'];
        $movie->save();
        $movie->director()->associate($director);
        $movie->save();
        return redirect('/')->with('message', 'Note created!');
    }

    public function displayMovies(){
        $movies = Movie::all();

        return view('movielist', compact('movies'));
       
    }


    public function detailMovie($id){
        // $movie = Movie::find($id);
        // $movie = Movie::with('director')->get($id);
        $movie = Movie::with('director')->findOrFail($id);
        return view('detailmovie', compact('movie'));
    }

    public function APIdetailMovie($id){
        // $movie = Movie::find($id);
        $movie = Movie::with('director')->findOrFail($id);
        return response()->json($movie);
    }

    public function APIdisplayMovies(){
        $movies = Movie::all();
        return response()->json($movies);
    }

    public function getMoviesWithCategory($category_id){
        $movies = Movie::where('category_id', $category_id)->get();
        return view('categorymovielist', compact('movies'));
    }

    public function APIgetMoviesWithCategory($category_id){
        $movies = Movie::where('category_id', $category_id)->get();
        return response()->json($movies);
}

public function displayMoviesbyGrade(){
    // $movies = Movie::all()->sortByDesc('grade');
    $movies = Movie::orderBy('grade', 'desc')->get();

    return view('movielistgrade', compact('movies'));
   
}

public function APIdisplayMoviesbyGrade(){
    // $movies = Movie::all()->sortBy('grade');
    $movies = Movie::orderBy('grade', 'desc')->get();

    return response()->json($movies);
   
}

public function editMovieForm($id){
    $categories = Category::all();
    $directors = Director::all();
    $movie = Movie::findOrFail($id);
    return view('editmovieform', compact('categories', 'directors', 'movie'));

}

public function editStoreMovie(Request $request, $id) {
    $user = Auth::user();
    $movie = Movie::findOrFail($id);
    $director = Director::findOrFail($request['director']);
    $movie->title= $request['title'];
    $movie->director_id = $request['director'];
    $movie->review = $request['review'];
    $movie->date_of_publishing = $request['date_of_publishing'];
    $movie->movie_length = $request['movie_length'];
    $movie->category_id = $request['category'];
    $movie->grade = $request['grade'];
    $movie->save();
    $movie->director()->associate($director);
    $movie->save();
    return redirect('/')->with('message', 'Note created!');
}

public function displayCategories(){
    $categories = Category::all();

    return view('categorylist', compact('categories'));
   
}

public function addCategoryForm(){
   
    return view('addcategoryform');

}

public function storeCategory(Request $request) {
    $user = Auth::user();
    $category = new Category();
    $category->name = $request['name'];
    $category->save();
    return redirect('/')->with('message', 'Note created!');
}

public function deleteMovie($id){
    $movie = Movie::findOrFail($id);
    $movie->delete();
    return redirect('/welcome');
}

}