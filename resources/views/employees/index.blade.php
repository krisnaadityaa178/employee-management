<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Karyawan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold">Daftar Karyawan</h3>
                        <a href="{{ route('employees.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Tambah Karyawan
                        </a>
                    </div>

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2 text-left">ID Karyawan</th>
                                    <th class="px-4 py-2 text-left">Nama</th>
                                    <th class="px-4 py-2 text-left">Email</th>
                                    <th class="px-4 py-2 text-left">Departemen</th>
                                    <th class="px-4 py-2 text-left">Posisi</th>
                                    <th class="px-4 py-2 text-left">Status</th>
                                    <th class="px-4 py-2 text-left">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($employees as $employee)
                                    <tr class="border-b">
                                        <td class="px-4 py-2">{{ $employee->employee_id }}</td>
                                        <td class="px-4 py-2">{{ $employee->name }}</td>
                                        <td class="px-4 py-2">{{ $employee->email }}</td>
                                        <td class="px-4 py-2">{{ $employee->department }}</td>
                                        <td class="px-4 py-2">{{ $employee->position }}</td>
                                        <td class="px-4 py-2">
                                            <span class="px-2 py-1 text-xs rounded-full 
                                                @if($employee->status === 'active') bg-green-100 text-green-800
                                                @elseif($employee->status === 'cuti') bg-yellow-100 text-yellow-800
                                                @else bg-red-100 text-red-800
                                                @endif">
                                                {{ ucfirst($employee->status) }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-2">
                                            <div class="flex space-x-2">
                                                <a href="{{ route('employees.show', $employee) }}" class="text-blue-600 hover:text-blue-900">Detail</a>
                                                <a href="{{ route('employees.edit', $employee) }}" class="text-green-600 hover:text-green-900">Edit</a>
                                                <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="px-4 py-2 text-center">Tidak ada data karyawan</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>