<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Karyawan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('employees.update', $employee) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" name="name" value="{{ old('name', $employee->name) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" name="email" value="{{ old('email', $employee->email) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Telefon</label>
                                <input type="text" name="phone" value="{{ old('phone', $employee->phone) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Departemen</label>
                                <input type="text" name="department" value="{{ old('department', $employee->department) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                @error('department')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Posisi</label>
                                <input type="text" name="position" value="{{ old('position', $employee->position) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                @error('position')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Gaji</label>
                                <input type="number" name="salary" value="{{ old('salary', $employee->salary) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                @error('salary')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
                                <input type="date" name="hire_date" value="{{ old('hire_date', $employee->hire_date->format('Y-m-d')) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                @error('hire_date')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Status</label>
                                <select name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="active" {{ old('status', $employee->status) === 'active' ? 'selected' : '' }}>Aktif</option>
                                    <option value="cuti" {{ old('status', $employee->status) === 'cuti' ? 'selected' : '' }}>Cuti</option>
                                    <option value="berhenti" {{ old('status', $employee->status) === 'berhenti' ? 'selected' : '' }}>Berhenti</option>
                                </select>
                                @error('status')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex justify-end space-x-3">
                            <a href="{{ route('employees.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                Batal
                            </a>
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>