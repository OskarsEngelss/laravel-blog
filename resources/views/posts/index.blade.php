<x-layout title="Posts">
    <div class="back-button">
        <a class="back-href" href="/create">Create new post</a>
    </div>
    <h1>Posts:</h1>
    <div class="blog-container">
        @foreach ($posts as $post)
            <ul>
                <a href="show/{{ $post['id'] }}"><li>Title: {{ $post["title"] }}</li></a>
            </ul>
        @endforeach
    </div>
</x-layout>