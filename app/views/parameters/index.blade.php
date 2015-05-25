@extends('_layouts.default')

@section('page container')
    <section class="container content-first">
        <div class="row">
            <div class="col-lg-12">
                <h1>Water parameter testing</h1>
                <h2>Before you test</h2>
                <p>Please remember that water parameters recommended in this calculator are just an average of mostly recommended water parameters found in literature. They should not be taken as absolute as every tank's ecosystem may be used to different parameters and therefore you should always consider the livestock that you have first and the water parameters that your tank is used to before making any changes to your water quality.</p>
            </div>
        </div>
    </section>
    <section class="container">
            <h2>Testing tool</h2>
            {{ Form::open( array(
                'route' => 'water-parameters',
                'method' => 'post',
                'id' => 'form-add-setting',
                'class' => 'form-horizontal'
            ) ) }}
            <fieldset>
            <div class="row">
                <div class="col-lg-8">
                    <div class="input-group">
                        <span class="input-group-addon leading">Salinity</span>
                        <input class="form-control" id="wp-salinity">
                        <span class="input-group-addon">ppt</span>
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon leading">Temperature</span>
                        <input class="form-control" id="wp-temperature">
                        <span class="input-group-addon">&#176;C</span>
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon leading">Amonia</span>
                        <input class="form-control" id="wp-amonia">
                        <span class="input-group-addon">ppt</span>
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon leading">Nitrite</span>
                        <input class="form-control" id="wp-nitrite">
                        <span class="input-group-addon">ppt</span>
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon leading">Nitrate</span>
                        <input class="form-control" id="wp-nitrate">
                        <span class="input-group-addon">ppt</span>
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon leading">Magnesium</span>
                        <input class="form-control" id="wp-magnesium">
                        <span class="input-group-addon">ppt</span>
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon leading">Calcium</span>
                        <input class="form-control" id="wp-calcium">
                        <span class="input-group-addon">ppt</span>
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon leading">Alcalinity</span>
                        <input class="form-control" id="wp-alcalinity">
                        <span class="input-group-addon">ppt</span>
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon leading">Ph</span>
                        <input class="form-control" id="wp-ph">
                        <span class="input-group-addon">ppt</span>
                    </div><br/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 col-lg-offset-7">
                    <div class="btn btn-primary" id="water-test-submit">Submit</div>
                </div>
            </div>
            </fieldset>
            {{ Form::close() }}

    </section>
@stop