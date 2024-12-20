<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Product</title>
    <style>
        /* Add the CSS code here */
        /* Add the CSS code here */
/* Add the CSS code here */
/* Add the CSS code here */
body {
  background-color: #808080;
  font-family: Arial, sans-serif;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 50px;
  background-color: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  width: 80%;
  max-width: 600px;
  margin: 50px auto;
}

input[type="file"],
input[type="text"],
textarea {
  margin-bottom: 20px;
  padding: 10px;
  border-radius: 5px;
  border: none;
  width: 100%;
  max-width: 400px;
  font-size: 16px;
}

input[type="file"] {
  background-color: #0077b3;
  color: #fff;
  cursor: pointer;
}

input[type="text"],
textarea {
  background-color: #4d4d4d;
  color: #fff;
}

input[type="text"]:focus,
textarea:focus {
  background-color: #666;
  outline: none;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

input[type="submit"] {
  background-color: #ff6600;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: all 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #ff4d00;
}

label {
  font-size: 16px;
  margin-bottom: 10px;
  color: #333;
}

input[type="text"]:focus,
textarea:focus,
input[type="submit"]:hover {
  border: 2px solid purple;
}
    </style>
</head>
<body>
    <form action="vendor_backend.php" method="post" enctype="multipart/form-data">
        <label for="image">Select an image of the product:</label>
        <input type="file" name="image" accept=".jpg , .jpeg, .png" required> 

        <label for="name">Product name:</label>
        <input type="text" name="name" placeholder="Product name" required> 

        <label for="price">Price:</label>
        <input type="number" name="price" placeholder="Price" required> 

        <label for="stock">Stock:</label>
        <input type="number" name="stock" placeholder="Stock" required> 

        <label for="category">Category:</label>
        <input type="text" name="category" placeholder="Category" />

        <label for="description">Description of product:</label>
        <textarea name="description" cols="50" rows="10" placeholder="Description of product" required></textarea>

        <input type="submit" name="submit" value="Post Product">
    </form>
</body>
</html>
