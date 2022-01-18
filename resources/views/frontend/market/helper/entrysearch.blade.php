

<div class="banner-base">

    {{-- <div class="site-base--left-banner">
        <div class="site-base--left-banner--full">
                    <div id="banner-skyscraper-left" class="">
                        <div data-liberty-position-name="srpb-sky-atf-left" class="l-container" id="liberty-srpb-sky-atf-left"></div>
        </div>
                </div>
            </div> --}}
    
    <div class="site-base--content">
        <div class="searchbar-shortcode">

            <div class="columnsearch">
                <form id="search-bar" method="get" class="search-form" action="{{ url('/markets/search/') }}" role="search">

                <div class="rowsearch">

                    <div class="search-keywords-wrap medium-4 columns">
                        <input name="s" type="search" id="search_keywords" class="search_keywords ui-autocomplete-input" value="" placeholder="What are you looking for?" autocomplete="off">
                    </div>

    
                        <div class="search-location-wrap medium-3 columns">
                            <input type="text" value="" name="location" id="search_location" class="search_location app-address-field pac-target-input" placeholder="Location" autocomplete="off">
                        </div><!-- .search-location-wrap -->

                        
                        <div class="search-category-wrap medium-3 columns">
                            <select name="scat" id="scat" class="searchbar" tabindex="2">
                                <option value="0" selected="selected">All Categories</option>
                                <option class="level-0" value="32">Auto, Rad &amp; Boot</option>
                                <option class="level-1" value="33">&nbsp;&nbsp;&nbsp;Auto</option>
                                <option class="level-1" value="34">&nbsp;&nbsp;&nbsp;Autoteile &amp; Reifen</option>
                                <option class="level-1" value="35">&nbsp;&nbsp;&nbsp;Boote &amp; Bootszubehör</option>
                                <option class="level-1" value="41">&nbsp;&nbsp;&nbsp;Dienstleistungen</option>
                                <option class="level-1" value="36">&nbsp;&nbsp;&nbsp;Fahrräder &amp; Zubehör</option>
                                <option class="level-1" value="37">&nbsp;&nbsp;&nbsp;Motorräder &amp; Quads</option>
                                <option class="level-1" value="38">&nbsp;&nbsp;&nbsp;Motorradteile &amp; Zubehör</option>
                                <option class="level-1" value="39">&nbsp;&nbsp;&nbsp;Nutzfahrzeuge &amp; Anhänger</option>
                                <option class="level-1" value="40">&nbsp;&nbsp;&nbsp;Reparaturen</option>
                                <option class="level-1" value="43">&nbsp;&nbsp;&nbsp;Weiteres Auto, Rad &amp; Boot</option>
                                <option class="level-1" value="42">&nbsp;&nbsp;&nbsp;Wohnwagen &amp; -mobile</option>
                                <option class="level-0" value="81">Baby- &amp; Kinderschuhe</option>
                                <option class="level-0" value="44">Dienstleistungen</option>
                                <option class="level-1" value="45">&nbsp;&nbsp;&nbsp;Altenpflege</option>
                                <option class="level-1" value="46">&nbsp;&nbsp;&nbsp;Auto, Rad &amp; Boot</option>
                                <option class="level-1" value="47">&nbsp;&nbsp;&nbsp;Babysitter &amp; Kinderbetreuung</option>
                                <option class="level-1" value="48">&nbsp;&nbsp;&nbsp;Elektronik</option>
                                <option class="level-1" value="49">&nbsp;&nbsp;&nbsp;Haus &amp; Garten</option>
                                <option class="level-1" value="50">&nbsp;&nbsp;&nbsp;Künstler &amp; Musiker</option>
                                <option class="level-1" value="51">&nbsp;&nbsp;&nbsp;Reise &amp; Event</option>
                                <option class="level-1" value="52">&nbsp;&nbsp;&nbsp;Tierbetreuung &amp; Training</option>
                                <option class="level-1" value="53">&nbsp;&nbsp;&nbsp;Umzug &amp; Transport</option>
                                <option class="level-1" value="54">&nbsp;&nbsp;&nbsp;Weitere Dienstleistungen</option>
                                <option class="level-0" value="64">Electronics</option>
                                <option class="level-1" value="65">&nbsp;&nbsp;&nbsp;Audio/HIFI</option>
                                <option class="level-1" value="66">&nbsp;&nbsp;&nbsp;Dienstleistungen Elektronik</option>
                                <option class="level-1" value="67">&nbsp;&nbsp;&nbsp;Foto</option>
                                <option class="level-1" value="68">&nbsp;&nbsp;&nbsp;Handy &amp; Telefon</option>
                                <option class="level-1" value="69">&nbsp;&nbsp;&nbsp;Haushaltsgeräte</option>
                                <option class="level-1" value="70">&nbsp;&nbsp;&nbsp;Konsolen</option>
                                <option class="level-1" value="71">&nbsp;&nbsp;&nbsp;Notebooks</option>
                                <option class="level-1" value="73">&nbsp;&nbsp;&nbsp;PC-Zubehör &amp; Software</option>
                                <option class="level-1" value="72">&nbsp;&nbsp;&nbsp;PCs</option>
                                <option class="level-1" value="74">&nbsp;&nbsp;&nbsp;Tablets &amp; Reader</option>
                                <option class="level-1" value="75">&nbsp;&nbsp;&nbsp;TV &amp; Video</option>
                                <option class="level-1" value="76">&nbsp;&nbsp;&nbsp;Videospiele</option>
                                <option class="level-1" value="77">&nbsp;&nbsp;&nbsp;Weitere Elektronik</option>
                                <option class="level-0" value="78">Family, Kids &amp; Baby</option>
                                <option class="level-1" value="79">&nbsp;&nbsp;&nbsp;Altenpflege</option>
                                <option class="level-1" value="80">&nbsp;&nbsp;&nbsp;Baby- &amp; Kinderkleidung</option>
                                <option class="level-1" value="82">&nbsp;&nbsp;&nbsp;Baby-Ausstattung</option>
                                <option class="level-1" value="83">&nbsp;&nbsp;&nbsp;Babyschalen &amp; Kindersitze</option>
                                <option class="level-1" value="84">&nbsp;&nbsp;&nbsp;Babysitter &amp; Kinderbetreuung</option>
                                <option class="level-1" value="85">&nbsp;&nbsp;&nbsp;Kinderwagen &amp; Buggys</option>
                                <option class="level-1" value="86">&nbsp;&nbsp;&nbsp;Kinderzimmermöbel</option>
                                <option class="level-1" value="87">&nbsp;&nbsp;&nbsp;Spielzeug</option>
                                <option class="level-1" value="88">&nbsp;&nbsp;&nbsp;Weiteres Familie, Kind &amp; Baby</option>
                                <option class="level-0" value="25">Misc</option>
                                <option class="level-0" value="55">Ticketschalter</option>
                                <option class="level-1" value="56">&nbsp;&nbsp;&nbsp;Bahn &amp; ÖPNV</option>
                                <option class="level-1" value="57">&nbsp;&nbsp;&nbsp;Comedy &amp; Kabarett</option>
                                <option class="level-1" value="58">&nbsp;&nbsp;&nbsp;Gutscheine</option>
                                <option class="level-1" value="59">&nbsp;&nbsp;&nbsp;Kinder</option>
                                <option class="level-1" value="60">&nbsp;&nbsp;&nbsp;Konzerte</option>
                                <option class="level-1" value="61">&nbsp;&nbsp;&nbsp;Sport</option>
                                <option class="level-1" value="62">&nbsp;&nbsp;&nbsp;Theater &amp; Musical</option>
                                <option class="level-1" value="63">&nbsp;&nbsp;&nbsp;Weitere Eintrittskarten &amp; Tickets</option>
                            </select>
                        </div>

                        <div class="search-button-wrap medium-2 columns">
                            <button type="submit" class="expanded">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                Search			</button>
                        </div>
                        
                        <input type="hidden" name="lat" value="0">
                        <input type="hidden" name="lng" value="0">
                        <input type="hidden" name="radius" value="50">
                        <input type="hidden" name="st" value="ad_listing">

                    </div> <!-- .row -->
                </div>

</form>
        </div>

    </div>
                    
               
    
    

    {{-- <div class="site-base--right-banner">
        <div class="site-base--right-banner--full">
            <div id="banner-skyscraper" class=""></div>
        </div>
    </div> --}}
</div>