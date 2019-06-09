<?php session_start(); 

?>
<?php include_once("confi.php"); ?>

<?php
    if(isset($_POST['submit'])){
    //FETCH DATA Query
        $birthDate = $_POST['birthDate'];
    $sql = "SELECT * FROM `mini_pis_details` WHERE `BIRTH_DT` = '$birthDate'";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
        echo "Data will be shown here...";
        $row = mysqli_fetch_assoc($result);
        echo "<br>";
        while($row){?>
        <table>
        <tr>
            <td style="width: 90px;"><?php echo $row['PEN_NO']; ?></td>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['EMP_NAME']; ?></td>
            <td><?php echo $row['EMP_TITLE']; ?></td>
            <td><?php echo $row['BIRTH_DT']; ?></td>
            <td><?php echo $row['FATHER_NAME']; ?></td>
            <td><?php echo $row['GENDER']; ?></td>
            <td><?php echo $row['EMP_BGRP']; ?></td>
            <td><?php echo $row['CATG_CD']; ?></td>
            <td><?php echo $row['GRADE_CD']; ?></td>
            <td><?php echo $row['GRADE_PAY']; ?></td>
            <td><?php echo $row['GROUP_CD']; ?></td>
             <td><?php echo $row['GRADE_CD1']; ?></td>
            <td><?php echo $row['PAY_BAND']; ?></td>
            <td><?php echo $row['PRESENT_BASIC']; ?></td>
             <td><?php echo $row['ID_MARKS']; ?></td>
            <td><?php echo $row['DRONA_EMAIL']; ?></td>
            <td><?php echo $row['PUB_EMAIL']; ?></td>
             <td><?php echo $row['LOCAL_ADDR']; ?></td>
            <td><?php echo $row['PERM_ADDR']; ?></td>
            <td><?php echo $row['LAB_SEN_NO']; ?></td>
            <td><?php echo $row['HOME_PH_NO']; ?></td>
            <td><?php echo $row['EXT_PH_NO']; ?></td>
            <td style="width:90px;"><?php echo $row['MOB_PH_NO']; ?></td>
             <td><?php echo $row['DELEG_RANK']; ?></td>
             <td><?php echo $row['DELEG_CODE']; ?></td>
            <td><?php echo $row['RANK_LAB']; ?></td>
            <td><?php echo $row['DIVI']; ?></td>
             <td><?php echo $row['SUB_DIVI']; ?></td>
            <td><?php echo $row['APPTYPE']; ?></td>
            <td><?php echo $row['PIN']; ?></td>
             <td style="width:90px;"><?php echo $row['BANKAC']; ?></td>
            <td><?php echo $row['GPFNO']; ?></td>
            <td><?php echo $row['BAND']; ?></td>

        </tr>
        </table>
        <?php    
            $row = mysqli_fetch_assoc($result);
            
        }
    }
}
    else{
        echo "No data could be fetched from DB...";
    }

    ?>
    </tbody>
    </table>

<html>
<head>
  
</head>
    <body>
    <form method="post" action="birthDate.php">
        Enter employee Title:<input type="text" name="birthDate" >
        <input type="submit" name="submit" value="submit">
    </form>
    <a href="logout.php">Logout</a>
    
    </body>
</html>