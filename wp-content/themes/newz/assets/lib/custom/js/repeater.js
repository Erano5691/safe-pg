jQuery(document).ready(function($) {

    function NewzCheckValue(value,arr){
      var status = 'hasnot';
     
      for(var i=0; i<arr.length; i++){
        var name = arr[i];
        if(name == value){
          status = 'has';
          break;
        }
      }

      return status;
    }

    // Show Title Sections While Loadiong.
    $('.newz-repeater-field-control').each(function(){

        var title = $(this).find('.home-section-type option:selected').text();
        $(this).find('.newz-repeater-field-title').text(title);
        var title_key = $(this).find('.home-section-type option:selected').val();

        $(this).find('.home-repeater-fields-hs').hide();
        $(this).find('.'+title_key+'-fields').show();

        $(this).find('.home-section-type select option').each(function(){

            var title_key_2 = $(this).val();
            if( title_key != title_key_2 ){

                $(this).remove();

            }
        });
        
        var tabchecked = $(this).find(".ed-tabs-ac input[type='checkbox']").val();
        if( title_key == 'banner-blocks-1' ){
            if( tabchecked == 'no' ){
                $(this).find('.banner-block-1-tab-ac').hide();
            }
        }

    });


    $(".ed-tabs-ac input[type='checkbox']").click(function(){

        if( $(this).val() == 'no' || $(this).val() == '' ){
            $(this).closest('.newz-repeater-field-control').find('.banner-block-1-tab-ac').show();
        }else{
            $(this).closest('.newz-repeater-field-control').find('.banner-block-1-tab-ac').hide();
        }

    });


    $(".radio-labels label").click(function(){
        
        $(this).closest('.radio-labels').find('label').removeClass('radio-active');
        $(this).addClass('radio-active');

    });



    // Show Title After Secect Section Type.
    $('.home-section-type select').change(function(){

        var optionSelected = $("option:selected", this);
        var textSelected   = optionSelected.text();
        var title_key = optionSelected.val();

        $(this).closest('.newz-repeater-field-control').find('.home-repeater-fields-hs').hide();
        $(this).closest('.newz-repeater-field-control').find('.'+title_key+'-fields').show();

        $(this).closest('.newz-repeater-field-control').find('.newz-repeater-field-title').text( textSelected );
        if( title_key == 'banner-blocks-1' ){
            var tabchecked = $(this).closest('.newz-repeater-field-control').find(".ed-tabs-ac input[type='checkbox']").val();
            if( tabchecked == 'no' || tabchecked == '' ){
                $(this).closest('.newz-repeater-field-control').find('.banner-block-1-tab-ac').hide();
            }
        }

    });

    // Save Value.
    function newz_refresh_repeater_values(){

        $(".newz-repeater-field-control-wrap").each(function(){
            
            var values = []; 
            var $this = $(this);
            
            $this.find(".newz-repeater-field-control").each(function(){
            var valueToPush = {};   

            $(this).find('[data-name]').each(function(){
                var dataName = $(this).attr('data-name');
                var dataValue = $(this).val();
                valueToPush[dataName] = dataValue;
            });

            values.push(valueToPush);
            });

            $this.next('.newz-repeater-collector').val( JSON.stringify( values ) ).trigger('change');
        });

    }

    $("body").on("click",'.newz-add-control-field', function(){

        var $this = $(this).parent();
        if(typeof $this != 'undefined') {

            var field = $this.find(".newz-repeater-field-control:first").clone();


            if(typeof field != 'undefined'){
                
                field.find("input[type='text'][data-name]").each(function(){
                    var defaultValue = $(this).attr('data-default');
                    $(this).val(defaultValue);
                });

                field.find("textarea[data-name]").each(function(){
                    var defaultValue = $(this).attr('data-default');
                    $(this).val(defaultValue);
                });

                field.find("select[data-name]").each(function(){
                    var defaultValue = $(this).attr('data-default');
                    $(this).val(defaultValue);
                });


                field.find(".selector-labels label").each(function(){
                    var defaultValue = $(this).closest('.selector-labels').next('input[data-name]').attr('data-default');
                    var dataVal = $(this).attr('data-val');
                    $(this).closest('.selector-labels').next('input[data-name]').val(defaultValue);

                    if(defaultValue == dataVal){
                        $(this).addClass('selector-selected');
                    }else{
                        $(this).removeClass('selector-selected');
                    }
                });
                
                field.find('.newz-fields').show();

                $this.find('.newz-repeater-field-control-wrap').append(field);
                $('.accordion-section-content').animate({ scrollTop: $this.height() }, 1000);
                newz_refresh_repeater_values();
            }

            // Show Title After Secect Section Type.
            $('.home-section-type select').change(function(){
                var optionSelected = $("option:selected", this);
                var textSelected   = optionSelected.text();
                var title_key = optionSelected.val();

                $(this).closest('.newz-repeater-field-control').find('.home-repeater-fields-hs').hide();
                $(this).closest('.newz-repeater-field-control').find('.'+title_key+'-fields').show();

                $(this).closest('.newz-repeater-field-control').find('.newz-repeater-field-title').text(textSelected);

                $(this).closest('.newz-repeater-field-control').find('.newz-repeater-field-title').text( textSelected );
                if( title_key == 'banner-blocks-1' ){
                    var tabchecked = $(this).closest('.newz-repeater-field-control').find(".ed-tabs-ac input[type='checkbox']").val();
                    if( tabchecked == 'no' || tabchecked == '' ){
                        $(this).closest('.newz-repeater-field-control').find('.banner-block-1-tab-ac').hide();
                    }
                }

            });


            $(".radio-labels label").click(function(){
        
                $(this).closest('.radio-labels').find('label').removeClass('radio-active');
                $(this).addClass('radio-active');

            });

            field.find(".newz-type-radio input[type='radio']").each(function(){
                    var defaultValue = $(this).closest('.radio-labels').next('input[data-name]').attr('data-default');
                $(this).closest('.radio-labels').next('input[data-name]').val(defaultValue);
                
                if($(this).val() == defaultValue){
                    $(this).prop('checked',true);
                }else{
                    $(this).prop('checked',false);
                }
            });
            
            // Active Callback
            $(".ed-tabs-ac input[type='checkbox']").click(function(){

                if( $(this).val() == 'no' ){
                    $(this).closest('.newz-repeater-field-control').find('.banner-block-1-tab-ac').show();
                }else{
                    $(this).closest('.newz-repeater-field-control').find('.banner-block-1-tab-ac').hide();
                }

            });


            $('.newz-repeater-field-control-wrap li:last-child').find('.home-repeater-fields-hs').hide();
            $('.newz-repeater-field-control-wrap li:last-child').find('.grid-posts-fields').show();

            $('.newz-repeater-field-control-wrap li').removeClass('twp-sortable-active');
            $('.newz-repeater-field-control-wrap li:last-child').addClass('twp-sortable-active');
            $('.newz-repeater-field-control-wrap li:last-child .newz-repeater-fields').addClass('twp-sortable-active extended');
            $('.newz-repeater-field-control-wrap li:last-child .newz-repeater-fields').show();

            $('.newz-repeater-field-control.twp-sortable-active .title-rep-wrap').click(function(){
                $(this).next('.newz-repeater-fields').slideToggle();
            });

            field.find('.customizer-color-picker').each(function(){

                if( $(this).closest('.newz-repeater-field-control').hasClass('twp-sortable-active') ){
                    
                    $(this).closest('.newz-repeater-field-control').find('.wp-picker-container').addClass('old-one');
                    $(this).closest('.newz-repeater-field-control').find('.newz-type-colorpicker .description.customize-control-description').after('<input data-default="" class="customizer-color-picker" data-alpha="true" data-name="category_color" type="text" value="#f6f8f8">');
                    
                    $(this).closest('.newz-repeater-field-control').find('.customizer-color-picker').wpColorPicker({
                        defaultColor: $(this).attr('data-default'),
                        change: function(event, ui){
                            setTimeout(function(){
                            newz_refresh_repeater_values();
                            }, 100);
                        }
                    }).parents('.customizer-type-colorpicker').find('.wp-color-result').first().remove();

                    $(this).closest('.newz-repeater-field-control').find('.old-one').remove();

                }
            });

            // Category Color Code end

            $('.newz-repeater-field-control-wrap li:last-child .newz-repeater-field-title').text(newz_repeater.new_section);
            $this.find(".newz-repeater-field-control:last .home-section-type select").empty().append( newz_repeater.optionns);
        }
        return false;
    });
    
    $('.newz-repeater-field-control .title-rep-wrap').click(function(){
        $(this).next('.newz-repeater-fields').slideToggle().toggleClass('extended');
    });

    //MultiCheck box Control JS
    $( 'body' ).on( 'change', '.newz-type-multicategory input[type="checkbox"]' , function() {
        var checkbox_values = $( this ).parents( '.newz-type-multicategory' ).find( 'input[type="checkbox"]:checked' ).map(function(){
            return $( this ).val();
        }).get().join( ',' );
        $( this ).parents( '.newz-type-multicategory' ).find( 'input[type="hidden"]' ).val( checkbox_values ).trigger( 'change' );
        newz_refresh_repeater_values();
    });

    $('body').on('change','.newz-type-radio input[type="radio"]', function(){
        var $this = $(this);
        $this.parent('label').siblings('label').find('input[type="radio"]').prop('checked',false);
        var value = $this.closest('.radio-labels').find('input[type="radio"]:checked').val();
        $this.closest('.radio-labels').next('input').val(value).trigger('change');
    });

    //Checkbox Multiple Control
    $( '.customize-control-checkbox-multiple input[type="checkbox"]' ).on( 'change', function() {
        checkbox_values = $( this ).parents( '.customize-control' ).find( 'input[type="checkbox"]:checked' ).map(
            function() {
                return this.value;
            }
        ).get().join( ',' );

        $( this ).parents( '.customize-control' ).find( 'input[type="hidden"]' ).val( checkbox_values ).trigger( 'change' );
    });

    $('.customizer-color-picker').each(function(){
        $(this).wpColorPicker({
            defaultColor: $(this).attr('data-default'),
            change: function(event, ui){
                setTimeout(function(){
                newz_refresh_repeater_values();
                }, 100);
            }
        }).parents('.customizer-type-colorpicker').find('.wp-color-result').first().remove();
    });

    // ADD IMAGE LINK
    $('.customize-control-repeater').on( 'click', '.twp-img-upload-button', function( event ){
        event.preventDefault();

        var imgContainer = $(this).closest('.twp-img-fields-wrap').find( '.thumbnail-image'),
        placeholder = $(this).closest('.twp-img-fields-wrap').find( '.placeholder'),
        imgIdInput = $(this).siblings('.upload-id');

        // Create a new media frame
        frame = wp.media({
            title: newz_repeater.upload_image,
            button: {
            text: newz_repeater.use_image
            },
            multiple: false  // Set to true to allow multiple files to be selected
        });

        // When an image is selected in the media frame...
        frame.on( 'select', function() {

        // Get media attachment details from the frame state
        var attachment = frame.state().get('selection').first().toJSON();

        // Send the attachment URL to our custom image input field.
        imgContainer.html( '<img src="'+attachment.url+'" style="max-width:100%;"/>' );
        placeholder.addClass('hidden');

        // Send the attachment id to our hidden input
        imgIdInput.val( attachment.url ).trigger('change');

        });

        // Finally, open the modal on click
        frame.open();
    });
    // DELETE IMAGE LINK
    $('.customize-control-repeater').on( 'click', '.twp-img-delete-button', function( event ){

        event.preventDefault();
        var imgContainer = $(this).closest('.twp-img-fields-wrap').find( '.thumbnail-image'),
        placeholder = $(this).closest('.twp-img-fields-wrap').find( '.placeholder'),
        imgIdInput = $(this).siblings('.upload-id');

        // Clear out the preview image
        imgContainer.find('img').remove();
        placeholder.removeClass('hidden');

        // Delete the image id from the hidden input
        imgIdInput.val( '' ).trigger('change');

    });

    $("#customize-theme-controls").on("click", ".newz-repeater-field-remove",function(){
        if( typeof  $(this).parent() != 'undefined'){
            $(this).closest('.newz-repeater-field-control').slideUp('normal', function(){
                $(this).remove();
                newz_refresh_repeater_values();
            });
            
        }
        return false;
    });

    $('.wp-picker-clear').click(function(){
         newz_refresh_repeater_values();
    });

    $('#customize-theme-controls').on('click', '.newz-repeater-field-close', function(){
        $(this).closest('.newz-repeater-fields').slideUp();
        $(this).closest('.newz-repeater-field-control').toggleClass('expanded');
    });

    /*Drag and drop to change order*/
    $(".newz-repeater-field-control-wrap").sortable({
        axis: 'y',
        orientation: "vertical",
        update: function( event, ui ) {
            newz_refresh_repeater_values();
        }
    });

    $("#customize-theme-controls").on('keyup change', '[data-name]',function(){
         newz_refresh_repeater_values();
         return false;
    });

    $("#customize-theme-controls").on('change', 'input[type="checkbox"][data-name]',function(){
        if($(this).is(":checked")){
            $(this).val('yes');
        }else{
            $(this).val('no');
        }
        newz_refresh_repeater_values();
        return false;
    });

});