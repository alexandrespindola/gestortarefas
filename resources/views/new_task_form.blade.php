@extends('templates/main_layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Nova tarefa</h4>
                <hr>
                <form action="{{ route('new_task_submit') }}" method="post">
                    @csrf
                    {{-- task name --}}
                    <div class="mb-3">
                        <label for="text_task_name" class="form-label">Nome da tarefa</label>
                        <input type="text" class="form-control" id="text_task_name" name="text_task_name"
                            placeholder="Nome da tarefa" required value="{{ old('text_task_name') }}">
                        @error('text_task_name')
                            <div class="text-warning">
                                {{ $errors->first('text_task_name') }}
                            </div>
                        @enderror
                    </div>
                    {{-- task description --}}
                    <div class="mb-3">
                        <label for="text_task_description" class="form-label">Descrição da tarefa</label>
                        <textarea class="form-control" id="text_task_description" name="text_task_description" placeholder="Descrição da tarefa"
                            rows="5" required>{{ old('text_task_description') }}</textarea>
                        @error('text_task_description')
                            <div class="text-warning">
                                {{ $errors->first('text_task_description') }}
                            </div>
                        @enderror
                    </div>

                    {{-- cancel or sunmit --}}
                    <div class="mb-3 text-center">
                        <a href="{{ route('index') }}" class="btn btn-dark px-5 m-1"><i class="bi bi-x-circle me-2"></i></a>
                        <button type="submit" class="btn btn-secondary px-5 m-1"><i class="bi bi-floppy me-2"></i></button>
                    </div>
                </form>

                @if (session()->has('task_error'))
                    <div class="alert alert-danger text-center p-1">
                        {{ session()->get('task_error') }}
                    </div>
                @endif


            </div>
        </div>
    </div>
@endsection
