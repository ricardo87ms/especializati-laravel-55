<div class="form-group">
    
    <div class="form-group">
        <label for="qty_passangers">Quantidade de Passageiros</label>
        {!! Form::number('qty_passangers', null, ['class' => 'form-control', 'placeholder' => 'Quantidade de Passageiros:']) !!}
    </div>

    <div class="form-group">
        <label for="class">Classe</label>
        {!! Form::select('class', $classes, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <label for="brand_id">Marca</label>
        {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
    </div>
   
</div>