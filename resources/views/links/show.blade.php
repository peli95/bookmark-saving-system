@extends('links.layout')


@section('content')
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('js/jquery.copy-to-clipboard.js')}}"></script>
</head>

	
<br/>
<br/>
    <div class="row">
		<center><h2>BookMark Saving System</h2></center>
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
               
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('links.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $link->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div id="copy" class="form-group">
                <strong>URL:</strong>
                {{ $link->url }}
            </div>
        </div>
		<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $link->description }}
            </div>
        </div>
    </div>
	
<button class="btn btn-primary" data-clipboard-target="#copy">
        Copy URL
</button>

<script>
$('button').click(function(){
  $(this).CopyToClipboard();
});
</script>
</div>
@endsection