@extends ('admin.layouts.dashboard')

@section('page_heading','Charts')

@section('section')

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Line Chart')
                    @slot('panelBody')
                        @include('admin.widgets.charts.clinechart')
                    @endslot
                @endcomponent

                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Donut Chart')
                    @slot('panelBody')
                        <div style="max-width:400px; margin:0 auto;">@include('admin.widgets.charts.cdonutchart')</div>
                    @endslot
                @endcomponent
            </div>
            <div class="col-sm-6">

                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Pie Chart')
                    @slot('panelBody')
                        <div style="max-width:400px; margin:0 auto;">@include('admin.widgets.charts.cpiechart')</div>
                    @endslot
                @endcomponent


                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Bar Chart')
                    @slot('panelBody')
                        @include('admin.widgets.charts.cbarchart')
                    @endslot
                @endcomponent
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->

@endsection
