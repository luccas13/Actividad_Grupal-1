echo '<h3>TABLA DE MULTIPLICAR <h3>';
    "<table border=1>";
    echo"<tr>";
        for($i=1; $i<=10; $i++){
            echo "<td> Tabla del ".$i." </td>";
                for($x=1; $x<=10; $x++){
                    echo "$i * $x = ". ($i*$x).'<br>';
                }
            echo "</td>";
        }
    echo "</tr>";
echo"</table>";