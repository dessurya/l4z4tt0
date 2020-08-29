@foreach($data as $picture)
<div id="picture_item_id_{{$picture->id}}" class="col-12 col-sm-12 col-md-3">
    <div class="picture-item card mb-2">
        <div class="card-img-top" style="background-image : url({{ $picture->url }})" ></div>
        <div class="card-body">
            <div class="btn-group btn-block">
                <a href="{{ $picture->url }}" target="_blank" class="text-white btn-xs btn btn-success">Open</a>
                <a onclick="copyToClipboard('{{ $picture->url }}')" class="text-white btn-xs btn btn-info">Copy Url</a>
                <a onclick="deletePicture({{ $picture->id }})" class="text-white btn-xs btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach