<?php
    $otazky = [
        "What is PHP?",
        "How does XAMPP work?",
        "What is the difference between echo and print in PHP?",
        "How do you declare an array in PHP?",
        "What is a session in PHP?",
        "How can you connect to a MySQL database in PHP?",
        "What is the difference between include and require?",
        "How do you handle form data in PHP?",
        "What is the purpose of `isset()` function?",
        "How can you prevent SQL injection in PHP?",
    ];
    $odpovede = [
        "PHP is a server-side scripting language designed for web development.",
        "XAMPP is a local server that allows you to run PHP, MySQL, and Apache on your computer.",
        "`echo` and `print` both output text, but `echo` is slightly faster and can take multiple parameters, whereas `print` returns 1 and only takes one argument.",
        "You can declare an array in PHP using the `array()` function or using square brackets `[]`. Example: `\$arr = [1, 2, 3];`",
        "A session in PHP is used to store user information across multiple pages. You start a session using `session_start();`.",
        "You can connect to MySQL using `mysqli_connect()` or PDO. Example: `\$conn = new mysqli('localhost', 'username', 'password', 'database');`.",
        "`include` and `require` both include files, but `require` will cause a fatal error if the file is missing, while `include` will only generate a warning.",
        "Form data in PHP is handled using `\$_POST` or `\$_GET` depending on the method used in the form submission.",
        "`isset()` checks if a variable is set and is not `null`. Example: `if (isset(\$_POST['name'])) { echo 'Name exists'; }`",
        "To prevent SQL injection, use prepared statements with `mysqli` or `PDO`. Example: `\$stmt = \$conn->prepare('SELECT * FROM users WHERE email = ?'); \$stmt->bind_param('s', \$email);`",
    ];
?>