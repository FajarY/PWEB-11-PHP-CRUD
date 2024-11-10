<!DOCTYPE html>
<html>
    <head>
        <title>List Pendaftaran Siswa</title>
        <link rel="stylesheet" type="text/css" href="./output.css">
    </head>
    <body>
        <header class="w-full">
            <div class="p-8">
                <h1 class="font-bold text-2xl text-center">List Siswa</h1>
            </div>
        </header>
        <main class="flex items-center flex-col">
            <div class="w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-3xl border border-s-2 rounded-md flex flex-row shadow p-4">
                <table class="w-full table-siswa">
                    <thead>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>Sekolah Asal</th>
                        <th>Tindakan</th>
                    </thead>
                    <tbody>
                        <?php 
                        include("config.php");

                        $sql = "SELECT * FROM calon_siswa";
                        $query = mysqli_query($db, $sql);

                        while($siswa = mysqli_fetch_array($query))
                        {
                            echo "<tr>";

                            echo "<td>".$siswa['id']."</td>";
                            echo "<td>".$siswa['nama']."</td>";
                            echo "<td>".$siswa['alamat']."</td>";
                            echo "<td>".$siswa['jenis_kelamin']."</td>";
                            echo "<td>".$siswa['agama']."</td>";
                            echo "<td>".$siswa['sekolah_asal']."</td>";

                            echo "<td>";
                            echo "<a class='text-blue-500 hover:text-blue-700' href='form-update.php?id=".$siswa['id']."'>Edit</a> | ";
                            echo "<a class='text-red-500 hover:text-red-700' href='delete-pendaftaran.php?id=".$siswa['id']."'>Hapus</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl bg-green-400 text-white font-bold p-4 text-center rounded-md mt-4 mb-4">
                Total : <?php echo mysqli_num_rows($query)?>
            </div>
            <?php if(isset($_GET['delete']) && $_GET['delete'] == 'succees'): ?>
            <div class="w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl bg-green-400 text-white font-bold p-4 text-center rounded-md mt-4 mb-4 ">
                Delete data success!
            </div>
            <?php elseif(isset($_GET['delete']) && $_GET['delete'] == 'fail'): ?>
            <div class="w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl bg-red-400 text-white font-bold p-4 text-center rounded-md mt-4 mb-4 ">
                Delete data gagal!
            </div>
            <?php elseif(isset($_GET['delete']) && $_GET['delete'] == 'invalid'): ?>
            <div class="w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl bg-red-600 text-white font-bold p-4 text-center rounded-md mt-4 mb-4 ">
                Input yang diberikan tidak valid!
            </div>
            <?php endif; ?>

            <?php if(isset($_GET['update']) && $_GET['update'] == 'success'): ?>
            <div class="w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl bg-green-400 text-white font-bold p-4 text-center rounded-md mt-4 mb-4 ">
                Update data success!
            </div>
            <?php elseif(isset($_GET['update']) && $_GET['update'] == 'fail'): ?>
            <div class="w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl bg-red-400 text-white font-bold p-4 text-center rounded-md mt-4 mb-4 ">
                Update data gagal!
            </div>
            <?php elseif(isset($_GET['update']) && $_GET['update'] == 'invalid'): ?>
            <div class="w-full sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl bg-red-600 text-white font-bold p-4 text-center rounded-md mt-4 mb-4 ">
                Input yang diberikan tidak valid!
            </div>
            <?php endif; ?>
        </main>
    </body>
</html>