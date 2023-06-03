<?php
include("auth_session.php");
include ("db.php");

$sql = "SELECT * FROM contact_form1";
$result = $conn->query($sql);


$db = $conn;
if(isset($_GET['delete']))
{
  $id= validate($_GET['delete']);
  $condition =['id'=>$id];
  $deleteMsg=delete_data($db, 'contact_form1', $condition);

}
function delete_data($db, $tableName, $condition){

    $conditionData='';
    $i=0;
    foreach($condition as $index => $data){
        $and = ($i > 0)?' AND ':'';
         $conditionData .= $and.$index." = "."'".$data."'";
         $i++;
    }
    
  $query= "DELETE FROM ".$tableName." WHERE ".$conditionData;
  $result= $db->query($query);
  return $msg;
}

function validate($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
    }
    if(isset($_GET['update'])){
        $id = validate($_GET['update']);
        $condition =['id'=>$id];
        update_data($db, 'contact_form1', $condition);
    }
    
    function update_data($db, $tableName, $condition){
   
        $conditionData='';
        $i=0;
        foreach($condition as $index => $data){
            $and = ($i > 0)?' AND ':'';
             $conditionData .= $and.$index." = "."'".$data."'";
             $i++;
        }
        
    //   $query= "UPDATE ".$tableName."SET name="."WHERE ".$conditionData;
    //   $result= $db->query($query);
    //   return $msg;
    }
$conn->close();

?>



<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Database Table</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">


    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            background: aliceblue;
            text-align: center;
        }
 
    </style>
</head>
 
<body>
    
    <div class="container">

        <?php @include 'header.php'; ?>
            <section>
                <h1>User's Table</h1>
                <!-- TABLE CONSTRUCTION -->
                <table>
                    <tr>
                   
                    
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Plan</th>
                        <th>Address</th>
                        <th>Edit</th>
                        <th>Delete</th>
                 
                        
                    
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                        // LOOP TILL END OF DATA
                        while($rows=$result->fetch_assoc())
                        {
                    ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN -->
                        
                      
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['name'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['number'];?></td>
                        <td><?php echo $rows['plan'];?></td>
                        <td><?php echo $rows['address'];?></td>
                       
                        <td><a href="fetch.php?update=<?php echo $rows['id']; ?>" class="btn btn-danger">Edit</a></td>
                        <td><a href="fetch.php?delete=<?php echo $rows['id']; ?>" class="btn btn-danger">Delete</a></td>
                       
                      
                    </tr>
                    
                    <?php
                        }
                    ?>
                </table>
            </section>
                    </div>
                    <?php @include 'footer.php'; ?>
                    
</body>
<script>
    onclick = function vk(){
        
    }
</script>

 
</html>