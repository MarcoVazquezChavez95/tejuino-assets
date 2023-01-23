@section('css')
    @php
        Plugins::css($basePlugins = [
            'jquery',
            'axios',
            'jquery-ui',
            'bootstrap',
            'animate',
            'font-awesome',
            'slim-scroll',
            'js-cookie',
            'line-icons',
            'ionicons',
            'gritter',
            'parsley',
            'vue',
            'switchery',
            'swal'
        ], $plugins ?? []);

        Assets::css([
            'base.styles'
        ], $css ?? []);
    @endphp
@endsection

@section('js')
    @php
        Plugins::js($basePlugins, $plugins ?? []);

        Assets::js([
            'base.default',
            'base.apps',
            'base.main',
            'base.components'
        ], $js ?? []);
    @endphp
@endsection
