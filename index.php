<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toDo List</title>
</head>
<body>
    <h1>To Do List</h1>
    <?php   
        include 'src/main.php';
    ?>
<label for="email">Email</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password</label><br>
    <input type="password" id="password" name="password"><br>
    <button id="login" onclick="registrarUsuario" >Login</button>

    <script>
        let registrarUsuario = ()=> {
            let email = domcument.getElementByid(email).value;
            let password = document.getElementById(password).value;
            firebase.auth().createUserWithEmailAndPassword(email,password)
            .then((userCredential) => {
                var user = userCredential.user;
                console.log(user);
            });
            .catch( (error) => {
                var errorCode = errror.code;
                var errorMessage = error.message;
                console,log(errorMessage);

            });
        });
    </script>
</body>
</html>