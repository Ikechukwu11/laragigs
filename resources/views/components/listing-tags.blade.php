@props(['listingTags'])
@php
$tags=explode(',',$listingTags);
@endphp
<div  {{$attributes->merge(['class'=>'d-flex flex-wrap'])}}>
    @foreach($tags as $tag)
         <small
             class="bg-dark rounded-4 py-1 px-2 my-2 text-white cursor-pointer me-2"
             onclick="window.location.href='/?tag={{$tag}}'" style="font-size: 12px" >
             {{$tag}}
         </small>
    @endforeach
</div>
