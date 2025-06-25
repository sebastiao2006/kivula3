<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'date' => 'required|date',
            'image' => 'required|image',
            'author_name' => 'required|string|max:100',
            'author_image' => 'required|image',
        ]);

        $data['image'] = $request->file('image')->store('news', 'public');
        $data['author_image'] = $request->file('author_image')->store('authors', 'public');

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', 'Notícia criada com sucesso.');
    }

    // Métodos edit, update e destroy podem ser adicionados também.
    public function edit(News $news)
{
    return view('admin.news.edit', compact('news'));
}

public function update(Request $request, News $news)
{
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'category' => 'required|string|max:100',
        'date' => 'required|date',
        'author_name' => 'required|string|max:100',
        'image' => 'nullable|image',
        'author_image' => 'nullable|image',
    ]);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('news', 'public');
    }

    if ($request->hasFile('author_image')) {
        $data['author_image'] = $request->file('author_image')->store('authors', 'public');
    }

    $news->update($data);

    return redirect()->route('admin.news.index')->with('success', 'Notícia atualizada com sucesso.');
}

public function destroy(News $news)
{
    $news->delete();
    return redirect()->route('admin.news.index')->with('success', 'Notícia apagada.');
}

}

