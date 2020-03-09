@if(!empty($message))
    <p>{{$message}}</p>
@endif
<form method="post" action="/edit-user/{{$user->id}}">
    {{ csrf_field() }}
firstname<input type="text" name='fullname' value="{{$user->name}}"><br>
    email<input type="email" name='email'value="{{$user->email}}"><br>
    password<input type="password" name='password'value="{{$user->password}}"><br>
        <input type="submit" name="submit">
</form>