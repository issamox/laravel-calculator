@props(['value'])

<button
    type="submit"
    name="input"
    value="{{ $value }}"
    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 rounded text-lg {{ $value === 'C' ? 'col-span-4' : '' }}"
>
    {{ $value }}
</button>
