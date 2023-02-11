<?php
include 'controller/get_all_user.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEB</title>
</head>
<style>
    table, th, td {
        border: 1px solid;
    }
    </style>
<body>
    <table>
    <thead>
    <tr>
    <th>Name</th>
      <th>Department</th>
      <th>Section</th>
      <th>Year_lvl</th>
      
</tr>
</thead>
<tbody>
   <?php while ($row = mysqli_fetch_assoc($results)) { ?>
     <tr>

     <td>
   <?php echo $row['f_name']; ?> <?php echo $row['m_name']; ?> <?php echo $row['l_name']; ?>
   </td>

   <td>
   <?php echo $row['dept']; ?>
   </td>

   <td>
   <?php echo $row['section']; ?> 
   </td>

   <td>
   <?php echo $row['year_lvl']; ?> 
    </td>

   </tr>
   <?php } ?>
   </tbody>
   </table>
   </body>
</html>
