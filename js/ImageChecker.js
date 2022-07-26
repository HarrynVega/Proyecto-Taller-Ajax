function checkFile() {
    var fileElement = document.getElementById("fileToUpload");
    var fileExtension = "";
    if (fileElement.value.lastIndexOf(".") > 0) {
        fileExtension = fileElement.value.substring(fileElement.value.lastIndexOf(".") + 1, fileElement.value.length);
    }
    if (fileExtension.toLowerCase() == "jpg" || fileExtension.toLowerCase() == "jpeg" ||fileExtension.toLowerCase() == "png") {
        return true;
    }
    else {
        alert("You must select a jpg, jpeg or png file for upload");
        return false;
    }
}
