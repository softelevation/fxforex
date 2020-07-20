@if ( session()->has('info'))
<div class="alert alert-info" role="alert">
    <a class="close" title="close" aria-label="close" data-dismiss="alert" href="#">×</a>
    {{ session()->get('info') }}
</div>
@endif

@if ( session()->has('warning'))
<div class="alert alert-danger" role="alert">
    <a class="close" title="close" aria-label="close" data-dismiss="alert" href="#">×</a>
    {!! session()->get('warning') !!}
</div>
@endif



@if (session()->has('error'))
<div class="alert alert-danger" role="alert">

    <a class="close" title="close" aria-label="close" data-dismiss="alert" href="#">×</a>
    {{ session()->get('error') }}
</div>

@endif

@if (session()->has('validations'))
<div class="alert alert-danger" role="alert">

    <a class="close" title="close" aria-label="close" data-dismiss="alert" href="#">×</a>
    @foreach(session()->get('validations') as $err)
    {{ $err[0]  }}
     <br> 
    @endforeach
</div>

@endif


@if ( session()->has('questionSuccess'))
<div class="alert alert-info" role="alert">
    <a class="close" title="close" aria-label="close" data-dismiss="alert" href="#">×</a>
    {{ session()->get('questionSuccess')['msg'] }}<br/> 
    
    <p><a href="{{session()->get('questionSuccess')['listUrl']}}" class="alert-link">Go to list</a> <br/>
    @if(session()->get('questionSuccess')['prevUrl']!='javascript:;')
        <a href="{{session()->get('questionSuccess')['prevUrl']}}" class="alert-link">Prev Question</a> 
    @endif
    @if(session()->get('questionSuccess')['nextUrl']!='javascript:;')
        <a href="{{session()->get('questionSuccess')['nextUrl']}}" class="alert-link " style="float:right">Next Question</a> </p>
    @endif
</div>
@endif
