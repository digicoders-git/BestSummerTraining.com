@props([
    'id',
    'label',
    'required' => false,
    'placeholder' => ' ',
    'rows' => 5,
    'value' => null,
])

<div class="form-floating-custom">
    <textarea id="{{ $id }}" 
              name="{{ $id }}"
              placeholder="{{ $placeholder }}" 
              rows="{{ $rows }}"
              {{ $required ? 'required' : '' }}
              {{ $attributes->merge(['class' => 'glass-input']) }}
              style="height: auto; min-height: 120px;">{{ old($id, $value) }}</textarea>
    <label for="{{ $id }}">{{ $label }} @if($required)<span class="text-danger">*</span>@endif</label>
</div>