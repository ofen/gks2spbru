@extends('base')
@section('content')
<h4>{{ $page_title }}</h4>
<form>
    <div class="form-group">
        <label for="formGroupExampleInput">Example label</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Another label</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection