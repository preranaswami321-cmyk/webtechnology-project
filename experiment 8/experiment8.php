<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Experiment 8 - PHP Learning</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f8f0f5; }
        header {
            background-color: #c2185b;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .container { width: 70%; margin: 30px auto; }
        .box {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin: 20px 0;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
        h2 { color: #c2185b; }
        h3 { color: #880e4f; }
        p { font-size: 16px; line-height: 1.6; }
        pre {
            background: #f3e5f5;
            padding: 10px;
            border-radius: 8px;
            font-size: 15px;
        }
    </style>
</head>
<body>

<header>
    <h1>👗 StyleHub - PHP Learning</h1>
    <p>Experiment 8 - PHP Basics</p>
</header>

<div class="container">

    <!-- Variables -->
    <div class="box">
        <h2>1. Variables</h2>
        <?php
            $storeName = "StyleHub";
            $totalProducts = 152;
            $discount = 20.5;
            $isOpen = true;

            echo "<p><strong>Store Name:</strong> $storeName</p>";
            echo "<p><strong>Total Products:</strong> $totalProducts</p>";
            echo "<p><strong>Discount:</strong> $discount%</p>";
            echo "<p><strong>Store Open:</strong> " . ($isOpen ? "Yes" : "No") . "</p>";
        ?>
        <h3>Variable Dump:</h3>
        <pre><?php
            var_dump($storeName);
            var_dump($totalProducts);
            var_dump($discount);
            var_dump($isOpen);
        ?></pre>
    </div>

    <!-- Constants -->
    <div class="box">
        <h2>2. Constants</h2>
        <?php
            define("STORE_NAME", "StyleHub Fashion");
            define("MAX_CART_ITEMS", 10);
            define("GST_RATE", 18);

            echo "<p><strong>Store Name:</strong> " . STORE_NAME . "</p>";
            echo "<p><strong>Max Cart Items:</strong> " . MAX_CART_ITEMS . "</p>";
            echo "<p><strong>GST Rate:</strong> " . GST_RATE . "%</p>";
        ?>
        <h3>Built-in PHP Constants:</h3>
        <pre><?php
            echo "PHP Version: " . PHP_VERSION . "\n";
            echo "Operating System: " . PHP_OS . "\n";
            echo "Max Integer: " . PHP_INT_MAX . "\n";
        ?></pre>
    </div>

    <!-- Data Types -->
    <div class="box">
        <h2>3. Data Types</h2>
        <?php
            $string = "Fashion Store";
            $integer = 42;
            $float = 3.14;
            $boolean = true;
            $null = null;
            $array = ["Tops", "Jeans", "Dresses", "Footwear"];
        ?>
        <p><strong>String:</strong> <?php echo $string; ?> (Type: <?php echo gettype($string); ?>)</p>
        <p><strong>Integer:</strong> <?php echo $integer; ?> (Type: <?php echo gettype($integer); ?>)</p>
        <p><strong>Float:</strong> <?php echo $float; ?> (Type: <?php echo gettype($float); ?>)</p>
        <p><strong>Boolean:</strong> <?php echo ($boolean ? "true" : "false"); ?> (Type: <?php echo gettype($boolean); ?>)</p>
        <p><strong>Null:</strong> (Type: <?php echo gettype($null); ?>)</p>
        <p><strong>Array:</strong> <?php echo implode(", ", $array); ?> (Type: <?php echo gettype($array); ?>)</p>
    </div>

    <!-- String Functions -->
    <div class="box">
        <h2>4. String Functions</h2>
        <?php
            $product = "  Floral Top  ";
            echo "<p><strong>Original:</strong> '$product'</p>";
            echo "<p><strong>Uppercase:</strong> " . strtoupper($product) . "</p>";
            echo "<p><strong>Lowercase:</strong> " . strtolower($product) . "</p>";
            echo "<p><strong>Trimmed:</strong> '" . trim($product) . "'</p>";
            echo "<p><strong>Length:</strong> " . strlen(trim($product)) . "</p>";
            echo "<p><strong>Replace:</strong> " . str_replace("Floral", "Summer", trim($product)) . "</p>";
        ?>
    </div>

    <!-- Array -->
    <div class="box">
        <h2>5. Arrays</h2>
        <?php
            $products = ["Floral Top", "Blue Jeans", "Summer Dress", "Sneakers", "Handbag"];
            $prices = [599, 999, 1299, 1599, 799];

            echo "<p><strong>Products List:</strong></p><ul>";
            for ($i = 0; $i < count($products); $i++) {
                echo "<li>" . $products[$i] . " - ₹" . $prices[$i] . "</li>";
            }
            echo "</ul>";
            echo "<p><strong>Total Products:</strong> " . count($products) . "</p>";
        ?>
    </div>

</div>

</body>
</html>
           
