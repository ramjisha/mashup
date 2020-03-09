<!-- if there is a message  show message -->
@if(!empty($message))
    <p>{{$message}}</p>
@endif
<form method="POST" action="{{url('edit-post/'.$post->id)}}">
	{{ csrf_field() }}
   title <input type="text" name="title" value="{{$post->title}}"><br>
content	<input type="text" name="content" value="{{$post->content}}"><br>
	<input type="submit" name="submit">
</form>