<!-- if there is a message  show message -->
@if(!empty($message))
    <p>{{$message}}</p>
@endif
<form method="POST" action="{{url('create-post')}}">
	{{ csrf_field() }}
   title <input type="text" name="title"><br>
	content<input type="text" name="content"><br>
	<input type="submit" name="submit">
</form>