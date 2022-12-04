@if ($message = Session::get('success'))
<div class="success">
    <strong id="alerta">{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('error'))
<div class="error">
    <strong id="alerta">{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <strong id="alerta">{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <strong id="alerta">{{ $message }}</strong>
</div>
@endif
