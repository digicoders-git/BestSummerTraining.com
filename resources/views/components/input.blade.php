@props([
    'type' => 'text',
    'id',
    'label',
    'required' => false,
    'placeholder' => ' ',
    'value' => null,
])

<div class="form-floating-custom">
    <input type="{{ $type }}" 
           id="{{ $id }}" 
           name="{{ $id }}"
           placeholder="{{ $placeholder }}" 
           value="{{ old($id, $value) }}"
           {{ $required ? 'required' : '' }}
           {{ $attributes->merge(['class' => 'glass-input']) }}>
    <label for="{{ $id }}">{{ $label }} @if($required)<span class="text-danger">*</span>@endif</label>
</div>