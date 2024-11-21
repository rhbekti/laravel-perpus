<x-app-layout>
    <div class="p-16">
        <div class="max-w-xl">
            <div class="border border-slate-300 px-6 py-4 rounded-lg shadow-sm">
                <h1 class="mb-3 text-2xl font-semibold text-slate-700">Tambah Buku</h1>
                <form action="{{ route('books.store') }}" method="post">
                    @csrf
                    @include('books.form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
