<?php

namespace App\Http\Livewire;

use App\Domains\Announcement\Models\Announcement;
use DB;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class AnnouncementsTable.
 */
class AnnouncementsTable extends TableComponent
{

    public function query() : Builder
    {
        return Announcement::query();
    }

    public function columns() : array
    {
        return [
            Column::make('id')
                ->searchable(),
            Column::make('area')
                ->searchable(),
            Column::make('type')
                ->searchable(),
            Column::make('message')
                ->searchable(),
            Column::make('starts_at')
                ->searchable(),
            Column::make('ends_at')
                ->searchable(),
            Column::make(__('Actions'))
                ->view('backend.announcements.includes.actions'),

        ];
    }
}
