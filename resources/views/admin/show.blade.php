@extends('admin.admin_master')

@section('admin_content')

    <main>

        <div class="current_task">

            <h1>Заявка № {{ $client->id }}</h1>

            <div class="client_data_wrapper">
                <div class="client_data">
                    <p><span class="client_title">Имя:</span> {{ $client->name }}</p>
                    <p class="task_status"><span class="client_title">Статус:</span> {{ $client->status }}</p>
                    <p><span class="client_title">Номер:</span> {{ $client->tel }} </p>
                    <p><span class="client_title">Почта:</span> {{ $client->email }}</p>

                    @if($client->body != null)
                    <div class="clients_body_wrapper">
                        <h3>Текст запроса:</h3>
                            <p class="clients_body">{{ $client->body }}</p>
                    </div>
                    @endif

                    <p class="clients_time"><span class="client_title">Время создания:</span> {{ $client->created_at }}</p>
                </div>
            </div>

            @yield('change_task_status')

            <div class="comments_block">

                <h2>Комментарии</h2>

                <div class="create_comment">
                    <form action="{{ route('comment', [$client]) }}" class="comment_form" method="post">

                        @csrf

                        <textarea name="comment" class="comments_text"></textarea> <br>
                        <input type="submit" name="create_comment_button" class="create_comment_button" value="Отправить">
                    </form>
                </div>

                <div class="comments">

                    <h3>Комментарии:</h3>
                    @foreach($client->comments as $comment)
                        <div class="comment">
                            <span class="client_title">{{ $comment->user->name }} ({{ $comment->user->email }}):</span>
                                {{ $comment->comment }}
                            <div class="comment_time">
                                {{ $comment->created_at }}
                            </div>
                        </div>
                    @endforeach
                </div>

                @if(count($client->comments) == 0)
                    <p class="no_tasks">Нет комментариев к заявке.</p>
                @endif

            </div>

        </div>

    </main>

@endsection
