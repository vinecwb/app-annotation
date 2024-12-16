<a href="{{ isset($linkto) ? route($linkto) : '#' }}">
    <button class="{{ $class ?? '' }}">
        {{ $slot ?? 'Default Text' }}
    </button>
</a>