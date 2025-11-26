<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <h1>ADD NEW PRODUCT</h1>
    <label for="">Product's Name</label>
    <input name="nama">
    
    <label for="">Category</label>
    <select name="kategori">
        <option value=""></option>
        @foreach ($kategori as $k)
            <option value="{{ $k }}">{{ $k }}</option>
        @endforeach
    </select>

    <label for="">Price</label>
    <input name="price">

    <label for="">Stock</label>
    <input name="stok">
    <button type="submit">Simpan</button>
</form>
