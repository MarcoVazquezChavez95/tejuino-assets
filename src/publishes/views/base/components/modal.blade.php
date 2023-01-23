<div class="modal fade in" id="modalCreate">
    <div class="modal-dialog">
        <form class="modal-content form-horizontal form-bordered" method="post" action="{{ $action ?? 'create' }}"
            id="{{ $form ?? 'createFormNuevo' }}" data-parsley-validate="true">
            <div class="modal-header">
                <h4 class="modal-title">
                    <i class="{{ $icon ?? 'icon-plus' }}"></i>
                    {{ $title ?? 'Nuevo' }}
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-0">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                @isset($buttons)
                    {{ $buttons }}
                @else
                    <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Cerrar</a>
                    <button type="submit" class="btn btn-lime">
                        <i class="icon-check"></i>
                        <strong>Guardar</strong>
                    </button>
                @endisset
            </div>
        </form>
    </div>
</div>
