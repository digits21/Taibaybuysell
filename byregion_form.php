<form action="byregion.php" method="post" id="form">
<select id="city" name="city" >
   <optgroup label="Popular Cities">
   <option selected style="display:none;color:#eee;">Entire Taiwan</option>
   <option value="Taipei">Taipei</option>
   <option value="Hsinchu">Hsinchu</option>
   <option value="Taichung">Taichung</option>
   <option value="Kaoshiung">Kaoshiung</option>
   <option value="Tainan">Tainan</option>
</select>
         </form>
     <script type="text/javascript">
     
   $(document).ready(function(){
       $("#city").change(function(){
$('#form').submit();});
       
       
   });
     </script>