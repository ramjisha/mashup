<ul>
    @foreach ($result as $value)
      <li>{{ $value->name}}</li>
      <li>{{ $value->email}}</li>
    @endforeach
</ul>