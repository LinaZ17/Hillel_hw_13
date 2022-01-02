@extends('layouts.app')

@section('title', 'Каталог Книг')

@section('content')

    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Email</th>
            <th scope="col">Пароль</th>
            <th scope="col">Телефон</th>
            <th scope="col">Название Книги</th>
            <th scope="col">Описание Книги</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        @foreach($users as $user)
            <tbody>
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->title}}</td>
                <td>{{$user->description}}</td>
                <td>{{$user->status_id}}</td>
            </tr>
            @endforeach
            </tbody>
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Email</th>
                <th scope="col">Пароль</th>
                <th scope="col">Телефон</th>
                <th scope="col">Название Книги</th>
                <th scope="col">Описание Книги</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
    </table>


@endsection


