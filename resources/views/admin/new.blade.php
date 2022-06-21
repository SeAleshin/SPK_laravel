@extends('admin.admin_master')

@section('admin_content')

    <main>

        <div class="tasks">

            <h2>Открытые заявки</h2>

            <div class="search_form">
                <form action="{{ route('search') }}" method="post">

                    @csrf

                    <input class="search" type="search" name="search" placeholder="Введите номер заявки, email или телефон">
                    <input class="search_button" type="submit" name="search_submit" value="Поиск">
                    <p class="drop"><a href="{{ route('new.index') }}">Сбросить</a></p>
                </form>
            </div>

            <div class="new_task_wrapper">

                <div class="new_task with_out_border">
                    <div class="task tasks_id">
                        Номер обращения:
                    </div>
                    <div class="task tasks_name">
                        ФИО:
                    </div>
                    <div class="task tasks_tel">
                        Номер телефона:
                    </div>
                    <div class="task tasks_email">
                        Email:
                    </div>
                    <div class="task status">
                        Статус:
                    </div>
                </div>

                @foreach($clients as $client)
                    <div class="new_task new_task_hover">
                        <a href="{{ route('new.show', [$client]) }}">
                            <div class="task tasks_id">
                                {{ $client->id }}
                            </div>
                        </a>
                        |
                        <div class="task tasks_name">
                            {{ $client->name }}
                        </div>
                        |
                        <div class="task tasks_tel">
                            {{ $client->tel }}
                        </div>
                        |
                        <div class="task tasks_email">
                            {{ $client->email }}
                        </div>
                        |
                        <div class="task tasks_status">
                            {{ $client->status }}
                        </div>
                    </div>
                @endforeach

                @if(count($clients) == 0)
                    <p class="no_tasks">Нет заявок.</p>
                @endif

                {{ $clients->links() }}
            </div>

        </div>

    </main>

@endsection
