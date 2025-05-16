function openMediaModal() {
    document.querySelector('#mediaModal').classList.remove('hidden');
    fetchMedia();
}

function closeMediaModal() {
    document.querySelector('#mediaModal').classList.add('hidden');
}

function fetchMedia() {
    fetch(mediaBrowserUrl)
        .then(res => res.text())
        .then(html => document.querySelector('#media-gallery').innerHTML = html);
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('#media-upload-form')?.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch(mediaUploadUrl, {
            method: 'POST',
            body: formData,
            headers: { 'X-CSRF-TOKEN': csrf }
        }).then(() => fetchMedia());
    });
});

function selectMedia(id) {
    document.querySelector('#selectedMediaId').value = id;
    closeMediaModal();
}
