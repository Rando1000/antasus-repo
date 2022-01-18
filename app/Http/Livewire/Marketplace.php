<?php

namespace App\Http\Livewire;

use App\ModelMarketplace;
use DB;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Marketplace extends TableComponent
{
    
    public function query() : Builder
    {
        return ModelMarketplace::query();
    }

    public function columns() : array
    {
        return [
            Column::make('id')
                ->searchable(),
            Column::make('userid')
                ->searchable(),
            Column::make('title')
                ->searchable(),
            Column::make('price')
                ->searchable(),
            Column::make('desc')
                ->searchable(),
            Column::make('pictures')
                ->searchable(),
            Column::make('top')
                ->searchable(),
            Column::make('start_date')
                ->searchable(),
            Column::make('end_date')
                ->searchable(),
            Column::make(__('Actions'))
                ->view('backend.market.includes.actions'),

        ];
    }
}