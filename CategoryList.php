
    <div class="select-box">
 <div class="select-city-for-local-ads ads-list">
 <label>Select your city to see local ads</label>
     <form action="byregion.php" method="post" id="form_2">
<select id="city_2" name="city" >
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
       $("#city_2").change(function(){
$('#form_2').submit();});
       
       
   });
     </script>
</div>
	<div class="browse-category ads-list">
					<label>Browse Categories</label>
        <form method="get" action="post.php" id="browse">
<select class="selectpicker show-tick" data-live-search="true" id="catego" name="catego"><option data-tokens="Select">Browse your Category</option>
					  <option data-tokens="Furniture">Furniture</option>
					  <option data-tokens="Mobiles">Mobiles</option>
<option data-tokens="Electronics & Appliances">Electronics & Appliances</option>
					  <option data-tokens="Cars">Cars</option>
					  <option data-tokens="Bikes">Bikes</option>
					  
					  <option data-tokens="Fashion">Fashion</option>
					  
					</select>
            </form>
        <script type="text/javascript">
     
   $(document).ready(function(){
       $("#catego").change(function(){
$('#browse').submit();});
       
       
   });
     </script>
				</div>			
<div class="search-product ads-list">
<label>Search for a specific product</label>
    <form method="post" action="bysearch.php">
<div class="search">
  <div id="custom-search-input">
    <div class="input-group">
      <input type="text" class="form-control input-lg" placeholder="search" name="search" />
      <span class="input-group-btn">
         <button class="btn btn-info btn-lg" type="button" name="send">
        <i class="glyphicon glyphicon-search"></i>
      </button>
							</span>
    </div>
   </div>
  </div>
        </form>
 </div>
<div class="clearfix"></div>
</div>
    