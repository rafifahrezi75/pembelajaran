<?php 

    require_once 'dbteman.php' ;

    $sql = 'SELECT * FROM tblteman' ;

    $hasil = $koneksi->query($sql) ;

    echo '<table border="1px" cellpadding="5px" cellspacing="0">' ;

    echo '<tr>
    <th>idteman</th>
    <th>teman</th>
    <th>asal sekolah</th>
    <th>alamat</th>
    </tr>' ;

    if ($hasil->num_rows > 0) {
        while ($row=$hasil->fetch_array()) {
            echo '<tr>' ;
            echo '<td>'.$row[0]. '</td>' ;
            echo '<td>'.$row[1]. '</td>' ;
            echo '<td>'.$row[2]. '</td>' ;
            echo '<td>'.$row[3]. '</td>' ;
            echo '</tr>' ;
        }
    }
    else {
        echo 'Kosong' ;
    }

    echo '</table>' ;


?>