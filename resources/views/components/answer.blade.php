<div>
<p><strong>{{$author}}</strong> said:</p>          
<p>{{$content}}</p>
@if($isYour)
<a href="{{route('article.editComment', ['id' => $id1, 'id2' => $id2])}}"><button>Edit</button></a>
@endif
</div>