@extends ('admin.layouts.dashboard')

@section('page_heading','Progressbar')

@section('section')


    <div class="row">
        <div class="col-sm-6">
            @component('admin.widgets.panel')
                @slot('panelBody')
                    <h3>Regular</h3>
                    @include('admin.widgets.progress', array('class'=> '', 'value'=>'47'))

                    <h3>With label</h3>
                    @include('admin.widgets.progress', array('class'=> '', 'value'=>'47', 'badge'=>true))
                @endslot
            @endcomponent
        </div>
        <div class="col-sm-6">
            @component('admin.widgets.panel')
                @slot ('panelTitle', 'Contextual Progressbars')
                @slot('panelBody')
                    @include('admin.widgets.progress', array('class'=> 'success', 'value'=>'97'))
                    @include('admin.widgets.progress', array('class'=> 'info', 'value'=>'52'))
                    @include('admin.widgets.progress', array('class'=> 'warning', 'value'=>'31'))
                    @include('admin.widgets.progress', array('class'=> 'danger', 'value'=>'16'))
                @endslot
            @endcomponent
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            @component('admin.widgets.panel')
                @slot ('panelTitle', 'Striped Progresbars')
                @slot('panelBody')
                    @include('admin.widgets.progress', array('class'=> 'success', 'striped'=> true, 'value'=>'97'))
                    @include('admin.widgets.progress', array('class'=> 'info', 'striped'=> true, 'value'=>'52'))
                    @include('admin.widgets.progress', array('class'=> 'warning', 'striped'=> true, 'value'=>'31'))
                    @include('admin.widgets.progress', array('class'=> 'danger', 'striped'=> true, 'value'=>'16'))
                @endslot
            @endcomponent
        </div>
        <div class="col-sm-6">
            @component('admin.widgets.panel')
                @slot('panelBody')
                    <h3>Animated</h3>
                    @include('admin.widgets.progress', array('animated'=> true, 'value'=>'72'))

                    <h3>Stacked</h3>
                    @include('admin.widgets.stacked-progress', array('class1'=>'progress-bar-danger progress-bar-striped', 'value1'=> '13', 'class2'=>'progress-bar-warning', 'value2'=> '23','class3'=>'progress-bar-success', 'value3'=> '39'))
                @endslot
            @endcomponent
        </div>
    </div>
@stop