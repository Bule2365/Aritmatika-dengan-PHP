<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['expression'])) {
    $expression = $_POST['expression'];

    try {
        $result = eval("return $expression;");
        echo $result;
    } catch (ParseError $e) {
        echo "Error: Ekspresi tidak valid!";
    }
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmatika Dengan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Kalkulator Ekspresi</h2>
        <form id="calcForm">
            <label for="expression">Masukkan ekspresi:</label>
            <input type="text" name="expression" id="expression" required>

            <button type="submit">Hitung</button>
        </form>

        <div id="result" class="result"></div>
    </div>

    <script src="script.js"></script>

</body>

</html>