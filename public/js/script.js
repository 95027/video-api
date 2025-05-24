async function loadVideos() {
    const loader = document.getElementById("loader");
    const mainLayout = document.getElementById("main-layout");
    const list = document.getElementById("videos");
    const iframe = document.getElementById("player");
    loader.style.display = "flex";
    mainLayout.style.display = "none";

    list.innerHTML = "";
    iframe.src = "";

    try {
        const res = await fetch("/videos");
        const data = await res.json();

        if (Array.isArray(data.contents)) {
            let firstVideoId = null;

            data.contents.forEach((item) => {
                if (item.type === "video" && item.video) {
                    const video = item.video;
                    const thumbnail = video.thumbnails?.[0]?.url || "";
                    const videoId = video.videoId;

                    if (!firstVideoId) {
                        firstVideoId = videoId;
                    }

                    const col = document.createElement("div");
                    col.className = "col";

                    col.innerHTML = `
                        <div class="card shadow-sm h-100">
                            <img src="${thumbnail}" class="card-img-top" alt="Thumbnail">
                            <div class="card-body">
                                <h6 class="card-title">${video.title}</h6>
                                <button class="btn btn-sm btn-primary w-100" onclick="playVideo('${videoId}')">Play</button>
                            </div>
                        </div>
                    `;

                    list.appendChild(col);
                }
            });

            if (firstVideoId) {
                iframe.src = `https://www.youtube.com/embed/${firstVideoId}?autoplay=1`;
            }
        } else {
            list.innerHTML = '<p class="text-danger">No videos found.</p>';
        }
    } catch (error) {
        console.error("Failed to load videos:", error);
        list.innerHTML = '<p class="text-danger">Error loading videos.</p>';
    } finally {
        loader.style.display = "none";
        mainLayout.style.display = "block";
    }
}

function playVideo(id) {
    const iframe = document.getElementById("player");
    iframe.src = `https://www.youtube.com/embed/${id}?autoplay=1`;
}

loadVideos();
