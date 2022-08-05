<?php

namespace App\Http\Livewire;

use App\Models\record_research;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class ResearchTable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        
        return [
            Footer::make()->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
    * PowerGrid datasource.
    *
    * @return Builder<\App\Models\record_research>
    */
    public function datasource(): Builder
    {
        return record_research::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('Date_formatted', fn (record_research $model) => Carbon::parse($model->Date)->format('d/m/Y'))
            ->addColumn('Title')
            ->addColumn('Research_Name')
            ->addColumn('Partner_Agency')
            ->addColumn('Designation')
            ->addColumn('Start_Date_formatted', fn (record_research $model) => Carbon::parse($model->Start_Date)->format('d/m/Y'))
            ->addColumn('Target_Date_formatted', fn (record_research $model) => Carbon::parse($model->Target_Date)->format('d/m/Y'))
            ->addColumn('CREC')
            ->addColumn('URECOM')
            ->addColumn('Budget')
            ->addColumn('Remarks');
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

     /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [

            Column::make('ID', 'id'), 

            Column::make('DATE', 'Date_formatted', 'Date'),

            Column::make('TITLE', 'Title'),

            Column::make('RESEARCH NAME', 'Research_Name'),

            Column::make('PARTNER AGENCY', 'Partner_Agency'),

            Column::make('DESIGNATION', 'Designation'),

            Column::make('START DATE', 'Start_Date_formatted', 'Start_Date'),

            Column::make('TARGET DATE', 'Target_Date_formatted', 'Target_Date'),

            Column::make('CREC', 'CREC'),

            Column::make('URECOM', 'URECOM'),

            Column::make('BUDGET', 'Budget'),

            Column::make('REMARKS', 'Remarks'),

        ]
;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid record_research Action Buttons.
     *
     * @return array<int, Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('record_research.edit', ['record_researches' => 'id']),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('record_research.destroy', ['record_researches' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid record_research Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($record_research) => $record_research->id === 1)
                ->hide(),
        ];
    }
    */
}
