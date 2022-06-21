@extends('layouts.master')

@section('content')

    <main class="product_page">

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

        @yield('product_content')

    </main>

@endsection

