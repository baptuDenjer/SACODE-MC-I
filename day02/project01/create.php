<h3> Default Form </h3>
<!-- Secara default, isi dari default form itu "GET" -->
<form action = "create-proses.php">
    <label>First Name </label>
    <input type= "text" name = "first_name" value = ""> <br> <br>
    
    <label>Last  Name </label>
    <input type = "text" name = "last_name" value = ""> <br> <br>

    <input type = "submit" value = "Send">
</form>

<h3> POST Form </h3>
<form action = "update-proses.php" method = "POST">
    <label>First Name </label>
    <input type= "text" name = "first_name" value = ""> <br> <br>
    
    <label>Last  Name </label>
    <input type = "text" name = "last_name" value = ""> <br> <br>

    <input type = "submit" value = "Send">
</form>