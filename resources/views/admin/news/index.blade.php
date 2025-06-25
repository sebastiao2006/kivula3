@extends('admin.layouts.app')

@section('title', 'News')

@section('content')

<style>
  .news-container {
    width: 100%;
    padding: 30px 40px;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  .news-container h2 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
  }

  .btn-add {
    display: inline-block;
    padding: 10px 18px;
    background-color: #2ecc71;
    color: #fff;
    border-radius: 6px;
    text-decoration: none;
    margin-bottom: 20px;
    transition: background 0.3s;
  }

  .btn-add:hover {
    background-color: #27ae60;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    border-radius: 8px;
    overflow: hidden;
    table-layout: fixed;
  }

  thead {
    background-color: #f8f8f8;
  }

  th, td {
    padding: 14px 16px;
    text-align: left;
    border-bottom: 1px solid #eee;
    font-size: 15px;
    word-wrap: break-word;
  }

  th {
    font-weight: bold;
    color: #444;
  }

  td {
    color: #555;
  }

  td a {
    margin-right: 10px;
    color: #0262d1;
    text-decoration: none;
    font-weight: bold;
  }

  td a:hover {
    text-decoration: underline;
  }

  td form {
    display: inline;
  }

  td button {
    background-color: #e74c3c;
    color: white;
    border: none;
    padding: 6px 12px;
    font-size: 14px;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.3s;
  }

  td button:hover {
    background-color: #c0392b;
  }
  .btn-edit {
  background-color: #f1c40f;
  color: #fff;
  padding: 6px 12px;
  font-size: 14px;
  border-radius: 4px;
  text-decoration: none;
  margin-right: 8px;
  display: inline-block;
  transition: background 0.3s;
}

.btn-edit:hover {
  background-color: #d4ac0d;
}


  @media (max-width: 768px) {
    table, thead, tbody, th, td, tr {
      display: block;
    }

    thead tr {
      display: none;
    }

    td {
      position: relative;
      padding-left: 50%;
      margin-bottom: 10px;
    }

    td::before {
      position: absolute;
      top: 14px;
      left: 16px;
      width: 45%;
      padding-right: 10px;
      white-space: nowrap;
      font-weight: bold;
      color: #888;
    }

    td:nth-of-type(1)::before { content: "Título"; }
    td:nth-of-type(2)::before { content: "Categoria"; }
    td:nth-of-type(3)::before { content: "Data"; }
    td:nth-of-type(4)::before { content: "Autor"; }
    td:nth-of-type(5)::before { content: "Ações"; }
  }
</style>

<div class="news-container">
  <h2>Notícias do Blog</h2>
  <a href="{{ route('admin.news.create') }}" class="btn-add">+ Nova Notícia</a>

  <table>
    <thead>
      <tr>
        <th>Título</th>
        <th>Categoria</th>
        <th>Data</th>
        <th>Autor</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($news as $item)
        <tr>
          <td>{{ $item->title }}</td>
          <td>{{ $item->category }}</td>
          <td>{{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}</td>
          <td>{{ $item->author_name }}</td>
            <td>
            <a href="{{ route('admin.news.edit', $item->id) }}" class="btn-edit">Editar</a>

            <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Deseja mesmo apagar esta notícia?')">Apagar</button>
            </form>
            </td>

        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
