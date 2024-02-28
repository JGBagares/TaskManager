<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <div class="container">
    <h2>Create a New Task</h2>
    <form action="process.php" method="post">
      
      
      <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>

      
      <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
      </div>

      
      <div class="mb-3">
        <label for="priority" class="form-label">Priority:</label>
        <select class="form-select" id="priority" name="priority" required>
          <option value="Low">Low</option>
          <option value="Medium">Medium</option>
          <option value="High">High</option>
        </select>
      </div>

      
      <div class="mb-3">
        <label for="due_date" class="form-label">Due Date:</label>
        <input type="date" class="form-control" id="due_date" name="due_date" required>
      </div>

      <button type="submit" name="submitBtn" class="btn btn-primary">Submit</button>  
    </form>
  </div>
  
</body>
</html>