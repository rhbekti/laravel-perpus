<x-app-layout>
    <div class="p-16">
        <div class="flex justify-between">
            <h1 class="text-2xl font-semibold">Manajemen Anggota</h1>
            <a href="{{ route('users.create') }}"
                class="bg-blue-500 hover:bg-blue-600 font-semibold py-2 px-4 text-white rounded-lg">Tambah
                Anggota</a>
        </div>
        <div class="mt-4">
            <table class="table-auto border-collapse border-slate-300">
                <thead>
                    <tr>
                        <th class="border border-slate-300 px-4">No</th>
                        <th class="border border-slate-300 px-4">Nama</th>
                        <th class="border border-slate-300 px-4">Alamat</th>
                        <th class="border border-slate-300 px-4">Telepon</th>
                        <th class="border border-slate-300 px-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="border border-slate-300 px-4">{{ $loop->iteration }}</td>
                            <td class="border border-slate-300 px-4">{{ $user->name }}</td>
                            <td class="border border-slate-300 px-4">{{ $user->address }}</td>
                            <td class="border border-slate-300 px-4"> {{ $user->phone }}</td>
                            <td class="border border-slate-300 px-4 py-3">
                                <div class="flex justify-between space-x-2">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="text-white py-2 px-4 bg-yellow-500 rounded-lg">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
