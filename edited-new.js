$('document').ready(function(){


			// time ago

			$('time.timeago').timeago();



			
			// get the user
			$('.fa').click(function(){
					// for  like heart button
					var $this = $(this);	
					var id = $this.data('id');			
					//alert('ok new.'+id);

					// get the username

					
					// for like counter add 1
					
					var likeid = $('.lk-space'+id).text();			
					//alert('ok new.'+likeid);
					var getid  = $('#get-id'+id).text();

					

					if($(this).hasClass('fa-heart-o')){

						$(this).removeClass('fa-heart-o').addClass('fa-heart');
						$('.lk-space'+id).html(eval(++likeid));
						//alert('Likes'+likeid);
						
					}

					else if($(this).hasClass('fa-heart')){

						$(this).removeClass('fa-heart').addClass('fa-heart-o');
						$('.lk-space'+id).html(eval(likeid-=1));
						//alert('Likes'+likeid);
					}
					
					//alert("hello this id is:"+likeid+"id got"+getid);
					likesend = likeid;
					// send this data to update


				    $.ajax({
				        type: 'POST',
				        url: 'update.php',
				        data: { id: getid,liked:likesend},
				        success: function(response) {
				            $('#add').html(response);
				        }
				    }); //ajax ends here

// same as on img doubleclick



					
			}); // like heart function ends





			


			

		
	
		


		



});