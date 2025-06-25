@extends('admin.layouts.app')

@section('title', 'Criar Notícia')

@section('content')

<style>
  .form-wrapper {
    max-width: 720px;
    margin: 30px auto;
    padding: 25px 30px;
    background: #f0f4f8; /* fundo suave */
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    font-family: Arial, sans-serif;
  }

  h2 {
    text-align: center;
    color: #333;
    margin-bottom: 25px;
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

  /* Botão */
  .btn-submit {
    margin-top: 20px;
    display: block;
    width: 160px;
    padding: 10px 0;
    background-color: #2e86de;
    border: none;
    border-radius: 6px;
    color: white;
    font-weight: 700;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-align: center;
  }

  .btn-submit:hover {
    background-color: #1c60a8;
  }
</style>

<div class="form-wrapper">
  <h2>Nova Postagem no Blog</h2>
  <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <table class="form-table">
      <tr>
        <td class="label"><label for="title">Título</label></td>
        <td><input type="text" name="title" id="title" placeholder="Digite o título" required></td>
      </tr>

      <tr>
        <td class="label"><label for="category">Categoria</label></td>
        <td><input type="text" name="category" id="category" placeholder="Ex: Política, Desporto" required></td>
      </tr>

      <tr>
        <td class="label"><label for="date">Data</label></td>
        <td><input type="date" name="date" id="date" required></td>
      </tr>

      <tr>
        <td class="label"><label for="image">Imagem do Post</label></td>
        <td><input type="file" name="image" id="image" required></td>
      </tr>

      <tr>
        <td class="label"><label for="author_name">Nome do Autor</label></td>
        <td><input type="text" name="author_name" id="author_name" placeholder="Digite o nome do autor" required></td>
      </tr>

      <tr>
        <td class="label"><label for="author_image">Foto do Autor</label></td>
        <td><input type="file" name="author_image" id="author_image" required></td>
      </tr>

      <tr>
        <td></td>
        <td><button type="submit" class="btn-submit">Salvar Notícia</button></td>
      </tr>
    </table>
  </form>
</div>

@endsection
