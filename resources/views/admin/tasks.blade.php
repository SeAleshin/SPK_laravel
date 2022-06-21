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
</div>
