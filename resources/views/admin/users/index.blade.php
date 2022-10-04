@extends('welcome')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <div class="border-1 border rounded-3 p-3">
                    <h2 class="mt-3">Пользователи</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">email</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Дата рождения</th>
                            <th scope="col">Роль</th>
                            <th scope="col">Создан</th>
                            <th scope="col">Изменён</th>
                            <th scope="col">Изменить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="col">{{$user->id}}</th>
                                <th scope="col">{{$user->email}}</th>
                                <th scope="col">{{$user->fullname}}</th>
                                <th scope="col">{{$user->dateofbirth}}</th>
                                <th scope="col">{{$user->role->role}}</th>
                                <th scope="col">{{$user->created_at}}</th>
                                <th scope="col">{{$user->updated_at}}</th>
                                <th scope="col"><a href="{{route('admin.users.edit',['user'=>$user->id])}}" class="btn btn-primary">Редактировать</a>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
