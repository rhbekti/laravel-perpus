<div class="mb-3">
    <label for="title" class="block text-slate-600 mb-2">Judul Buku</label>
    <input type="text" name="title" id="title" class="form-input px-4 py-2 rounded-lg w-full"
        value="{{ $book->title ?? old('title') }}">
    @error('title')
        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="author" class="block text-slate-600 mb-2">Penulis</label>
    <input type="text" name="author" id="author" class="form-input px-4 py-2 rounded-lg w-full"
        value="{{ $book->author ?? old('author') }}">
    @error('author')
        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="published" class="block text-slate-600 mb-2">Tahun Terbit</label>
    <input type="number" name="published" id="published" class="form-input px-4 py-2 rounded-lg w-full"
        value="{{ $book->published ?? old('published') }}">
    @error('published')
        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
    @enderror
</div>
<button type="submit"
    class="bg-blue-500 hover:bg-blue-600 font-semibold text-white py-2 px-4 rounded-lg">Simpan</button>
