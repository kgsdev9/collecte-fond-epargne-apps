<div>
    <input type="text" wire:model.live="search">

    <button  type="button" wire:click="transfert">Transfert</button>

    <div class="containter">
        <h1>Gestion de transfert</h1>
        @foreach ($posts as $post)
            <li> {{$post->id}} ---    {{$post->solde}} FCFA </li>
        @endforeach

    </div>
</div>
