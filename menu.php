<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/asset/css/menu.css">
    <link rel="stylesheet" href="/asset/css/modal.css">
    <link rel="stylesheet" href="/asset/font/themify-icons/themify-icons.css">
</head>

<body>
    <div class="menu">
        <div class="menu-main">
            <div class="menu-title">
                <p>MENU</p>
            </div>
            <div class="menu-btn">
                <button class="upload-btn js-upload">Upload</button>
                <button class="manage-btn js-manage">Manage <a href="index.php?layout=result"></a> </button>
            </div>
        </div>
    </div>
    <div class="modal js-modal">
        <div class="modal-container">
            <header class="modal-header">Latex OCR</header>
            <div class="modal-close js-modal-close">
                <i class="ti-close"></i>
            </div>
            <div class="modal-body">
                <div class="modal-img"></div>
                <div class="modal-disc"></div>
            </div>
            <div class="modal-btn">
                <button class="snip-btn">Snip</button>
                <button class="retry-btn">File</button>
            </div>
        </div>
    </div>
    <script>
        const uploadBtn = document.querySelector('.js-upload')
        const modal = document.querySelector('.js-modal')
        const modalClose = document.querySelector('.js-modal-close')
       
        function showUpload() {
            modal.classList.add('open')
        }
        uploadBtn.addEventListener('click', showUpload)

        function hideUpload() {
            modal.classList.remove('open')
        }
        modalClose.addEventListener('click', hideUpload)
    </script>
</body>

</html>