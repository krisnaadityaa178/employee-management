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
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold">Detail Karyawan</h3>
                        <div class="flex space-x-3">
                            <a href="{{ route('employees.edit', $employee) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </a>
                            <a href="{{ route('employees.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                Kembali
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-700 mb-4">Informasi Dasar</h4>
                            
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600">ID Karyawan</label>
                                    <p class="text-lg font-mono bg-blue-100 px-2 py-1 rounded">{{ $employee->employee_id }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-600">Nama Lengkap</label>
                                    <p class="text-lg">{{ $employee->name }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-600">Email</label>
                                    <p class="text-lg">{{ $employee->email }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-600">Telefon</label>
                                    <p class="text-lg">{{ $employee->phone }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-700 mb-4">Informasi Pekerjaan</h4>
                            
                            <div class="space-y-3">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600">Departemen</label>
                                    <p class="text-lg">{{ $employee->department }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-600">Posisi</label>
                                    <p class="text-lg">{{ $employee->position }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-600">Gaji</label>
                                    <p class="text-lg font-semibold text-green-600">Rp {{ number_format($employee->salary, 0, ',', '.') }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-600">Tanggal Masuk</label>
                                    <p class="text-lg">{{ $employee->hire_date->format('d F Y') }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-gray-600">Status</label>
                                    <span class="inline-flex px-3 py-1 text-sm font-medium rounded-full 
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

                    <div class="mt-6 bg-blue-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-gray-700 mb-2">Informasi Tambahan</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <div>
                                <span class="font-medium">Lama Bekerja:</span>
                                <span class="ml-2">{{ $employee->hire_date->diffForHumans() }}</span>
                            </div>
                            <div>
                                <span class="font-medium">Data Dibuat:</span>
                                <span class="ml-2">{{ $employee->created_at->format('d F Y H:i') }}</span>
                            </div>
                            <div>
                                <span class="font-medium">Terakhir Diupdate:</span>
                                <span class="ml-2">{{ $employee->updated_at->format('d F Y H:i') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>