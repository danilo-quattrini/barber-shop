@props(['type'=> null])

@if($type == 'auth')
<div {{$attributes->merge(['class' => 'flex items-center min-h-screen bg-white'])}}>
    <div class="container mx-auto">
        <div class="max-w-xl mx-auto border rounded-md border-slate-500">
            <div class="p-9">
                {{$slot}}
            </div>
        </div>
    </div>
</div>
@else
<div {{$attributes->merge(['class' => 'max-w-3xl bg-white'])}}>
    <div class="container mx-auto">
        <div class="max-w-3xl mx-auto border rounded-md border-slate-500">
            <div class="p-9">
                {{$slot}}
            </div>
        </div>
    </div>
</div>
@endif
