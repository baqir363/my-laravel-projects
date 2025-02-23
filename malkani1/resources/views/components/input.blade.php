<div>  
   <label>{{$label}}</label>
        <input type="{{$type}}" name="{{$name}}" autofocus><br>
        <span>
            <!-- {{$demo}} -->
            @error("$name")
            <font color="red">      {{$message}}</font>
            @enderror
        </span>
        </div>