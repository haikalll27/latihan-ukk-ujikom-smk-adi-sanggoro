<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 Column Grid</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset dasar untuk margin dan padding */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
}

.row {
    display: grid; /* Menggunakan CSS Grid */
    grid-template-columns: repeat(3, 1fr); /* Membagi menjadi 4 kolom */
    gap: 16px; /* Jarak antar kolom dan baris */
    padding: 16px;
}

.col {
    background-color: #007bff;
    color: white;
    padding: 16px;
    text-align: center;
    border-radius: 4px;
    font-size: 16px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body>
    <div class="row">
        <div class="col">Column 1</div>
        <div class="col">Column 2</div>
        <div class="col">Column 3</div>
        <div class="col">Column 4</div>
        <div class="col">Column 5</div>
        <div class="col">Column 6</div>
        <div class="col">Column 7</div>
        <div class="col">Column 8</div>
    </div>
</body>
</html>
