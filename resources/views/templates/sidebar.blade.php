<div class="row justify-content-center">
    <div class="col-md-10 mt-5">
        <div class="card">
            <div class="card-header">Judge/Scorer</div>

            <div class="card-body">
                <form method="POST" action="/judgeLogin">
                    @csrf

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="passcode" type="text" class="form-control{{ $errors->has('passcode') ? ' is-invalid' : '' }}" name="passcode"
                                placeholder="Passcode" required autofocus>
                            @if ($errors->has('passcode'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('passcode') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn pl-5 pr-5">
                                Enter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-10 mt-3">
        <div class="card">
            <div class="card-header">Chief Tabulator</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                placeholder="Username" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn pl-5 pr-5">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>