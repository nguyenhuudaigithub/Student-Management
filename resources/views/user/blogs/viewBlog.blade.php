@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $blog->title }}</div>
                <p>{{ $blog->tags }}</p>
                <div class="card-body">
                    <div>{!! $blog->detail !!}</div>
                </div>
            </div>
        </div>
    </div>
