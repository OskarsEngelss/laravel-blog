<x-layout title="Create a new post">
    <div class="back-button">
        <a class="back-href" href="/">Back to posts</a>
    </div>
    <h1>Create a new post</h1>
    <div class="blog-container">
        <form method="POST" action="/store" class="create-form">
            @csrf
            <label>
                Title: 
                <input type="text" name="title"/>
            </label>
            <label>
                Category_id: 
                <input type="number" name="category_id"/>
            </label>
            <button>Create</button>
        </form>
    </div>
</x-layout>