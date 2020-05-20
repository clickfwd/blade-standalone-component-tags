<x-inputs.group>
    <x-inputs.text id="name" label="Name" :value="$name" />
</x-inputs.group>

@component('components.hello',['foo'=>'bar'])
    {{ $name }}
@endcomponent
