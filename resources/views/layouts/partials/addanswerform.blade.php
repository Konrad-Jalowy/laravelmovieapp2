<form action="{{ route('article.storeComment', $article->id) }}" method="POST">
            @csrf
            <x-label-textarea name="content" label="Your Comment:"></x-label-textarea>
                <br>
<input type="submit" value="Submit">
</form>