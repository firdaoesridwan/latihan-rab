<!-- Sidebar -->
<div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-white lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-8">
        <div class="flex items-center">
            <span class="mx-2 text-2xl font-semibold text-black">RAB</span>
        </div>
    </div>

    <nav class="mt-2">
        <!-- Menu 1 -->
        <div class="ml-4 flex flex-row items-center h-8">
            <div class="tracking-widest text-gray-400 text-sm font-semibold">MENU 1</div>
        </div>

        <a class="flex items-center px-6 py-2 mt-2 text-gray-100 bg-green-400" href="../beranda/index.php">
            <i class='bx bxs-home'></i>
            <span class="mx-3">Beranda</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-green-400 hover:text-gray-100" href="#" onclick="dropdown()">
            <i class='bx bxs-spreadsheet'></i>
            <span class="mx-3">Rencana Anggaran Biaya</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class='bx bx-chevron-down'></i>
            </span>
        </a>
        <div class="text-left mt-2 w-4/5 mx-auto text-gray-500" id="submenu">
            <h1 class="cursor-pointer p-2 hover:bg-green-400 mt-1 hover:text-gray-100">
                <a href="../rab/proyek.php">
                    Proyek
                </a>
            </h1>
            <h1 class="cursor-pointer p-2 hover:bg-green-400 mt-1 hover:text-gray-100">
                <a href="../rab/rincian.php">
                    Rincian
                </a>
            </h1>
            <h1 class="cursor-pointer p-2 hover:bg-green-400 mt-1 hover:text-gray-100">
                <a href="../rab/uraian.php">
                    Uraian
                </a>
            </h1>
        </div>

        <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-green-400 hover:text-gray-100" href="../laporan/index.php">
            <i class='bx bxs-book'></i>
            <span class="mx-3">Laporan</span>
        </a>

        <!-- Menu 2 -->
        <div class="ml-4 mt-8 flex flex-row items-center h-8">
            <div class="tracking-widest text-gray-400 text-sm font-semibold">MENU 2</div>
        </div>

        <a class="flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-green-400 hover:text-gray-100" href="../pengguna/index.php">
            <i class='bx bxs-group'></i>
            <span class="mx-3">Manajemen Pengguna</span>
        </a>

        <!-- Menu 3 -->
        <div class="ml-4 mt-8 flex flex-row items-center h-8">
            <div class="tracking-widest text-gray-400 text-sm font-semibold">MENU 3</div>
        </div>

        <a class="flex items-center px-6 py-2 mt-2 text-gray-500 hover:bg-green-400 hover:text-gray-100" href="../login/logout.php">
            <i class='bx bxs-log-in-circle'></i>
            <span class="mx-3">Logout</span>
        </a>

    </nav>
</div>
<!-- End Sidebar -->

<script type="text/javascript">
    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
    }
    dropdown();
</script>