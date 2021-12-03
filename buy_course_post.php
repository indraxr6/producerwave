<?php 
session_start();
    if($_GET['id_course']){ // blok kode ini ngk jalan ... karena $_POST ngk ada
        include "conn.php";
        
        $qry_get_course=mysqli_query($conn,"select * from course where id_course = '".$_GET['id_course']."'");
        $dt_course=mysqli_fetch_array($qry_get_course);
        $_SESSION['cart'][]=array(
            'id_course'=>$dt_course['id_course'],
            'name'=>$dt_course['name'],
            'price'=>$dt_course['price'],
        );
        header('location: cart_course.php');
    }
?>




<?php 
// session_start();
//     if($_POST){
       

//         $id = $_GET['id_course'];

//         $qry_get_course=mysqli_query($conn,"select * from course where id = '".$_GET['id_course']."'");
//         $dt_course=mysqli_fetch_array($qry_get_course);
//         $_SESSION['cart'][]=array(
//             'id_course'=>$dt_course['id_course'],
//             'name'=>$dt_course['name'],
//             'price'=>$dt_course['price'],
//             // 'qty'=>$_POST['jumlah_pinjam']
//         );
//     }
//     header('location: cart_course.php');
?>

<?php 
// session_start();
//     if($_POST){
//         include "koneksi.php";
//        $qry_get_produk=mysqli_query($conn,"SELECT * FROM `produk` WHERE `id_produk` = '".$_GET['id_produk']."'");
//         $dt_produk=mysqli_fetch_array($qry_get_produk);
//         $_SESSION['cart'][]=array(
//             'id_produk'=>$dt_produk['id_produk'],
//             'nama_produk'=>$dt_produk['nama_produk'],
//             'qty'=>$_POST['jumlah_produk'],
//             'subtotal'=>$dt_produk['harga'] * $_POST['jumlah_produk']

//         );

//     }

//     header('location: cart.php');

?>
