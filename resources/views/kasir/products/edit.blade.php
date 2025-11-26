<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf @method('PUT')
    <input name="nama" value="{{ $product->nama }}">
    <input name="harga" value="{{ $product->harga }}">
    <input name="stok" value="{{ $product->stok }}">
    <button>Update</button>
</form>
