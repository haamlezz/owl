@extends('layouts.modal')

@section('title', 'Update crud_model_strings')
@section('content')
    <form method="POST" action="{{ route('crud_model_variables.update', $crud_model_variable->id) }}" novalidate>
        {{ csrf_field() }}

        <div class="modal-body">
            <!-- crud_input_update -->
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
    </form>
@endsection