@props([
    'title' => config('app.name'),
    'description' => 'RG Plumbing & Home Improvements - Professional plumbing and construction services in Johannesburg. Available 24/7 for emergency services.',
    'canonical' => null,
    'ogImage' => asset('images/brand/placeholder-logo.svg'),
    'ogType' => 'website',
    'schema' => null,
])

<!-- Primary Meta Tags -->
<title>{{ $title }}</title>
<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="author" content="RG Plumbing & Home Improvements">

<!-- Canonical URL -->
@if($canonical)
<link rel="canonical" href="{{ $canonical }}" />
@else
<link rel="canonical" href="{{ url()->current() }}" />
@endif

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $ogType }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:site_name" content="{{ config('app.name') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="{{ $title }}">
<meta property="twitter:description" content="{{ $description }}">
<meta property="twitter:image" content="{{ $ogImage }}">

<!-- Schema.org markup for Google -->
@if($schema)
<script type="application/ld+json">
{!! $schema !!}
</script>
@endif 