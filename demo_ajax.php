<script src="js/jquery.js"></script>
<script>
    jQuery(function($){
        $("#demo1").click(function(){
            $.ajax({
				method: "POST",// phương thức dữ liệu được truyền đi
				url: "demo1.php",// gọi đến file server show_data.php để xử lý
				//data: $("#fr_form").serialize(),//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
				success : function(response){//kết quả trả về từ server nếu gửi thành công
                    $('#gio').text(response).show();
				}
			});
        });
        $("#demo2").click(function(){
            $.ajax({
				method: "POST",// phương thức dữ liệu được truyền đi
				url: "demo2.php",// gọi đến file server demo2.php để xử lý
				//data: $("#fr_form").serialize(),//lấy toàn thông tin các fields trong form bằng hàm serialize của jquery
                data: {id_hang: "abc", so_luong: "def"},
				success : function(response){//kết quả trả về từ server nếu gửi thành công
					var dataJson = $.parseJSON(response);
                    console.log(dataJson);
				}
			});
        });
    });
</script>
<!-- <div id="demo1">
    demo 1
    gio hang = <p id="gio"></p> -->
<div id="demo2">
    demo 2
</div>
<!-- <form id="fr_form">
    <input type="text" name="username">
    <input type="password" name="password">
</form> -->