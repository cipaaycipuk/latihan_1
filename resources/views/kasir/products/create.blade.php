<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input name="nama">
    <input name="harga">
    <input name="stok">
    <button>Simpan</button>
</form>
