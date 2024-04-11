<?php

namespace App\Livewire;

use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class FormCreate extends Component
{
    use WithFileUploads;
    public $title;
    public $price;
    public $description;
    public $category_id;
    public $images = [];
    public $announcement;
    public $temporary_images;

    public $name = ['Sport', 'Elettronica', 'Musica', 'Casa', 'Giardino', 'Fai da te', 'Abbigliamento', 'Accessori', 'Gioielli'];



    protected $rules = [
        'title' => 'required|min:4|max:40',
        'price' => 'required|numeric',
        'description' => 'required|min:10|max:255',
        'category_id' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $messages = [
        'title.required' => 'Il campo titolo è obbligatorio',
        'title.min' => 'Il campo titolo deve contenere più di 4 caratteri',
        'title.max' => 'Il campo titolo deve essere lungo al massimo 40 caratteri',
        'price.required' => 'Il campo prezzo è obbligatorio',
        'price.numeric' => 'Il campo prezzo deve essere un numero',
        'description.required' => 'Il campo descrizione è obbligatorio',
        'description.min' => 'Il campo descrizione deve contenere più di 10 caratteri',
        'description.max' => 'Il campo descrizione deve essere lungo al massimo 255 caratteri',
        'category_id.required' => 'Il campo categoria è obbligatorio',
        'images.image' => 'I file caricati devono essere delle immagini',
        'images.max' => 'I file caricati non devono superare 1 mb di grandezza',
        'temporary_images.*.image' => 'I file caricati devono essere delle immagini',
        'temporary_images.*.max' => 'I file caricati non devono superare 1 mb di grandezza',
    ];


    public function store()
    {

        // [0 => Sport, 1 => Elettronica, 2 => Musica, 3 => Casa, 4 => Giardino, 5 => Fai da te, 6 => Abbigliamento, 7 => Accessori, 8 => Gioielli]
        $validatedData = $this->validate();
        $this->validate();
        $authUser = auth()->user()->id;
        $this->announcement = Announcement::create(array_merge($this->validate(), ['user_id' => $authUser]));
        /*    $authUser = auth()->user()->id;
           Announcement::create(array_merge($validatedData, ['user_id' => $authUser])); */
        if (count($this->images)) {
            foreach ($this->images as $image) {
                /* $this->announcement->images()->create(['path' => $image->store('images', 'public')]);*/
                $newFileName = "announcement/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' => $image->store($newFileName, 'public')]);
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 200, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                ])->dispatch($newImage->id);

            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        session()->flash('message', 'Annuncio creato con successo! Verrà pubblicato solamente dopo la revisione');
        $this->clearForm();
    }

    public function render()
    {
        $categories = Category::all()->map(function ($category) {
            return [
                'id' => $category->id,
                'name' => $category->translatedName(),
            ];
        });

        return view('livewire.form-create', [
            'categories' => $categories,
        ]);
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate(['temporary_images.*' => 'image|max:1024'])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }
    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function clearForm()
    {
        $this->title = '';
        $this->price = '';
        $this->description = '';
        $this->images = [];
        $this->temporary_images = [];
        $this->category_id = '';
    }

}