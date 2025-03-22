<?php

namespace App\Models;

use App\Filament\Resources\CityResource\Pages;
use App\Filament\Resources\CityResource\RelationManagers;
use App\Models\City;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class City extends Model
{
    protected static ?string $model = City::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                ->image()
                ->directory('City')
                ->required()
                ->columnSpan(2),
                Forms\Components\TextInput::make('name')
                ->required()
                ->debounce(500)
                ->reactive()
                ->afterStateUpdated(function ($state, callable $set){
                    $set('slug', Str::slug($state));
                }),
                Forms\Components\TextInput::make('slug')
                ->required(),

            ]);
    }

}
