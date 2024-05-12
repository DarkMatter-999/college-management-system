<?php

include "./header.php";

?>

<body>
    <h2>JIET Login Form</h2>
    <form methord="POST" action="api/login.php">
        <div class="mb-3">
            <label for="username">Username:</label><br>
            <input type="text" class="form-control" id="username" name="username" required><br><br>
        </div>
        <div class="mb-3">
            <label for="password">Password:</label><br>
            <input type="password" class="form-control" id="password" name="password" required><br><br>
        </div>
        <div class="mb-3">
            <label class="form-label">Login As</label>
            <select class="form-control" name="role">
                <option value="1">Admin</option>
                <option value="2">Teacher</option>
                <option value="3">Student</option>
                <option value="4">Registrar Office</option>
            </select>
        </div>
        <input type="submit" value="Login">
    </form>
</body>


<?php

include "./footer.php";

?>