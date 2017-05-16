
 <fieldset> 

  <legend>Material Type</legend>

  <div class="form-group">

   <table class="table table-stripped">

     <tr>

       <th>Item Type</th>

       <th>Type 1</th>

       <th>Type 2</th>

       <th>Type 3</th>

       <th>Type 4</th>

       <th>Total</th>

     </tr>

     <tr>

       <td width="15%">No of Bags</td>

       <td><input type="number" class="form-control material_type" name="material_type_1"></td>

       <td><input type="number" class="form-control material_type" name="material_type_2"></td>

       <td><input type="number" class="form-control material_type" name="material_type_3"></td>

       <td><input type="number" class="form-control material_type" name="material_type_4"></td>

       <td><div class="material_type_total color_red">0</div></td>

     </tr>

   </table>

  </div>

</fieldset>

 <br/>



<fieldset> 

  <legend>Bag Type</legend>

  <div class="form-group">

   <table class="table table-stripped">

     <tr>

       <th>Bag Type</th>

       <th>Type 1</th>

       <th>Type 2</th>

       <th>Type 3</th>

       <th>Type 4</th>

       <th>Total</th>

     </tr>

     <tr>

       <td width="15%">No of Bags</td>

       <td><input type="number" class="form-control bag_type" name="bag_type_1" ></td>

       <td><input type="number" class="form-control bag_type" name="bag_type_2" ></td>

       <td><input type="number" class="form-control bag_type" name="bag_type_3" ></td>

       <td><input type="number" class="form-control bag_type" name="bag_type_4" ></td>

       <td><div class="bag_type_total color_red">0</div></td>

     </tr>

   </table>

  </div>

</fieldset>

<br/>

<!-- ------------- -->

 <fieldset> 

  <legend>Quality Cut</legend>

  <div class="form-group">

   <table class="table table-stripped">

     <tr>

       <th>Select</th>

       <th>No of Bags</th>

       <th>Qc Quantity(per Bag)</th>

       <th>Total</th>

       <th>Remarks</th>

       

     </tr>

     <tr>

       <td width="20%">

          <div class="dropdown">

            <select class="form-control" aria-labelledby="dropdownMenu1">

              <option>MC</option>

              <option>Garda</option>

              <option>Discolor</option>

            </select>

          </div>

       </td>

       <td><input type="number" class="form-control quality_cut" id="qc_no_of_bags" name="qc_no_of_bags" ></td>

       <td><input type="number" class="form-control quality_cut" id="qc_quantity" name="qc_quantity" ></td>

       <td><div id="qc_total" class="color_red">0</div></td>

       <td><textarea name="qc_remarks" rows="3"></textarea></td>

     </tr>

   </table>

  </div>

</fieldset>  

<br/>

<fieldset> 

  <legend>Godown &amp; Labour Allocation </legend>

  <div class="form-group">

   <table class="table table-stripped">

     <tr>

       <th>Godown Name</th>

       <th>Job Done</th>

       <th>No. of Bags </th>

       <th>Labour Party Name </th>

       <th>Remarks</th>

       

     </tr>

     <tr>

       <td width="15%">

          <div class="dropdown">

            <select class="form-control" aria-labelledby="dropdownMenu1">

              <option>Godown 1</option>

              <option>Godown 2</option>

              <option>Godown 3</option>

            </select>

          </div>

       </td>

       <td width="17%">

         <div class="dropdown">

            <select class="form-control" aria-labelledby="dropdownMenu1">

              <option>Pending</option>

              <option>Done</option>

            </select>

          </div>

       </td>

       <td width="17%"><input type="number" class="form-control"  name="no_of_bags"></td>

       <td><input type="text" class="form-control"  name="labour_party"></td>

       <td><textarea name="qc_remarks" rows="3"></textarea></td>

     </tr>

   </table>

  </div>

</fieldset>  
<br/>
<fieldset>

  <legend>CMR Details</legend>

   <div class="form-group">

    <label for="exampleInputPassword1">Party name</label>

    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Party Name">

  </div>  

  <div class="form-group">

    <label for="exampleInputPassword1">CMR Agency</label>

    <select class="form-control">

      <option>OSCSC</option>

      <option>TDCC</option>

    </select>

  </div>  

  <div class="form-group">

    <label for="exampleInputPassword1">Truck No</label>

    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Truck No">

  </div>  

  <div class="form-group">

    <label for="exampleInputPassword1">TP No</label>

    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter TP No">

  </div>  

  <div class="form-group">

    <label for="exampleInputPassword1">TP Date</label>

    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=date('Y-m-d')?>">

  </div>  

  <div class="form-group">

    <label for="exampleInputPassword1">AC Note No</label>

    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter AC Note No">

  </div>  

  <div class="form-group">

    <label for="exampleInputPassword1">AC Note Date</label>

    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter AC Note No" value="<?=date('Y-m-d')?>">

  </div>  

  <div class="form-group">

    <label for="exampleInputPassword1">Quinatals</label>

    <input type="text" class="form-control" id="exampleInputPassword1">

  </div>  

  <div class="form-group">

    <label for="exampleInputPassword1">No of bags</label>

    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No of bags">

  </div>  

  <div class="form-group">

    <label for="exampleInputPassword1">Remarks</label>

    <textarea rows='4' name="cmr_no_of_bags" class="form-control"></textarea>

  </div>  

</fieldset>

<br/>

<fieldset>

<legend>CMR Rice Delievery Details</legend>

   <div class="form-group">

    <label for="exampleInputPassword1">CMR Agency Account</label>

    <select class="form-control">

      <option>OSCSC</option>

      <option>TDCC</option>

    </select>

  </div>  

   <div class="form-group">

    <label for="exampleInputPassword1">Delievery To</label>

    <select class="form-control">

      <option>FCI</option>

      <option>OSCSC</option>

    </select>

  </div>

  <div class="form-group">

    <label for="exampleInputPassword1">FCI Godown Name</label>

    <select class="form-control">

      <option>Godown 1</option>

      <option>Godown 2</option>

      <option>Godown 3</option>

      <option>Godown 4</option>

    </select>

  </div> 

  <div class="form-group">

    <label for="exampleInputPassword1">Lot No</label>

    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Lot No.">

  </div> 

</fieldset>

<br/>

<div class="pull-right">

  <button type="submit" class="btn btn-danger">Submit</button>

</div>



