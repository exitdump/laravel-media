const baseUrl = window.location.origin;
const mediaBrowserUrl = `${baseUrl}/laravel-media/browser`
const mediaUploadUrl = `${baseUrl}/laravel-media/upload`

 const getCsrfToken = () => {
    return document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
}     

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
            headers: { 'X-CSRF-TOKEN': getCsrfToken() }
        }).then(() => fetchMedia());
    });
});

function selectMedia(id) {
    document.querySelector('#selectedMediaId').value = id;
    closeMediaModal();
}
