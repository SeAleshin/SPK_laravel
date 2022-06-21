@extends('layouts.master')

@section('content')

<main>

    <div class="product">

        <h1>Продукция</h1>

        <div class="products">
            <a href="{{ route('product.pp') }}">
                <div class="product-1"><p>Полипропилен вторичный (ПП)</p></div>
            </a>
            <a href="{{ route('product.pnd') }}">
                <div class="product-2"><p>Полиэтилен низкого давления (ПНД)</p></div>
            </a>
            <a href="{{ route('product.pvd') }}">
                <div class="product-3"><p>Полиэтилен высокого давления (ПВД)</p></div>
            </a>
            <div class="product-block"></div>
        </div>

    </div>

    <div class="product_offer">

        <h1>Почему выбирают именно нас?</h1>

        <div class="cause-1">
            <img src="/img/time.png" alt="Время">
            <p>15 лет на рынке</p>
        </div>
        <div class="cause-2">
            <img src="/img/production.png" alt="Продукция">
            <p>Собственное производство</p>
        </div>
        <div class="clearfix"></div>
        <div class="cause-3">
            <img src="/img/quality.png" alt="Качество">
            <p>Всегда отвечаем за качество нашей продукции</p>
        </div>

    </div>

    <div class="contact">
        <h1>Мы свяжемся с вами:</h1>
        <a name="contact"></a>

        <form action="{{ route('main') }}" method="post">
            @include('layouts.form')
        </form>
    </div>

    @include('layouts.map')

</main>

@endsection
