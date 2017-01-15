<?php

namespace App\Http\Controllers;
use App\createTshirtTables;

use App\Http\Requests\ShirtRequests;
use Illuminate\Http\Request;

//use App\Http\Requests\Request;

class ArticlesController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        
        $articles = createTshirtTables::latest('published_at')->Published()->get();
        return view('articles.index', compact('articles'));

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $article = createTshirtTables::findorfail($id);
        return view('articles.article', compact('article'));

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * @param makeNewShirtRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ShirtRequests $request)
    {
        createTshirtTables::create($request->all());
        return redirect('articles');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $article = createTshirtTables::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update($id, ShirtRequests $request)
    {
        $article = createTshirtTables::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');

    }
}
