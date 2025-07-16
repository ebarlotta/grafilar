@props(['title','mostrar'])
<div class="col-6">
    <div class="card direct-chat direct-chat-primary">
        <div class="card-header">
            <h3 class="card-title"><b>{{ $title }}</b></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @if($mostrar=='papeles') <x-card-table-component listado="{{ $mostrar }}"></x-card-table-component> @endif
            @if($mostrar=='lados') <x-card-table-component listado="{{ $mostrar }}"></x-card-table-component> @endif
            @if($mostrar=='sistemas') <x-card-table-component listado="{{ $mostrar }}"></x-card-table-component> @endif
            @if($mostrar=='tipos') <x-card-table-component listado="{{ $mostrar }}"></x-card-table-component> @endif
        </div>
    </div>
</div>
