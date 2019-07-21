@extends('admin')
@section('content')

    <form action="{{route('addsave.category')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name" >Bo'lim nomi</label>
            <input type="text" name="name"  class="form-control" id="name"  placeholder="Bo'lim nomi">
            </div>

        <button type="submit" class="btn btn-primary">Kiritish</button>
    </form>

@endsection
