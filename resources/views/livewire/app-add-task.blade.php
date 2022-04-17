<div class="col-md-4 p-4">
    <h3 class="text-center">Add New Task</h3>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @error('title')
    <div class=" form-control error alert alert-danger">
        {{ $message }}
    </div>
    @enderror
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" wire:model="title" class="form-control">
    </div>

    <div class="form-group">
        <button wire:click.prevent="addNewTask" class="btn btn-primary btn-block">Add</button>
    </div>

</div>
