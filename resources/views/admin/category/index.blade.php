@extends ('admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <a href="{{route('add.category')}}" class="btn btn-primary">Bo'limni kiritish</a>
            <ul class="list-group mt-3">
                @forelse($categories as $category)

                    <li class="list-group-item">{{$category->name}}
                        <a href="" class="btn btn-sm btn-success" style="float: right;"></a>
                    </li>
                @empty
                    <li class="list-group-item">Ma`lumot kiritilmagan
                    </li>

                @endforelse
            </ul>

        </div>
    </div>


@endsection
