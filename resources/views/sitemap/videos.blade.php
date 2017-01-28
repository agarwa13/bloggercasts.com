<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
    @foreach($lessons as $lesson)
        <url>
            <loc>https://bloggercasts.com/lessons/{{$lesson->slug}}</loc>
            <video:video>
                <video:thumbnail_loc>{{$lesson->series->image}}</video:thumbnail_loc>
                <video:title>{{$lesson->series->title}} - {{$lesson->title}}</video:title>
                <video:description>{{$lesson->seo_description}}</video:description>
                <video:content_loc>{{$lesson->video}}</video:content_loc>
                <video:duration>{{$lesson->seconds}}</video:duration>
                <video:publication_date>{{$lesson->created_at->tz('UTC')->toAtomString()}}</video:publication_date>
                <video:family_friendly>yes</video:family_friendly>
                <video:gallery_loc title="{{$lesson->series->title}}">https://bloggercasts.com/series/{{$lesson->series->slug}}</video:gallery_loc>
                <video:requires_subscription>@if($lesson->free) no @else yes @endif</video:requires_subscription>
                <video:uploader>Nikhil Agarwal</video:uploader>
                <video:live>no</video:live>
            </video:video>
        </url>
    @endforeach
</urlset>