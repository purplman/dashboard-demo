@extends('demo::layouts.auth')

@section('content')
<form class="auth__form" action="">
    <h1 class="auth__title">Register</h1>

    <div class="form__box form__box--icon mt-5">
      <ion-icon class="form__icon" name="person-outline"></ion-icon>
      <input type="text" placeholder="Name" class="form__el" />
    </div>

    <div class="form__box form__box--icon">
      <ion-icon class="form__icon" name="mail-outline"></ion-icon>
      <input type="email" placeholder="Email" class="form__el" />
    </div>

    <div class="form__box form__box--icon">
      <ion-icon
        class="form__icon"
        name="lock-closed-outline"
      ></ion-icon>
      <input type="password" placeholder="Password" class="form__el" />
    </div>

    <button type="submit" class="btn btn--p">Register</button>
</form>
@endsection