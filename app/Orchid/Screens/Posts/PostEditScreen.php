<?php

namespace App\Orchid\Screens\Posts;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class PostEditScreen extends Screen
{
    public $post;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Post $post): array
    {
        $post->load('attachment');
        return [
            'post' => $post,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->post->exists ? 'Edit post' : 'Creating a new post';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create post')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->post->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->post->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->post->exists),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('post.title')
                    ->title('Title')
                    ->placeholder('Title here'),

                Relation::make('post.category_id')
                    ->title('Select category')
                    ->fromModel(Category::class, 'name'),
                Cropper::make('post.hero')
                    ->title('Large post banner image')
                    ->width(1000)
                    ->height(500),

                TextArea::make('post.description')
                    ->title('Description')
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Short description for this post'),

                Quill::make('post.body')
                    ->title('Main text'),

                Upload::make('post.attachment')
                    ->title('All Media'),
            ])
        ];
    }

    public function createOrUpdate(Post $post, Request $request)
    {
        $post->fill($request->get('post'));
        $post->offsetSet('author_id', auth()->user()->id);
        if ($post->save()) {
            $post->attachment()->syncWithoutDetaching(
                $request->input('post.attachment', [])
            );
            Toast::success(__('Success!'))->delay(1500);
            return redirect()->route('post.list');
        }
        Toast::error(__('Error!'))->delay(1500);
    }

    public function remove(Post $post)
    {
        if($post->delete()){
            Toast::success(__('Delete success!'))->delay(1500);
            return redirect()->route('post.list');
        }
        Toast::error(__('Can not delete!'))->delay(1500);
    }
}
