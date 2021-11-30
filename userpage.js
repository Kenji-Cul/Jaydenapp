
$(document).ready(function(){
		$("#second_row").hide()
$(".menu-icon").click(function(){
 $("#second_row").show().addClass('animate__animated animate__backInDown')
})
$(".menu-icon").hover(function(){
	$(this).css('background-color','white')
	$(".fa-bars").css('color','rgba(203,32,38,0.9)')
},function(){
	$(this).css('background-color','rgba(203,32,38,0.9)')
	$(".fa-bars").css('color','white')
})
$(".required1").hide()
$(".required2").hide()
$(".required3").hide()
$(".required4").hide()
$("#signbutton").click(function(){
 var x=$('#textbox1').val()
          var y=$('#textbox2').val()
           var g=$('#textbox3').val()
          var z=$('#textbox4').val()
          var f=$('#textbox5').val()
          var m=$('#textbox6').val()
          var all=[x,y,g,z,f];
	 if(x==''&&y==''&&g==''&&z==''&&f==''&&m==''){alert('You did not give us any information');
	 $(".required1").show()
	$(".required2").show()
$(".required3").show()
$(".required4").show()}
           else if(x==''){
          	alert('You did not enter your firstname');
          }
          else if(g==''||z==''){alert('We need your email and password to complete this process');}
          else if(y==''){alert('You did not enter your lastname');}
          else if(g==''){alert('You did not enter your email');}
          else if(z==''){alert('You did not enter your password');}
          else if(f==''){alert('You did not enter your username');}
          else if(m==''){alert('We need your phone number');}

          
})
$('#realbox').click(function(){
		    var check= $('#realbox').prop('checked')
			if(check==true){
				$('#signbutton').removeAttr('disabled')
			}else{$('#signbutton').attr('disabled','disabled')}
	})				

$("#textbox1").focus(function(){
	$(this).css('background-color','rgba(0,0,0,0.3)')
	$(this).css('color','black')
	$(".required1").hide()

})
$("#textbox1").blur(function(){
	$(this).css('background-color','white')
})
$("#textbox2").focus(function(){
	$(this).css('background-color','rgba(0,0,0,0.3)')
	$(this).css('color','black')
	$(".required2").hide()
})
$("#textbox2").blur(function(){
	$(this).css('background-color','white')
})
$("#textbox3").focus(function(){
	$(this).css('background-color','rgba(0,0,0,0.3)')
	$(this).css('color','black')
	$(".required3").hide()
})
$("#textbox3").blur(function(){
	$(this).css('background-color','white')
})
$("#textbox4").focus(function(){
	$(this).css('background-color','rgba(0,0,0,0.3)')
	$(this).css('color','black')
	$(".required4").hide()
})
$("#textbox4").blur(function(){
	$(this).css('background-color','white')
})
$("#textbox5").focus(function(){
	$(this).css('background-color','rgba(0,0,0,0.3)')
	$(this).css('color','black')
})
$("#textbox5").blur(function(){
	$(this).css('background-color','white')
})
$("#textbox6").focus(function(){
	$(this).css('background-color','rgba(0,0,0,0.3)')
	$(this).css('color','black')
})
$("#textbox6").blur(function(){
	$(this).css('background-color','white')
})

$("#alert2").hide() 
$("#alert3").hide()  
$("#alert5").hide()       
$("#loginbutton").click(function(){
	var mail=$("#email").val();
	var pass=$("#password").val();
	var alldata=[mail,pass];
	 if(mail=='' && pass==''){
		$(".border").css('border','1px solid red')
		$("#alert2").show().addClass('animate__animated animate__backInDown')
		$("#alert3").hide() 
		$("#alert5").hide() 
	}
	else if(mail==''){
		$("#alert3").show().addClass('animate__animated animate__backInDown')
		$("#alert2").hide()  
		$("#alert5").hide()
	}
	else if(pass==''){
		$("#alert5").show().addClass('animate__animated animate__backInDown')
		$("#alert2").hide()
		$("#alert3").hide()
$("#alert2").hide() 
	}

})



	})
