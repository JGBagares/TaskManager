<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/810f2e7b5c.js" crossorigin="anonymous"></script>  
    <?php 
        include './includes/header.php';
    ?>
    <center>
    <div>
        <table class="table table-striped">
            <tr>
                
                <th> Title </th>
                <th> Description </th>
                <th> Priority </th>
                <th> Due Date </th>
                <th> Action </th>
            </tr>

            <?php
                include "./includes/config.php";
                $sql = "SELECT * FROM task";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        switch ($row["priority"]){
                            case "Low":
                                $row["priorityRowColor"] = "table-light";
                                break;
                            case "Medium":
                                $row["priorityRowColor"] = "table-warning";
                                break;
                            case "High":
                                $row["priorityRowColor"] = "table-danger";
                                break;
                            default:
                                $row["priorityRowColor"] = "table-success";
                        }
                    ?>
            <tr class="<?php echo $row["priorityRowColor"]?>">
                <td>
                    <?php echo $row['title'] ?>
                </td>
                <td>
                    <?php echo $row['description'] ?>
                </td>
                <td>
                    <?php echo $row['priority'] ?>
                </td>
                <td>
                    <?php echo $row['due_date'] ?>
                </td>
                <td>
                    <a href="edit_task.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-pen"></i></a>
                    <a href="deleteTask.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>


            <?php        
                    }
                }
            ?>


        </table>


       

    </div>
    <div>
        
        <button id="addPage">
            Add Page
        </button>
                
       
        <script>
            var editbtn = document.getElementById('addPage');
            editbtn.addEventListener('click', function(){
                document.location.href = 'create_task.php';
            })

        </script>
    </div>
    </center>

    <?php 
        include './includes/footer.php';
    ?>
</body>
</html>




