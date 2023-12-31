<div class="container">
<form method="POST" action="{{ route('article.store') }}">
        @csrf
        <x-label-text name="title" label="Title:">{{old('title')}}</x-label-text>
        @error('title')
        <x-error-msg>{{$message}}</x-error-msg>    
        @enderror
        <br>
        <x-label-textarea name="lead" label="Lead:">{{old('lead')}}</x-label-textarea>
        @error('lead')
        <x-error-msg>{{$message}}</x-error-msg> 
        @enderror
        <br>
        <x-label-textarea name="content" label="Content:">{{old('content')}}</x-label-textarea>
        @error('content')
        <x-error-msg>{{$message}}</x-error-msg> 
        @enderror
        <br>
        <br>
        <input type="submit" value="Submit">
</form>
</div>