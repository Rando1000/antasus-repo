
<div class="footer">
         <div class="inner-footer">

            <div class="footer-items">
                <h1>{{appName()}}</h1>
                <p>@lang('IT with the Infinity Power.')</p>
            </div>

            <div class="footer-items">
                <h2>@lang('Company')</h2>
                <div class="border"></div>
                <ulo>
                     <a href="#"><li>@lang('Over us')</li></a>
                     <a href="/team"><li>@lang('Team')</li></a>
                     <a href="#"><li>@lang('App')</li></a>
                </ulo>
            </div>

            <div class="footer-items">
                <h2>@lang('Information')</h2>
                <div class="border"></div>
                <ulo>
                     <a href="#"><li>@lang('Support')</li></a>
                     <a href="/docs"><li>@lang('Documentation')</li></a>
                     <a href="/faq"><li>@lang('Faq')</li></a>
                </ulo>
            </div>
         
            <div class="footer-items">
                <h2>@lang('Legal')</h2>
                <div class="border"></div>
                <ulo>
                     <a href="/terms"><li>@lang('Terms & Conditions')</li></a>
                     <a href="/imprint"><li>@lang('Imprint')</li></a>
                     <a href="/privacy"><li>@lang('Privacy')</li></a>
                </ulo>
                
           <div class="social-media">
                <a href="https://facebook.com"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a href="https://youtube.com"><i class="fab fa-youtube" aria-hidden="true"></i></a>
           </div>
           
           <div class="language">
               <li class="dropdown">
                        <a  href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           @php $locale = session()->get('locale'); @endphp
                            @switch($locale)
                                @case('en')
                                <img class="flag" src="{{asset('img/us.png')}}" alt="@lang('English')"> @lang('English')
                                @break
                                @case('de')
                                <img class="flag" src="{{asset('img/de.png')}}" alt="@lang('German')"> @lang('German')
                                @break
                                @default
                                <img class="flag" src="{{asset('img/us.png')}}" alt="@lang('English')"> @lang('English')
                                @endswitch
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="lang/en"><img class="flag" src="{{asset('img/us.png')}}" alt="@lang('English')"> @lang('English')</a>
                             <a class="dropdown-item" href="lang/de"><img class="flag" src="{{asset('img/de.png')}}" alt="@lang('German')"> @lang('German')</a>
                            </div>
                       </li>
                    </div>
            </div>
         </div>
     </div>
            
    
