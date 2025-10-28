@props(['active' => false])

<a class="{{$active ? "text-orange-500" : "text-slate-900"}} hover:text-orange-500 transition duration-500"
   aria-current="{{$active ? "page": "false"}}"
   {{$attributes}}
>
    {{$slot}}
</a>
