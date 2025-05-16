@foreach($media as $item)
    <div onclick="selectMedia({{ $item->id }})" class="media-thumb">
        <img src="{{ Storage::disk($item->disk)->url($item->file_name) }}" alt="{{ $item->name }}" />
    </div>
@endforeach
