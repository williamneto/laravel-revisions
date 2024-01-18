<div>
    <h2>New vehicle</h2>
    <input
        wire:model="brand"
        type="text"
        placeholder="Brand"
    >
    <input 
        wire:model="peopleId"
        type="text"
        placeholder="Owner"
    >

    @if($peopleId)
        <button wire:click="update">Update</button>
    @else
        <button wire:click="create">Create</button>
    @endif

    <h2>Vehicles</h2>
    <ul>
        @foreach($veicles as $veicle)
            <li>
                {{ $veicle->brand }} - {{ $veicle->peopleId}}
                <div>
                    <button wire:click="edit({{ $veicle->id }})">Edit</button>
                    <button wire:click="delete({{ $veicle->id }})">Delete</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>
