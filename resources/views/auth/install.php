<?php
use App\Core\View;
View::layout( 'layouts.dashboard' );
View::section( 'title', 'Installer' );
var_dump($_SESSION);
?>
<?php if (!empty($error)): ?><p style="color:red"><?= htmlspecialchars($error) ?></p><?php endif; ?>
<form method="POST">
    <h3>Database</h3>
    Host: <input name="db_host" value="localhost"><br>
    Name: <input name="db_name"><br>
    User: <input name="db_user"><br>
    Password: <input name="db_pass" type="password"><br>

    <h3>Admin Account</h3>
    Email: <input name="admin_email"><br>
    Password: <input name="admin_password" type="password"><br>

    <button type="submit">Install</button>
</form>