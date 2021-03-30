function previewImage()
{
  const gambar = document.querySelector('.gambar');
  const imgPreview = document.querySelector('.imagePreview')

  const oFreader = new FileReader();
  oFreader.readAsDataURL(gambar.files[0]);

  oFreader.onload = function (oFREvent){
    imgPreview.src = oFREvent.target.result;
  };
}