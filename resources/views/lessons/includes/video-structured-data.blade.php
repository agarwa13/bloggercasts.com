<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "VideoObject",
"name": "{{$lesson->title}}",
"description": "{{$lesson->seo_description}}",
"thumbnailUrl": "{{$lesson->series->image}}",
"uploadDate": "{{$lesson->updated_at}}",
"duration": "PT{{floor($lesson->seconds/60)}}M{{$lesson->seconds%60}}S",
"contentUrl": "{{$lesson->video}}"
}
</script>