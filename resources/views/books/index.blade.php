<x-app-layout>
    <div class="p-16">
        <div class="flex justify-between">
            <h1 class="text-2xl font-semibold text-slate-800">Manajemen Buku</h1>
            <a href="{{ route('books.create') }}"
                class="bg-blue-500 hover:bg-blue-600 font-semibold py-2 px-4 text-white rounded-lg">Tambah
                Buku</a>
        </div>
        <div class="mt-4">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="border border-slate-600 p-4">No</th>
                        <th class="border border-slate-600 p-4">Judul</th>
                        <th class="border border-slate-600 p-4">Penulis</th>
                        <th class="border border-slate-600 p-4">Tahun Terbit</th>
                        <th class="border border-slate-600 p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td class="border border-slate-600 p-4">{{ $loop->iteration }}</td>
                            <td class="border border-slate-600 p-4">{{ $book->title }}</td>
                            <td class="border border-slate-600 p-4">{{ $book->author }}</td>
                            <td class="border border-slate-600 p-4">{{ $book->published }}</td>
                            <td class="border border-slate-600 p-4">
                                <div class="flex justify-between space-x-2">
                                    <a href="{{ route('books.edit', $book->id) }}"
                                        class="bg-yellow-500 hover:bg-yellow-600 font-semibold py-2 px-4 rounded-lg">Edit</a>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="text-white py-2 px-4 bg-red-500 rounded-lg"
                                            onclick="return confirm('Data akan dihapus?')">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
