
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Mein Gästebuch</title>
</head>
<body>
    <h1>Willkommen in meinem Gästebuch</h1>

    <form method="post">
        <label for="name">Dein Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label for="message">Nachricht:</label><br>
        <textarea name="message" rows="4" cols="40" required></textarea><br><br>

        <button type="submit">Eintragen</button>
    </form>

    <hr>

    <h2>Einträge:</h2>

    <?php
    $file = "guestbook.txt";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $message = htmlspecialchars($_POST["message"]);
        $entry = "<p><strong>$name</strong>: $message</p>\n";

        file_put_contents($file, $entry, FILE_APPEND);
    }

    if (file_exists($file)) {
        echo file_get_contents($file);
    }
    ?>
</body>
</html>
