@if ($rent->rent_date)
    <div class="mb-3">
        <label for="return_date" class="block text-slate-600 mb-2">Tanggal Pengembalian</label>
        <input type="date" name="return_date" id="return_date" class="form-input px-4 py-2 rounded-lg w-full">
        @error('return_date')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
        @enderror
    </div>
@else
    <div class="mb-3">
        <label for="rent_date" class="block text-slate-600 mb-2">Tanggal Peminjaman</label>
        <input type="date" name="rent_date" id="rent_date" class="form-input px-4 py-2 rounded-lg w-full">
        @error('rent_date')
            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
        @enderror
    </div>
@endif
<div class="mb-3">
    <label for="user_id" class="block text-slate-600 mb-2">Anggota</label>
    <select name="user_id" id="user_id" class="rounded-lg px-4 py-2 w-full">
        <option selected disabled>-- Pilih Anggota --</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}" {{ $user->id == $rent->user_id ? 'selected' : '' }}>{{ $user->name }}
            </option>
        @endforeach
    </select>
    @error('user_id')
        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="book_id" class="block text-slate-600 mb-2">Buku</label>
    <select name="book_id" id="book_id" class="rounded-lg px-4 py-2 w-full">
        <option selected disabled>-- Pilih Buku --</option>
        @foreach ($books as $book)
            <option value="{{ $book->id }}" {{ $book->id == $rent->book_id ? 'selected' : '' }}>{{ $book->title }}
            </option>
        @endforeach
    </select>
    @error('book_id')
        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
    @enderror
</div>
<button type="submit"
    class="bg-blue-500 hover:bg-blue-600 font-semibold text-white py-2 px-4 rounded-lg">Simpan</button>
