<?php

include "conect.php";
if(isset($_POST["submit"])){
    $nDepan = $_POST["nama_depan"];
    $nBelakang = $_POST["nama_belakang"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    mysqli_query($conect, "INSERT INTO contact(nama_depan, nama_belakang,email, isi_pesan)
                        VALUES('$nDepan', '$nBelakang', '$email', '$pesan')");

if(($_POST) > 0){
    echo    "<script>
                alert('berhasil terkirim');
                window.location.href='contact.php';
            </script>";
}else{
    echo    "<script>
                alert('gagal terkirim');
            </script>";
}

}
?>
        
