<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CyberAlertResource\Pages;
use App\Models\CyberAlert;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CyberAlertResource extends Resource
{
    protected static ?string $model = CyberAlert::class;

    protected static ?string $navigationIcon = 'heroicon-o-shield-exclamation';

    protected static ?string $navigationGroup = 'Security Management';

    protected static ?string $navigationLabel = 'Cyber Alerts';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('description')
                ->rows(4)
                ->required(),

            Forms\Components\Select::make('severity')
                ->options([
                    'critical' => 'Critical',
                    'high' => 'High',
                    'medium' => 'Medium',
                    'low' => 'Low',
                ])
                ->required(),

            Forms\Components\Select::make('category')
                ->options([
                    'phishing' => 'Phishing',
                    'malware' => 'Malware',
                    'ransomware' => 'Ransomware',
                    'fraud' => 'Fraud',
                    'advisory' => 'Advisory',
                ])
                ->required(),

            Forms\Components\TextInput::make('source'),

            Forms\Components\TextInput::make('reference_id'),

            Forms\Components\DatePicker::make('alert_date')
                ->required(),

            Forms\Components\Toggle::make('is_active')
                ->default(true),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->limit(40),

                Tables\Columns\BadgeColumn::make('severity')
                    ->colors([
                        'danger' => 'critical',
                        'warning' => 'high',
                        'success' => 'low',
                        'gray' => 'medium',
                    ]),

                Tables\Columns\TextColumn::make('category'),

                Tables\Columns\TextColumn::make('alert_date')
                    ->date(),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),

            ])
            ->filters([])
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
            'index' => Pages\ListCyberAlerts::route('/'),
            'create' => Pages\CreateCyberAlert::route('/create'),
            'edit' => Pages\EditCyberAlert::route('/{record}/edit'),
        ];
    }
}