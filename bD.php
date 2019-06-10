

<!DOCTYPE html>
<html>
<head>

<?php include_once("confi.php"); 
 $birthDate=$_POST['birthDate'];
 ?>

    <title></title>
    <style type="text/css">
        td,table,th,tr{
            border: solid black;
            border-collapse: collapse;
            
        }
        table{width: 100%;}
        td { width: 80px; height: 30px;}
        h1{
  font-size: 50px;
  color: purple;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 18px;
  color: black;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}



/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
        
    </style>
    <link rel="stylesheet" type="text/css" href="C:\xampp1\htdocs\Drdo\css\">
</head>
<body>
<table>
    
            <tr>
            <td style="width:90px;"><?php echo 'PEN_NO'; ?></td>
            <td><?php echo 'ID'; ?></td>
            <td><?php echo 'EMP-NAME'; ?></td>
            <td><?php echo 'EMP-TITLE'; ?></td>
            <td><?php echo 'BIRTH-DT'; ?></td>
            <td><?php echo 'FATHER-NAME'; ?></td>
            <td><?php echo 'GENDER' ; ?></td>
            <td><?php echo 'EMP-NAME'; ?></td>
            <td><?php echo 'EMP-BGRP'; ?></td>
            <td><?php echo 'CATG-CD'; ?></td>
            <td><?php echo 'GRADE-PAY'; ?></td>
             <td><?php echo 'GROUP-CD'; ?></td>
             <td><?php echo 'GRADE_CD1'; ?></td>
            <td><?php echo 'PAY_BAND'; ?></td>
            <td><?php echo 'PRESENT-BASIC'; ?></td>
             <td><?php echo 'ID_MARKS'; ?></td>
            <td><?php echo 'DRONA-EMAIL'; ?></td>
            <td><?php echo 'PUB_EMAIL'; ?></td>
             <td><?php echo 'LOCAL-ADDR'; ?></td>
            <td><?php echo 'PREM-ADDR'; ?></td>
            <td><?php echo 'LAB_SEN-NO'; ?></td>
             <td><?php echo 'HOME_PH-NO'; ?></td>
            <td><?php echo 'EXT-PH_NO'; ?></td>
            <td style="width:90px;"><?php echo 'MOB-PH-NO'; ?></td>
             <td><?php echo 'DELEG-RANK'; ?></td>
             <td><?php echo 'DELEG-CODE'; ?></td>
            <td><?php echo 'RANK-LAB'; ?></td>
            <td><?php echo 'DIVI'; ?></td>
             <td><?php echo 'SUB-DIVI'; ?></td>
            <td><?php echo 'APPTYPE'; ?></td>
            <td><?php echo 'PIN'; ?></td>
             <td style="width:90px;"><?php echo 'BANKAC'; ?></td>
            <td><?php echo 'GPFNO'; ?></td>
            <td><?php echo 'BANDD'; ?></td>
        </tr>
<?php
 $birthDate=$_POST['birthDate'];
 //echo "$birthDate";
 $a=1;
    //FETCH DATA Query
    $sql = "SELECT * FROM `mini_pis_details` WHERE `BIRTH_DT` = '$birthDate'";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
        
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
    else{
        echo "No data could be fetched from DB...";
    }

?>

</body>
</html>