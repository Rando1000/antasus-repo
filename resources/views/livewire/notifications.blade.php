<div>
@if($announcements->count())
    @foreach($announcements as $announcement)
    
        <x-utils.alert :type="$announcement->type" :dismissable="false" class="pt-1 pb-1 mb-0">
            {!! trans($announcement->message) !!}
        </x-utils.alert>
    
    @endforeach
@endif
</div>

