<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
    body {
    background-color: #4B371C; 
     }

  .center-content {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.form-container {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
    align-items: flex-start;
    font-size: 20px;
}

label {
    flex: 1;
    margin-right: 10px;
    text-align: right;
}
input {
    padding: 5px;
}


select {
    flex: 1;
    width: 100%;
    padding: 4px;

}

.center-buttons {
    text-align: center;
    color: black;
    font: bold 15px arial;
}

.delete-btn {
    margin-top: 10px;
    width: 30%;
    align-items: center;
}

    </style>
</head>
<body>
    <div class="center-content">
        <h1>Edit Product</h1>
        <form action="/product/edit/<?= $product['id'] ?>" method="post" class="form-container">
        <div class="form-group">
            <label for="name">Coffee Name:</label>
            <input type="text" name="name" id="name" value="<?= $product['name'] ?>" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="<?= $product['description'] ?>" required>
    </div>
    <div class="form-group">
        <form method="POST" action="/your-upload-handler-endpoint" enctype="multipart/form-data">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" accept="image/*" required>
</div>
    <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" value="<?= $product['price'] ?>" required>
            </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" name="category" id="category" value="<?= $product['category'] ?>" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity" id="quantity" value="<?= $product['quantity'] ?>" required>
            </div>

            <div class="center-buttons">
            <input type="submit" value="Save" class="save-btn">
            <br>
            <br>
            <a href="/product">Back to Coffee List</a>
        </div>
    </form>
    
</div>
    </div>
</body>
</html>
