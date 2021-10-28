<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Client;

class Filter extends Component
{
    use WithPagination;

    public $searchTerm;

    public $currentPage = 1;

    public function render()
    {
        return view('livewire.filter', [
            'clients' => Client::where(function($sub_query)
    {
        $sub_query->where('guid', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('first', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('last', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('street', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('city', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('zip', 'like', '%'.$this->searchTerm.'%');
    })->paginate(10)
        ]);
    }

}
