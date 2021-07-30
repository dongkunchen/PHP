<?php
    function table($row,$col){
        echo '<table border="1" width="800" align="center">';
            for($tr = 0 ;$tr<$row;$tr++){
                echo '<tr>';
                 for($td = 0 ;$td<$col;$td++){
                    echo '<td>'.$tr.$td.'</td>';
                 }
                echo '</tr>';
            }

        echo '</table>';
    }

    table(10,10);


?>
