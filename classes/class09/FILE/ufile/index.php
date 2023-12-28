<!DOCTYPE html>
<html>

<head>
    <title>Drag and Drop your file.</title>
    <style>
        .progress {
            margin: 20px 0 0 0;
            width: 300px;
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: 5px;
        }

        .progress-bar {
            width: 0%;
            height: 20px;
            background-color: #4CAF50;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="form.css" />
</head>

<body>
    <div class="phppot-container tile-container text-center">
        <h2>Drag and Drop your file.</h2>
        <input type="file" id="fileUpload" />
        <br>
        <br>
        <button onclick="uploadFile()">Upload</button>
        <div class="progress">
            <div class="progress-bar" id="progressBar"></div>
        </div>
        <br>
        <div id="uploadStatus"></div>
        <nav>
            <ul class="nav">
                <li><a href="history.php">History</a></li>
                <li><a href="files.php">Files</a></li>
            </ul>
        </nav>
    </div>
    
    <script>
        function uploadFile() {
            var fileInput = document.getElementById('fileUpload');
            var file = fileInput.files[0];

            if (file) {
                var formData = new FormData();
                formData.append('file', file);

                var xhr = new XMLHttpRequest();

                xhr.upload.addEventListener('progress', function(event) {
                    if (event.lengthComputable) {
                        var percent = Math.round((event.loaded / event.total) * 100);
                        var progressBar = document.getElementById('progressBar');
                        progressBar.style.width = percent + '%';
                        progressBar.innerHTML = percent + '%';
                    }
                });

                xhr.addEventListener('load', function(event) {
                    var uploadStatus = document.getElementById('uploadStatus');
                    uploadStatus.innerHTML = event.target.responseText;
                });

                xhr.open('POST', 'upload.php', true);
                xhr.send(formData);
            }
        }
    </script>
</body>

</html>