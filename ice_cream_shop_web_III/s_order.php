<?php
// Connect to database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'lanka_order';


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$products = isset($_POST['products']) ? $_POST['products'] : [];
$quantities = isset($_POST['quantities']) ? $_POST['quantities'] : [];

// Check if products and quantities are selected
if (count($products) > 0 && count($quantities) > 0) {
    // Insert each selected product into the database
    for ($i = 0; $i < count($products); $i++) {
        $product = $products[$i];
        $quantity = $quantities[$i];

        $stmt = $conn->prepare("INSERT INTO sorder (customer_name, email, address, phone, product_name, quantity) VALUES (?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssi", $name, $email, $address, $phone, $product, $quantity);

        $stmt->execute();
    }

    // Close connection
    $conn->close();

    // Redirect to thank you page or show message
    echo "<script>alert('Order submitted successfully!'); window.location.href='index.html';</script>";
} else {
    echo "<script>alert('Please select at least one product.'); window.location.href='order_ice.html';</script>";
}
?>
