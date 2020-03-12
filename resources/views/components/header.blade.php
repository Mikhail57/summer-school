<header {{ $attributes->merge(['class'=> 'header']) }}>
    <div class="header__content">
        <a class="header__title" href="{{ route('home') }}">Летняя школа {{ date('yy') }}</a>
    </div>
</header>
