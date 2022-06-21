@extends('admin.show')

@section('change_task_status')

<div class="close_task_wrapper">
    <form action="{{ route('new.update', [$client]) }}" method="post">

        @csrf
        @method('PATCH')

        <input type="hidden" name="status" value="closed">
        <input type="submit" name="change_task_status" value="Закрыть заявку" class="change_task_status" id="change_task_status">
    </form>
</div>

@endsection
