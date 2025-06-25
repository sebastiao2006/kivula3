@extends('admin.layouts.app')

@section('title', 'Editar FAQ')

@section('content')
  <h2>Editar Pergunta Frequente</h2>

  <form action="{{ route('admin.product.updateFaq', $faq->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Produto:</label>
    <select name="product" required>
      <option value="product1" {{ $faq->product == 'product1' ? 'selected' : '' }}>Produto 1</option>
      <option value="product2" {{ $faq->product == 'product2' ? 'selected' : '' }}>Produto 2</option>
      <option value="product3" {{ $faq->product == 'product3' ? 'selected' : '' }}>Produto 3</option>
    </select>

    <label>Pergunta:</label>
    <input type="text" name="question" value="{{ $faq->question }}" required>

    <label>Resposta:</label>
    <textarea name="answer" required>{{ $faq->answer }}</textarea>

    <button type="submit">Atualizar FAQ</button>
  </form>
@endsection
