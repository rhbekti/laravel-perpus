<x-app-layout>
    <div class="p-16">
        <div class="flex justify-between">
            <h1 class="text-2xl font-semibold text-slate-700">Manajemen Peminjaman</h1>
            <a href="{{ route('rents.create') }}"
                class="bg-blue-500 hover:bg-blue-600 font-semibold py-2 px-4 text-white rounded-lg">Tambah Peminjaman</a>
        </div>
        <div class="mt-4">
            <table>
                <thead>
                    <tr>
                        <th class="border border-slate-400 p-4">No</th>
                        <th class="border border-slate-400 p-4">Tanggal Peminjaman</th>
                        <th class="border border-slate-400 p-4">Nama Peminjam</th>
                        <th class="border border-slate-400 p-4">Judul Buku</th>
                        <th class="border border-slate-400 p-4">Status</th>
                        <th class="border border-slate-400 p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rents as $rent)
                        <tr>
                            <td class="border border-slate-400 p-4">{{ $loop->iteration }}</td>
                            <td class="border border-slate-400 p-4">
                                {{ Carbon\Carbon::parse($rent->rent_date)->format('d-m-Y') }}</td>
                            <td class="border border-slate-400 p-4">{{ $rent->user->name }}</td>
                            <td class="border border-slate-400 p-4">{{ $rent->book->title }}</td>
                            <td class="border border-slate-400 p-4">
                                @if ($rent->return_date)
                                    Sudah Dikembalikan
                                @else
                                    Sedang Dipinjam
                                @endif
                            </td>
                            <td class="border border-slate-400 p-4">
                                <div class="flex justify-between space-x-2">
                                    <a href="{{ route('rents.edit', $rent->id) }}"
                                        class="bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-lg">Pengembalian</a>
                                    <form action="{{ route('rents.destroy', $rent->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="text-white py-2 px-4 bg-red-500 rounded-lg"
                                            onclick="return confirm('Data akan dihapus?')">Hapus</button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
