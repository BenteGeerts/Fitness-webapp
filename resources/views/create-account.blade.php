@extends('layouts.app')
@section('content')
    <section class="signup">

        <div class="row align-items-center">
            <div class="col-md-12 col-lg-6">
                <div class="hero hero--hidden">
                    <img class="hero__img" src="/images/hero.png" alt="women wearing gym clothes">
                </div>
            </div>

           <div class="col-md-12 col-lg-4 mx-auto">
               <div class="signup__heading">
                   <h1 class="signup__heading-title">Welcome</h1>
                   <p class="signup__heading-subtitle">Create your account</p>
               </div>

               <form class="signup__form" action="post">
                   <div class="signup__form-names">
                       <div class="signup__form-field signup__form-field--small">
                           <label class="signup__form-label" for="firstname">First name</label>
                           <input class="input-field" name="firstname" type="text">
                       </div>

                       <div class="signup__form-field signup__form-field--small">
                           <label class="signup__form-label" for="lastname">Last name</label>
                           <input class="input-field" name="lastname" type="text">
                       </div>
                   </div>

                   <div class="signup__form-field">
                       <label class="signup__form-label" for="email">Email</label>
                       <input class="input-field" name="email" type="email">
                   </div>

                   <div class="signup__form-field">
                       <label class="signup__form-label" for="password">Password</label>
                       <div class="signup__form-password">
                           <input class="input-field" name="password" type="password">
                           <i class="icon-visibility signup__form-icon"></i>
                       </div>
                   </div>

                   <div class="signup__form-field">
                       <label class="signup__form-label" for="confirm">Confirm password</label>
                       <div class="signup__form-password">
                           <input class="input-field" name="confirm" type="password">
                           <i class="icon-visibility signup__form-icon"></i>
                       </div>
                   </div>
               </form>
               <a class="button button--big" href="">Create your account</a>

               <div class="divider__line-wrapper divider__line-wrapper--signup">
                   <hr class="divider__line">
                   <p class="divider__line-text">Or</p>
                   <hr class="divider__line">
               </div>

               <a class="button button--icon button--big button--secondary signup__button" href="">
                   <img class="button__img" src="/images/googleIcon.png" alt="google icon">
                   Sign Up with Google
               </a>
               <a class="button button--icon button--big button--secondary signup__button" href="">
                   <img class="button__img" src="/images/facebookIcon.png" alt="facebook icon">
                   Sign Up with Facebook
               </a>
               <div class="signup__buttons">
                   <a class="button button--secondary button--icon signup__button--hidden" href="{{Route("googleLogin")}}">
                       <img class="button__img" src="/images/googleIcon.png" alt="">
                       Google
                   </a>
                   <a class="button button--secondary button--icon signup__button--hidden" href="{{Route("facebookLogin")}}">
                       <img class="button__img" src="/images/facebookIcon.png" alt="">
                       Facebook
                   </a>
               </div>
           </div>
        </div>
    </section>
@endsection
