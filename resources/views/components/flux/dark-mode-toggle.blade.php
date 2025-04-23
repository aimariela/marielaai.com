{{-- Botón Flux con icono que viene en la librería --}}
<flux:button
    x-data
    x-on:click="$flux.dark = ! $flux.dark"
    icon="moon"
    variant="subtle"
    aria-label="Cambiar a modo oscuro / claro"
/>
