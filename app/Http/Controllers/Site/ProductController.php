<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        // Garantir que o ID esteja dentro do intervalo esperado (1 a 4)
        if (!in_array($id, [1, 2, 3, 4])) {
            abort(404); // Retorna erro 404 se o ID for inválido
        }

        return view("site.product.product{$id}");
    }
}
