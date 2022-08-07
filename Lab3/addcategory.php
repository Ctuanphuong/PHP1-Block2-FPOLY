
<div class="container-add">
  <h1>Category</h1>
  <form action="" method="get">
      <div>
          <label>Category name: <input type="text" name="namecategory"></label> 
      </div>
      <div class="btn-sub">
          <button type="submit">Submit</button>
      </div>
  </form>
  </div>
  <style>
    .container-add {
    width: 500px;
    background-color: rgb(0, 142, 231);
    margin: 20px auto;
  }
  .container-add h1 {
    padding-top: 20px;
    text-align: center;
    color: rgb(255, 252, 55);
    font-weight: 900;
  }
  .container-add form {
    margin: 20px 0px;
  }

  .container-add input {
    width: 350px;
    outline: none;
    border: 1px solid white;
    height: 25px;
  }
  
  .container-add input:focus {
    width: 350px;
    background: lightgray;
    outline: none;
  }

  .container-add select {
    border-radius: 5px;
    width: 120px;
    height: 20px;
   
  }
  .btn-sub{ 
   text-align: center;
  }
  .container-add button {
    width: 80px;
    height: 25px;
    background: rgb(248, 244, 8);
    color: white;
    font-weight: bold;
    border: 1px solid rgb(255, 252, 55);
    margin: 20px 60px;
  }
  .container-add button:hover {
    width: 80px;
    height: 25px;
    background: rgb(231, 227, 20);
    color: white;
    font-weight: bold;
    border: 1px solid rgb(255, 252, 55);

  }
  .container-add label{ 
color: white;
font-weight: bold;
margin-left: 20px;
  }
  </style>
 