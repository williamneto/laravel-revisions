<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Veicle;

class VeiclesManager extends Component
{
    public $brand, $peopleId, $veicleId;

    public function render()
    {
        $this->veicles = Veicle::all();
        return view('livewire.veicles-manager', ['veicles' => $this->veicles]);
    }

    public function create()
    {
        Veicle::create(
            [
                'brand' => $this->brand,
                'peopleId' => $this->peopleId
            ]
        );

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $veicle = Veicle::findOrFail($id);
        $this->veicleId = $id;
        $this->brand = $veicle->brand;
        $this->peopleId = $veicle->peopleId;
    }

    public function update()
    {
        $this->validate(
            [
                'brand' => 'required'
            ]
        );

        $veicle = Veicle::find($this->veicleId);
        $veicle->update(
            [
                'brand' => $this->brand
            ]
        );

        $this->resetInputFields();

    }

    public function delete($id)
    {
        Veicle::find($id)->delete();
    }

    private function resetInputFields()
    {
        $this->brand = '';
        $this->peopleId = '';
    }
}
