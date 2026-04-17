<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form menu</title>
</head>
<body>
    <form action="user.php" method="post">
        <p>Name: <input type="text" name="username"></p>
        <p>Age: <input type="number" name="userage"></p>
        <button type="submit">pass form</button>
    </form>
    <form action="user.php" method="post">
        <p>User1 <input type="text" name="users[]"></p>
        <p>User2 <input type="text" name="users[]"></p>
        <button type="submit">pass form</button>
    </form>
    <form action="user.php" method="post">
        <p>Google <input type="checkbox" name="websites[]" value="Google"></p>
        <p>Youtube <input type="checkbox" name="websites[]" value="Youtube"></p>
        <p>instagram <input type="checkbox" name="websites[]" value="Instagram"></p>
        <button type="submit">submit</button>
    </form>
    <form action="user.php" method="post">
        <input type="radio" name="radio_websites" value="Google">Google</p>
        <input type="radio" name="radio_websites" value="Youtube">Youtube</p>
        <input type="radio" name="radio_websites" value="Instagram">Instagram</p>
        <button type="submit">submit</button>
    </form>
    <div class="option">
        <form action="user.php" method="post">
            <select name="selection[]" size="4" multiple="multiple">
                <option value="BMW">BMW</option>
                <option value="Mercedess">Mercedess</option>
                <option value="Audi">Audi</option>
                <option value="Nissan">Nissan</option>
            </select>
            <button type="submit">submit car</button>
        </form>
    </div>
</body>
</html>