<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function index()  {
        $artikel = Article::all();
        return view('artikel',['artikel'=>$artikel]);
    }
    public function addArticle()  {
        return view('addArticle');
    }
    public function storeArticle(Request $request)  {
        $validated = $request->validate([
            'title' => 'required|unique:articles|max:255',
            'content' => 'required', 
        ]);
    
        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover',$newName);
        }
    
      // Menyimpan artikel
    $article = new Article();
    $article->title = $request->title;
    $article->content = $request->content;
    $article->cover = $newName; 
    $article->user_id = auth()->user()->id; 
    $article->save();
    $article = Article::orderBy('id', 'desc')->get();

        return redirect('artikel')->with('success', 'Article Add successfully!');
    }
    public function listArticle(Request $request) {
        $search = $request->input('search');
        $query = Article::with('user');
        
        if ($search) {
            $query->where('title', 'LIKE', '%' . $search . '%');
        }
        
        $article = $query->paginate(5);
        
        return view('listArticle', ['article' => $article]);
    }
    
    public function deleteArticle($id)  {
        $detail = Article::findOrFail($id);
        return view('deleteArticle',['detail'=>$detail]);
    }
    public function deleteArticleUser($id)  {
        $user = Auth::user();
        $detail = Article::findOrFail($id);
        return view('deleteArticleUser',['detail'=>$detail,"user"=>$user]);
    }
    
    public function deletedArticle($id) 
    {
        $detail = Article::findOrFail($id);
        $detail->delete();
        return redirect('listArticle')->with('success', 'Article deleted successfully!');
    }
    public function deletedArticleUser($id) 
    {
        $detail = Article::findOrFail($id);
        $detail->delete();
        return redirect('listArticleUser')->with('success', 'Article deleted successfully!');
    }
    public function showArticle($id) 
    {
        $article = Article::with('user')->findOrFail($id);
return view('showArticle', ['article' => $article]);

    }
    public function updateArticle($id) 
    {
        $article = Article::findOrFail($id);
        return view('updateArticle',['article'=>$article]);

    }
    public function updatedArticle(Request $request,$id) 
    {
     
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover',$newName);
            $request['cover'] = $newName;
        }

        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('listArticleUser')->with('success', 'Article updated successfully!');

    }
      
}
