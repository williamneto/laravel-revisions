<div>
    <h2>New revision</h2>
    <input
        wire:model="veicleId"
        type="text"
        placeholder="Vehicle"
    >
    <input 
        wire:model="date"
        type="text"
        placeholder="Date"
    >

    @if($revisionId)
        <button wire:click="update">Update</button>
    @else
        <button wire:click="create">Create</button>
    @endif

    <h2>Revisions</h2>
    <ul>
        @foreach($revisions as $revision)
            <li>
                {{ $revision->veicleId }} - {{ $revision->date}}
                <div>
                    <button wire:click="edit({{ $revision->id }})">Edit</button>
                    <button wire:click="delete({{ $revision->id }})">Delete</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>
