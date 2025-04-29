<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])   ?>" method="post">
    <input type="text" name="userinput" id="">
    <input type="submit" value="submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $userinput = htmlspecialchars($_POST["userinput"]);


    echo $userinput;
}

?>