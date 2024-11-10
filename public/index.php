<!DOCTYPE html>
<html>
    <head>
        <title>Pendaftaran Siswa Baru SMAN1</title>
        <link rel="stylesheet" type="text/css" href="./output.css">
    </head>
    <body>
        <header class="w-full">
            <div class="p-8">
                <h1 class="font-bold text-2xl text-center">Welcome to Pendaftaran Siswa SMAN1</h1>
            </div>
        </header>
        <main class="flex items-center flex-col">
            <div class="sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl border border-s-2 rounded-md flex flex-row shadow">
                <div class="overflow-hidden w-4/12">
                    <img class="w-full h-auto" src="https://images.genpi.co/uploads/bali/arsip/normal/2022/01/27/ilustrasi-sman-1-denpasar-bali-foto-jpnn-oil8.jpg">
                </div>
                <div class="w-8/12 flex flex-col items-center p-2 gap-2">
                    <button class="w-full bg-blue-400 text-white rounded-md shadow font-bold p-2 transition-all ease-in-out duration-200 hover:bg-black hover:text-white" onclick="window.location.href='/form-daftar.php'">Daftar</button>
                    <button class="w-full bg-blue-400 text-white rounded-md shadow font-bold p-2 transition-all ease-in-out duration-200 hover:bg-black hover:text-white" onclick="window.location.href='/list-siswa.php'">List</button>
                </div>
            </div>
            <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <div class="w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl bg-green-400 text-white font-bold p-4 text-center rounded-md mt-4 mb-4 ">
                Pendaftaran data success!
            </div>
            <?php elseif(isset($_GET['status']) && $_GET['status'] == 'fail'): ?>
            <div class="w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl bg-red-400 text-white font-bold p-4 text-center rounded-md mt-4 mb-4 ">
                Pendaftaran data gagal!
            </div>
            <?php elseif(isset($_GET['status']) && $_GET['status'] == 'invalid'): ?>
            <div class="w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl bg-red-600 text-white font-bold p-4 text-center rounded-md mt-4 mb-4 ">
                Input yang diberikan tidak valid!
            </div>
            <?php endif; ?>
        </main>
    </body>
</html>