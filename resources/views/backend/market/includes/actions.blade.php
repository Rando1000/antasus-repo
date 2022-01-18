

@role('Lead-Developer|Developer|Administrator')
        <x-utils.edit-button :href="route('admin.marketplace.edit', $model)" />
        <x-utils.delete-button :href="route('admin.marketplace.destroy', $model)" />
@endrole