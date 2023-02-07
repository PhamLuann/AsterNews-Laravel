<?php

namespace App\Orchid\Layouts\Posts;

use App\Models\Post;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PostListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'posts';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title', 'Title')
                ->sort()
                ->width(100)
                ->render(function (Post $post){
                    return Link::make($post->title)
                        ->route('post.edit', $post);
                }),
            TD::make('description', 'Description')->width(250),
            TD::make('body', 'Body'),
            TD::make('created_at', 'Create at')->sort(),
            TD::make('updated_at', 'Update at')->sort(),
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Post $post) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('post.edit', $post->id)
                            ->icon('pencil'),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the post is deleted, all of its resources and data will be permanently deleted.'))
                            ->method('remove', ['id' => $post->id]),
                    ])),
        ];
    }
}
