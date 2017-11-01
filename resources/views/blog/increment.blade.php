@extends('layouts.app')

@section('content')
    <form class="form-horizontal">
        <div class="form-group col-xs-6" style="margin-left: 22%">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="note" placeholder="Note Title">
            </div>
        </div>
        <div class="form-group col-xs-5" style="margin-left: 22%">
            <div class="col-md-8">
                <select class="form-control select2">
                    <option id="0"></option>
                    @foreach($notes as $index => $note)
                        <option id="{{$note->id}}">{{$note->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-1">
                <strong> Whether </strong>
            </div>
            <div class="col-md-1" style="margin-left: 2%">
                <strong> Links </strong>
            </div>
        </div>
        <div class="form-group col-xs-5" style="margin-left: 23%;">
            <textarea class="form-control" id="content" rows="4" placeholder="Note Content"></textarea>
        </div>
        <div class="form-group" style="margin-left: 49%">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="button" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>



    <script>
        $(function () {
            $(".js-example-basic-single").select2();

            $('.btn').click(function () {
                var noteTitle = $('#note').val();
                var content = $('#content').val();
                var selectId = $(".select2").find("option:selected").attr('id');

                $.ajaxSetup({
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'}
                });

                if (selectId != 0 && content.length > 0) {
                    $.ajax({
                        type: 'post',
                        url: "{{url('/increment/content')}}",
                        data: {
                            'noteId': selectId,
                            'content': content
                        },
                        dataType: 'json',
                        success: function (data) {
                            var result = data.result;
                            if (result == 'success') {
                                alert('插入成功');
                                window.location.href = "{{url('/')}}"
                            }
                        }
                    });
                }

                if (noteTitle.length > 0 && content.length > 0) {
                    $.ajax({
                        type: 'post',
                        url: "{{url('increment')}}",
                        data: {
                            'noteTitle': noteTitle,
                            'content': content
                        },
                        dataType: 'json',
                        success: function (data) {
                            var result = data.result;
                            if (result == 'success') {
                                alert('插入成功');
                                window.location.href = "{{url('/')}}"
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection