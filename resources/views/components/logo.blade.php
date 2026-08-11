@php
    $height = $height ?? '110px';
    $class = $class ?? '';
@endphp
<div class="d-flex align-items-center justify-content-center">
    <img src="{{ asset('images/Logo.jpg') }}" 
         alt="{{ config('app.name', 'Rectificadora Artigas') }}" 
         class="rounded {{ $class }}" 
         style="height: {{ $height }}; max-height: {{ $height }}; width: auto; object-fit: contain;">
</div>

