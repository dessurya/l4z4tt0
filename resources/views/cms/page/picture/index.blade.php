@extends('cms.layout.base')

@section('title')
{{ $config['page']['title'] }}
@endsection

@push('link')
<style>
    .picture-item .card-img-top{
        height: 260px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
    }
</style>
@endpush

@push('script')
<script>
    $(document).on('submit', 'form#form_upload_picture', function(){
        event.preventDefault();
        let url = $(this).attr('action');
        var picture = $(this).find('[name=picture]').prop('files');
        $.each(picture, function(idx, data){
            console.log(data.width);
            console.log(data.height);
            if (data.type != 'image/jpeg' && data.type != 'image/jpg' && data.type != 'image/gif' && data.type != 'image/png') {
                pnotify({"title":"Warning!","type":"error","text":"Invalid file type : "+data.name});
            }
            if (data.size > 2555555) {
                pnotify({"title":"Warning!","type":"error","text":"File size more than 2,5 mb : "+data.name});
            }
            var reader = new FileReader();
            reader.readAsArrayBuffer(data);
            reader.onloadend = function(oFREvent) {
                var byteArray = new Uint8Array(oFREvent.target.result);
                var len = byteArray.byteLength;
                var binary = '';
                for (var i = 0; i < len; i++) {
                    binary += String.fromCharCode(byteArray[i]);
                }
                byteArray = window.btoa(binary);
                postData({'encode':byteArray,'name':data.name,'type':data.type},url);
            };
        });
    });

    function callPicture() {
        $('#custom-tabs-list #picture-content').html(null);
        postData(null,'{!! route('cms.picture.data') !!}');
    }

    function reCallPicture(data) { if (data.next_page_url != null) { postData(null,data.next_page_url); } }

    function copyToClipboard(copyString) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(copyString).select();
        document.execCommand("copy");
        $temp.remove();
    }

    function deletePicture(id) {
        $('#picture-content #picture_item_id_'+id).remove();
        postData({'id':id},'{!! route('cms.picture.delete') !!}');
    }
</script>
@endpush

@push('script.documentreadyfunction')
callPicture();
@endpush

@push('script.responsePostData')
if(data.callPicture == true) { callPicture(); }
if(data.reCallPicture == true) { reCallPicture(data.reCallPicture_config); }
@endpush

@push('content')
@include('cms.componen.tabs', ['config' => $config['page']['tabs']])
@endpush