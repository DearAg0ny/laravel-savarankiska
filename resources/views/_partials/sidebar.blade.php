@if(Auth::check())
<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Administravimo pultas</div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/add-service">Pridėti servisą</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/add-master">Pridėti meistrą</a>
    </div>
</div>
@else
@endif
