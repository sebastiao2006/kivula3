@extends('admin.layouts.app')

@section('title', 'create')

@section('content')

<style>
  body {
    background-color: #f1f3fb;
  }

  .form-container {
    max-width: 700px;
    margin: 40px auto;
    padding: 40px;
    background: #f8fbff;
    border-radius: 14px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    font-family: Arial, sans-serif;
  }

  .form-container h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
  }

  .form-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 15px;
  }

  .form-table td {
    vertical-align: top;
    padding-right: 20px;
  }

  .form-table label {
    display: inline-block;
    margin-top: 8px;
    color: #333;
    font-weight: 500;
  }

  .form-table input[type="text"],
  .form-table input[type="url"],
  .form-table input[type="file"],
  .form-table textarea {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
    background-color: #fdfdfe;
  }

  .form-table textarea {
    resize: vertical;
    min-height: 80px;
  }

  .form-container button {
    background-color: #2a78dc;
    color: white;
    border: none;
    padding: 10px 25px;
    font-size: 15px;
    border-radius: 6px;
    cursor: pointer;
    margin-top: 20px;
    float: right;
  }

  .form-container button:hover {
    background-color: #1e66c6;
  }

  .back-link {
    display: inline-block;
    margin-top: 60px;
    text-decoration: none;
    color: #2a78dc;
  }

  .back-link:hover {
    text-decoration: underline;
  }
</style>

<div class="form-container">
  <h2>Adicionar Novo Parceiro</h2>

  <form action="{{ route('admin.partner.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table class="form-table">
      <tr>
        <td><label for="name">Nome:</label></td>
        <td><input type="text" id="name" name="name" required placeholder="Digite o nome do parceiro"></td>
      </tr>
      <tr>
        <td><label for="logo">Logo:</label></td>
        <td><input type="file" id="logo" name="logo" accept="image/*"></td>
      </tr>
      <tr>
        <td><label for="site">Site:</label></td>
        <td><input type="url" id="site" name="site" placeholder="Digite o site oficial"></td>
      </tr>
      <tr>
        <td><label for="description">Descrição:</label></td>
        <td><textarea id="description" name="description"></textarea></td>
      </tr>
    </table>

    <button type="submit">Adicionar Parceiro</button>
  </form>

  <a href="{{ route('admin.partner.index') }}" class="back-link">Voltar para a Lista de Parceiros</a>
</div>

@endsection
