<script type="text/javascript">
    var photo_url = null;
    var photo_img = null;
    var trueImage = null;
    var i = 0;
    var json = null;
    var in_crop = false;
    $(function () {

        'use strict';

        var console = window.console || {log: function () {
            }},
        $alert = $('.docs-alert'),
                $message = $alert.find('.message'),
                showMessage = function (message, type) {
                    $message.text(message);

                    if (type) {
                        $message.addClass(type);
                    }

                    $alert.fadeIn();

                    setTimeout(function () {
                        $alert.fadeOut();
                    }, 3000);
                };

        // Demo
        // -------------------------------------------------------------------------

        (function () {
            var $image = $('.img-container > img'),
                    $dataX = $('#dataX'),
                    $dataY = $('#dataY'),
                    $dataHeight = $('#dataHeight'),
                    $dataWidth = $('#dataWidth'),
                    $dataRotate = $('#dataRotate'),
                    options = {
                        aspectRatio: 1 / 1,
                        preview: '.img-preview',
                        crop: function (data) {
                            $dataX.val(Math.round(data.x));
                            $dataY.val(Math.round(data.y));
                            $dataHeight.val(Math.round(data.height));
                            $dataWidth.val(Math.round(data.width));
                            $dataRotate.val(Math.round(data.rotate));
                        }
                    };

            $image.on({
                'build.cropper': function (e) {
                    console.log(e.type);
                },
                'built.cropper': function (e) {
                    console.log(e.type);
                }
            }).cropper(options);


            // Methods
            $(document.body).on('click', '[data-method]', function () {
                var data = $(this).data(),
                        $target,
                        result;

                if (data.method) {
                    data = $.extend({}, data); // Clone a new one

                    if (typeof data.target !== 'undefined') {
                        $target = $(data.target);

                        if (typeof data.option === 'undefined') {
                            try {
                                data.option = JSON.parse($target.val());
                            } catch (e) {
                                console.log(e.message);
                            }
                        }
                    }

                    result = $image.cropper(data.method, data.option);

                    if (data.method === 'getDataURL') {
                        $('#getDataURLModal').modal().find('.modal-body').html('<img src="' + result + '">');
                    }
                    if (data.method === 'getImageData') {
                        json = result;
                    }

                    if ($.isPlainObject(result) && $target) {
                        try {
                            $target.val(JSON.stringify(result));
                        } catch (e) {
                            console.log(e.message);
                        }
                    }

                }
            }).on('keydown', function (e) {

                switch (e.which) {
                    case 37:
                        if (in_crop == true) {
                            e.preventDefault();
                            $image.cropper('move', -1, 0);
                        }
                        break;

                    case 38:
                        if (in_crop == true) {
                            e.preventDefault();
                            $image.cropper('move', 0, -1);
                        }
                        break;

                    case 39:
                        if (in_crop == true) {
                            e.preventDefault();
                            $image.cropper('move', 1, 0);
                        }
                        break;

                    case 40:
                        if (in_crop == true) {
                            e.preventDefault();
                            $image.cropper('move', 0, 1);
                        }
                        break;
                }

            });


            // Import image
            var $inputImage = $('#inputImage'),
                    blobURL;

            if (window.URL) {
                $inputImage.change(function () {
                    var files = this.files,
                            file;
                    trueImage = this.files[0];
                    console.log('itruemg:' + trueImage)

                    if (files && files.length) {
                        file = files[0];

                        if (/^image\/\w+$/.test(file.type)) {
                            if (blobURL) {
                                URL.revokeObjectURL(blobURL); // Revoke the old one
                            }

                            blobURL = URL.createObjectURL(file);
                            $image.cropper('reset', true).cropper('replace', blobURL);
                            $inputImage.val('');
                        } else {
                            showMessage('Please choose an image file.');
                        }
                    }
                });
            } else {
                $inputImage.parent().remove();
            }


            // Options
            $('.docs-options :checkbox').on('change', function () {
                var $this = $(this);

                options[$this.val()] = $this.prop('checked');
                $image.cropper('destroy').cropper(options);
            });


            // Tooltips
            $('[data-toggle="tooltip"]').tooltip();

            $(".avatar-save").click(function (event) {
                console.log('ne pas rafraichir la page');
                in_crop = false;
                var img_src = blobURL;

                $('#imageContainer img:eq(0)').attr('src', 'public/img/fancybox_loading.gif');


                console.log(photo_url);
                console.log('img:' + trueImage);

//            var dataX = $('.cropper-cropbox').width();
//            var dataY = $('.cropper-cropbox').width();
//            var dataPosition = $('.cropper-cropbox').position();
//            console.log(dataPosition);
//            var dataHeight = $('.cropper-cropbox').height();
//            var dataWidth = $('.cropper-cropbox').width();
//            var dataRotate = 0;

                //Coordonnée du crop
                json = $('#putData').val();
                console.log(json);
                var webroot = $('#webroot').val();
                console.log(webroot);
                var form = new FormData();
                form.append('avatar_file', trueImage);
                form.append('avatar_data', json);
                form.append('avatar_src', photo_url);
                form.append('root', webroot);

//                $('.modal').hide();
//                $('.modal').fade();
                
                // crop photo with a php file using ajax call
                $.ajax({
                    url: 'home/cropPhoto/',
                    type: 'POST',
                    data: form,
                    processData: false,
                    contentType: false,
                    dataType: 'JSON',
                    success: function (data) {
                        console.log('reussi');
                        console.log(data);
//                $('#photo_container').append(data);
                        //$('#imageContainer').append(data);
                        $('#imageContainer img:eq(0)').attr('src', data['img_src']);
                        $('.img-main').eq(0).val(data['img_id']);
                        $('#inputImage').val('');
                        $('.avatar-save').prop('disabled', true);
                        document.getElementById("crop-target").src = 'public/img/default.jpg';
                        $('.cropper-container img').attr('src', 'public/img/default.jpg');
                        $('.img-preview img').attr('src', 'public/img/default.jpg');
                        i++;
                    },
                    error: function (e) {
                        console.log(e);
                        console.log('erreur');
                        $('#inputImage').val('');
                        $('.avatar-save').prop('disabled', true);
                        document.getElementById("crop-target").src = 'public/img/content/default.jpg';
                        $('.cropper-container img').attr('src', 'public/img/content/default.jpg');
                        $('.img-preview img').attr('src', 'public/img/content/default.jpg');
                    }});

            });

        }());

    });

    $(document).ready(function () {
        //On cache les divs

        $("#validateCrop").click(function (event) {
            $('.avatar-save').removeAttr('disabled');
        });
    });

</script>
<input type="hidden" id="webroot" name="webroot" value="<?= WEBROOT ?>">
<div class="row">
    <div class="carousel gallery" id="imageContainer">
        <div class="col-sm-6 col-md-3 img-cropped">                            
            <img src="<?= WEBROOT ?>/public/img/default.jpg" width="270" height="270" alt="">
            <br/>
        </div>
    </div>
</div>

<div class="content col-sm-15 col-md-15 form-group">
    <div id="crop-avatar" class="container">
        <div id="add-pic" class="p_anch avatar-view" style="margin-bottom:10px; border-style:hidden;">
            <button type="button" class="btn btn-primary bottom-padding my_popup_open"><i class="fa fa-cloud-download"></i>&nbsp; Ajouter Une Photo</button>
        </div>
        <!-- Cropping modal -->
        <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form class="avatar-form" action="cropPhoto" enctype="multipart/form-data" method="post">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal" type="button">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="avatar-body">

                                <!-- Upload image and data -->

                                <label class="btn btn-primary" data-method="setAspectRatio" data-option="1" title="Set Aspect Ratio" style="margin-bottom:10px;">
                                    <input class="sr-only" id="inputImage" name="file" type="file" accept="image/*" onchange="PreviewImage()">
                                    <i class="fa fa-cloud-download" style="color:white;"> Charger une image</i>
                                </label>
                                <script type="text/javascript">
                                    function PreviewImage() {
                                        var oFReader = new FileReader();
                                        oFReader.readAsDataURL(document.getElementById("inputImage").files[0]);

                                        oFReader.onload = function (oFREvent) {
                                            in_crop = true;
                                            photo_url = oFREvent.target.result;
                                            console.log(photo_url);
                                            console.log(trueImage);


                                        };
                                    }
                                </script>


                                <!-- Crop and preview -->
                                <div class="row">
                                    <div class="col-md-7" style="background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQAQMAAAAlPW0iAAAAA3NCSVQICAjb4U/gAAAABlBMVEXMzMz////TjRV2AAAACXBIWXMAAArrAAAK6wGCiw1aAAAAHHRFWHRTb2Z0d2FyZQBBZG9iZSBGaXJld29ya3MgQ1M26LyyjAAAABFJREFUCJlj+M/AgBVhF/0PAH6/D/HkDxOGAAAAAElFTkSuQmCC);">
                                        <div class="avatar-wrapper">
                                            <div class="img-container">
                                                <img id="crop-target" src="<?= WEBROOT ?>/public/img/default.jpg" alt="Picture">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="docs-preview clearfix" > 
                                            <div class="img-preview preview-lg "></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row avatar-btns" >
                                    <div class="col-md-9" style="margin-bottom:10px;">
                                        <div class="btn-group">
                                            <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees" data-toggle="tooltip" data-placement="bottom" title="Rotate -90 degrees"><i class="fa fa-rotate-left" style="color:white;"></i></button>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees" data-toggle="tooltip" data-placement="bottom" title="Rotate 90 degrees"><i class="fa fa-rotate-right" style="color:white;"></i></button>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-primary" data-method="zoom" data-option="0.1" type="button" title="Zoom In" data-toggle="tooltip" data-placement="bottom" title="Zoom In"><i class="fa fa-plus-circle" style="color:white;"></i></button>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-primary" data-method="zoom" data-option="-0.1" type="button" title="Zoom Out" data-toggle="tooltip" data-placement="bottom" title="Zoom Out"><i class="fa fa-minus-circle" style="color:white;"></i></button>
                                        </div>
                                        <div class="btn-group">

                                            <button class="btn btn-primary" id="validateCrop" data-method="getData" data-option="true" data-target="#putData" type="button">
                                                <span class="docs-tooltip" data-toggle="tooltip" title="" data-original-title="">
                                                    Valider la selection
                                                </span>
                                            </button>
                                        </div>
                                        <input class="form-control" id="putData" type="text" placeholder="Get data to here or set data with this value" style="visibility: hidden">

                                    </div>
                                    <div class="col-md-3" style="margin-bottom:10px;">
                                        <button class="btn btn-primary btn-block avatar-save" data-dismiss="modal" type="button" disabled>Enregistrer</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- <div class="modal-footer">
                          <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                        </div> -->
                    </form>
                </div>
            </div>
        </div><!-- /.modal -->

        <!-- Loading state -->
        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
    </div>
</div>
</div>