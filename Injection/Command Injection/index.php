<html>
<head>
    <title>Command Injection</title>
</head>
<body>
<form action="" method="get">
    Ping address: <input type="text" name="addr">
    <input type="submit">
</form>
</body>
</html>
<?php
function isAllowed($cmd){
    // If the ip is matched, return true
    if(filter_var($cmd, FILTER_VALIDATE_IP)) {
        return true;
    }

    return false;
}
#Excute Command
if (isAllowed($_GET['addr'])) {
    echo shell_exec("ping ".$_GET['addr']);
}
?>