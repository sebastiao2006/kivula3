@extends('admin.layouts.app')

@section('title', 'Editar Plano')

@section('content')
  <h2>Editar Plano de Preços</h2>

  <form action="{{ route('admin.product.updatePlan', $plan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Produto:</label>
    <select name="product" required>
      <option value="product1" {{ $plan->product == 'product1' ? 'selected' : '' }}>Produto 1</option>
      <option value="product2" {{ $plan->product == 'product2' ? 'selected' : '' }}>Produto 2</option>
      <option value="product3" {{ $plan->product == 'product3' ? 'selected' : '' }}>Produto 3</option>
    </select>

    <label>Título:</label>
    <input type="text" name="title" value="{{ $plan->title }}" required>

    <label>Preço:</label>
    <input type="text" name="price" value="{{ $plan->price }}" required>

    <label>Período:</label>
    <input type="text" name="period" value="{{ $plan->period }}" required>

    <label>Descrição:</label>
    <textarea name="description">{{ $plan->description }}</textarea>

    <label>Funcionalidades (1 por linha):</label>
    <textarea name="features" rows="4">{{ implode("\n", json_decode($plan->features, true)) }}</textarea>

    <label>
      <input type="checkbox" name="popular" {{ $plan->popular ? 'checked' : '' }}>
      Plano Popular
    </label>

    <button type="submit">Atualizar Plano</button>
  </form>
@endsection
