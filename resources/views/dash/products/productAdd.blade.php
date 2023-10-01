@extends('dash.layouts.masterForm')

@section('title', 'products')

@section('products')
    class="active"
@endsection
@section('productsAdd')
    class="active"
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add New Product</h2>
            </div>
            <!-- Color Pickers -->

            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Add Product</h2>
                            {{-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="body">

                            


                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Add New Product</h2>

                                        </div>
                                        <div class="body">
                                            {{-- <form id="form_advanced_validation" method="POST" > --}}
                                            <form action="{{ route('dashboard.product.store') }}"
                                                id="form_advanced_validation" method="POST" enctype="multipart/form-data">

                                                @csrf

                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="name"
                                                            maxlength="10" minlength="3" required>
                                                        <label class="form-label">Product Name</label>
                                                    </div>
                                                    <div class="help-info">Min. 3, Max. 10 characters</div>
                                                </div>



                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                                        <label class="form-label">Description</label>
                                                    </div>
                                                    <div class="help-info">Description</div>

                                                </div>



                                                <div class="form-group form-float"
                                                    style="display: inline-block; width:48%; margin:0 5px;">
                                                    <div class="form-line">
                                                        <input type="number" class="form-control" name="stock_quantity"
                                                            min="1" required>
                                                        <label class="form-label">Stock quantity</label>
                                                    </div>
                                                    <div class="help-info">Numbers only</div>
                                                </div>





                                                <div class="form-group form-float"
                                                    style="display: inline-block; width:48%; margin:0 5px;">
                                                    <div class="form-line">
                                                        <input type="number" class="form-control" name="price"
                                                            min="1" required>
                                                        <label class="form-label">Price</label>
                                                    </div>
                                                    <div class="help-info">Numbers only min 1</div>
                                                </div>

                                                <div class="form-group form-float"
                                                    style="display: inline-block; width:48%; margin:0 5px;">
                                                    <div class="form-line">
                                                        <select class="form-select" id="category" name="category_id"
                                                            required>
                                                            <option selected="true" disabled="disabled">Choose Category
                                                            </option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        {{-- <label class="form-label">Price</label> --}}
                                                    </div>
                                                    <div class="help-info">Numbers only min 1</div>
                                                </div>


                                                <div class="form-group form-float"
                                                    style="display: inline-block; width:48%; margin:0 5px;">
                                                    <div class="form-line">
                                                        <input type="file" class="form-control" name="image"
                                                            id="thumbnail" accept="image/*" required>
                                                        <label for="thumbnail" class="form-label">Thumbnail image</label>
                                                    </div>
                                                    <div class="help-info">Thumbnail image required</div>
                                                </div>

                                                <br>
                                                <br>

                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <div class="drop-area" id="dropArea">
                                                            <p>Drag & drop images here or click to select</p>
                                                            <input name="images[]" type="file" id="fileInput"
                                                                accept="image/*" multiple>
                                                        </div>
                                                        {{-- <label class="form-label">Description</label> --}}
                                                    </div>
                                                    <div class="help-info">Add additional images maximam 5</div>
                                                </div>
                                                <div class="slider-container" id="imageContainer"></div>




                                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            {{-- 

                            <form action="{{ route('dashboard.product.store') }}" method="POST"
                                enctype="multipart/form-data">

                                
                                <!-- Drag-and-drop area for images -->
                                <div class="drop-zone" id="drop-zone">
                                    <p>Drag & Drop images here or click to select files (up to 5)</p>
                                    <input type="file" name="images[]" accept="image/*" multiple id="file-input">
                                </div>

                                <!-- Display uploaded images here -->
                                <div id="image-preview"></div>
                                <button type="submit">Submit</button>
                            </form> --}}




                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->

        </div>
    </section>

















    <style>
        .drop-area {
            border: 2px dashed #ccc;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .drop-area input {
            /* display: none; */
        }

        .image-preview {
            max-width: 100%;
            max-height: 150px;
            margin: 10px 0;
        }

        /* .slider-container {
                                                                                                            display: flex;
                                                                                                            overflow-x: auto;
                                                                                                            margin-bottom: 10px;
                                                                                                        }

                                                                                                        .slider-image {
                                                                                                            max-width: 100px;
                                                                                                            max-height: 100px;
                                                                                                            margin-right: 10px;
                                                                                                            position: relative;
                                                                                                        } */

        /* .delete-button {
                                                                                                            position: absolute;
                                                                                                            top: 5px;
                                                                                                            right: 5px;
                                                                                                            background: red;
                                                                                                            color: white;
                                                                                                            border: none;
                                                                                                            padding: 5px 10px;
                                                                                                            cursor: pointer;
                                                                                                            border-radius: 50%;
                                                                                                        } */

        #imageContainer {
            display: flex;
            flex-wrap: wrap;
        }

        .image-wrapper {
            position: relative;
            margin: 5px;
        }

        .image-wrapper img {
            max-width: 100px;
            max-height: 100px;
        }

        .delete-button {
            position: absolute;
            top: 5px;
            right: 5px;
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 50%;
        }
    </style>
























    <script>
        const dropArea = document.getElementById('dropArea');
        const fileInput = document.getElementById('fileInput');
        const imageContainer = document.getElementById('imageContainer');

        dropArea.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', handleFiles);

        function handleFiles() {
            const files = this.files;

            if (files.length + imageContainer.children.length > 5) {
                alert('You can only upload up to 5 images.');
                this.value = ''; // Clear the file input
                return;
            }

            for (const file of files) {
                const reader = new FileReader();

                reader.onload = function() {
                    const image = new Image();
                    image.src = reader.result;

                    const imageWrapper = document.createElement('div');
                    imageWrapper.classList.add('image-wrapper');

                    const deleteButton = document.createElement('button');
                    deleteButton.classList.add('delete-button');
                    deleteButton.innerText = 'X';
                    deleteButton.addEventListener('click', function() {
                        this.parentElement.remove();
                        fileInput.value = ''; // Remove the corresponding file from the input
                    });

                    imageWrapper.appendChild(image);
                    imageWrapper.appendChild(deleteButton);

                    imageContainer.appendChild(imageWrapper);
                }

                reader.readAsDataURL(file);
            }
        }

        dropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropArea.classList.add('active');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('active');
        });

        dropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            dropArea.classList.remove('active');
            fileInput.files = e.dataTransfer.files;
            handleFiles.call(fileInput);
        });
    </script>





































@endsection


@section('JS')
    <!-- Jquery Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <script src="../../js/pages/forms/form-validation.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    {{-- <script src="../../plugins/sweetalert/sweetalert.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom Js -->
    {{-- <script src="../../js/pages/forms/form-wizard.js"></script> --}}

    {{-- <script>
        // Get references to the drop zone, file input, and image preview div
        const dropZone = document.getElementById('drop-zone');
        const fileInput = document.getElementById('file-input');
        const imagePreview = document.getElementById('image-preview');

        // Function to handle file input change event
        function handleFileInputChange() {
            // Clear previous previews
            imagePreview.innerHTML = '';

            const files = fileInput.files;

            // Check if the number of selected files is within the limit (up to 5)
            if (files.length <= 5) {
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    const imageURL = URL.createObjectURL(file);

                    // Create a container div for each image
                    const imageContainer = document.createElement('div');
                    imageContainer.classList.add('image-container');

                    // Create an image element to display the preview
                    const imgElement = document.createElement('img');
                    imgElement.src = imageURL;
                    imgElement.classList.add('preview-image');

                    // Create a remove button
                    const removeButton = document.createElement('button');
                    removeButton.innerText = 'Remove';
                    removeButton.classList.add('remove-button');

                    // Add event listener to remove the image when the button is clicked
                    removeButton.addEventListener('click', () => {
                        imageContainer.remove(); // Remove image container from preview
                        updateFileInput(); // Update file input to remove the removed image
                    });

                    // Append the image and remove button to the container div
                    imageContainer.appendChild(imgElement);
                    imageContainer.appendChild(removeButton);

                    // Append the container div to the image preview div
                    imagePreview.appendChild(imageContainer);
                }
            } else {
                alert('You can only upload up to 5 images.');
            }
        }

        function updateFileInput() {
            const imageContainers = document.querySelectorAll('.image-container');
            const selectedFiles = [];

            imageContainers.forEach(container => {
                const imgElement = container.querySelector('.preview-image');
                const fileIndex = Array.from(imagePreview.children).indexOf(container);

                selectedFiles.push(fileInput.files[fileIndex]);
            });

            const newFileList = new DataTransfer();

            selectedFiles.forEach(file => {
                newFileList.items.add(file);
            });

            fileInput.files = newFileList.files;
        }

        // Attach event listener to file input change event
        fileInput.addEventListener('change', handleFileInputChange);

        // Additional event listener for drag and drop
        dropZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropZone.classList.add('dragover');
        });

        dropZone.addEventListener('dragleave', () => {
            dropZone.classList.remove('dragover');
        });

        dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropZone.classList.remove('dragover');

            const files = e.dataTransfer.files;

            // Assign files to file input and trigger change event to handle them
            fileInput.files = files;
            handleFileInputChange();
        });

        // Additional event listener for clicking to select files
        fileInput.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevent click event from reaching drop zone
        });

        // CSS Styles
        const styles = `
    .image-container {
        position: relative;
        display: inline-block;
        margin: 5px;
    }

    .preview-image {
        max-width: 100px;
        max-height: 100px;
        display: block;
        margin-bottom: 5px;
    }

    .remove-button {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #ff0000;
        color: #ffffff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    #drop-zone {
        border: 2px dashed #ccc;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        cursor: pointer;
    }

    #drop-zone p {
        margin: 0;
    }
`;

        // Create a style element and append it to the head of the document
        const styleElement = document.createElement('style');
        styleElement.type = 'text/css';
        styleElement.appendChild(document.createTextNode(styles));
        document.head.appendChild(styleElement);
    </script> --}}
@endsection
