$(function() {

	if( $('body').hasClass('dashboard') ) {

		
		filepicker.setKey('A2uuE0fWTRnacmRKuoqSvz');

		filepicker.makeDropPane($('.drop_art_here')[0], {
		    multiple: true,
		    dragEnter: function() {
		        $(".drop_art_here p").text("Drop to upload").parent().addClass('drag_enter')
		    },
		    dragLeave: function() {
		        $(".drop_art_here p").text("Drop files here").parent().removeClass('drag_enter');
		    },
		    onSuccess: function(fpfiles) {
		        $(".drop_art_here p").text("Done, see result below").parent().removeClass('uploading').addClass('done');
		        //$("#localDropResult").text(JSON.stringify(fpfiles));

		        $.ajax({
			        type: "POST",
			        url: base_url+"art/add_ajax",
			        data: JSON.stringify(fpfiles),
			    }).done(function( view_data ) {
			        window.location = base_url+'dasboard'
			    });

		    },
		    onError: function(type, message) {
		        $("#localDropResult").text('('+type+') '+ message);
		    },
		    onProgress: function(percentage) {
		        $(".drop_art_here p").text("Uploading ("+percentage+"%)").parent().removeClass('drag_enter').addClass('uploading');;
		    }
		});


	}


})