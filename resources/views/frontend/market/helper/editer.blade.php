<div class="site-base">

    <div class="site-base--left-banner">
        <div class="site-base--left-banner--full">
                    <div id="banner-skyscraper-left" class="">
                        <div data-liberty-position-name="srpb-sky-atf-left" class="l-container" id="liberty-srpb-sky-atf-left"></div>
        </div>
                </div>
            </div>
    
    <div class="site-base--content">
                        <section>
                            <div class="conty">
                                <div class="conta">
                            <form action="/market/categories/{{$product->category_id}}/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="colla-ad">
                                <br>
                                
                                <input name="created_at" type="hidden" value="{{ now()->toDateTimeString() }}">
                        <div class="cat-box">
                            <div class="adtitle"  id="category_name" name="category_name" value="{{ $product->category_name }}">
                                <h3e>Anzeige ändern: Produktnummer {{ $product->id }}</h3e></div>
                                {{-- <button id="pstad-ctg" class="btn-ctg"> --}}
                                <a  class="button-ctg" id="pstad-ctg" style="width:200px;" href="">
                                    <span></span>
                                </a>
                                {{-- </button> --}}
                            </div>
                                <br>
                                
                        
                                <script>
                                    function checking() {
                                        adType1= .getElementsById(adType1);
                        
                                        if (adType1) {
                                            checked=checked;
                                            alert('Das hat ja anscheinend geklappt');
                                        }
                                    }
                                </script>
                                <div class="l-row">
                                    <div class="a-span-17 and-pushed l-col">
                                        <div class="formgroup">
                                            <label class="formgroup-label-mandatory" for="postad-title">
                                                Titel ändern</label>
                                            <div class="formgroup-input">
                                                 <input id="title" name="title" class="formcontrol" type="text" value="{{ $product->title }}" maxlength="65"></div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="l-row">
                                    <div class="a-span-17 and-pushed l-col">
                                        <div class="formgroup">
                                            <label class="formgroup-label-mandatory" for="pstad-descrptn">Beschreibung</label>
                                            <div class="formgroup-input">
                                                <textarea id="description" name="description" class="j-hidden-sbmt" rows="5" cols="30" value="{{ $product->description }}"></textarea><small id="pstad-dscrptn-lngth">
                                                    Noch <var>4000</var> Zeichen</small>
                        
                                                </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="l-row">
                                    <div class="a-span-17 and-pushed l-col">
                                        <div class="formgroup">
                                            <label class="formgroup-label-mandatory" for="pstad-price">
                                                Preis</label>
                                            <div class="formgroup-input">
                                                <div class="formgroup-input-inline">
                                                    <input id="pric" name="price" class=" formcontrol pricefield" type="text" value="{{ $product->price }}" maxlength="8"> ,00€
                                                    <span>
                                                        <input id="priceType1" name="priceType1" class="formcontrol-select" type="radio" value="FIXED" checked="checked">
                                                        <label for="priceType1">Festpreis</label>
                                                    </span>
                                                    {{-- <span>
                                                        <div class="how-sell">
                                                            <input id="priceType3" name="priceType3" class="formcontrol-select" type="radio" value="GIVE_AWAY">
                                                            <label for="priceType3">Miete pro </label>
                                                            <div class="drop-selection" style="min-width:70px;">
                                                                <select class="how">
                                                                <div id="Dropdown" class="drop-content">
                                                                    <option value="#Monat">m²</option>
                                                                    <option value="#Monat">m³</option>
                                                                    <option value="#m²/Woche">m²/Woche</option>
                                                                    <option value="#m²/Woche">m²/Monat</option>
                                                                    <option value="#Stunde">Stunde</option>
                                                                    <option value="#Tag">Tag</option>
                                                                    <option value="#Woche">Woche</option>
                        
                                                                </select>
                                                                </div>
                                                            </div>
                        
                                                    </span> --}}
                                                    <span>
                                                        <input id="priceType2" name="priceType2" class="formcontrol-select" type="radio" value="NEGOTIABLE">
                                                        <label for="priceType2">VB</label>
                                                    </span>
                                                    <span>
                                                        <input id="priceType4" name="priceType4" class="formcontrol-select" type="radio" value="GIVE_AWAY">
                                                        <label for="priceType4">Zu verschenken</label>
                                                    </span>
                                                </div>
                                                <small>Bitte nur ganzzahlige Beträge eingeben.</small>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="l-row l-container-bow">
                                    <div class="a-span-17 and-pushed l-col">
                                        <div id="pstad-pictureupload" class="formgroup ">
                                            <label class="formgroup-label-mandatory">Bilder</label>
                                            
                                            <input id="pictures" type="file" name="pictures" class="form-control-file">
                                                <div class="uploadbox l-container-bow">
                        
                                                    <ul class="pictureupload-thumbnails tilelist ui-sortable" id="j-pictureupload-thumbnails">
                                                        <li class="is-placeholder is-clickable ui-sortable-handle">
                                                            <div class="imagebox-thumbnail addpic icon-add-image" id="pictureupload-pickfiles-icon" title="Bilder hinzufügen">
                                                                
                                                            </div>
                                                        </li>
                                                        </ul>
                                                </div>
                                                
                        
                                                <div class="errorbox margin-bottom-small is-hidden"></div>
                        
                                                <div id="plupld" style="position: relative;">
                                                    {{-- <button id="pictureupload-pickfiles" class="pictureupload-pickfiles button" type="button" style="position: relative; z-index: 1;">
                                                        <i class="button-icon  icon-camera-white"></i>
                                                        <span>Bilder hinzufügen</span>
                                                    </button> --}}
                                                <div class="float-right">⟷ Verschieben, um die Reihenfolge zu ändern</div>
                                                <div id="html5_1eq6bq86c4jjji5bbkvnn3ab5_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 166px; height: 34px; overflow: hidden; z-index: 0;"><input id="html5_1eq6bq86c4jjji5bbkvnn3ab5" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,.jpg,.jpeg,image/gif,.gif,image/png,.png,.JPG,.JPEG,.GIF,.PNG"></div></div>
                                            </input>
                        
                        
                                            </div>
                                    </div>
                        
                                            <br>
                        
                                </div>
                        
                                {{-- <fieldset id="postad-attributes" class="ad-attributes">
                                    <legend class="formlegend headline-medium">Kategorisierung</legend>
                                    <div class="l-row">
                                        <div class="a-span-17 and-pushed l-col">
                                            <div class="formgroup">
                                                <label class="formgroup-label">Kategorie</label>
                                                <div class="formgroup-input">
                                                    <div class="formgroup-input-inline text-only" id="categorySection">
                                                        <span id="postad-category-path"></span>
                                                            <button class="formcontrol-select"><a href="#" id="pstad-lnk-chngeCtgry" class="Categories">Kategorie wählen</a></button>
                                                        <input id="category" name="category" class="formcontrol" type="hidden" value="" wtx-context="434F9D3E-13E7-494C-8418-5EF8B95026AF"><input id="previousCategoryId" name="previousCategoryId" class="formcontrol" type="hidden" value="" wtx-context="B8991B7E-94D1-4D8C-847B-4EDB0155FEA6"><input type="hidden" id="l3FakeCategory" cssclass="formcontrol" wtx-context="86DC995A-8466-4A72-A692-0FC72BDAB656">
                                                        <input type="hidden" id="l4FakeCategory" cssclass="formcontrol" wtx-context="2AAB701A-3DDC-4C13-8330-E7BF9468C6AA">
                                                        <input id="userSelectedAttributeMap" name="userSelectedAttributeMap" class="formcontrol" value="{}" type="hidden" wtx-context="C569196A-706F-4907-B326-24BE32604C5C"><input id="suggestedCategoryId" name="suggestedCategoryId" class="formcontrol" type="hidden" value="" wtx-context="D15DAA60-BAF8-4711-8099-4A55992BBB08"><input id="trackingId" name="trackingId" class="formcontrol" value="b833ed79-ca08-4d26-b20e-88b7aa114605" type="hidden" wtx-context="8F95AAF1-9389-4B38-8205-31568BDA5F62"></div>
                                                    </div>
                                            </div>
                                        </div>
                                        </div>
                        
                                        </fieldset> --}}
                        
                                        <fieldset id="postad-location">
                                            <legend class="formlegend headline-medium">Ort</legend>
                                            <div class="l-row">
                                                <div class="a-span-17 and-pushed l-col">
                                                    <div class="formgroup">
                                                        <label class="formgroup-label-mandatory" for="pstad-zip">PLZ</label>
                                                        <div class="formgroup-input">
                                                            <div class="formgroup-input-inline">
                                                                <input id="zipCode" name="zipCode" class="formcontrol zipfield" placeholder="PLZ" type="text" value="42289" maxlength="5" wtx-context="72AD819D-D529-4549-911E-1C24402A73C8"><input class="formcontrol is-disabled  is-last" type="text" readonly="readonly" id="pstad-city" value="Wuppertal - Heckinghausen" placeholder="Ort" wtx-context="9D9FB8CC-4209-4E37-AC76-57F3F1E680BF">
                                                                <input id="location" type="hidden" name="location" value="1573" wtx-context="ED807702-2B83-4DF1-83E3-7A3C90BD8CB7">
                                                                <select id="pstad-citychsr" class="is-hidden" wtx-context="C08CBCBE-93CA-4184-AF9A-12DC5BBC7CE2">
                                                                    <option value="1573" selected="">Wuppertal - Heckinghausen</option>
                                                                </select>
                                                            </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="l-row l-container-bow">
                                                <div class="a-span-17 and-pushed l-col">
                                                    <div class="formgroup">
                                                        <label class="formgroup-label" for="pstad-street">Straße/Nr.</label>
                                                        <div class="formgroup-input">
                                                            <input id="street" name="street" class="formcontrol" type="text" value="" maxlength="75" wtx-context="923AE8D2-778E-4DA0-8073-618A7DFC0690"><input id="pstad-latitude" name="latitude" type="hidden" value="" wtx-context="CD57864F-AB80-495F-9E0E-7E68F86EF26F"><input id="pstad-longitude" name="longitude" type="hidden" value="" wtx-context="E60C83FE-B8AB-4EC4-9748-EB6525FBB11F"></div>
                                                    </div>
                                                </div>
                                            </div>
                        
                                        </fieldset>
                        
                                        {{-- <fieldset id="postad-posterdetails">
                                            <legend class="formlegend headline-medium">Anbieterdetails</legend>
                        
                                            <input id="posterType" name="posterType" type="hidden" value="PRIVATE" wtx-context="1EA2BB43-9113-45F4-B578-061CE26B9FBB"><div class="l-row">
                                                <div class="a-span-17 and-pushed l-col">
                                                    <div class="formgroup l-container">
                                                        <label class="formgroup-label-mandatory">Name</label>
                                                            <div class="formgroup-input">
                                                            <input id="userid" name="userid" class="formcontrol" type="text" value="Tali" maxlength="30" wtx-context="51C0E1CC-9FFE-4EDD-9B48-79401FCE7166"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            </fieldset> --}}
                        
                                            <fieldset id="postad-publish">
                                                <legend class="formlegend headline-medium">
                                                    Veröffentliche deine Anzeige</legend>
                                                <div class="l-container-bow">
                                                    <p class="text-module-begin">Es gelten unsere <a class="nutzb" href="https://themen.ebay-kleinanzeigen.de/nutzungsbedingungen/" target="_blank">Nutzungsbedingungen</a>. Informationen zur Verarbeitung Deiner Daten findest Du in unserer <a class="nutzb" href="https://themen.ebay-kleinanzeigen.de/datenschutzerklaerung/" target="_blank">Datenschutzerklärung</a>.</p>
                        
                                                    <div class="l-row a-double-margin l-container-bow">
                                                            <div class="a-span-1 l-col">
                                                                <input id="registration-policy" name="marketingOptIn" class="formcontrol-select" type="checkbox" value="true" wtx-context="870ADA36-8CD2-4185-AA4D-9993DD8E54D6"><input type="hidden" name="_marketingOptIn" value="on" wtx-context="F858F037-2494-46BC-B1ED-B378AA36AC94"></div>
                                                            <div class="a-span-16 l-col">
                                                                <label for="registration-policy">
                                                                    Ja, zu regelmäßigen Mails von uns mit Produktinfos, Tipps, Aktionen und spannenden Geschichten bei ANTASUS! Abmeldeung jederzeit möglich
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    
                                                <div id="pstad-frmactns" class="l-container-bow">
                                                    <button id="pstad-submit" class="button" type="submit">
                                                        @method('patch')
                                            <span>Anzeige aufgeben</span>
                                            </button>
                                    <button id="pstad-frmprview" class="button-secondary" type="submit">
                                            <span>Vorschau</span>
                                            
                                    </div>
                            
                                            </fieldset>
                            </form>
                                    {{-- <div class="side-row">
                        
                                @include('frontend.market.helper.activity')
                            </div> --}}
                        </div>
                        </div>
                            </section>
    </div>
                    
               
    
    

    <div class="site-base--right-banner">
        <div class="site-base--right-banner--full">
            <div id="banner-skyscraper" class=""></div>
        </div>
    </div>
</div>