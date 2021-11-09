@extends("layouts.app")

@section("content")
    <div class="container">
        <form>
            <div class="form-group">
                <label>Todo</label>
                <input type="text" name="todo" class="form-control" />
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
                    <td colspan=2 width="10%">Action</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Belajar Laravel</td>
                    <td><a href="" class="btn btn-success btn-block">Selesai</a></td>
                    <td><a href="" class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Belajar Laravel</td>
                    <td><a href="" class="btn btn-success btn-block">Selesai</a></td>
                    <td><a href="" class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Belajar Laravel</td>
                    <td><a href="" class="btn btn-success btn-block">Selesai</a></td>
                    <td><a href="" class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection