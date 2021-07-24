@if (count($posts) > 0)
 
    @foreach ($posts as $post)
        <div>
            <h3>
                <a href={{ url('post/'.$post->slug) }}>{{ $post->title }}</a>
            </h3>
            <p>{{ $post->summary }}</p>
        </div>
    @endforeach
 
@endif