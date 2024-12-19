@if ($errors->has('password'))
<script>
    alert("{{$errors->first('password')}}")
    $redirect ='/register'
</script>

@endif
@if ($errors->has('email'))
<script>
    alert("{{$errors->first('email')}}")
    $redirect ='/register'
</script>

@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Data | Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
</head>

<body style="background-image: url(https://d1csarkz8obe9u.cloudfront.net/posterpreviews/fitness-and-gym-twitter-post-design-template-21cd036afdc651e0d0f18a0fb0d52f49_screen.jpg?ts=1698376409);
             background-size: cover;
             background-repeat: no-repeat;">
    <center>
        <h1 style="color: aliceblue;">WELCOME TO SQUAD GYM</h1>
        <div class="container">
            <div class="card" style="width: 18rem; padding: 25px;
                 border: 5px solid rgba(0, 0, 0, 0.525);
                 box-shadow: 0 0 10px rgba(225, 255, 255, 0.6);
                 background-color: rgba(0, 0, 0, 0.603);
                 border-radius: 20px;">
                <div class="card-body">
                    <h3 style="color: white;">LOGIN HERE</h3>
                    <form method="POST" action="{{ route('register.process') }}"> 
                        @csrf
                        <div class="form-group">
                            <label style="color: white;" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="User@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label style="color: white;" for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Nama Sesuai KTP" required>
                        </div>
                        <div class="form-group">
                            <label style="color: white;" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="***" required>
                        </div>
                        <div class="form-group">
                            <label style="color: white;" for="no_handpone">Nomor Handphone</label>
                            <input type="text" name="no_handpone" id="no_handpone" class="form-control" placeholder="08816210069" required>
                        </div>
                        @foreach ($data as $d)
                        <input type="hidden" name="id_kategori" value="{{$d->id}}">
                        {{$d->id}}
                        @endforeach
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>
</body>
</html>
