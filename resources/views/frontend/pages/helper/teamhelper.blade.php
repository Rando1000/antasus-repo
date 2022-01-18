    <div id="refreshteam">
       <div class="container">
                    <div class="row text-center">
                     @foreach ($team as $team)
                    <div class="col-xl-4 col-sm-6 mb-4">
                            <div class="bg-white rounded shadow-sm py-5 px-5"><img src="//www.gravatar.com/avatar/{{ md5($team->email) }}" alt="{{ $team->name }}" width="100px" height="100px" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                            <br>

                            <div class="ribbon-wrapper">
                            @if($team->display_role =='Lead-Developer')
                            <div class="ribbon">DEV TEAM</div>
                            @endif
                            @if($team->display_role =='Developer')
                            <div class="ribbon">DEV TEAM</div>
                            @endif
                            </div>


                            <h5 class="mb-1">{!! $team->name !!}</h5>
                            <span class="medium text-uppercase text">{!! $team->age !!} @lang('Years')</span><br><br>
                            <h5><span class="badge badge-pill badge-dark p-3">{!! trans($team->display_role) !!}</span></h5>
                            </div>
                        </div>
                        @endforeach
                </div>
