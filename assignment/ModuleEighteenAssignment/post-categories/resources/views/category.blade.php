@foreach ($categories as $category)
    <h2>Category: {{ $category->name }}</h2>
    <h3>{{ $category->posts->first()->title }}</h3>
    <p>{{ $category->posts->first()->content }}</p>
@endforeach