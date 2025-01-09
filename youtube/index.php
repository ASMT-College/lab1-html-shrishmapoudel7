<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and JavaScript Example</title>
</head>
<body>
    <h1>Hi</h1>
    <p>Hello</p>

    
    <?php
        echo 'Hello from server: ' . date('Y-m-d'); // Outputs the current date in YYYY-MM-DD format
    ?>

    
    <script>
        
        document.write('<br>Hello from client: ' + new Date());

        
        alert('Hi');
    </script>
</body>
</html>
