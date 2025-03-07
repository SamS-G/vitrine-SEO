{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach($routes as $route)
        <sitemap>
            <loc>{{ $route['loc'] }}</loc>
            <lastmod>{{ now()->toAtomString() }}</lastmod>
        </sitemap>
    @endforeach
</sitemapindex>
