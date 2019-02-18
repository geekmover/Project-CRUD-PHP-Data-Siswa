<?php

        echo '
        <title>Informasi Penghapusan Berhasil!</title>
        <body style="font-family: monospace;">
        <center>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <fieldset style="width: 650px; padding: 20px; border:2px solid green; box-shadow:0 0 10px #999;">
        <img src="icon/checked.png" height="84" width="84"/><br><br>Informasi berhasil menghapus data!<br><br>';
        ?>

        <form action="proses-edit-data.php" method="POST">
            <a href='list-database.php'>[---] Kembali ke List Data Pendaftar</a>   
            <a href='index.php'>[^] Kembali ke Homepage</a>    
        </form>

        <?php
      
    ?>
    <br><br>  
    </fieldset>
    </center>
    </body>
    <?php
?>