
let result = document.querySelector('.result'),
    img_result = document.querySelector('.img-result'),
    img_w = document.querySelector('.img-w'),
    img_h = document.querySelector('.img-h'),
    save = document.querySelector('.save'),
    cropped = document.querySelector('.cropped'),
    sub = document.getElementById('uploadButton'),
    dwn = document.querySelector('#image_data'),
    oldImage = document.querySelector('#oldImage'),
    upload = document.querySelector('#file-input'),
    container1 = document.querySelector('#sub-container_1'),
    container2 = document.querySelector('#sub-container_2'),
    cropper = '';

upload.addEventListener('change', e => {
    let options = document.querySelector('.options');
    if (e.target.files.length) {
        const reader = new FileReader();
        reader.onload = e => {
            if (e.target.result) {
                let img = document.createElement('img');
                img.id = 'image';
                img.src = e.target.result;
                result.innerHTML = '';
                result.appendChild(img);
                save.classList.remove('hide');
                result.classList.remove('hide');
                oldImage.classList.add('hide');

                // Create Cropper instance
                cropper = new Cropper(img, {
                    minContainerHeight: 500,
                    maxContainerHeight: 500,
                    viewMode: 1,
                    aspectRatio: 0.75,
                    crop: function (e) {

                        console.log(e.detail.width);
                        img_w.value = e.detail.width;
                        console.log(e.detail.height);
                    }
                    
                    

                });
                // var     contData = cropper.getContainerData(); //Get container data
                cropper.setCropBoxData({ height: 500})
                // viewMode: 2
                cropper.zoomTo(0.5)
                // Initialize Cropper instance
                cropper.init();
            }
        };
        reader.readAsDataURL(e.target.files[0]);
    }
});


save.addEventListener('click', e => {
    e.preventDefault();
    // get result to data uri
    let imgSrc = cropper.getCroppedCanvas({
        width: img_w.value // input value
    }).toDataURL();

    // remove hide class of img
    cropped.classList.remove('hide');
    img_result.classList.remove('hide');
    // show image cropped
    cropped.src = imgSrc;
    document.getElementById('image_data').value = imgSrc;
    sub.classList.remove('hide');
    

});

document.getElementById('ButtonStore').addEventListener('click', function (e) {
    document.querySelector('.formStore').submit();
});


/////////////////////////

