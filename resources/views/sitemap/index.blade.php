<?xml version="1.0" encoding="UTF-8"?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <sitemap>
        <loc>https://bloggercasts.com/sitemap/general</loc>
        <lastmod>{{ $series->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>

    <sitemap>
        <loc>https://bloggercasts.com/sitemap/series</loc>
        <lastmod>{{ $series->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>

    <sitemap>
        <loc>https://bloggercasts.com/sitemap/lessons</loc>
        <lastmod>{{ $lesson->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>

    <sitemap>
        <loc>https://bloggercasts.com/sitemap/amp</loc>
        <lastmod>{{ $lesson->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>

    <sitemap>
        <loc>https://bloggercasts.com/sitemap/videos</loc>
        <lastmod>{{ $lesson->updated_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>

</sitemapindex>