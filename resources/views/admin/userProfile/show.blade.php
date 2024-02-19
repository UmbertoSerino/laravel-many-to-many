@extends('layouts.admin')

<title>@yield('head-title', 'My user - (Show)')</title>

@section('main-content')
<section class="container-heros-cards">
    <article class="container-card p-3">
        <div class="row">
            <div class="col-12">
                <div class="card m-auto">
                    <div class="card-body">
                      <h5 class="card-title">Titolo: {{ $user['name'] }}</h5>
                      <p class="card-text">Data: {{ $user['date'] }}</p>
                      <p class="card-text">Descrizione: {{ $user['description'] }}</p>
                      <p class="card-text">Tecnologie usate:</p>
                      <ul>
                          @foreach($user->technologies as $technology)
                              <li>{{ $technology->name }}</li>
                          @endforeach
                      </ul>

                      <p class="card-text">Completato: {{ $user['complete'] ? 'ok' : 'non ancora'}}</p>
                      <p class="card-text">Tipo: {{ $user->type->name}}</p>
        {{-- @dump($user->technologies()) --}}
                      
                        <div class="col-12">
                            <span class="inline-block">Creato da: </span>
                            <a href=""><span>{{ $user->user->name }}</span></a>
                                
                        </div>
                      <a href="{{ route('admin.users.index') }}">
                        <button class="btn btn-primary d-inline-block">Torna indietro</button>
                      </a>
                      @include('admin.users.partials-button.button')
                  </div>
                </div>
            </div>
        </div>
    </article>
</section>

@endsection