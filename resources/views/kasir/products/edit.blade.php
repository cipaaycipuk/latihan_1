<form action="{{ route('products.update', $product->id_product) }}" method="POST">
    @csrf @method('PUT')
    <h1>EDIT PRICE</h1>
    <label for="">Product's Name</label>
    <input name="nama" value="{{ $product->nama }}">

    <label for="">Category</label>
    <input name="kategori" value="{{ $product->kategori }}">

    <label for="">Price</label>
    <input name="price" value="{{ $product->price }}">

    <label for="">Stock</label>
    <input name="stok" value="{{ $product->stok }}">
    <button type="submit">Update</button>
</form>
