  <?php
$conn = mysqli_connect("localhost", "root", "", "fashionstore");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$success = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $sql = "INSERT INTO customers (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if (mysqli_query($conn, $sql)) {
        $success = "Customer registered successfully!";
    }
}

$result = mysqli_query($conn, "SELECT * FROM customers");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Experiment 9 - Database</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f8f0f5; }
        header {
            background-color: #c2185b;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .container { width: 80%; margin: 30px auto; }
        .form-box, .table-box {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin: 20px 0;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
        h2 { color: #c2185b; }
        .form-group { margin: 15px 0; }
        label { font-weight: bold; display: block; margin-bottom: 5px; }
        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input:focus { border-color: #c2185b; outline: none; }
        button {
            background: #c2185b;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover { background: #880e4f; }
        .success {
            background: #e8f5e9;
            color: green;
            padding: 10px;
            border-radius: 8px;
            margin: 10px 0;
        }
        table { width: 100%; border-collapse: collapse; }
        th {
            background: #c2185b;
            color: white;
            padding: 12px;
            text-align: left;
        }
        td { padding: 10px; border-bottom: 1px solid #eee; }
        tr:hover { background: #fce4ec; }
    </style>
</head>
<body>

<header>
    <h1>👗 StyleHub - Customer Database</h1>
    <p>Experiment 9 - Database Integration</p>
</header>

<div class="container">

    <!-- Registration Form -->
    <div class="form-box">
        <h2>📝 Add New Customer</h2>

        <?php if ($success): ?>
        <div class="success">✅ <?php echo $success; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label>Full Name:</label>
                <input type="text" name="name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input type="text" name="phone" placeholder="Enter phone number" required>
            </div>
            <button type="submit">Add Customer 👗</button>
        </form>
    </div>

    <!-- Customers Table -->
    <div class="table-box">
        <h2>👥 All Customers</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Registered At</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["created_at"]; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

</div>

</body>
</html>   
