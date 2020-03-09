@if(!empty($posts))
    <table>
        <tr>
        <th>title</th>
        <th>content</th>
        </tr>
        @foreach($posts as $post)
        <tr>
        <td>{{ $post->title}}</td>
        <td>{{ $post->content}}</td>
        </tr>
        @endforeach
    </table>
@endif    