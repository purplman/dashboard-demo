@extends('demo::layouts.auth')

@section('content')
<form class="auth__form" method="post" action="{{ route('login.attempt') }}">
    @csrf
    <h1 class="auth__title">Login</h1>
    <p class="auth__text">Please sign in to continue</p>

    <div class="form__box form__box--icon mt-5">
      <ion-icon class="form__icon" name="mail-outline"></ion-icon>
      <input type="email" name="email" placeholder="Email" class="form__el" />
    </div>

    <div class="form__box form__box--icon">
      <ion-icon class="form__icon" name="lock-closed-outline"></ion-icon>
      <input type="password" name="password" placeholder="Password" class="form__el" />
    </div>

    <button type="submit" class="btn btn--p">Sign in</button>
</form>
@endsection