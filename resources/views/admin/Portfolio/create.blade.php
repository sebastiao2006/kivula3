@extends('admin.layouts.app')

@section('title', 'Novo Portfólio')

@section('content')

<style>
  .form-wrapper {
    max-width: 700px;
    margin: 50px auto;
    padding: 40px;
    background-color: #f8f9fa;
    border-radius: 12px;
    box-shadow: 0 0 18px rgba(0, 0, 0, 0.05);
  }

  .form-wrapper h2 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 24px;
  }

  .form-group {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .form-group label {
    width: 200px;
    font-weight: bold;
    margin-right: 10px;
  }

  .form-group input,
  .form-group textarea {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
  }

  .form-group textarea {
    resize: vertical;
    height: 80px;
  }

  .form-wrapper button {
    display: block;
    margin: 30px auto 0;
    background-color: #0d6efd;
    color: #fff;
    padding: 10px 30px;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
  }

  .form-wrapper button:hover {
    background-color: #0b5ed7;
  }
</style>

<div class="form-wrapper">
  <h2>Adicionar Novo Portfólio</h2>

  <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label for="title">Título:</label>
      <input type="text" name="title" id="title" placeholder="Digite o título" required>
    </div>

    <div class="form-group">
      <label for="category">Categoria:</label>
      <input type="text" name="category" id="category" placeholder="Ex: app, product, branding, books" required>
    </div>

    <div class="form-group">
      <label for="image">Imagem:</label>
      <input type="file" name="image" id="image" required>
    </div>

    <div class="form-group">
      <label for="link">Link:</label>
      <input type="url" name="link" id="link" placeholder="Opcional">
    </div>

    <div class="form-group">
      <label for="description">Descrição:</label>
      <textarea name="description" id="description" placeholder="Descreva brevemente o projeto"></textarea>
    </div>

    <button type="submit">Salvar Portfólio</button>
  </form>
</div>

@endsection
