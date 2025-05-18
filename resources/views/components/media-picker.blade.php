<div>
    <button type="button" onclick="openMediaModal()">📁 Select Media</button>
    <input type="hidden" name="media_id" id="selectedMediaId">

    <div id="mediaModal" class="media-modal hidden">
        <div class="media-modal-content">
            <h2>📸 Media Library</h2>
            <form id="media-upload-form" enctype="multipart/form-data">
                <input type="file" name="file" required>
                <button type="submit">Upload</button>
            </form>

            <div id="media-gallery" class="media-grid mt-4"></div>

            <button onclick="closeMediaModal()">❌ Close</button>
        </div>
    </div>
</div>
