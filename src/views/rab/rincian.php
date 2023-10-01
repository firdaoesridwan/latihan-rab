<?php $title = "Rincian - RAB"; ?>

<!-- header2.php -->
<?php include "../_partials/header2.php" ?>

<!-- Isi Konten -->
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container px-6 py-8 mx-auto">
        <h3 class="text-3xl font-medium text-gray-700">Rincian RAB</h3>

        <div class="mt-4">
            <div class="flex flex-wrap -mx-6">

                <!-- Tombol Tambah Data -->
                <div class="w-full px-6 mt-4">
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                        <button onclick="document.getElementById('myModal').showModal()" id="btn" class="w-full md:w-auto text-sm bg-green-500 px-4 py-2 text-white rounded-3xl font-semibold hover:bg-green-800">
                            Tambah Data Rincian
                        </button>
                    </div>
                </div>
                <!-- End Tombol Tambah Data -->

                <!-- Modal klik Tombol Tambah Data -->
                <dialog id="myModal" class="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
                    <div class="flex flex-col w-full h-auto ">
                        <!-- Header -->
                        <div class="flex w-full h-auto justify-center items-center">
                            <div class="flex w-5/6 h-auto py-3 text-xl font-semibold">
                                Tambah Data Rincian
                            </div>
                            <div onclick="document.getElementById('myModal').close();" class="flex w-1/6 h-auto justify-end cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: msFilter;">
                                    <path d="M9.172 16.242 12 13.414l2.828 2.828 1.414-1.414L13.414 12l2.828-2.828-1.414-1.414L12 10.586 9.172 7.758 7.758 9.172 10.586 12l-2.828 2.828z"></path>
                                    <path d="M12 22c5.514 0 10-4.486 10-10S17.514 2 12 2 2 6.486 2 12s4.486 10 10 10zm0-18c4.411 0 8 3.589 8 8s-3.589 8-8 8-8-3.589-8-8 3.589-8 8-8z"></path>
                                </svg>
                            </div>
                            <!--Header End-->
                        </div>
                        <!-- Modal Content-->
                        <form>
                            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                                <div>
                                    <label class="text-black" for="passwordConfirmation">Judul Proyek</label>
                                    <select class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                        <option>Microsoft</option>
                                        <option>Apple</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="text-black" for="emailAddress">Bahan</label>
                                    <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-black" for="emailAddress">Satuan</label>
                                    <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-black" for="emailAddress">Jumlah</label>
                                    <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-black" for="emailAddress">Harga</label>
                                    <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                </div>
                            </div>

                            <div class="flex justify-end mt-6">
                                <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-green-800 focus:outline-none focus:bg-gray-600">Tambah</button>
                            </div>
                        </form>
                        <!-- End of Modal Content-->
                    </div>
                </dialog>
                <!-- End Modal klik Tombol Tambah Data -->

            </div>
        </div>

        <!-- Tabel -->
        <div class="mt-4 container mx-auto text-black">
            <div class="overflow-x-auto">
                <table class="min-w-full text-xs">
                    <colgroup>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                        <col class="w-24">
                    </colgroup>
                    <thead class="bg-green-200">
                        <tr class="text-left">
                            <th class="p-3">No.</th>
                            <th class="p-3">Judul Proyek</th>
                            <th class="p-3">Bahan</th>
                            <th class="p-3">Satuan</th>
                            <th class="p-3">Jumlah</th>
                            <th class="p-3">Harga</th>
                            <th class="p-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- satu -->
                        <tr class="border-b border-opacity-20 border-gray-700 bg-white">
                            <td class="p-3">
                                <p>1.</p>
                            </td>
                            <td class="p-3">
                                <p>PR97412378923</p>
                            </td>
                            <td class="p-3">
                                <p>Kulkas</p>
                            </td>
                            <td class="p-3">
                                <p>Buah</p>
                            </td>
                            <td class="p-3">
                                <p>1</p>
                            </td>
                            <td class="p-3">
                                <p>Rp.12.000.000</p>
                            </td>
                            <td class="p-3 text-right">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <!-- dua -->
                        <tr class="border-b border-opacity-20 border-gray-700 bg-white">
                            <td class="p-3">
                                <p>2.</p>
                            </td>
                            <td class="p-3">
                                <p>PR84763529850</p>
                            </td>
                            <td class="p-3">
                                <p>Komputer</p>
                            </td>
                            <td class="p-3">
                                <p>Buah</p>
                            </td>
                            <td class="p-3">
                                <p>3</p>
                            </td>
                            <td class="p-3">
                                <p>Rp.21.000.000</p>
                            </td>
                            <td class="p-3 text-right">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Tabel -->
    </div>
</main>
<!-- End Isi Konten -->

<!-- script animasi tombol tambah data -->
<style>
    /* dialog[open] {
        animation: appear .15s cubic-bezier(0, 1.8, 1, 1.8);
    } */

    dialog::backdrop {
        background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
        backdrop-filter: blur(3px);
    }


    @keyframes appear {
        from {
            opacity: 0;
            transform: translateX(-3rem);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>
<!-- End script animasi tombol tambah data -->

<!-- footer2.php -->
<?php include "../_partials/footer2.php" ?>