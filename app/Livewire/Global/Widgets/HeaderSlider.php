<?php

namespace App\Livewire\Global\Widgets;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;

class HeaderSlider extends Component
{
    public array $sliderConfig = [
        'direction' => 'horizontal',
        'loop' => true,
        'allowTouchMove' => true,
        'pagination' => ['el' => '.swiper-pagination', 'clickable' => true],
        'navigation' => ['nextEl' => '.swiper-button-next', 'prevEl' => '.swiper-button-prev'],
        'autoplay' => [
            'delay' => 4000,
            'disableOnInteraction' => false,
        ],
    ];

    public array $config = [
        'width' => '1920px',
        'height' => '800px',
        'pagination_active' => true,
        'navigation_active' => true,
        'scrollbar_active' => false,
        'image_title_active' => true,
        'image_description_active' => true,
    ];

    public array $slides = [];

    public function mount()
    {
        $this->slides = collect(File::files(public_path('images/slider')))
            ->filter(fn ($file) => in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'webp']))
            ->values()
            ->map(function ($file) {
                $filename = $file->getFilenameWithoutExtension();
                
                // Standisierte Titel und detaillierte Beschreibungen für SEO
                if (Str::contains($filename, 'unter-treppe')) {
                    $title = 'Trockenbau unter der Treppe';
                    $description = 'Raumgewinnung durch einen präzisen Gipskarton-Ausbau unter einer Holztreppe.';
                } elseif (Str::contains($filename, 'verkabelung')) {
                    $title = 'Elektro-Vorbereitung';
                    $description = 'Exakte Kabeldurchläufe und Hohlwanddosen-Aussparungen vor dem Beplanken.';
                } elseif (Str::contains($filename, 'holzbalken')) {
                    $title = 'Sichtbalken-Integration';
                    $description = 'Dekorative Holzbalken stilvoll und sauber in die neue Wandfläche integriert.';
                } elseif (Str::contains($filename, 'flur')) {
                    $title = 'Flurausbau & Durchgänge';
                    $description = 'Gerade Linien und saubere Übergänge schaffen Struktur in Durchgangsräumen.';
                } else {
                    $title = 'Innenausbau & Trockenbau';
                    $description = 'Fachgerecht montierte und verspachtelte Gipskartonplatten, fertig vorbereitet zum Tapezieren.';
                }
                
                return [
                    'title' => $title,
                    'description' => $description,
                    'image' => '/images/slider/' . $file->getFilename(),
                ];
            })
            ->toArray();
    }

    public function render()
    {
        return view('livewire.widgets.header-slider');
    }
}
