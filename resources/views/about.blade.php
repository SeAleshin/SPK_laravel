@extends('layouts.master')

@section('content')

    <main class="about">
        <div class="block_1">
            <p>ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ</p>
            <p>«СПЕЦПОЛИМЕРКОМПОЗИТ»</p>
        </div>

        <div class="block_2">
            <p>ИНН: 5263146256</p>
            <p>КПП: 526301001</p>
            <p>ОГРН: 1215200001455</p>
            <p>ОКПО: 99297637</p>
        </div>

        <div class="contact_about">
            <h4>Контакты</h4>
            <p>Номер: +7(986) 761-74-50</p>
            <p>Email: Polimer.spk@mail.ru</p>
        </div>

        <div class="address_about">
            <p>Юр. адрес: г. Нижний Новгород, ул. Коновалова, д. 17, пом. 4 </p>
        </div>

        @include('layouts.map')
    </main>

@endsection
