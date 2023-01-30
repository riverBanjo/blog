<!DOCTYPE html>
<title>My Blog!</title>
<link rel="stylesheet" href="/app.css">
<script src="/app.js"></script>
<body>
    @foreach ($posts as $post)
        @dd($loop)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</body>