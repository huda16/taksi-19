<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "taksi19");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data)
{
    // ambildata dari tiap elemen dalam form
    global $conn;

    $jeniskendaraan = htmlspecialchars($data["jeniskendaraan"]);
    $jammasuk = htmlspecialchars($data["jammasuk"]);
    $jamkeluar = htmlspecialchars($data["jamkeluar"]);
    $bayar = htmlspecialchars($data["bayar"]);

    // query insert data
    $query = "INSERT INTO parkir
				VALUES
			 ('', '$jeniskendaraan', '$jammasuk', '$jamkeluar', '$bayar')
 			";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}


function keluar($data)
{
    global $conn;

    $id = $data["id"];
    $jamkeluar = $data["jamkeluar"];
    $bayar = $data["bayar"];

    // query insert data
    $query = "UPDATE parkir SET
 				jamkeluar = '$jamkeluar',
 				bayar = '$bayar'
 			  WHERE id = $id
 			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $keterangan = $data["keterangan"];

    // query insert data
    $query = "UPDATE tempat SET
 				keterangan = '$keterangan'
 			  WHERE id = $id
 			";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM parkir
				WHERE
			  jeniskendaraan LIKE '%$keyword%' OR
			  jammasuk LIKE '%$keyword%' OR
			  jamkeluar LIKE '%$keyword%' OR
			  bayar LIKE '%$keyword%'
			";
    return query($query);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('username sudah terdaftar!')
			</script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
			</script>";
        return false;
    }


    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    return 1;
}
