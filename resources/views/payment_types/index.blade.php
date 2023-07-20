<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Types</title>
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
                <th>payment_class</th>
                <th>active</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->payment_class }}</td>
                    <td>{{ $type->active }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('payment-types.update', $type->id) }}">Update</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $types->links('pagination::bootstrap-4') }}
</div>
</body>
</html>
