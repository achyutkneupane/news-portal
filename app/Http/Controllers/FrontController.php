<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function landingPage()
    {
        return view('front-view');
    }

    public function articleView($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $article->views = $article->views + 1;
        $article->save();
        return view('article-page', compact('article'));
    }

    public function categoryPage($slug)
    {
        $category = Category::withCount('articles')->with('articles.category')->where('slug',$slug)->firstOrFail();
        return view('category-page', compact('category'));
    }

    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $logged_in = auth()->attempt([
            'email' => $email,
            'password' => $password
        ]);

        if($logged_in) {
            return redirect()->route('landing-page');
        } else {
            return redirect()->route('login')->with('error', 'Wrong credentials');
        }
    }
}
