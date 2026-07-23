<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Models\Document;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Documents';

    protected static ?string $navigationGroup = 'Document Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Document Title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('category')
                    ->label('Category')
                    ->options([
                        'legal' => 'Legal',
                        'act' => 'Act',
                        'rule' => 'Rule',
                        'sop' => 'SOP',
                        'circular' => 'Circular',
                    ])
                    ->searchable()
                    ->required(),

                Forms\Components\TextInput::make('issued_by')
                    ->label('Issued By'),

                Forms\Components\TextInput::make('reference_number')
                    ->label('Reference Number'),

                Forms\Components\DatePicker::make('published_date')
                    ->label('Published Date'),

                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->rows(4),

                Forms\Components\FileUpload::make('file_path')
                    ->label('PDF Document')
                    ->disk('public')
                    ->directory('documents')
                    ->acceptedFileTypes(['application/pdf'])
                    ->downloadable()
                    ->openable()
                    ->previewable(false)
                    ->required(),

                Forms\Components\Toggle::make('is_featured')
                    ->label('Featured Document')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('category')
                    ->colors([
                        'primary' => 'legal',
                        'success' => 'act',
                        'warning' => 'rule',
                        'danger' => 'circular',
                        'gray' => 'sop',
                    ]),

                Tables\Columns\TextColumn::make('issued_by')
                    ->searchable(),

                Tables\Columns\TextColumn::make('published_date')
                    ->date()
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}