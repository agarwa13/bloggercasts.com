<script type="application/ld+json">
{
  "@context":"http://schema.org",
  "@type":"ItemList",
  "itemListElement":[
  @foreach($series->lessons as $lesson)
    {
      "@type":"ListItem",
      "position":{{$lesson->position}},
      "url":"https://bloggercasts.com/lessons/{{$lesson->slug}}"
    }@if(!$loop->last),@endif
    @endforeach
  ]
}
</script>