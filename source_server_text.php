<?php
    $conn = mysqli_connect("localhost", "root", "root", "mes_pf");

    $db_data_comeon_qr = "Select Name, Depart, Grade, Phone_Num From employee;";

    $db_data_comeon_rs = mysqli_query($conn, $db_data_comeon_qr);

    while($row = mysqli_fetch_array($db_data_comeon_rs)) {
        echo "<tr>";
        echo '<td>'.$row['Name'].'</td>';
        echo '<td>'.$row['Depart'].'</td>';
        echo '<td>'.$row['Grade'].'</td>';
        echo '<td>'.$row['Phone_Num'].'</td>';
        echo "</tr>";
    }

    mysqli_close($conn);
?>
