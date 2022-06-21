@extends('admin.admin_master')

@section('admin_content')

    <main>

        <div class="admin_applications_wrapper">

            <div class="admin_applications">

                <a href="{{ route('new.index') }}">
                    <div class="open_task">
                        <p class="task_link">Открытые заявки</p>
                    </div>
                </a>
                <a href="{{ route('closed.index') }}">
                    <div class="closed_task">
                        <p class="task_link">Закрытые заяки</p>
                    </div>
                </a>

            </div>

        </div>

    </main>

@endsection
