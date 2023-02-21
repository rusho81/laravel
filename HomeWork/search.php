<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework One</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
<body>
<div class="container center">
  <h1>Search the Customer</h1>
    <form action="search.php" method ="post">
        <div class="input-group mb-3">
            <input type="text" name="customer" class="form-control" placeholder="Valid Input are : Rusho, Ful, Kamal">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Find</button>
        </div>
    </form>
    <?php 
   $info = isset($_REQUEST['customer'])?$_REQUEST['customer']:'';
   if($info){
     echo "User is searching for {$info}"."<br/></br>";
  }
  $results = searchCustomer($info);

  function searchCustomer($info){
    $database = array("Rusho", "Ful", "Kamal");
    $searchIndx = array_search($info, $database);
    if ($searchIndx !== false){
        echo "The customer {$info} is found at index no: {$searchIndx}";
    }else{
        echo "The customer {$info} is not found in our database";
    }
  }
  ?>



  </div>

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>