<?php

namespace App\Http\Livewire\Admin;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryData extends Component
{
    use WithPagination;

    public $search;
    public $entry;
    /**
     * @var mixed
     */
    public $sortField = 'name';
    /**
     * @var mixed
     */
    public $sortDirection = 'desc';

    protected $queryString = [
        'sortField',
        'sortDirection'
    ];

    public function mount() {
        $this->entry = 10;
    }

    public function sortBy($field) {

        if($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        }
        else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function delete($id) {
        Customer::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.admin.category-data');
    }
}
