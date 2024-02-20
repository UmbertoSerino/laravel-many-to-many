@extends('layouts.admin')

@section('head-title')
    @yield('create-or-edit')
@endsection

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            <strong>
                                {{ $error }}
                            </strong>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif


            <form action="@yield('route-for-create-or-edit')" method="POST" enctype="multipart/form-data">
                @csrf
                @yield('method-for-create-or-edit')
                <div class="mb-3 input-group">
                    <label for="name" class="input-group-text">Nome:</label>
                    <input class="form-control" type="name" name="name" id="name" value="{{ old('name', $user->name) }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="email" class="input-group-text">Email:</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="password" class="input-group-text">password:</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ old('email', $user->password) }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="date_of_birth" class="input-group-text">Data di nascita:</label>
                    <input class="form-control" type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth', $user->userProfile) }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="phone_number" class="input-group-text">Numero di telefono:</label>
                    <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="user_photo" class="input-group-text">Photo Profile:</label>
                    <input class="form-control" type="text" name="user_photo" id="user_photo" value="{{ old('user_photo', $user->userProfile)}}">
                </div>

                <div class="mb-3 input-group">
                    <button type="submit" class="m-2 btn btn-success d-line-block">Modifica</button>
                </div>  
            </form>
            <a href="{{ route('admin.users.index') }}" class="m-2">
                <button class="btn btn-primary d-inline-block">Torna indietro</button>
            </a>
        </div>
    </div>
</div>
@endsection