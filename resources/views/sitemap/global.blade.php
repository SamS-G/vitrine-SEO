{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset {!! 'xmlns="http://www.sitemaps.org/schemas/sitemap/0.9' !!}>
    @foreach($routes as $route)
        <url>
            <loc>{{ $route['loc'] }}</loc>
            <lastmod>{{ now()->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>{{ $route['priority'] }}</priority>
        </url>
    @endforeach
</urlset>
