@extends('admin.layouts.app')

@section('title', 'Portfólio')

@section('content')
<h2>Lista de Portfólios</h2>

<a href="{{ route('admin.portfolio.create') }}" class="btn-new">+ Novo Portfólio</a>

@if(session('success'))
  <p class="success-message">{{ session('success') }}</p>
@endif

<table class="portfolio-table">
  <thead>
    <tr>
      <th>Imagem</th>
      <th>Título</th>
      <th>Categoria</th>
      <th>Descrição</th>
      <th>Link</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($portfolios as $item)
      <tr>
        <td><img src="{{ asset('storage/'.$item->image) }}" width="100" alt="{{ $item->title }}"></td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->category }}</td>
        <td>{{ $item->description }}</td>
        <td><a href="{{ $item->link }}" target="_blank" class="link-view">Ver</a></td>
        <td>
          <a href="{{ route('admin.portfolio.edit', $item->id) }}" class="btn-edit">Editar</a> |
          <form action="{{ route('admin.portfolio.destroy', $item->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-delete" onclick="return confirm('Deseja mesmo excluir?')">Excluir</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

<style>
  /* Botão Novo */
  .btn-new {
    display: inline-block;
    margin-bottom: 15px;
    padding: 8px 15px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
  }
  .btn-new:hover {
    background-color: #45a049;
  }

  /* Mensagem de sucesso */
  .success-message {
    color: green;
    margin-bottom: 15px;
    font-weight: bold;
  }

  /* Estilização da tabela */
 .portfolio-table {
  width: 100%;
  border-collapse: separate; /* para arredondar bordas */
  border-spacing: 0;
  border: 1px solid #ddd;
  border-radius: 10px;
  padding: 10px 20px;
  margin: 0 auto 30px auto;
  background-color: #f9f9f9; /* cor uniforme */
  color: #333;
  font-family: Arial, sans-serif;
}

/* Para arredondar as bordas dos cantos das células do thead e tbody */
.portfolio-table thead tr th:first-child {
  border-top-left-radius: 10px;
}
.portfolio-table thead tr th:last-child {
  border-top-right-radius: 10px;
}
.portfolio-table tbody tr:last-child td:first-child {
  border-bottom-left-radius: 10px;
}
.portfolio-table tbody tr:last-child td:last-child {
  border-bottom-right-radius: 10px;
}

  .portfolio-table th,
  .portfolio-table td {
    border: 1px solid #ddd;
    padding: 12px 15px;
    text-align: left;
    vertical-align: middle;
  }
  .portfolio-table thead {
    background-color: #f2f2f2;
  }
  .portfolio-table tbody tr:nth-child(even) {
    background-color: #fafafa;
  }
  .portfolio-table tbody tr:hover {
    background-color: #f1f1f1;
  }

  /* Links da coluna ações */
  .btn-edit {
    color: #2196F3;
    text-decoration: none;
    font-weight: 600;
  }
  .btn-edit:hover {
    text-decoration: underline;
  }
  .btn-delete {
    background: none;
    border: none;
    color: #f44336;
    cursor: pointer;
    font-weight: 600;
    padding: 0;
    font-size: 1em;
  }
  .btn-delete:hover {
    text-decoration: underline;
  }

  /* Link ver */
  .link-view {
    color: #5555ee;
    text-decoration: none;
  }
  .link-view:hover {
    text-decoration: underline;
  }
</style>
@endsection
