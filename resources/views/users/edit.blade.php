<x-app-layout>
    <div class="p-16">
        <div class="max-w-xl">
            <div class="border border-slate-300 px-6 py-4 rounded-lg shadow-sm">
                <h1 class="mb-3 text-2xl font-semibold text-slate-700">Edit Anggota</h1>
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    @include('users.form')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
