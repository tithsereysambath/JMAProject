<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
$(document).on('click', '#contact-submit', function(){
var phone1 = $('#phonenumber1').val();
	var phone2 = $('#phonenumber2').val();
	var phone3 = $('#phonenumber3').val();
  
	if(phone1.length < 2 || phone1.length > 5) {
    	console.log('phone1 loi');
    }
  
    if(phone2.length < 2 || phone2.length > 5) {
		console.log('phone3 loi');
    }
  
    if(phone3.length < 2 || phone3.length > 5) {
		console.log('phone3 loi');
    }
});

</script>
<!-- end Simple Custom CSS and JS -->
