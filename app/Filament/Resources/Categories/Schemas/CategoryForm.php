<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section as ComponentsSection;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ComponentsSection::make('Category Information')
                ->description('Create category')
                ->schema([
                    TextInput::make('name')
                        ->label('Category Name')
                        ->required()
                        ->maxLength(255)
                        ->placeholder('e.g. Electronics')
                        ->columnSpanFull(),

                    Textarea::make('description')
                        ->label('Description')
                        ->required()
                        ->rows(4)
                        ->placeholder('Write a short description about this category...')
                        ->columnSpanFull(),
                ])
                ->columns(1),
            ]);
    }
}
