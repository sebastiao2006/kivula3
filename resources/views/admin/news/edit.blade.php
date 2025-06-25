@extends('admin.layouts.app')

@section('title', 'News')

@section('content')

<style>
  .form-wrapper {
    max-width: 720px;
    margin: 20px auto;
    padding: 25px 30px;
    background: #f0f4f8;  /* fundo claro azulado */
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
  }

  table.form-table {
    width: 100%;
    border-collapse: collapse;
  }

  table.form-table td {
    padding: 8px 12px;
    vertical-align: middle;
  }

  table.form-table td.label {
    font-weight: 600;
    color: #444;
    width: 180px;
    white-space: nowrap;
  }

  input[type="text"],
  input[type="date"],
  input[type="file"] {
    width: 100%;
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
  }

  input[type="text"]:focus,
  input[type="date"]:focus,
  input[type="file"]:focus {
    border-color: #007BFF;
    outline: none;
  }

  button[type="submit"] {
    margin-top: 20px;
    display: block;
    width: 150px;
    padding: 10px 0;
    background-color: #007BFF;
    border: none;
    border-radius: 4px;
    color: white;
    font-weight: 700;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button[type="submit"]:hover {
    background-color: #0056b3;
  }

  h2 {
    text-align: center;
    color: #333;
    margin-bottom: 25px;
  }
</style>



<div class="form-wrapper">
    <h2>Editar Notícia</h2>
  <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <table class="form-table">
      <tr>
        <td class="label"><label for="title">Título</label></td>
        <td><input type="text" id="title" name="title" value="{{ $news->title }}" required></td>
      </tr>
      <tr>
        <td class="label"><label for="category">Categoria</label></td>
        <td><input type="text" id="category" name="category" value="{{ $news->category }}" required></td>
      </tr>
      <tr>
        <td class="label"><label for="date">Data</label></td>
        <td><input type="date" id="date" name="date" value="{{ $news->date }}" required></td>
      </tr>
      <tr>
        <td class="label"><label for="image">Imagem do Post (opcional)</label></td>
        <td><input type="file" id="image" name="image"></td>
      </tr>
      <tr>
        <td class="label"><label for="author_name">Nome do Autor</label></td>
        <td><input type="text" id="author_name" name="author_name" value="{{ $news->author_name }}" required></td>
      </tr>
      <tr>
        <td class="label"><label for="author_image">Imagem do Autor (opcional)</label></td>
        <td><input type="file" id="author_image" name="author_image"></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit">Atualizar</button></td>
      </tr>
    </table>
  </form>
</div>

@endsection
