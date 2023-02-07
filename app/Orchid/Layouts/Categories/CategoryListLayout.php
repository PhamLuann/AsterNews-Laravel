<?php

namespace App\Orchid\Layouts\Categories;

use App\Models\Category;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CategoryListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name')
                ->sort()
                ->render(function (Category $category) {
                    return Link::make($category->name)
                        ->route('category.edit', $category);
                }),
            TD::make('description', 'Description')->width(550),
            TD::make('created_at', 'Create at')->sort(),
            TD::make('updated_at', 'Update at')->sort(),
            TD::make(__('Action'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn(Category $category) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([
                        Link::make('Edit')
                            ->icon('pencil')
                            ->route('category.edit', $category),
                        Button::make('Delete')
                            ->icon('trash')
                            ->confirm(__('Once the post is deleted?'))
                            ->method('remove', ['id'=>$category->id])
                    ])),
        ];
    }
}
