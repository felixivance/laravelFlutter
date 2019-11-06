<ul>
    @foreach($tags as $tag)
        <li> {{ $tag -> title }}</li>

    @endforeach
</ul>