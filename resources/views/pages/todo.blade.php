@extends("layouts.app")

@section("content")
    <div class="container">
        <form action="/todo" method="post">
            @csrf
            <div class="form-group">
                <label>Todo</label>
                <input type="text" name="name" class="form-control" />
            </div>
            <div class="form-group d-flex flex-row-reverse">
                <input type="submit" class="btn btn-success" />
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td width="10%">No.</td>
                    <td>Todo</td>
                    <td>Status</td>
                    <td colspan=2 width="10%">Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($todo as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->status }}</td>
                    <td><a href="{{ url("todo/update/".$item->id) }}" class="btn btn-success btn-block">Selesai</a></td>
                    <td><a href="{{ url("todo/hapus/".$item->id) }}" class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection