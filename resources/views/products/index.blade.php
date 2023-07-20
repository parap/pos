<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit products sample</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Item Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>VAT percent</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->item_name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ number_format($product->vat_percent, 2) }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left"></div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('products.create') }}">Create Product</a>
                </div>
            </div>
        </div>

        {{ $products->links('pagination::bootstrap-4') }}
</div>
</body>
</html>
