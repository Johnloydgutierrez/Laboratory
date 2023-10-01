<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-size: cover; /* Scale the image to cover the entire body */
            background-repeat: no-repeat; /* Prevent image from repeating */
            background-color: #4B371C;
            padding-top: 20px; /* Adjust the padding as needed */
        }
        .product {
            align-items: left;
            font-size: 20px;
           
        }
        .title {
            font-size: 30px;
        }
        .form-group {
            font-size: 20px;
        }
        .content-container {
            text-align: left;
        }
        /* Add a box around the table */
        table {
            border-collapse: collapse;
            width: 100%; /* Adjust the width as needed */
            margin-top: 20px; /* Adjust the margin as needed */
            border: 2px solid #333; /* Border style and color */
            border-radius: 10px; /* Rounded corners */
        }
        th, td {
            padding: 20px; /* Cell padding */
            text-align: center;
        }
        th {
            background-color: #2E1503; /* Header background color */
            color: white; /* Header text color */
        }
        tr:nth-child(even) {
            background-color: #43270F ; /* Alternate row background color */
        }
        /* Add styling to links */
        a {
            text-decoration: none;
            color: #007bff; /* Link color */
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="product">
        <a href="/product/add">Add Product</a>
    </div>

    <div class="title">
        <h1>Product List</h1>
    </div>

    <div class="content-container">
        <?php if (count($product) > 0): ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>Coffee Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($product as $product): ?>
                        <tr>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['description'] ?></td>
                            <td><?= $product['image'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td><?= $product['category'] ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td>
                                <a href="/product/edit/<?= $product['id'] ?>">Edit</a>
                                </td>
                                 <td>
                                <a href="/product/delete/<?= $product['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No products found.</p>
        <?php endif; ?>
            <br>
            <br>
        <a href="/website">Logout</a>
    </div>
</body>
</html>

