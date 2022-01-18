


@role('Lead-Developer|Developer|Administrator')
        <x-utils.edit-button :href="route('admin.announcements.edit', $model)" />
        <x-utils.delete-button :href="route('admin.announcements.destroy', $model)" />
@endrole