<?php
error_reporting(0);
session_start();
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "admin123") {
        session_start();
        $_SESSION["berhasil"] = true;
        header("Location: ../beranda/index.php");
        exit();
    } else {
        $salah = '<p class="text-center text-sm font-semibold text-red-400">Username dan Password Salah!</p>';
    }
}
?>

<?php $title = "Login - RAB"; ?>
<?php include "../_partials/header.php" ?>

<body>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
            <h1 class="text-center text-2xl font-bold text-indigo-500 sm:text-3xl">
                Logo RAB
            </h1>

            <form action="" method="post" id="form_login" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                <p class="text-center text-lg font-medium">Silahkan Login</p>

                <div class="grid grid-cols-1 gap-6 mt-4">
                    <div>
                        <label class="text-black" for="username">Username</label>
                        <input id="username" name="username" type="text" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-black" for="password">Password</label>
                        <input id="password" name="password" type="password" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-400 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                </div>

                <!-- <p class="text-center text-sm font-semibold text-red-400">Username dan Password Salah!</p> -->
                <?php echo $salah; ?>

                <button type="submit" value="login" name="login" class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                    Login
                </button>
            </form>
        </div>

    </div>
</body>

<?php include "../_partials/header.php" ?>