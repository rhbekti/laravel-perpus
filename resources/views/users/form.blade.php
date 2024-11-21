<div class="mb-3">
    <label for="name" class="block text-slate-600 mb-2">Nama Anggota</label>
    <input type="text" name="name" id="name" class="form-input px-4 py-2 rounded-lg w-full"
        value="{{ $user->name ?? old('name') }}">
    @error('name')
        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="address" class="block text-slate-600 mb-2">Alamat</label>
    <input type="text" name="address" id="address" class="form-input px-4 py-2 rounded-lg w-full"
        value="{{ $user->address ?? old('address') }}">
    @error('address')
        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="block text-slate-600 mb-2">Email</label>
    <input type="text" name="email" id="email" class="form-input px-4 py-2 rounded-lg w-full"
        value="{{ $user->email ?? old('email') }}">
    @error('email')
        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="phone" class="block text-slate-600 mb-2">No. Telepon</label>
    <input type="text" inputmode="numeric" name="phone" id="phone"
        class="form-input px-4 py-2 rounded-lg w-full" value="{{ $user->phone ?? old('phone') }}">
    @error('phone')
        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
    @enderror
</div>
<button type="submit"
    class="bg-blue-500 hover:bg-blue-600 font-semibold text-white py-2 px-4 rounded-lg">Simpan</button>
