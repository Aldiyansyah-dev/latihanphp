// preview image untuk tambah dan ubah
function previewImage(){
    const gambar = document.querySelector('.gambar');
    const imgPreview = document.querySelector('.img-preview');

    const ofReader = new FileReader();
    ofReader.readAsDataURL(gambar.files[0]);

    ofReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    };
}