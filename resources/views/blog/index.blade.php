@extends('layouts.app')
@section('content')
    @foreach($notes as $index => $value)
        <div style="width: 60%;margin-left: 9%">
            <blockquote>
                <p>{{$value->title}}</p>
                <footer>{{\Carbon\Carbon::parse($value->created_at)->format('l jS \\of F Y h:i:s A')}}</footer>
            </blockquote>
        </div>
    @endforeach
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div>
    <script>

        $("p").click(function () {
            $('#myModal').modal('show')
        });

    </script>
@endsection
