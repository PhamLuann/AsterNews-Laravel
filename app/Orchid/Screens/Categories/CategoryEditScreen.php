<?php

namespace App\Orchid\Screens\Categories;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CategoryEditScreen extends Screen
{
    public $category;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Category $category): array
    {
        return [
            'category' => $category,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->category->exists ? 'Edit category' : 'Create new category';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->category->exists),
            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->category->exists),
            Button::make('Delete')
                ->icon('trash')
                ->confirm(__('Once the post is deleted?'))
                ->method('remove')
                ->canSee($this->category->exists),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('category.name')
                    ->title('Name')
                    ->placeholder('Category name'),
                TextArea::make('category.description')
                    ->title('Description')
                    ->rows(3)
                    ->maxlength(255)
                    ->placeholder('Short description for this category')
            ])
        ];
    }

    public function createOrUpdate(Category $category, Request $request){
        $request->validate([
           'category.name' => [
               'required',
               Rule::unique(Category::class, 'name')->ignore($category),
           ]
        ]);
        $category->fill($request->get('category'));
        $category->offsetSet('slug', Str::slug($category->name));
        if($category->save()){
            Toast::success(__('Success!'))->delay(1500);
            return redirect()->route('category.list');
        }
        Toast::error(__('Error!'))->delay(1500);
        return redirect()->back()->withInput();
    }

    public function remove(Category $category){
        if($category->delete()){
            Toast::success(__('Delete success'))->delay(1500);
            return redirect()->route('category.list');
        }else{
            Toast::error(__('Can not delete!'))->delay(1500);
        }
    }
}
