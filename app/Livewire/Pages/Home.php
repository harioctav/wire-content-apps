<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
  #[Layout('layouts.app')]
  public function render(): \Illuminate\Contracts\View\Factory | \Illuminate\Contracts\View\View | \Illuminate\Foundation\Application | \Illuminate\Contracts\Foundation\Application
  {
    return view('livewire.pages.home');
  }
}
