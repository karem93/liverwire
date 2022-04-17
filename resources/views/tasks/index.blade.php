@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <livewire:app-add-task/>

        <livewire:app-tasks/>
    </div>
</div>
@endsection
