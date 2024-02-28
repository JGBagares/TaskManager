<?php 

include "./includes/config.php";

if(isset($_POST['updateBtn'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $prio = $_POST['priority'];
    $date = $_POST['due_date'];

    $sql = "UPDATE task SET title='$title', description ='$desc', priority='$prio', due_date='$date' WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        echo "data successfuly updated";
    }

    header("Location: index.php");
}

if(isset($_POST['submitBtn'])){
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $prio = $_POST['priority'];
    $date = $_POST['due_date'];

    $sql = "INSERT INTO task(title, description, priority, due_date) VALUES ('$title', '$desc', '$prio', '$date')";
    if(mysqli_query($conn, $sql)){
        echo "Successfuly Inserted";
    }

    header("Location: index.php");
}