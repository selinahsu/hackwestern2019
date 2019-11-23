<?php
    $db_host='localhost';
    $db_user='root';
    $db_pass='123456789';
    $db_date='hackwestern';

    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_date);
    if(!$conn){
        die('Failed to connect to server' . mysqli_connect_error());
    }
    $sql = 'select * from inventory';
    $query = mysqli_query($conn,$sql);
    if (!$query){
        die('Error found'. mysqli_error($conn));
    }
    echo "
    <table class = 'table'>
    <tr>
    <th>Name</th>
    <th>Category</th>
    <th>Shelf Life</th>
    <th>Stock Date</th>
    <th>Barcode</th>
    <th>Status</th>
    </tr>";

    while ($row = mysqli_fetch_array($query)){
        echo ' <tr>
         <td>'.$row['Name'].'</td>
         <td>'.$row['Category'].'</td>
         <td>'.$row['Shelf Life'].'</td>
         <td>'.$row['Stock Date'].'</td>
         <td>'.$row['Barcode'].'</td>
         <td>'.$row['Status'].'</td>
         </tr>';
    }
    echo "</table>";
    ?>