<?php 
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nama = htmlspecialchars(trim($_POST["nama"]));
    $jenis_kelamin = htmlspecialchars(trim($_POST["jenis_kelamin"]));
    $agama = htmlspecialchars(trim($_POST["agama"]));
    $alamat = htmlspecialchars(trim($_POST["alamat"]));
    $sekolah_asal = htmlspecialchars(trim($_POST["sekolah_asal"]));

    if(empty($nama) || empty($jenis_kelamin) || empty($agama) || empty($alamat) || empty($sekolah_asal))
    {
        header("Location: index.php?status=invalid&damn=$nama;$jenis_kelamin;$agama;$alamat;$sekolah_asal");
    }
    else
    {
        $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal');";
        $query = mysqli_query($db, $sql);

        if($query)
        {
            header("Location: index.php?status=success");
        }
        else
        {
            header("Location: index.php?status=fail");
        }
    }
}
else
{
    die("Forbidden!");
}
?>