<!-- Footer ************************** -->
<div class="footer">
    <div class="footer_block">
        
    </div>
</div>
<div id="dialog-message" title="">
<p id="ti91b1" class="ti91b1" >
	asdasd
</p>

</div>
<script type="text/javascript">
	$(document).on("click", ".submit_btn", function() {
		var info2_input_code=$("#info2_input_code").val();
		var info2_input_word=$("#info2_input_word").val();
		if (info2_input_code==""||info2_input_word=="") {
			$( "#ti91b1" ).html("กรุณาไส่ข้อมูลให้ครบทุกช่อง");
			$( "#dialog-message" ).dialog( "open" );
		}else{
        	$.ajax({
                method: "POST",
                url: "ajax/a_message.php",
                data: {
                    "flag": "add_message",
                    "text": info2_input_word,
                    "employ_code": info2_input_code,
                }
            })
            .done(function(data) {
            	if (data['flag']=="OK") {
	            	$("#info2_input_code").val("");
					$("#info2_input_word").val("");
					$( "#ti91b1" ).html("ขอบคุณที่ร่วมกิจกรรม!<br>รอลุ้นรับรางวัลได้<br>วันที่ 1 กันยายน 58 :)");
					$( "#dialog-message" ).dialog( "open" );
	            }else{
	            	$( "#ti91b1" ).html(data['flag']);
					$( "#dialog-message" ).dialog( "open" );
	            }
            });
        }
        
    });
  $(function() {
    $( "#dialog-message" ).dialog({
    	autoOpen: false,
      modal: true,
      buttons: {
        CLOSE: function() {
          $( this ).dialog( "close" );
        }
      }
    });
    $(".ui-dialog-titlebar").hide();
  });
</script>