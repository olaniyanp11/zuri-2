<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user_data.php" method="POST">
        <table>
            <tr>
                <td><label for="text">NAME :
                </label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label for="text">EMAIL :
                </label></td>
                <td><input type="email" name="email"required ></td>
            </tr>
            <tr>
                <td><label for="text">DATE OF BIRTH :
                </label></td>
                <td><input type="date" name="date_of_birth" value="date"required></td>
            </tr>
            <tr>
                <td><label for="text">GENDER :
                </label></td>
                <td><input type="radio" name="gender" value="male"required>male
            <input type="radio" name="gender" value="female"required>female
        </td>
            </tr>
            <tr>
                <td><label for="text">COUNTRY :
                </label></td>
                <td><input type="country" name="country"required></td>
            </tr>
           <tr><td><button type="submit">submit</button></td></tr>
         
        </table>
    </form>
</body>
</html>