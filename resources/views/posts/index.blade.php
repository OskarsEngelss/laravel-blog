<x-layout title="Posts">
    <h1>Posts:</h1>
    @foreach ($posts as $post)
        <ul>
            <a href="show/{{ $post['id'] }}"><li>Title: {{ $post["title"] }}</li></a>
        </ul>
    @endforeach
</x-layout>