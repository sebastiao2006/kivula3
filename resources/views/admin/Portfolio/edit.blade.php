@extends('admin.layouts.app')

@section('title', 'Editar Portfólio')

@section('content')

<style>
  .portfolio-form-container {
    max-width: 700px;
    margin: 40px auto;
    background: #f6faff;
    padding: 40px;
    border-radius: 12px;
    font-family: Arial, sans-serif;
    box-shadow: 0 0 20px rgba(0,0,0,0.05);
  }

  .portfolio-form-container h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
  }

  .portfolio-form-container label {
    font-weight: bold;
    display: inline-block;
    width: 160px;
    vertical-align: top;
    padding: 10px 0;
  }

  .portfolio-form-container input[type="text"],
  .portfolio-form-container input[type="url"],
  .portfolio-form-container input[type="file"],
  .portfolio-form-container textarea {
    width: calc(100% - 170px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    background-color: #fff;
    font-size: 14px;
  }

  .portfolio-form-container textarea {
    resize: vertical;
    height: 100px;
  }

  .portfolio-form-container img {
    margin: 10px 0 15px 160px;
    border-radius: 6px;
  }

  .portfolio-form-container button {
    display: block;
    margin: 30px auto 0;
    background-color: #287bff;
    color: #fff;
    border: none;
    padding: 12px 30px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
  }

  .portfolio-form-container button:hover {
    background-color: #0056d2;
  }
</style>

<div class="portfolio-form-container">
  <h2>Editar Portfólio</h2>

  <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
      <label for="title">Título:</label>
      <input type="text" name="title" id="title" value="{{ $portfolio->title }}" required>
    </div>

    <div>
      <label for="category">Categoria:</label>
      <input type="text" name="category" id="category" value="{{ $portfolio->category }}" required>
    </div>

    <div>
      <label>Imagem Atual:</label>
      <img src="{{ asset('storage/'.$portfolio->image) }}" width="150">
    </div>

    <div>
      <label for="image">Nova Imagem:</label>
      <input type="file" name="image" id="image">
    </div>

    <div>
      <label for="link">Link:</label>
      <input type="url" name="link" id="link" value="{{ $portfolio->link }}">
    </div>

    <div>
      <label for="description">Descrição:</label>
      <textarea name="description" id="description">{{ $portfolio->description }}</textarea>
    </div>

    <button type="submit">Atualizar</button>
  </form>
</div>

@endsection
