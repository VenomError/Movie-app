<?php

namespace App\Livewire\Forms\Cinema;

use App\Repository\HallRepository;
use Livewire\Form;
use App\Models\Cinema;
use Livewire\Attributes\Validate;

class AddHallForm extends Form
{
    public $name;

    public function rules(){
        return [
            'name' => 'required'
        ];
    }

    public function addHall(Cinema $cinema)
    {
        $this->validate();
        try {
            $hallRepo = new HallRepository();
            $hall = $hallRepo->create($this->all(), $cinema);
            $this->reset();
            sweetalert("Create Hall for {$cinema->name} Success" );
            return $hall;
        } catch (\Throwable $th) {
            sweetalert()->error($th->getMessage());
            report($th);
            return false;
            //throw $th;
        }
    }
}
