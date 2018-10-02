@extends('layouts/main')

@section('map')
<div class = 'row'>
    <div class = 'col-lg-12' id='map'></div>
</div>
@endsection

@section('content')
<div class='col-sm-11'>
   <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>
@endsection

@section('script')

<script>
</script>

@show
