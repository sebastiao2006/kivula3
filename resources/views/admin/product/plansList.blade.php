@extends('admin.layouts.app')

@section('title', 'Lista de Planos')

@section('content')

<style>
  /* Container principal para cada produto */
  .product-section {
    margin-bottom: 50px;
  }

  /* Título do produto */
  .product-title {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 26px;
    color: #222;
    margin-bottom: 25px;
    border-bottom: 2px solid #0262d1;
    padding-bottom: 6px;
  }

  /* Flex container para FAQs e Planos lado a lado */
  .flex-container {
    display: flex;
    gap: 40px;
    flex-wrap: wrap;
  }

  /* Cada bloco (FAQs ou Planos) */
  .block {
    flex: 1 1 45%;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
    padding: 20px;
  }

  .block h4 {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 20px;
    margin-bottom: 15px;
    color: #0262d1;
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
  }

  table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 8px;
    font-family: Arial, sans-serif;
  }

  thead tr {
    background-color: #0262d1;
    color: white;
    font-weight: bold;
  }

  thead th {
    padding: 12px 15px;
    border-radius: 8px 8px 0 0;
  }

  tbody tr {
    background-color: #f7f9fc;
    transition: background-color 0.3s ease;
    border-radius: 8px;
  }

  tbody tr:hover {
    background-color: #e6f2d9;
  }

  tbody td {
    padding: 12px 15px;
    vertical-align: middle;
    border-bottom: none;
  }

  /* Estilizando botões Ações */
  .action-links {
    display: flex;
    gap: 12px;
    align-items: center;
  }

  .action-links a,
  .action-links button {
    padding: 6px 12px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    user-select: none;
    transition: background-color 0.2s ease;
  }

  .action-links a {
    background-color: #1976d2;
    color: white;
  }

  .action-links a:hover {
    background-color: #135ba1;
  }

  .action-links button {
    background-color: #d32f2f;
    color: white;
  }

  .action-links button:hover {
    background-color: #a72828;
  }

  /* Form inline para o botão apagar */
  form {
    display: inline;
    margin: 0;
  }

  hr {
    margin: 50px 0 30px 0;
    border: none;
    border-top: 1px solid #ddd;
  }

  /* Responsividade básica */
  @media(max-width: 900px) {
    .flex-container {
      flex-direction: column;
    }

    .block {
      flex: 1 1 100%;
    }
  }
</style>

<h2>FAQs e Planos Cadastrados</h2>

@foreach (['product1' => 'Produto 1', 'product2' => 'Produto 2', 'product3' => 'Produto 3'] as $productKey => $productName)
  <section class="product-section">
    <h3 class="product-title">{{ $productName }}</h3>

    <div class="flex-container">
      {{-- FAQs --}}
      <div class="block">
        <h4>Perguntas Frequentes</h4>
        <table>
          <thead>
            <tr>
              <th>Pergunta</th>
              <th>Resposta</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($faqs->where('product', $productKey) as $faq)
              <tr>
                <td>{{ $faq->question }}</td>
                <td>{{ $faq->answer }}</td>
                <td>
                  <div class="action-links">
                    <a href="{{ route('admin.product.editFaq', $faq->id) }}">Editar</a>
                    <form action="{{ route('admin.product.destroyFaq', $faq->id) }}" method="POST" onsubmit="return confirm('Deseja apagar esta FAQ?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit">Apagar</button>
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      {{-- Planos --}}
      <div class="block">
        <h4>Planos de Preço</h4>
        <table>
          <thead>
            <tr>
              <th>Título</th>
              <th>Preço</th>
              <th>Período</th>
              <th>Popular</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($plans->where('product', $productKey) as $plan)
              <tr>
                <td>{{ $plan->title }}</td>
                <td>Kz {{ number_format((float) $plan->price, 0, ',', '.') }}</td>
                <td>{{ $plan->period }}</td>
                <td>{{ $plan->popular ? 'Sim' : 'Não' }}</td>
                <td>
                  <div class="action-links">
                    <a href="{{ route('admin.product.editPlan', $plan->id) }}">Editar</a>
                    <form action="{{ route('admin.product.destroyPlan', $plan->id) }}" method="POST" onsubmit="return confirm('Deseja apagar este plano?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit">Apagar</button>
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endforeach

@endsection
