@extends('layouts.app')

@section('title', 'Каталог Книг')

@section('content')

    <table class="table mt-3">
        <thead>
        <tr class="">
            <th scope="col">№</th>
            <th scope="col">Название Книги</th>
            <th scope="col">Описание Книги</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        @foreach($books as $book)
            <tbody>
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->status['name']}}</td>
            </tr>
            @endforeach
            </tbody>
            <thead>
            <tr class="">
                <th scope="col">№</th>
                <th scope="col">Название Книги</th>
                <th scope="col">Описание Книги</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
    </table>


@endsection


