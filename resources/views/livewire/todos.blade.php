<div>
    <form wire:submit="add">
        <input type="text" wire:model="todo">
        <!-- podemos usar wire:model.live para actualizar en vivo el backend -->

        <button type="Submit">Add</button>
        <br>
        <span style="color: red" >{{ $error }}</span>
    </form>
    <ul>
        @foreach ($todos as  $todo)
            <li>{{$todo}}</li>
        @endforeach
    </ul>
</div>
