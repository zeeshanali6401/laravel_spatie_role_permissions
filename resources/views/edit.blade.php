@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{ route('role.update', $id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <h4>Change Permissions of {{$user->name}}</h4>
            </div>
            <div class="form-group form-check">
                @foreach ($allPermissions as $allPermission)
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $allPermission->name }}" @if (in_array($allPermission->name, $userPermissions)) checked @endif>
                            {{ $allPermission->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection