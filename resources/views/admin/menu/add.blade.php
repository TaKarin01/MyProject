@extends('admin.main')
@section('content')
    <form class="form-horizontal">
        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" placeholder="Name Product">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" placeholder="Name Product">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" placeholder="Name Product">
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-info">Add</button>
            <a href="" class="btn btn-default">Back</a>
        </div>
        <!-- /.card-footer -->
    </form>
@endsection
