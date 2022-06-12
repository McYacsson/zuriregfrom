<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>THE ZURI REGISTRATION FORM</h3>
    <form action="user_data.php" method="POST">

    <label for="name">Names</label><br/>
    <input type="text" class="form-control" id="fullname" placeholder="Full Names" name="fullname" required><br/><br/>

    <label for="email">Email</label><br/>
    <input type="text" class="form-control" id="email" placeholder="Email" name="email" required><br/><br/>

    <label for="dob">Date of Birth</label><br/>
    <input type="text" class="form-control" id="dob" placeholder="Date of Birth" name="dob" required><br/><br/>

    <label for="gender">Gender</label><br/>
    <input type="text" class="form-control" id="gender" placeholder="Gender" name="gender" required><br/><br/>

    <label for="country">Country</label><br/>
    <input type="text" class="form-control" id="country" placeholder="Country" name="country" required><br/><br/>


    <button type="submit" class="btn btn-primary" name="submit">Register</button>
    </form>
</body>
</html>
