<?php
  require 'includes/header.php';

    require 'db-connect.php';
    
    $query = "SELECT * FROM `students`";

    $sql = mysqli_query($con,$query);    
?>


    <h1>Student List</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
       
        <tbody>
             <?php
          if (mysqli_num_rows($sql)>0) {

            while($result=mysqli_fetch_assoc($sql)){

            
          
        
        ?>
            <tr>
                <td><?php  echo $result["id"];   ?></td>
                <td><?php  echo $result["Name"];   ?></td>
                <td><?php  echo $result["Address"];   ?></td>
                <td><?php  echo $result["Class"];   ?></td>
                <td><?php  echo $result["Phone"];   ?></td>
                <td>
                    <button type="submit" class="del-btn" ><a href="delete.php?id=<?php  echo $result["id"]   ?>">delete</a></button>
                    <button type="submit" class="update-btn" ><a href="show-update.php?id=<?php  echo $result["id"]   ?>">edit</a></button>
                 
            </td>
            </tr>

             
  <?php 
            }
        }
        else {
           echo "No data in database";
        }
          ?>  
        </tbody>
    </table>


