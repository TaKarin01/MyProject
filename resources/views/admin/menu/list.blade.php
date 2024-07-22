@extends('admin.main')
@section('content')
    <table class="table">
        <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Name Product</th>
            <th scope="col">Description</th>
            <th scope="col">&nbsp;</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($data_product as $data)
            <tr>
                <th scope="row">{{ $data->id }}</th>
                <td class="w-25"><img src="/{{ $data->url }}" class="img-fluid w-auto mw-100" ></td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
