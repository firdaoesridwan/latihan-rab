<?php $title = "Daftar Anggota - RAB"; ?>

<!-- header2.php -->
<?php include "../_partials/header2.php" ?>

<!-- Isi Konten -->
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container px-6 py-8 mx-auto">
        <h3 class="text-3xl font-medium text-gray-700">Daftar Anggota</h3>

        <div class="mt-4">
            <div class="flex flex-wrap -mx-6">

                <!-- Tombol Tambah Data -->
                <div class="w-full px-6 mt-4">
                    <div class="flex items-center px-5 py-6 bg-white rounded-md shadow-sm">
                        <button onclick="document.getElementById('myModal').showModal()" id="btn" class="w-full md:w-auto text-sm bg-green-500 px-4 py-2 text-white rounded-3xl font-semibold hover:bg-green-800">
                            Tambah Data
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
                                Tambah Data Anggota
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
                            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                <div>
                                    <label class="text-black" for="username">Nama</label>
                                    <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-black" for="emailAddress">Nomor KTP</label>
                                    <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-black" for="emailAddress">Unit Kerja</label>
                                    <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-black" for="emailAddress">Sub Unit Kerja</label>
                                    <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-black" for="passwordConfirmation">Kota</label>
                                    <select class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                        <option>Sintang</option>
                                        <option>Sambas</option>
                                        <option>Sanggau</option>
                                        <option>Pontianak</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="text-black" for="passwordConfirmation">Provinsi</label>
                                    <select class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                        <option>Kalimantan Barat</option>
                                        <option>Kalimantan Tengah</option>
                                        <option>Kalimantan Selatan</option>
                                        <option>Kalimantan Timur</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="text-black" for="passwordConfirmation">Tanggal Lahir</label>
                                    <input id="date" type="date" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                                </div>

                                <div>
                                    <label class="text-black" for="passwordConfirmation">Alamat</label>
                                    <textarea id="textarea" type="textarea" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                                </div>

                                <!-- <div>
                                    <label class="block text-sm font-medium text-white">
                                        Image
                                    </label>
                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span class="">Upload a file</span>
                                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                                </label>
                                                <p class="pl-1 text-white">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-white">
                                                PNG, JPG, GIF up to 10MB
                                            </p>
                                        </div>
                                    </div>
                                </div> -->
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
        <div class="flex flex-col mt-8">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Name</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Title</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Status</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">

                            <!-- satu -->
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1566753323558-f4e0952af115?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1921&q=80" alt="">
                                        </div>

                                        <div class="ml-4">
                                            <div class="text-sm font-medium leading-5 text-gray-900">Ridwan Firdaus
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">ridwan@example.com</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">Rencana Anggaran Biaya</div>
                                    <div class="text-sm leading-5 text-gray-500">Web Developer</div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                                </td>

                                <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>

                            <!-- dua -->
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1525357816819-392d2380d821?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8dXNlciUyMG1hbiUyMGljb258ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                        </div>

                                        <div class="ml-4">
                                            <div class="text-sm font-medium leading-5 text-gray-900">Arib Fauzan
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">arib@example.com</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">Akuntansi</div>
                                    <div class="text-sm leading-5 text-gray-500">Web Developer</div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                                </td>

                                <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>

                            <!-- tiga -->
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1583864697784-a0efc8379f70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1888&q=80" alt="">
                                        </div>

                                        <div class="ml-4">
                                            <div class="text-sm font-medium leading-5 text-gray-900">Muhammad Farhatulah
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">fatur@example.com</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">Rencana Anggaran Biaya</div>
                                    <div class="text-sm leading-5 text-gray-500">UI/UX Designer</div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                                </td>

                                <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>

                            <!-- empat -->
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1664575602554-2087b04935a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGZlbWFsZXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                                        </div>

                                        <div class="ml-4">
                                            <div class="text-sm font-medium leading-5 text-gray-900">Maya Tiara Ayu
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">maya@example.com</div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">Akuntansi</div>
                                    <div class="text-sm leading-5 text-gray-500">UI/UX Designer</div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                                </td>

                                <td class="px-6 py-4 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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