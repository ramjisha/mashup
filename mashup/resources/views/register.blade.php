<!DOCTYPE html>
<html>
    <head>
        <title>register </title>
    </head>
<body>
<h1>Register </h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="post" action="/user">
    {{ csrf_field() }}
            firstname<input type="text" name='fullname'><br>
            email<input type="email" name='email'><br>
            password<input type="password" name='password'><br>
            <input type="submit" name="submit">
        </form>
</body>
</html>