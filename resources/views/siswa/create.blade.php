<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laporan') }}
        </h2>
    </x-slot>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <h2 class="px-4 py-3 mb-4 text-xl font-bold text-gray-900 dark:text-white">Buat Laporan Baru</h2>
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    
                    <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            <div class="sm:col-span-2">
                                <label for="pelapor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pelapor</label>
                                <input type="text" name="pelapor" id="pelapor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Pelapor" required="">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="terlapor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Terlapor</label>
                                <input type="text" name="terlapor" id="terlapor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="terlapor" required="">
                            </div>
                            <div class="w-full">
                                <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                                <input type="text" name="kelas" id="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="kelas" required="">
                            </div>
                            <div class="w-full">
                                <label for="bukti" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unggah Bukti</label>
                                <input type="file" name="bukti" id="bukti" class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-gray-200 file:text-gray-700
                                hover:file:bg-violet-100
                                "/>  
                            </div>
                            <div class="sm:col-span-2">
                                <label for="laporan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laporan</label>
                                <textarea id="laporan" name="laporan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Laporan Anda"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Laporkan !
                        </button>
                    </form>
                </div>
                
            </div>
            
        </div>
      </section>
</x-app-layout>
