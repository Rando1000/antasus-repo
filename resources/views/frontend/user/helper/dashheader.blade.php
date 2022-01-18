<div class="Dashboard_hero__2V-rd d-none d-lg-block position-relative">
    <form action="/dashboard" method="post" enctype="multipart/form-data">
        @csrf
    <div class="Background_background__1XqZR" style="background-image: url({{asset('storage/'.Auth::user()->avatarheader)}});">
        
            <div class="Background_uploadBtn__3jU4b rounded fas fa-camera">
            
            <label class="UploadImageButton_customFileUpload__3Xbo2">
                <input type="file" accept="image/*" name="avatarheader" onchange="document.getElementById('upload').click();" />
                <input type="submit" style="display: none;" name="avatarheader" id="upload">
            </label>
            
            <span class="ml-1">Edit</span>
        </div>
    </div>
    <div class="Portfolio_portfolio__3TjHp pl-md-4">
        <div class="d-flex align-items-stretch">
          
            <div class="Portfolio_avatar__gnu3y position-relative">
                <img src="{{asset('storage/'.Auth::user()->dashpic)}}" class=" media-object img-fluid rounded-circle" >
                <div class="Portfolio_uploadBtn__27GK1 position-absolute rounded-circle p-2">
                    <label class="UploadImageButton_customFileUpload__3Xbo2 fas fa-camera">
                      <input type="file" accept="image/*" name="dashpic" onchange="document.getElementById('uploader').click();" />
                      <input type="submit" style="display: none;" name="dashpic" id="uploader">
                    </label>
                  
                </div>
            </div>
          </form>  
   
    <div class="flex-fill d-flex flex-column justify-content-between overflow-hidden">
        <div class="d-flex justify-content-between align-items-center pt-4 pl-3 pr-2">
            <button style="background: white none repeat scroll 0% 0%;" type="button" class="rounded-pill CopyText_border__3Kju0 CopyText_empty__2oj71 btn btn-default btn-sm">
                <span class="mr-2 CopyText_overflow__3ETtH"></span>
                <span class="mr-2">Please connect wallet</span>
            </button>


            
            <div class="ButtonGroup_buttonGroup__lO97p d-flex bg-white shadow-sm py-1" >
                <dl class="dropdown" >
                    <dt class="ShareButton_shareBtn__2nUgA d-block px-4 py-1 dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" >
                        <img src="" alt="share">
                        {{-- <a href="https://facebook.com"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> --}}
                        {{-- <a href="https://youtube.com"><i class="fab fa-youtube" aria-hidden="true"></i></a> --}}
                    </dt>
                    
                    <div class="pt-4 pb-2 shadow-sm border-0 rounded-lg dropdown-menu dropdown-menu-right" x-placement="bottom-end" aria-labelledby="" style="position: fixed; top: 0px; left: 0px; margin: 0px; opacity: 0; pointer-events: none;"></div>
                {{-- <dd show class=" dropdown"> --}}
                    
                      <dd hidden class="pt-4 pb-2 shadow-sm border-0 rounded-lg dropdown-menu show dropdown-menu-right" id="dropdown_share" x-placement="bottom-end" aria-labelledby="" style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-8.56665px, 70px, 0px);"  data-popper-reference-hidden="false" data-popper-escaped="false" data-popper-placement="bottom-end">
                      <h6 class="mb-0 text-center font-weight-bold">Share profile</h6>
                      <div class="ShareButton_actions__3xXct d-flex p-4">
                        <div class="d-flex flex-column text-center">
                          <button aria-label="twitter" class="react-share__ShareButton" style="background-color: transparent; border: medium none; padding: 0px; font: inherit; color: inherit; cursor: pointer;">
                            <svg viewBox="0 0 64 64" width="32" height="32">
                              <circle cx="32" cy="32" r="31" fill="#00aced"></circle>
                              <path d="M48,22.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6 C41.7,19.8,40,19,38.2,19c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3 c0,2.3,1.2,4.3,2.9,5.5c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,2.9,10.1,2.9c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C46,24.5,47.1,23.4,48,22.1z" fill="white"></path>
                            </svg>
                          </button>
                          <span>Twitter</span>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                          <button aria-label="facebook" class="react-share__ShareButton" href="https://facebook.com" style="background-color: transparent; border: medium none; padding: 0px; font: inherit; color: inherit; cursor: pointer;">
                            <svg viewBox="0 0 64 64" width="32" height="32">
                              <circle cx="32" cy="32" r="31" fill="#3b5998"></circle>
                              <path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z" fill="white"></path>
                            </svg>
                          </button>
                          <span>Facebook</span>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                          <button aria-label="email" class="react-share__ShareButton" style="background-color: transparent; border: medium none; padding: 0px; font: inherit; color: inherit; cursor: pointer;">
                            <svg viewBox="0 0 64 64" width="32" height="32">
                              <circle cx="32" cy="32" r="31" fill="#7f7f7f"></circle>
                              <path d="M17,22v20h30V22H17z M41.1,25L32,32.1L22.9,25H41.1z M20,39V26.6l12,9.3l12-9.3V39H20z" fill="white"></path>
                            </svg>
                          </button>
                          <span>Email</span>
                        </div>
                        {{-- <div class="d-flex flex-column align-items-center dp-none">
                          <button class="CopyLinkButton_btn__MHdrF">
                            <img src="/static/media/copy_link_icon.ece1c997.svg" alt="copy" class="img-fluid">
                          </button>
                          <span class="text-nowrap">Copy Link</span>
                        </div> --}}
                      </div>
                    </dd>
                {{-- </dd> --}}
            </dl>
        </div></div>
    
    
        <div class="d-flex justify-content-between align-items-center pl-2">
            <div class="overflow-hidden"><div>
                <strong>{{$logged_in_user->name}}</strong>&nbsp;
            </div>
            <div class="Portfolio_about__2zLZZ">{{$logged_in_user->type}}</div>
            </div>
            <div class="ButtonGroup_buttonGroup__lO97p d-flex bg-white shadow-sm py-1">
                <div class="text-center px-3 px-lg-4 py-1">
                    <div class="text-secondary font-smaller">Items</div>
                    <div class="font-small">6</div>
                </div>
                <div class="text-center px-3 px-lg-4 py-1">
                    <div class="text-secondary font-smaller">Views</div>
                    <div class="font-small">1</div>
                </div>
                <div class="text-center px-3 px-lg-4 py-1">
                    <div class="text-secondary font-smaller">Estimated Total NFT Value</div>
                    <div class="font-small">Ξ2,1997</div>
                </div>
            </div>
    </div>
</div>
    </div>
</div>
</div>

<script>

;(function () {
  var x = document.querySelectorAll('.dropdown [aria-expanded]');
  for(i = 0; i < x.length ; i++) {
    x[i].addEventListener('click', function () {
    var expanded = this.getAttribute('aria-expanded')
    if (expanded === 'false') {
          this.setAttribute('aria-expanded', 'true')
        } else {
          this.setAttribute('aria-expanded', 'false')
        }

        var content = this.parentNode.parentNode.querySelector('dd')
        if (content) {
          content.getAttribute('hidden')
          if (typeof content.getAttribute('hidden') === 'string') {
            content.removeAttribute('hidden')
          } else {
            content.setAttribute('hidden', 'hidden')
          }
        }
      })
  }
})()



</script>
