<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php 
    include "./includes/config.php";

    $id = $_GET['id'];
    $select_sql = "SELECT * FROM task WHERE task.id = $id";
    $result = mysqli_query($conn, $select_sql);
    if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    
    }
  
  ?>


  <div class="container">
    <h2>Edit Task</h2>
    <form action="process.php" method="post">
      
      
      <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>" required>
      </div>

      
      <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="4" required><?php echo $row['description']; ?></textarea>
      </div>

      
      <div class="mb-3">
        <label for="priority" class="form-label">Priority:</label>
        <select class="form-select" id="priority" name="priority" required>
          <option value="Low" <?php if ($row['priority'] == 'Low'){ echo 'selected'; }  ?>>Low</option>
          <option value="Medium" <?php if ($row['priority'] == 'Medium'){ echo 'selected'; } ?>>Medium</option>
          <option value="High" <?php if ($row['priority'] == 'High') echo 'selected'; ?>>High</option>
        </select>
      </div>

     
      <div class="mb-3">
        <label for="due_date" class="form-label">Due Date:</label>
        <input type="date" class="form-control" id="due_date" name="due_date" value="<?php echo $row['due_date']; ?>" required>
      </div>

      <input type="hidden" name="id" value="<?php echo $id; ?>">

      <button type="submit" class="btn btn-primary" name="updateBtn">Update</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>