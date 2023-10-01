<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Coffee</title>
    <style>
       body {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #4B371C;
    padding-top: 20px;
    margin: 0; /* Remove default body margin */
    min-height: 100vh; /* Set minimum height to fill the viewport */
}

.center-content {
    text-align: center;
    display: flex;
    font-size: 20px;
    flex-direction: column;
    align-items: center;
    padding: 20px 0; /* Add padding to the top and bottom */
    margin: 10px; /* Add margin around the container */
}

.form-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 10px 0; /* Add padding to the top and bottom */
    margin: 10px; /* Add margin around the container */
}

.form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
    font-size: 15px;
}

label {
    text-align: left;
}
input {
    padding: 5px;
}
.save-btn {
    width: 50;
    align-items: center;
    color: black;
    font: bold 15px arial;
}

    </style>
</head>
<body>
    <div class="center-content">
    <h1>Add Coffee</h1>
        <form action="/product/add" method="post" class="form-container">
        <div class="form-group">
        <label>Coffee Name</label>
        <input type="text" name="name" id="name" required>
        <br> 
        <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" id="description" required>
        <br> 
        <div class="form-group">
        <form method="POST" action="/your-upload-handler-endpoint" enctype="multipart/form-data">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept="image/*" required>
        <br>
        <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" id="price" required>
        <br> 
        <div class="form-group">
        <label>Category</label>
        <input type="text" name="category" id="category" required>
        <br> 
        <div class="form-group">
        <label>Quantity</label>
        <input type="text" name="quantity" id="quantity" required>
        <br> 
        
        <div class="save-btn">
        <input type="submit" value="Save" class="save-btn">
        <br>
        <br>
        <a href="/product">Back to Coffee List</a>
</form>
    </div>
</body>
</html>
      