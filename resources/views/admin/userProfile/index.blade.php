@extends('layouts.admin')

<title>@yield('head-title', 'My user - (Index)')</title>



@section('main-content')
<div class="container">
    <div class="row">
      <h1 class="mb-5 text-center">
          Qui sono disponibili tutti i progetti di: {{ Auth::user()->name }}!
      </h1>
        <div class="col-6">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crea un nuovo Progetto</a>
        </div>
        <div class="col-6 mb-5">
          <a href="{{ route('admin.softdelete.index') }}" class="btn btn-primary">Il tuo cestino</a>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Anna</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">data di consegna</th>
                    <th scope="col">Completato</th>
                    <th scope="col">Tipo</th>
                    <th scope='col'>Funzioni</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user )
                  <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->title }}</td>
                    <td> {{ strlen($user->description) > 100 ? substr($user->description, 0, 100) . '...' : $user->description }}</td>
                    <td>{{ $user->date }}</td>
                    <td>{{ $user->type->name }}</td>
                    <td>{{ $user->complete ? 'Completato' : 'Incompleto' }} 
                    </td>
                    <td>
                        <a href="{{ route('admin.users.show', $user) }}">
                            <button class="btn btn-primary m-2 inline-block">Mostra</button>
                        </a>
                        @include('admin.users.partials-button.button')
                    </td>
                    @empty
                    <td> Non ci sono progetti {{ Auth::user()->name }} </td>
                    @endforelse 
                  </tr>
                </tbody>
              </table>
        </div>
    </div>

</div>

@endsection