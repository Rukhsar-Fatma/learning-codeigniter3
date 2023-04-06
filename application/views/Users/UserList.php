<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Details</title>
</head>

<body>
    <h1>User Account Deatails</h1>
    <table>
        <tr>
            <td>Firstname</td>
            <td>Account No</td>
        </tr>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo $user['Firstname']; ?></td>
            <td><?php echo $user['AccountNo']; ?></td>
        </tr>
        <?php endforeach; ?>
    <table>    
</body>

</html>