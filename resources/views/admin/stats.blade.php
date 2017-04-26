@extends ('admin.layouts.dashboard')

@section('page_heading', 'Stats')

@section('section')
    <div class="row">
        <div class="col-md-3">
            @component('admin.widgets.panel')
                @slot('class', 'primary')
                @slot('panelBody')
                    @include('admin.widgets.stat', array('icon'=> 'whatsapp', 'header'=> 'Views', 'value'=>'71,842', 'href'=>'#', 'color'=>'primary'))
                @endslot
            @endcomponent
        </div>

        <div class="col-md-3">
            @component('admin.widgets.panel')
                @slot('class', 'info')
                @slot('panelBody')
                    @include('admin.widgets.stat', array('icon'=> 'archive', 'header'=> 'header', 'value'=>'19,968', 'href'=>'#', 'color'=>'info'))
                @endslot
            @endcomponent
        </div>

        <div class="col-md-3">
            @component('admin.widgets.panel')
                @slot('class', 'success')
                @slot('panelBody')
                    @include('admin.widgets.stat', array('icon'=> 'desktop', 'header'=> 'Header', 'value'=>'000', 'href'=>'#', 'color'=>'success'))
                @endslot
            @endcomponent
        </div>

        <div class="col-md-3">
            @component('admin.widgets.panel')
                @slot('class', 'danger')
                @slot('panelBody')
                    @include('admin.widgets.stat', array('icon'=> 'folder', 'header'=> 'Title', 'value'=>'758,412,304', 'href'=>'#', 'color'=>'danger'))
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
