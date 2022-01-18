<div class="js-cookie-consent cookie-consent" style="display: block;">

  <h4>Cookies &amp; Privacy</h4>

    <span class="cookie-consent__message">
        {!! trans('cookieConsent::texts.message') !!}
    </span>
    <br>
    <span class="js-cookie-consent-more"><a class="js-cookie-consent-more" data-toggle="modal" data-target="#myModal" href="">{{ trans('More information') }}</a>
    <button class="js-cookie-consent-agree cookie-consent__agree" type="button">{{ trans('cookieConsent::texts.agree') }}</button>
    </span>



    @include('cookieConsent::modal')

</div>
