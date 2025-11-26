<a href="{{ route('products.create') }}">Tambah</a>

<table>
@foreach($data as $p)
<tr>
    <td>{{ $p->nama }}</td>
    <td>{{ $p->harga }}</td>
    <td>{{ $p->stok }}</td>
    <td>
        <a href="{{ route('kasir.products.edit', $p->id) }}">Edit</a>
        <form action="{{ route('products.destroy', $p->id) }}" method="POST">
            @csrf @method('DELETE')
            <button>Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</table>
