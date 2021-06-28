<?php

namespace App\Http\Livewire;

use App\Contexts\WeatherContext;
use Livewire\Component;

class CurrentWeather extends Component
{
    public $weather;
    public function render()
    {
        $this->weather = WeatherContext::getCurrentWeather();
        return view('livewire.current-weather');
    }
}
