<!-- For Google Search -->
<meta name="description" content="{{$lesson->seo_description}}" />

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{$lesson->title}}">
<meta itemprop="description" content="{{$lesson->seo_description}}">
<meta itemprop="image" content="{{$lesson->series->image}}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="{{$lesson->series->image}}">
<meta name="twitter:site" content="@Bloggercasts">
<meta name="twitter:title" content="{{$lesson->title}}">
<meta name="twitter:description" content="{{$lesson->seo_description}}">
<meta name="twitter:creator" content="@Bloggercasts">
<meta name="twitter:image:src" content="{{$lesson->series->title}}">

<!-- Open Graph data for Facebook / Pinterest -->
<meta property="fb:app_id" content="{{env('FACEBOOK_APP_ID')}}" />
<meta property="fb:profile_id" content="nikhil09">
<meta property="og:title" content="{{$lesson->title}}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://bloggercasts.com/lessons/{{$lesson->slug}}" />
<meta property="og:image" content="{{$lesson->open_graph_image or $lesson->series->image}}" />
<meta property="og:description" content="{{$lesson->seo_description}}" />
<meta property="og:site_name" content="Bloggercasts" />

{{--@if(stripos( $_SERVER['HTTP_USER_AGENT'], 'Pinterest' ) !== false)--}}
    <meta property="og:author" content="Bloggercasts" />
{{--@else--}}
    {{--<meta property="article:author" content="https://www.facebook.com/nikhil09">--}}
{{--@endif--}}

<meta property="article:published_time" content="{{$lesson->created_at}}" />
<meta property="article:modified_time" content="{{$lesson->updated_at}}" />
<meta property="article:section" content="Article Section" />

<!-- Update your html tag to include the itemscope and itemtype attributes. -->
{{--<html itemscope itemtype="http://schema.org/Article">--}}
