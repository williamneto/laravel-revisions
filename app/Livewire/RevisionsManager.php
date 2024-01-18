<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Revision;

class RevisionsManager extends Component
{
    public $veicleId, $date, $revisionId;

    public function render()
    {
        $this->revisions = Revision::all();
        return view('livewire.revisions-manager', ['revisions' => $this->revisions]);
    }

    public function create()
    {
        Revision::create(
            [
                'veicleId' => $this->veicleId,
                'date' => $this->date
            ]
        );

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $revision = Revision::findOrFail($id);
        $this->revisionId = $id;
        $this->veicleId = $revision->veicleId;
        $this->date = $revision->date;
    }

    public function update()
    {
        $this->validate(
            [
                'veicleId' => 'required'
            ]
        );

        $revision = Revision::find($this->revisionId);
        $revision->update(
            [
                'veicleId' => $this->veicleId
            ]
        );

        $this->resetInputFields();

    }

    public function delete($id)
    {
        Revision::find($id)->delete();
    }

    private function resetInputFields()
    {
        $this->veicleId = '';
        $this->date = '';
    }
}
