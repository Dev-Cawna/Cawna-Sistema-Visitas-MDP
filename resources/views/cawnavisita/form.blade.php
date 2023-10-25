
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tipo_documento') }}</label>
    <div>
        {{ Form::text('tipo_documento', $cawnavisita->tipo_documento, ['class' => 'form-control' .
        ($errors->has('tipo_documento') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Documento']) }}
        {!! $errors->first('tipo_documento', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cawnavisita <b>tipo_documento</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('documento') }}</label>
    <div>
        {{ Form::text('documento', $cawnavisita->documento, ['class' => 'form-control' .
        ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'Documento']) }}
        {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cawnavisita <b>documento</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('visitante') }}</label>
    <div>
        {{ Form::text('visitante', $cawnavisita->visitante, ['class' => 'form-control' .
        ($errors->has('visitante') ? ' is-invalid' : ''), 'placeholder' => 'Visitante']) }}
        {!! $errors->first('visitante', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cawnavisita <b>visitante</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('telefono') }}</label>
    <div>
        {{ Form::text('telefono', $cawnavisita->telefono, ['class' => 'form-control' .
        ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cawnavisita <b>telefono</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('institucion_del_visitante') }}</label>
    <div>
        {{ Form::text('institucion_del_visitante', $cawnavisita->institucion_del_visitante, ['class' => 'form-control' .
        ($errors->has('institucion_del_visitante') ? ' is-invalid' : ''), 'placeholder' => 'Institucion Del Visitante']) }}
        {!! $errors->first('institucion_del_visitante', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cawnavisita <b>institucion_del_visitante</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('area_destino') }}</label>
    <div>
        {{ Form::text('area_destino', $cawnavisita->area_destino, ['class' => 'form-control' .
        ($errors->has('area_destino') ? ' is-invalid' : ''), 'placeholder' => 'Area Destino']) }}
        {!! $errors->first('area_destino', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cawnavisita <b>area_destino</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('persona_a_contactar') }}</label>
    <div>
        {{ Form::text('persona_a_contactar', $cawnavisita->persona_a_contactar, ['class' => 'form-control' .
        ($errors->has('persona_a_contactar') ? ' is-invalid' : ''), 'placeholder' => 'Persona A Contactar']) }}
        {!! $errors->first('persona_a_contactar', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cawnavisita <b>persona_a_contactar</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('razon_de_visita') }}</label>
    <div>
        {{ Form::text('razon_de_visita', $cawnavisita->razon_de_visita, ['class' => 'form-control' .
        ($errors->has('razon_de_visita') ? ' is-invalid' : ''), 'placeholder' => 'Razon De Visita']) }}
        {!! $errors->first('razon_de_visita', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cawnavisita <b>razon_de_visita</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('hora_de_ingreso') }}</label>
    <div>
        {{ Form::text('hora_de_ingreso', $cawnavisita->hora_de_ingreso, ['class' => 'form-control' .
        ($errors->has('hora_de_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Hora De Ingreso']) }}
        {!! $errors->first('hora_de_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cawnavisita <b>hora_de_ingreso</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('hora_de_salida') }}</label>
    <div>
        {{ Form::time('hora_de_salida', $cawnavisita->hora_de_salida, ['class' => 'form-control' .
        ($errors->has('hora_de_salida') ? ' is-invalid' : ''), 'placeholder' => 'Hora De Salida']) }}
        {!! $errors->first('hora_de_salida', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">cawnavisita <b>hora_de_salida</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
