<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Registration Form</h1>

    <form action="register_process.php" method="POST">

        <label>First Name</label>
        <input type="text" name="first_name" required>

        <label>Last Name</label>
        <input type="text" name="last_name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <small>
            5-20 characters, with uppercase, lowercase, and number.
        </small>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" required>

        <label>Birthday</label>
        <input type="date" name="birthday" required>

        <label>Gender</label>

        <div class="gender">
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female"> Female
        </div>

        <label>Course</label>

        <select name="course" required>
            <option value="">-- Select Course --</option>
            <option value="BSIT">BSIT</option>
            <option value="BSCS">BSCS</option>
            <option value="BSA">BSA</option>
            <option value="BSBA">BSBA</option>
        </select>

        <button type="submit">Register</button>

    </form>

</div>

</body>
</html>