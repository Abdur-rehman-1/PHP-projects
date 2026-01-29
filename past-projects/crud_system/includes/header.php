<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-system</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing:border-box;
        }
        h1{
            text-align: center;
            background-color: #029444ff;
            color: white;
            padding: 10px;
            margin-top: 0;
        }
       nav{
        display: flex;
        gap: 20px;
        background-color: #1b1b1bff;
        padding: 10px;
        
       }
       a{
        color: #ffffffff;
        text-decoration:none;
        margin-left: 20px;
        
       }
       a:hover{
           /* color: #000; */

       }


       .add-student-form{
  width: 300px;
  margin: 20px auto; /* centers the form */
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #bebcbcff;
}

/* Make labels and inputs align */
.add-student-form label{
  display: block;
  margin-bottom: 6px;
  font-weight: 600;
}

.add-student-form input,
.add-student-form select{
  width: 100%;
  padding: 8px;
  margin: 0 0 15px 0; /* no left offset; consistent spacing */
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.save-btn{
    width: 100%;
    padding: 10px;
    background-color: #098a4aff;
    color: white;
    
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.success-message{

    text-align: center;
    color: green;
    margin-top: 20px;

    color: #fff;
}
    table{
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        border: 1px solid #ccc;

    }   
    th, td{
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }
    th{
        background-color: #f2f2f2;
    }

  .del-btn{
    background-color: #ff4c4cff;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;


  }

  .update-btn{
    background-color: #4caf50ff;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
  }
    </style>
</head>
<body>
    <h1>CRUD System</h1>
   <div class="navbar">
     <nav>
        <a href="index.php">Home</a> 
        <a href="create.php">Create</a> 
        <a href="edit.php">Read</a> 
        <!-- <a href="show-update.php">Update</a>  -->
        <a href="delete.php">Delete</a>
    </nav>
   </div>
