<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">DC Justiceposting</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="News.php">News</a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="jumbotron">
  <h1>Contact Us</h1>
  <p></p>
</div>

<section class="my-5">
    <div>
        <h3 class="text-center">How to contribute?</h3>
</div>
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            
        </div> 
        <div class="col-lg-12 col-md-12 col-15">
            <h2></h2>
             <p1 class="text-center"> If you want your articles or Memes to get published on our page 
              please post the link down from The official Justicepostice Group below in the link section and for any queries or FAQs put it in the comment section down below </p1>
            <a href="contact.php"></a>
        </div>  
    </div>
</div>
<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="fbusername" autocomplete="off" class="form-control">
</div>
<div class="form-group">
<label>Link</label>
<input type="text" name="postlink" autocomplete="off" class="form-control">
</div>
<div class="form-group">
<label>Comments</label>
<textarea class="form-control" name="comments"> 
</textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="contact.php"></a>
</div>
</section>
<footer>
<p class="p-3 bg-dark text-white text-center">DC JucticepostingFB</p>
</footer>
</body>
</html>