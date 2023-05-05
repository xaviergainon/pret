@php
    
    $label  ??= null ;
    $type   ??= 'text' ;
    $class  ??= null ;
    $name  ??= '' ;
    $value  ??= '' ;
    $items  ??= '' ;
    $selectedID  ??= '' ;
@endphp


<div @class(["form-group",$class])>

    <label for="{{ $name }}"> {{ $label }}</label>

    @if($type == 'textarea')
        <textarea class="form-control @error($name) is-invalid  @enderror"  type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"> value="{{ old($name,$value) }}</textarea>
   
    @elseif($type == 'select')
  
        <select class="form-control @error($name) is-invalid  @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}">
            @foreach($items as $key => $value)
            <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}> {{ $value }}
            </option>
            @endforeach
        </select>
    
    @elseif($type == 'text')
        <input class="form-control @error($name) is-invalid  @enderror"  type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name,$value) }}">
    @endif

    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
        
    @enderror

</div>