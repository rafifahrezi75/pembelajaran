<?php 

    require_once ("db.php") ;

    if (isset($_GET['id'])&isset($_GET['menu'])) {
        $id = $_GET['id'] ;
        $menu = $_GET['menu'] ;

        if($menu=='hapus'){
            $buah = '' ;
            $deskripsi = '' ;
            $harga = '' ;

            $sql = "DELETE FROM tblbuah WHERE idbuah=$id" ; 
            $koneksi->query($sql) ;
        }
        else{
            $sql = "SELECT * FROM tblbuah WHERE idbuah=$id" ;
            $hasil = $koneksi->query($sql) ;
            $row = $hasil->fetch_array() ;

            $buah = $row[1] ;
            $deskripsi = $row[2] ;
            $harga = $row[3] ;
        }
        
    }
    else{
        $buah = '' ;
        $deskripsi = '' ;
        $harga = '' ;   
    }

?>
    <form action="" method="post">
        Buah :
        <input type="text" name="buah" value="<?= $buah?>">
        <br><br>
        Deskripsi :
        <input type="text" name="deskripsi" value="<?= $deskripsi?>">
        <br><br>
        Harga :
        <input type="number" name="harga" value="<?= $harga?>">
        <br><br>
        <input type="submit" name="simpan" value="simpan">
    </form>

<?php 
    

    require_once ('db.php') ;

    if (isset($_POST['simpan'])) {
        if (isset($_GET['menu'])) {
            $buah = $_POST['buah'] ;
            $deskripsi = $_POST['deskripsi'] ;
            $harga = $_POST['harga'] ;
    
            $sql = "UPDATE tblbuah SET buah='$buah', deskripsi='$deskripsi', harga='$harga' WHERE idbuah=$id";
            $hasil=$koneksi->query($sql) ;
            header("location:http://localhost/project-tentangbuah.com/") ;
        }
        else {
            $buah = $_POST['buah'] ;
            $deskripsi = $_POST['deskripsi'];
            $harga = $_POST['harga'];

            $sql = "INSERT INTO tblbuah (buah, deskripsi, harga) VALUES ('$buah','$deskripsi',$harga)" ;
            $koneksi->query($sql) ;
        }
    }

    

    $sql = 'SELECT * FROM tblbuah' ;

    // echo $sql ;

    $hasil = $koneksi->query($sql) ;

    // print_r($hasil) ;

    // echo $hasil->num_rows ;

    echo '<table border="1px" cellpadding="5px" cellspacing="0">' ;

    echo '<tr>
    <th>idbuah</th>
    <th>buah</th>
    <th>deskripsi</th>
    <th>harga</th>
    <th>gambar</th>
    <th>hapus</th>
    <th>ubah</th>
    </tr>' ;

    if ($hasil->num_rows > 0) {
        while ($row=$hasil->fetch_array()) {
            echo '<tr>' ;
            echo '<td>'.$row[0]. '</td>' ;
            echo '<td>'.$row[1]. '</td>' ;
            echo '<td>'.$row[2]. '</td>' ;
            echo '<td>'.$row[3]. '</td>' ;
            echo '<td>'.$row[4]. '</td>' ;
            echo '<td> <a href="?id=' .$row[0] .'&menu=hapus"> hapus </a> </td>' ;
            echo '<td> <a href="?id=' .$row[0] .'&menu=edit"> edit </a> </td>' ;
            echo '</tr>' ;
            
        }
    } else {
        echo 'Kosong' ;
    }
    
    echo '</table>' ;


?>
