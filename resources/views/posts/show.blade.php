<x-layout title="Single Post">
    <h1>Single Post:</h1>
    <ul>
        <li>Title: {{ $post["title"] }}</li>
    </ul>
    <div class="back-button">
        <a class="back-href" href="/">Back to posts</a>
    </div>
</x-layout>