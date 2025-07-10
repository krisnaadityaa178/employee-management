<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Karyawan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Informasi Karyawan</h3>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">ID Karyawan</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $employee->employee_id }}</p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Nama</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $employee->name }}</p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Email</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $employee->email }}</p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Telefon</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $employee->phone }}</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold mb-4">Informasi Pekerjaan</h3>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Departemen</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $employee->department }}</p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Posisi</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $employee->position }}</p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Gaji</label>
                                    <p class="mt-1 text-sm text-gray-900">Rp {{ number_format($employee->salary, 0, ',', '.') }}</p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
                                    <p class="mt-1 text-sm text-gray-900">{{ $employee->hire_date->format('d/m/Y') }}</p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Status</label>
                                    <span class="mt-1 inline-flex px-2 py-1 text-xs font-semibold rounded-full 
                                        @if($employee->status === 'active') bg-green-100 text-green-800
                                        @elseif($employee->status === 'cuti') bg-yellow-100 text-yellow-800
                                        @else bg-red-100 text-red-800
                                        @endif">
                                        {{ ucfirst($employee->status) }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end space-x-3">
                        <a href="{{ route('employees.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Kembali
                        </a>
                        <a href="{{ route('employees.edit', $employee) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>