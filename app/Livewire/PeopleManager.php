<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\People;

class PeopleManager extends Component
{
    public $name, $age, $gender, $peopleId;

    public function render()
    {
        $this->peoples = People::all();
        return view('livewire.people-manager', ['peoples' => $this->peoples]);
    }

    public function create()
    {
        People::create(
            [
                'name' => $this->name,
                'age' => $this->age,
                'gender' => $this->gender
            ]
        );

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $people = People::findOrFail($id);
        $this->peopleId = $id;
        $this->name = $people->name;
        $this->gender = $people->gender;
        $this->age = $people->age;
    }

    public function update()
    {
        $this->validate(
            [
                'name' => 'required',
                'age' => 'required',
                'gender' => 'required'
            ]
        );

        $people = People::find($this->peopleId);
        $people->update(
            [
                'name' => $this->name,
                'age' => $this->age,
                'gender' => $this->gender
            ]
        );

        $this->resetInputFields();

    }

    public function delete($id)
    {
        People::find($id)->delete();
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->age = '';
        $this->gender = '';
    }
}
