@extends('admin.show')

@section('change_task_status')

    <div class="close_task_wrapper">
        <form action="{{ route('closed.update', [$client]) }}" method="post">

            @csrf
            @method('PATCH')

            <input type="hidden" name="status" value="open">
            <input type="submit" name="change_task_status" value="Открыть заявку" class="change_task_status">
        </form>
    </div>

@endsection
