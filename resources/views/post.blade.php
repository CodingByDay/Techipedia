<div>
    @if ($post->featured_image)
        <img src="{{ asset($post->featured_image) }}" />
    @endif
    <h3>{{ $post->title }}</h3>
    {!! $post->body !!}
</div>