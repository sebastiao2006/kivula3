<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductFaq;
use App\Models\ProductPlan;



class ProductController extends Controller
{
  public function index()
{
    $faqs = ProductFaq::all();
    $plans = ProductPlan::all();
    return view('admin.product.index', compact('faqs', 'plans'));
}
public function storeFaq(Request $request)
{
    ProductFaq::create($request->all());
    return back()->with('success', 'Pergunta adicionada com sucesso!');
}
public function storePlan(Request $request)
{
    $data = $request->all();

    // Trata o campo 'features' para array JSON
    $data['features'] = json_encode(explode("\n", $request->features));

    // Ajusta o campo popular: 1 se checkbox marcado, 0 se não
    $data['popular'] = $request->has('popular') ? 1 : 0;

    ProductPlan::create($data);

    return back()->with('success', 'Plano adicionado com sucesso!');
}


// ======== FAQ ========
public function editFaq($id)
{
    $faq = ProductFaq::findOrFail($id);
    return view('admin.product.editFaq', compact('faq'));
}

public function updateFaq(Request $request, $id)
{
    $faq = ProductFaq::findOrFail($id);
    $faq->update($request->only('question', 'answer'));
    return redirect()->route('admin.product.index')->with('success', 'Pergunta atualizada com sucesso!');
}

public function destroyFaq($id)
{
    $faq = ProductFaq::findOrFail($id);
    $faq->delete();
    return back()->with('success', 'Pergunta removida com sucesso!');
}


// ======== PLANO ========
public function editPlan($id)
{
    $plan = ProductPlan::findOrFail($id);
    // Transforma os features JSON em string separada por linha
    $plan->features = implode("\n", json_decode($plan->features, true));
    return view('admin.product.editPlan', compact('plan'));
}

public function updatePlan(Request $request, $id)
{
    $plan = ProductPlan::findOrFail($id);

    $data = $request->all();
    $data['features'] = json_encode(explode("\n", $request->features));

    $plan->update($data);

    return redirect()->route('admin.product.index')->with('success', 'Plano atualizado com sucesso!');
}

public function destroyPlan($id)
{
    $plan = ProductPlan::findOrFail($id);
    $plan->delete();
    return back()->with('success', 'Plano removido com sucesso!');
}

public function plansList()
{
    $plans = ProductPlan::all();
    $faqs = ProductFaq::all();  // Se for usar na view, deve passar

    return view('admin.product.plansList', compact('plans', 'faqs'));
}

}
