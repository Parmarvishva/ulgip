<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static ?string $navigationGroup = 'System';

    protected static ?string $navigationLabel = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('site_name')
                    ->required(),

                Forms\Components\FileUpload::make('site_logo')
                    ->directory('settings'),

                Forms\Components\FileUpload::make('favicon')
                    ->directory('settings'),

                Forms\Components\TextInput::make('hero_title')
                    ->required(),

                Forms\Components\Textarea::make('hero_subtitle'),

                Forms\Components\FileUpload::make('hero_image')
                    ->directory('settings'),

                Forms\Components\TextInput::make('contact_email')
                    ->email(),

                Forms\Components\TextInput::make('contact_phone'),

                Forms\Components\Textarea::make('address'),

                Forms\Components\TextInput::make('facebook'),

                Forms\Components\TextInput::make('instagram'),

                Forms\Components\TextInput::make('linkedin'),

                Forms\Components\TextInput::make('youtube'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('site_name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('contact_email'),

                Tables\Columns\TextColumn::make('contact_phone'),

                Tables\Columns\TextColumn::make('created_at')
                    ->date(),

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}