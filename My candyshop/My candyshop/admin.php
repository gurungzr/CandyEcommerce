<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Candy Shop Admin Panel</title>
  <link rel="stylesheet" href="admin_panel.css">
</head>
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #ede6d6; /* Light chocolate color */
  }

  .container {
    display: flex;
  }

  .sidebar {
    width: 5px;
    background-color: #603c28; /* Dark chocolate color */
    color: #fff;
    padding: 20px;
  }

  .sidebar h2 {
    text-align: center;
  }

  .sidebar ul {
    list-style-type: none;
    padding: 0;
  }

  .sidebar ul li {
    margin-bottom: 10px;
  }

  .sidebar ul li a {
    color: #fff;
    text-decoration: none;
  }

  .sidebar ul li a:hover {
    text-decoration: underline;
  }

  .main-content {
    flex-grow: 1;
    padding: 20px;
  }

  .main-content h1 {
    text-align: center;
    color: #603c28; /* Dark chocolate color */
  }

  table {
    width: 100%;
    border-collapse: collapse;
    background-color: #f2e2c4; /* Light brown color */
    border-radius: 10px;
    overflow: hidden;
  }

  table th, table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #8c593b; /* Brown color */
  }

  table th {
    background-color: #8c593b; /* Brown color */
    color: #fff;
  }

  table th:first-child,
  table td:first-child {
    padding-left: 150px; /* Add left padding to Username column */
  }

  table th:nth-child(1), table td:nth-child(1) {
    width: 40%; /* Username column */
  }

  table th:nth-child(2), table td:nth-child(2) {
    width: 30%; /* Email column */
  }

  table th:nth-child(3), table td:nth-child(3) {
    width: 30%; /* Password column */
  }

  table tbody tr:nth-child(even) {
    background-color: #f7d9a2; /* Light orange color */
  }

  table tbody tr:hover {
    background-color: #ffcc80; /* Orange color */
  }

  .sidebar1 {
    width: 5px;
    height: 100vh;
    background-color: #603c28; /* Dark chocolate color */
    color: #fff;
    padding: 20px;
  }
</style>
<body>
  <div class="container">
    <div class="sidebar">
      <h2></h2>
    </div>
    <div class="main-content">
      <h1>Welcome to Candy Shop Admin Panel</h1>
      <table>
        <thead>
          <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
          </tr>
        </thead>
        <tbody>
           User data rows will be dynamically generated here
        </tbody>
      </table>
    </div>
    <div class="sidebar1">
      <h2></h2>
    </div>
  </div>
</body>
</html> --> 


<?php
include "connection.php";
session_start();

$sqlUser = "SELECT * FROM users";
$resultUser = $connection->query($sqlUser);
$users = $resultUser->fetch_all(MYSQLI_ASSOC);

$connection->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Shop Admin Panel</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ede6d6; /* Light chocolate color */
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 5px;
            background-color: #603c28; /* Dark chocolate color */
            color: #fff;
            padding: 20px;
        }

        .sidebar h2 {
            text-align: center;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .main-content h1 {
            text-align: center;
            color: #603c28; /* Dark chocolate color */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #f2e2c4; /* Light brown color */
            border-radius: 10px;
            overflow: hidden;
        }

        table th,
        table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #8c593b; /* Brown color */
        }

        table th {
            background-color: #8c593b; /* Brown color */
            color: #fff;
        }

        table th:first-child,
        table td:first-child {
            padding-left: 150px; /* Add left padding to Username column */
        }

        table th:nth-child(1),
        table td:nth-child(1) {
            width: 40%; /* Username column */
        }

        table th:nth-child(2),
        table td:nth-child(2) {
            width: 30%; /* Email column */
        }

        table th:nth-child(3),
        table td:nth-child(3) {
            width: 30%; /* Password column */
        }

        table tbody tr:nth-child(even) {
            background-color: #f7d9a2; /* Light orange color */
        }

        table tbody tr:hover {
            background-color: #ffcc80; /* Orange color */
        }

        .sidebar1 {
            width: 5px;
            height: 100vh;
            background-color: #603c28; /* Dark chocolate color */
            color: #fff;
            padding: 20px;
        }

        .edit-form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 5px;
            margin-top: 10px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .edit-form input {
            width: 90%;
            padding: 8px;
            margin: 5px 0;
        }

        .edit-form button {
            align-self: flex-end;
            margin-top: 10px;
            cursor: pointer;
            border: 1px solid black;
            border-radius: 3px;
            font-size: 14px;
            padding: 8px 12px;
        }

        .edit-form .edit-btn {
            background-color: #2196F3;
            color: white;
            margin-right: 5px;
        }

        .edit-form .cancel-btn {
            background-color: #e0e0e0;
            color: #333;
            margin-right: 5px;
        }
        


/* CSS for the back button */
.back-btn {
    padding: 10px 20px;
    background-color: #2196F3;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    outline: none;
    margin-top: 20px; /* Add margin-top to create space between the table and the button */
    margin-left: auto; /* Align to the right */
    margin-right: auto; /* Align to the left */
    display: block; /* Ensure button occupies full width */
    animation: pulse 1s infinite alternate; /* Apply animation */
    transition: transform 0.3s; /* Smooth transformation on hover */
}

/* Animation keyframes for pulse */
@keyframes pulse {
    0% {
        transform: scale(1); /* Initial scale */
    }
    100% {
        transform: scale(1.4); /* Slightly larger scale */
    }
}

.back-btn:hover {
    background-color: #0b7dda; /* Change background color on hover */
}


.edit-btn {
    padding: 10px 20px;
    background-color: #4CAF50; /* Initial background color */
    color: white;
    border: none;
    border-radius: 5px; /* Keep button as a rectangle with rounded corners */
    cursor: pointer;
    font-size: 16px;
    outline: none;
    transition: transform 0.3s; /* Smooth transformation on hover */
    animation: colorCircle 5s infinite linear; /* Apply animation for color circle */
}

/* Animation keyframes for color circle */
@keyframes colorCircle {
    0% {
        background-color: #4CAF50; /* Green color */
    }
    25% {
        background-color: #2196F3; /* Blue color */
    }
    50% {
        background-color: #f44336; /* Red color */
    }
    75% {
        background-color: #FFC107; /* Yellow color */
    }
    100% {
        background-color: #4CAF50; /* Green color */
    }
}

.edit-btn:hover {
    transform: scale(1.05); /* Slightly increase size on hover */
}

.edit-btn:active {
    transform: scale(0.95); /* Slightly decrease size on click */
}

    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <h2></h2>
        </div>
        <div class="main-content">
            <h1>Welcome to Candy Shop Admin Panel</h1>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr id='user_<?php echo $user['id']; ?>'>
                            <td><?php echo $user['username']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><?php echo $user['password']; ?></td>
                            <td>
                                <button class="edit-btn" onclick='showEditForm("<?php echo $user['id']; ?>")'>Edit</button>
                            </td>
                        </tr>
                        <!-- Edit form -->
                        <tr class='edit-form' id='editForm_<?php echo $user['id']; ?>' style='display:none;'>
                            <td colspan="4">
                                <form action="update.php?id=<?php echo $user['id']; ?>" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                    <input type="text" name="username" value="<?php echo $user['username']; ?>" placeholder="Edit Username">
                                    <input type="text" name="email" value="<?php echo $user['email']; ?>" placeholder="Edit Email">
                                    <input type="text" name="password" value="<?php echo $user['password']; ?>" placeholder="Edit Password" readonly>
                                    <button type="submit" class="edit-btn">Update</button>
                                    <button type="button" class="delete-btn" onclick='confirmDelete(<?php echo $user['id']; ?>)'>Delete</button>
                                    <button type="button" class="cancel-btn" onclick='cancelEditForm("<?php echo $user['id']; ?>")'>Cancel</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button class="back-btn" onclick="goBack()">Back</button>

        </div>
        <div class="sidebar1">
            <h2></h2>
        </div>
    </div>
</body>

 <script>
  
    function showEditForm(userId) {
        var editForm = document.getElementById('editForm_' + userId);
        editForm.style.display = 'table-row';
    }

    function cancelEditForm(userId) {
        var editForm = document.getElementById('editForm_' + userId);
        editForm.style.display = 'none';
    }
    function confirmDelete(userId){       
            window.location.href = 'delete.php?id=' + userId;
    }

    function submitUpdateForm(userId) {
    var updateForm = document.getElementById('updateForm_' + userId);
    updateForm.submit();
}

    function goBack() {
            window.location.href = 'main.php';
        }
</script>
</html>
