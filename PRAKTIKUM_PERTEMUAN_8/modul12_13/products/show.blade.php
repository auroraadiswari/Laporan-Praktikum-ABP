<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h3>Detail Produk</h3>

    <div class="card mb-3">
        <div class="card-body">
            <p><strong>Nama Produk:</strong> {{ $product->name }}</p>
            <p><strong>Harga:</strong> Rp {{ number_format($product->price, 0, ',', '.') }}</p>
        </div>
    </div>

    <h4>Daftar Variant</h4>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Variant</th>
            <th>Harga Variant</th>
        </tr>

        @forelse($product->variants as $variant)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $variant->name }}</td>
                <td>Rp {{ number_format($variant->price, 0, ',', '.') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center">Produk ini belum memiliki variant</td>
            </tr>
        @endforelse
    </table>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>

</body>
</html>