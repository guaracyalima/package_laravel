<h1>Package Laravel</h1>

<ul>
@foreach($pages as $page)
    <li>
        {{ $page->title }}
    </li>
    @endforeach

</ul>