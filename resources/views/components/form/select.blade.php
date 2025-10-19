@props([
    'name',
    'id' => null,
    'label' => null,
    'options' => [],
    'selected' => null,
])

<select
    name="{{ $name }}"
    id="{{ $id ?? $name }}"
    {{ $attributes->merge(['class' => 'w-full px-3 py-2 placeholder-slate-300 border border-slate-500 rounded-md focus:outline-none focus:ring focus:ring-orange-100 focus:border-orange-300']) }}
>
    @foreach ($options as $value => $label)
        <option value="{{ $value }}" @selected(old($name, $selected) == $value)>
            {{ $label }}
        </option>
    @endforeach
</select>
