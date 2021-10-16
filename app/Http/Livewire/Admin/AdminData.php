<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;
use Livewire\WithPagination;

class AdminData extends Component
{
    use WithPagination;

    public $search;
    public $entry;
    /**
     * @var mixed
     */
    public $sortField = 'status';
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


    public function accept($id) {
        $admin = Admin::find($id);
        $admin->status = 'verified';
        $admin->save();
    }

    public function ignore($id) {
        $admin = Admin::find($id);
        $admin->status = 'not_verified';
        $admin->save();
    }

    public function delete($id) {
        Admin::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.admin.admin-data',[
            'admins' => Admin::search('name', $this->search)->orderBy($this->sortField, $this->sortDirection)->paginate($this->entry),
        ]);
    }
}
