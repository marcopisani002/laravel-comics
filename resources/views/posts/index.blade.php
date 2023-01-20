@extends('layouts.app')

{{-- Homepage dove visualizzo la lista di tutti i post nel sistema, sotto forma di Lista --}}

@section('content')
  <ul>
    @foreach ($listaPost as $post)
      <li>
        <h4 class="text-pippo">{{ $post['id'] }} - {{ $post['title'] }}</h4>
        <p>{{ $post['content'] }}</p>
      </li>

      {{-- come secondo argomento di @include passiamo delle prop --}}
      {{-- @include('partials.postCard', ['post' => $post]) --}}
    @endforeach
  </ul>
@endsection
