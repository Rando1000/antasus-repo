<?php

namespace App\Domains\Auth\Models\Traits\Attribute;

/**
 * Trait RoleAttribute.
 */
trait RoleAttribute
{
    /**
     * @return string
     */
    public function getPermissionsLabelAttribute(): string
    {
        if ($this->isAdmin()) {
            return 'Admin';
        }

        if (! $this->permissions->count()) {
            return 'None';
        }

        return collect($this->getPermissionDescriptions())
            ->implode('<br>');
    }
}
