@extends('admin.layouts.dashboard')

@section('page_heading','Grid System')

@section('section')

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Twelve</h4></div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Six</h4></div>
                    @endslot
                @endcomponent
            </div>

            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Six</h4></div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Four</h4></div>
                    @endslot
                @endcomponent
            </div>

            <div class="col-sm-4">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Four</h4></div>
                    @endslot
                @endcomponent
            </div>

            <div class="col-sm-4">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Four</h4></div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Three</h4></div>
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-3">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Three</h4></div>
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-3">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Three</h4></div>
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-3">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Three</h4></div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Five</h4></div>
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-7">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Seven</h4></div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Four</h4></div>
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-8">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Eight</h4></div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Three</h4></div>
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-9">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Nine</h4></div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Two</h4></div>
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-10">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Ten</h4></div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>One</h4></div>
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-11">
                @component('admin.widgets.panel')
                    @slot('panelBody')
                        <div class="text-center"><h4>Eleven</h4></div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->

@endsection