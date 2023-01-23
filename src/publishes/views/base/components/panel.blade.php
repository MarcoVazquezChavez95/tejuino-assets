<div class="panel {{ $light ? 'panel-light' : 'panel-inverse' }}" id={{ $id ?? '' }}>
    <div class="panel-heading">
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
        </div>
        <h4 class="panel-title">{{ $title ?? 'Lista' }}</h4>
    </div>
    <div class="panel-body p-5">
        {{ $slot }}
    </div>
</div>
