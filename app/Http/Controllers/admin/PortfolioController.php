<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
            'link' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('portfolio', 'public');
        }

        Portfolio::create($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfólio criado com sucesso!');
    }

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'link' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('portfolio', 'public');
        }

        $portfolio->update($data);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfólio atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfólio excluído com sucesso!');
    }
}
