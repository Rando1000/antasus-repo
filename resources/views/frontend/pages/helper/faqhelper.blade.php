

@foreach ($hilfe as $hilfe)
                    <div= class="accordion">
                        <div class="accordion-item">
                         <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">@lang('Question'):  {!! trans($hilfe->frage) !!}</span><span class="icon" aria-hidden="true"></span></button>
                         <div class="accordion-content">
                     <p>@lang('Answer'): {!! trans($hilfe->antwort) !!}</p>
                </div>
            </div>
            @endforeach
    </div>

