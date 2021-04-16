@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
        </aside>
        <div class="col-sm-8">
            @if (Auth::id() == $user->id)
                {{-- 投稿フォーム --}}
                @include('tasks.form')
            @endif
            {{-- 投稿一覧 --}}
            @include('tasks.tasks')
        </div>
    </div>
@endsection