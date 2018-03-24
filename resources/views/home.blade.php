@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <form action="/test" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="passcode">Enter your passcode</label>
                            <input type="text" class="form-control" name="passcode" id="passcode">
                        </div>
                        <button type="submit" class="btn btn-primary">Enter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
