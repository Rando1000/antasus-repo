@props(['dismissable' => true, 'type' => 'success', 'ariaLabel' => __('Close')])

<div {{ $attributes->merge(['class' => 'alertnew alertnew-'.$type]) }} role="alert">
    @if ($dismissable)
        <button type="button" class="close" data-dismiss="alertnew" aria-label="{{ $ariaLabel }}">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif

    {{ $slot }}
</div>
