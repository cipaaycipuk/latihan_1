<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
</head>
<body>
    <a href="{{ route('products.create') }}">Tambah</a>

<table border="1" rounded-xl cellpadding="10" cellspacing="0" style="border-collapse: collapse; margin-top: 15px";>
<thead>
    <tr>
        <td>Product Name</td>
        <td>Category</td>
        <td>Price</td>
        <td>Stock</td>
        <td>Aksi</td>
    </tr>
</thead>
<tbody>
@foreach($data as $p)
    <tr>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->kategori }}</td>
        <td>{{ $p->price }}</td>
        <td>{{ $p->stok }}</td>
        <td>
            <a href="{{ route('products.edit', $p->id_product) }}">Edit</a>
            <form action="{{ route('products.destroy', $p->id_product) }}" method="POST">
                @csrf @method('DELETE')
                <button>Hapus</button>
            </form>
        </td>
    </tr>
@endforeach
</tbody>
</table>
</body>
</html>