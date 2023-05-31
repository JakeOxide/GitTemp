
        <form action="Delegate_update.php" method="post">
            Name
            <input type="text" name="Namex" value="<?php echo $row ['Name']; ?> " size=10>
            Username
            <input type="text" name="Username" value="<?php echo $row ['User_name']; ?> " size=10>
            Password
            <input type="text" name="Password" value="<?php echo $row ['User_password']; ?>" size=17>
            <input type="submit" name="submit" value="Update">
        </form>