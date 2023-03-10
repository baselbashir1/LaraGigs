@if ($listing)
    <h2>{{ $listing['title'] }}</h2>
    <p>{{ $listing['descrition'] }}</p>
@else
    <h2>No listing</h2>
@endif
