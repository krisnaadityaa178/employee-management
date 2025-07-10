<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
        <!-- Header -->
        <div class="bg-white shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
                        <p class="mt-1 text-sm text-gray-600">Selamat datang di sistem manajemen karyawan</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="text-right">
                            <p class="text-sm text-gray-500">{{ now()->format('l, d F Y') }}</p>
                            <p class="text-sm text-gray-500">{{ now()->format('H:i') }} WIB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Total Karyawan -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Total Karyawan</p>
                                <p class="text-3xl font-bold text-gray-900 mt-2">{{ $totalEmployees }}</p>
                                <p class="text-sm text-gray-500 mt-1">Seluruh karyawan</p>
                            </div>
                            <div class="bg-blue-500 rounded-full p-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 bg-blue-50 rounded-lg p-2">
                            <div class="flex items-center text-blue-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium">100% Data Lengkap</span>
                            </div>
                        </div>
                    </div>

                    <!-- Karyawan Aktif -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Karyawan Aktif</p>
                                <p class="text-3xl font-bold text-green-600 mt-2">{{ $activeEmployees }}</p>
                                <p class="text-sm text-gray-500 mt-1">Sedang bekerja</p>
                            </div>
                            <div class="bg-green-500 rounded-full p-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 bg-green-50 rounded-lg p-2">
                            <div class="flex items-center text-green-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium">{{ $totalEmployees > 0 ? round(($activeEmployees / $totalEmployees) * 100) : 0 }}% dari total</span>
                            </div>
                        </div>
                    </div>

                    <!-- Karyawan Cuti -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Karyawan Cuti</p>
                                <p class="text-3xl font-bold text-yellow-600 mt-2">{{ $cutiEmployees }}</p>
                                <p class="text-sm text-gray-500 mt-1">Sedang cuti</p>
                            </div>
                            <div class="bg-yellow-500 rounded-full p-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 bg-yellow-50 rounded-lg p-2">
                            <div class="flex items-center text-yellow-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium">Sementara waktu</span>
                            </div>
                        </div>
                    </div>

                    <!-- Karyawan Berhenti -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Karyawan Berhenti</p>
                                <p class="text-3xl font-bold text-red-600 mt-2">{{ $berhentiEmployees }}</p>
                                <p class="text-sm text-gray-500 mt-1">Tidak aktif</p>
                            </div>
                            <div class="bg-red-500 rounded-full p-3">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-4 bg-red-50 rounded-lg p-2">
                            <div class="flex items-center text-red-600">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm font-medium">{{ $totalEmployees > 0 ? round(($berhentiEmployees / $totalEmployees) * 100) : 0 }}% dari total</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 mb-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Aksi Cepat</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <a href="{{ route('employees.index') }}" class="flex items-center p-4 bg-blue-50 rounded-xl hover:bg-blue-100 transition-colors duration-200 group">
                            <div class="bg-blue-500 rounded-lg p-3 mr-4 group-hover:bg-blue-600 transition-colors duration-200">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Kelola Karyawan</p>
                                <p class="text-sm text-gray-500">Lihat dan edit data karyawan</p>
                            </div>
                        </a>

                        <a href="{{ route('employees.create') }}" class="flex items-center p-4 bg-green-50 rounded-xl hover:bg-green-100 transition-colors duration-200 group">
                            <div class="bg-green-500 rounded-lg p-3 mr-4 group-hover:bg-green-600 transition-colors duration-200">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Tambah Karyawan</p>
                                <p class="text-sm text-gray-500">Daftarkan karyawan baru</p>
                            </div>
                        </a>

                        <div class="flex items-center p-4 bg-purple-50 rounded-xl">
                            <div class="bg-purple-500 rounded-lg p-3 mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Laporan</p>
                                <p class="text-sm text-gray-500">Segera hadir</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-6">Aktivitas Terkini</h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                            <div class="bg-blue-500 rounded-full p-2 mr-4">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-900">Sistem berhasil dimuat</p>
                                <p class="text-sm text-gray-500">{{ now()->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>

                        <div class="flex items-center p-4 bg-gray-50 rounded-xl">
                            <div class="bg-green-500 rounded-full p-2 mr-4">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium text-gray-900">Data karyawan tersinkronisasi</p>
                                <p class="text-sm text-gray-500">{{ $totalEmployees }} karyawan terdaftar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>