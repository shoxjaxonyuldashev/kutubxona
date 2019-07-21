@extends('admin')

@section('content')

    @foreach($books as $book)
        <div class="card kitob">
            <h5 class="card-header bg-success">{{$book->title}}</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-4 bg-light">
                        <img src="/images/{{$book->images}}" style="width: 100%">
                    </div>

                    <div class="col-8">
                        <table class="table table-striped">

                            <tbody>
                            <tr>
                                <th scope="row" class="table-book">Bo'limi</th>
                                <td class="table-book1">{{$book->category->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-book">Muallif</th>
                                <td class="table-book1">{{$book->author}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-book">Til</th>
                                <td class="table-book1">{{$book->language}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="table-book">Chiqqan yili</th>
                                <td class="table-book1">{{$book->year}}</td>
                            </tr>


                            </tbody>

                        </table>
                        <a href="/book/{{$book->id}}" target="_blank" class="btn btn-outline-primary btn-sm btn-block delete">Batafsil</a>
                        <form action="/book/{{$book->id}}" method="post">
                            {{method_field('DELETE')}}
                            @csrf
                            <input type="submit" class="btn btn-outline-primary btn-sm btn-block" value="O'chirish">
                        </form>


                    </div>
                </div>

            </div>

        </div>
        <br>
    @endforeach

@endsection
