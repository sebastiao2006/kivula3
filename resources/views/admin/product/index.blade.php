@extends('admin.layouts.app')

@section('title', 'Product')

@section('content')

<style>
  body {
    background-color: #f6f8ff;
    font-family: 'Segoe UI', sans-serif;
  }

  .flex-container {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    margin-top: 40px;
  }

  .form-container {
    flex: 1 1 45%;
    min-width: 320px;
    background: #f9fbff;
    padding: 35px 30px;
    border-radius: 15px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
  }

  .form-container h2 {
    text-align: center;
    margin-bottom: 25px;
    font-size: 22px;
    color: #2c3e50;
  }

  .form-group {
    margin-bottom: 18px;
  }

  label {
    font-weight: 600;
    display: block;
    margin-bottom: 6px;
    color: #34495e;
  }

  input[type="text"],
  input[type="file"],
  input[type="date"],
  select,
  textarea {
    width: 100%;
    padding: 10px 14px;
    border: 1.5px solid #ccc;
    border-radius: 8px;
    font-size: 15px;
    background-color: #fff;
    transition: 0.3s;
  }

  input:focus,
  textarea:focus,
  select:focus {
    border-color: #0049bf;
    outline: none;
  }

  button[type="submit"] {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #0049bf;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  button[type="submit"]:hover {
    background-color: #003a9f;
  }
</style>

<div class="flex-container">
  <!-- Formulário de FAQ -->
  <div class="form-container">
    <h2>Adicionar Pergunta Frequente</h2>
    <form action="{{ route('admin.product.storeFaq') }}" method="POST">
      @csrf

      <div class="form-group">
        <label for="productFaq">Produto:</label>
        <select name="product" id="productFaq" required>
          <option value="product1">Produto 1</option>
          <option value="product2">Produto 2</option>
          <option value="product3">Produto 3</option>
        </select>
      </div>

      <div class="form-group">
        <label for="question">Pergunta:</label>
        <input type="text" id="question" name="question" required>
      </div>

      <div class="form-group">
        <label for="answer">Resposta:</label>
        <textarea id="answer" name="answer" rows="4" required></textarea>
      </div>

      <button type="submit">Salvar FAQ</button>
    </form>
  </div>

  <!-- Formulário de Plano -->
  <div class="form-container">
    <h2>Adicionar Plano de Preços</h2>
    <form action="{{ route('admin.product.storePlan') }}" method="POST">
      @csrf

      <div class="form-group">
        <label for="productPlan">Produto:</label>
        <select name="product" id="productPlan" required>
          <option value="product1">Produto 1</option>
          <option value="product2">Produto 2</option>
          <option value="product3">Produto 3</option>
        </select>
      </div>

      <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required>
      </div>

      <div class="form-group">
        <label for="price">Preço:</label>
        <input type="text" id="price" name="price" required>
      </div>

      <div class="form-group">
        <label for="period">Período:</label>
        <input type="text" id="period" name="period" required>
      </div>

      <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea id="description" name="description" rows="3"></textarea>
      </div>

      <div class="form-group">
        <label for="features">Funcionalidades (1 por linha):</label>
        <textarea id="features" name="features" rows="4"></textarea>
      </div>

      <div class="form-group">
        <label><input type="checkbox" name="popular"> Plano Popular</label>
      </div>

      <button type="submit">Salvar Plano</button>
    </form>
  </div>
</div>

@endsection
