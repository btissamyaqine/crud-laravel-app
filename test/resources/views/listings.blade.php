<h1>{{$heading}}</h1>

@foreach ($listings as $listing)
@if ($listing['id']===1)

<h2> <a href="/listings/{{$listing['id']}}">{{ $listing['title'] }} </a>  </h2>
<p> {{ $listing['description'] }} </p>

@endif

@endforeach


