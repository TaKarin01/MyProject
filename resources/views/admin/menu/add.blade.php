@extends('admin.main')
@section('content')
    <form class="form-horizontal" method="post" action="/admin/products/store" enctype="multipart/form-data">

        <div class="card-body">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input name="name" type="name" class="form-control" placeholder="Name Product">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea rows="4" name="description" class="form-control" placeholder="Description Product"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-10">
                    <input name="amount" type="number" min="1" step="1" class="form-control" placeholder="Amount">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Price($)</label>
                <div class="col-sm-10">
                    <input name="price" type="number" class="form-control" placeholder="Price Product">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <select name="types" class="form-control">
                        <option value="phone">Phone</option>
                        <option value="laptop">Laptop</option>
                        <option value="accessory">Accessory</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" name="url" class="form-control">
                </div>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-info">Add</button>
            <a href="" class="btn btn-default">Back</a>
        </div>
        @csrf
        <!-- /.card-footer -->
    </form>
@endsection
