@php
    $classes='p-4 bg-white/10 rounded-xl hover:border border-transparent border-blue-900 group transition-color duration-300'
@endphp

<div {{$attributes(['class'=>$classes])}}>
    {{$slot}}
</div>