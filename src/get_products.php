<?php
header('Content-Type: application/json');

// Database connection (replace with your database credentials)
$conn = new mysqli('localhost', 'username', 'password', 'pet_zilla');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get category from request, default to 'all'
$category = isset($_GET['category']) ? $_GET['category'] : 'all';

// SQL query based on category
if ($category == 'all') {
    $sql = "SELECT * FROM products";
} else {
    $sql = "SELECT * FROM products WHERE category = ?";
}

$stmt = $conn->prepare($sql);
if ($category != 'all') {
    $stmt->bind_param("s", $category);
}
$stmt->execute();
$result = $stmt->get_result();

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

echo json_encode($products);

$stmt->close();
$conn->close();
?>
