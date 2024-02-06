<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container d-flex vh-100 justify-content-center align-items-center flex-column gap-3">
        <h1>Login</h1>
        <form action="{{ route('todo') }}" class="d-flex flex-column gap-3">
            <input type="text" class="form-control" placeholder="Username">
            <input type="password" class="form-control" placeholder="Password">
            <button type="submit" class="primary-btn text-decoration-none">Login</button>
        </form>
    </div>
</body>
</html>
