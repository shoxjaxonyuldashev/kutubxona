@extends('admin')

@section('content')
    <form action="{{route('addsave.books')}}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            <label for="">Bo'limi</label>
            <select type="" name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Kitobning nomi</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1">

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Kitob muallifi</label>
            <input name="author" type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="form-group">
            <label for="">Til</label>
            <select type="" name="language" class="form-control">
                <option value="O'zbek tili"> O'zbek tili</option>
                <option value="Rus tili"> Rus tili</option>
                <option value="Ingliz tili"> Ingliz tili</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Kitob chiqqan yili</label>
            <input name="year" type="" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="form-group">
            <label for="images">Kitob rasmi</label>
            <input name="images" type="file" class="form-control" id="images">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Kitob fayl</label>
            <input name="files" type="file" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Kiritish</button>
    </form>
@endsection
