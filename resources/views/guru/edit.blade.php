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
                    
                    <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                            
                            <select name="status">
                                <option selected="">Pilih Status</option>
                                <option value="sedang dalam tinjauan">sedang dalam tinjauan</option>
                                <option value="selesai">selesai</option>
                            </select>
                            
                        </div>
                        <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            Ubah status
                        </button>
                    </form>
                </div>
                
            </div>
            
        </div>
      </section>
</x-app-layout>
