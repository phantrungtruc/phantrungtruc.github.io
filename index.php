<html>
    <head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">          
    </head>
<body>
<title>Hệ Thống Giải Bài</title>
<center><h1>Hệ Thống Giải Đề Azota</h1></center>
<style>
body {
margin: 0;
}
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 340px;
}    
</style>
<center><img src="https://cdn.jsdelivr.net/gh/azota889/storage_public/azota_assets/images/logo.svg" alt="Logo Azota"></center>
<center><p>Các loại đề chấp thuận: Tin, Địa, Sử</p></center>
<center><p>Từ lớp 6 - 8 - 9</p></center>
<style type="text/css">
.form-style-1 {
	margin:10px auto;
	max-width: 400px;
	padding: 20px 12px 10px 20px;
	font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
	padding: 0;
	display: block;
	list-style: none;
	margin: 10px 0 0 0;
}
.form-style-1 label{
	margin:0 0 3px 0;
	padding:0px;
	display:block;
	font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border:1px solid #BEBEBE;
	padding: 7px;
	margin:0px;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;	
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
	-moz-box-shadow: 0 0 8px #88D5E9;
	-webkit-box-shadow: 0 0 8px #88D5E9;
	box-shadow: 0 0 8px #88D5E9;
	border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
	width: 49%;
}

.form-style-1 .field-long{
	width: 100%;
}
.form-style-1 .field-select{
	width: 100%;
}
.form-style-1 .field-textarea{
	height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
	background: #4B99AD;
	padding: 8px 15px 8px 15px;
	border: none;
	color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
	background: #4691A4;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
}
.form-style-1 .required{
	color:red;
}
</style>
<center>
<form action="coder.php" method="POST">
<ul class="form-style-1">
    <li><label>Họ Và Tên <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="Họ" /> <input type="text" name="field2" class="field-divided" placeholder="Tên" /></li>
    <li>
        <label>Lớp <span class="required">*</span></label>
        <input type="text" name="field3" class="field-long" />
    </li>
    <li>
        <label>Loại Đề</label>
        <select name="field4" class="field-select">
        <option value="Lịch Sử">Lịch Sử</option>
        <option value="Địa Lí">Địa Lí</option>
        <option value="Tin Học">Tin Học</option>
        </select>
    </li>
    <li>
        <label>Liên Kết Làm Bài Azota <span class="required">*</span></label>
        <textarea name="field5" id="field5" class="field-long field-textarea"></textarea>
    </li>
    <li>
        <input type="submit" value="Xác Nhận" />
    </li>
</ul>
</form>
 </center>
</body>
<footer>
<center><p>Hệ thống làm bởi @Vinh Developer</p></center>    
</footer>
</html>