<?php session_start(); 

?>
<?php include_once("confi.php"); ?>

<?php
    if(isset($_POST['submit'])){
    //FETCH DATA Query
        $mob = $_POST['phn'];
    $sql = "SELECT * FROM `mini_pis_details` WHERE `MOB_PH_NO` = '$mob'";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
        echo "Data will be shown here...";
        $row = mysqli_fetch_assoc($result);
        echo "<br>";
        while($row){?>
        <table id="example">
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
    } }
    else{
        echo "No data could be fetched from DB...";
    }
    ?>
    </tbody>
    </table>
<input type="button" id="create_pdf" value="Generate PDF">  
<html>
<head>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"

        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"

        crossorigin="anonymous"></script>

<script src="src/tableHTMLExport.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>

   <script>  
   $("#example").tableHTMLExport({

  // csv, txt, json, pdf
  type:'json',

  // file name
  filename:'sample.json',

  ignoreColumns: '.ignore',
  ignoreRows: '.ignore'

});
   $("#example").tableHTMLExport({

 

 // csv, txt, json, pdf

  type:'csv',

 
  // default file name

  filename: 'tableHTMLExport.csv'

 

 // for csv

  separator: ',',

  newline: '\r\n',

  trimContent: true,

  quoteFields: true,

 

  // CSS selector(s)

  ignoreColumns: '',

  ignoreRows: '',

                 

  // your html table has html content?

  htmlContent: false,

  // debug
consoleLog: false,       

});

   </script>
</head>
    <body>
    <form method="post" action="phn.php" class="form">
        Enter phone number:<input type="number" name="phn" value="phn">
        <input type="submit" name="submit" value="submit">
    </form>
    <a href="logout.php">Logout</a>
    
    </body>
</html>