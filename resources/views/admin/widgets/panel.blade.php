<div class="panel panel-{{ $class or 'default' }}">
    @if (isset($panelTitle))
        <div class="panel-heading">
            <h3 class="panel-title">
                {{ $panelTitle}}
                @if (isset($panelControls))
                    <div class="panel-control pull-right">
                        <a class="panelButton"><i class="fa fa-refresh"></i></a>
                        <a class="panelButton"><i class="fa fa-minus"></i></a>
                        <a class="panelButton"><i class="fa fa-remove"></i></a>
                    </div>
                @endif
            </h3>
        </div>
    @endif

    @if (isset($panelBody))
        <div class="panel-body">
            {{ $panelBody }}
        </div>
    @endif

    @if (isset($panelFooter))
        <div class="panel-footer">
            {{ $panelFooter }}
        </div>
    @endif
</div>

