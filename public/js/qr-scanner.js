document.addEventListener("DOMContentLoaded", function () {
    const video = document.getElementById("qr-video");
    const mensaje = document.getElementById("mensaje");

    // Acceder a la cámara
    navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
        .then(function (stream) {
            video.srcObject = stream;
            video.play();
            scanQR();
        })
        .catch(function (error) {
            mensaje.innerText = "Error al acceder a la cámara: " + error;
        });

    function scanQR() {
        const canvas = document.createElement("canvas");
        const context = canvas.getContext("2d");

        function captureFrame() {
            if (video.readyState === video.HAVE_ENOUGH_DATA) {
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                context.drawImage(video, 0, 0, canvas.width, canvas.height);

                const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                const code = jsQR(imageData.data, imageData.width, imageData.height);

                if (code) {
                    const qrID = code.data; // Extraemos el ID del QR
                    mensaje.innerText = "Código detectado: " + qrID;
                    window.location.href = qrID;
                }
            }
            requestAnimationFrame(captureFrame);
        }
        captureFrame();
    }
});
