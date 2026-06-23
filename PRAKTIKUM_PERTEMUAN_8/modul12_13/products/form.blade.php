<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }} Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h3>Form {{ $title }} Produk</h3>

    <form action="{{ $route }}" method="POST">
        @csrf

        @if($method == 'PUT')
            @method('PUT')
        @endif

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name', $product->name) }}">

            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                   value="{{ old('price', $product->price) }}">

            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

</body>
</html>