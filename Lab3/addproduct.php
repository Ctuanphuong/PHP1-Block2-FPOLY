<link rel="stylesheet" href="./css/style.css">
<div class="container-add">
  <h1>Add Product</h1>
  <form action="" method="get">
      <div>
          <p>Product name:</p> 
          <input type="text" name="nameprd">
      </div>
      <div>
          <p>Description:</p> 
          <input type="text" name="desprd">
      </div>
      <div>
          <p>Price:</p>
          <input type="number" name="price">
      </div>
      <div>
        <p>Category</p> 
     <select name="category" id="">
        <option value="">Select Category</option>
       <option value="1">Laptop</option>
       <option value="2">iPhone</option>
       <option value="3">Samsung</option>
       <option value="4">Oppo</option>
</select>
    </div>
    <div>
         <p>Room Image:</p>
          <input type="file" name="fileimg">
      </div>
      <div>
          <button type="submit">Save</button>
      </div>
  </form>
  </div>
 