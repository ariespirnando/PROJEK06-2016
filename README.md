# PROJEK06-2016
Codeigniter SPK

Paket Instaler
https://drive.google.com/drive/folders/0B4qJfVmGU5Ggb0ZNUWF5ZFpGZEk?usp=sharing
https://www.dropbox.com/s/dlye267szxfjwqd/aries.rar?dl=0
http://www.dumetschool.com/blog/jQuery-Datepicker-Memilih-Tanggal-dengan-jQuery
https://drive.google.com/file/d/0B4qJfVmGU5GgcmJ1bzMwWmFQVFE/view?usp=sharing

versi 1
<form name="myform">
  Category: <select size="1" name="D1" onChange="dis_able()">
  <option>Category A</option>
  <option>Category B</option>
  <option>Catagory C</option>
  <option value="Others">Others</option>
  </select><br>
  Others pls specify: <input disabled type="text" name="otherz" size="20" value="pls specify"></p>
  <p><input type="submit" value="Submit" name="B1"></p>

   <script language="javascript">
		function dis_able()
		{
			if(document.myform.D1.value != 'Others')
				document.myform.otherz.disabled=1;
			
			else
				document.myform.otherz.disabled=0;
		}
	</script>	
</form>

versi 2
<script type="text/javascript">
	function showhide(val) {
	document.getElementById('id').disabled = val !== '1';
	}
</script>

<p>
<select name="residency" id="residency" tabindex="18" onchange="showhide(this.value)">
	<option value="0">No</option>
	<option value="1" id="1">Yes</option>
</select>
</p>
<p>
<input type="text" name="years_in_alaska" id="id" disabled="true" />
</p>
