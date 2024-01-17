<div>
    <input
        wire:model="name"
        type="text"
        placeholder="People name"
    >
    <input 
        wire:model="gender"
        type="text"
        placeholder="Gender (M or F)"
    >
    <input
        wire:model="age"
        type="number"
        placeholder="Age"
    >

    @if($peopleId)
        <button wire:click="update">Update</button>
    @else
        <button wire:click="create">Create</button>
    @endif

    
    <ul>
        @foreach($peoples as $pep)
            <li>
                {{ $pep->name }} - {{ $pep->gender}}/{{ $pep->age }}
                <div>
                    <button wire:click="edit({{ $pep->id }})">Edit</button>
                    <button wire:click="delete({{ $pep->id }})">Delete</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>
