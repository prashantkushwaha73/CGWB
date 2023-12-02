

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CGWB | Live Data Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
   <!-- navbar-with-links -->
   <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark bg-gradient">
        <div class="container-fluid"><a class="navbar-brand" href="#"><i class="fas fa-search" style="margin-left: 12px;"></i></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav flex-grow-1 justify-content-between" style="margin-left: 67px;margin-right: 32px;">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="livesearch.php">Live Data</a></li>
                    <li class="nav-item"><a class="nav-link" href="Maps.html">Maps</a></li>
                    <li class="nav-item"><a class="nav-link" href="Graphs.html">Graphs</a></li>
                    <li class="nav-item"><a class="nav-link" href="AboutUs.html">About US</a></li>
                    <li class="nav-item"><a class="nav-link" href="ContactUs.html">Contact us</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="Hello"class="typing-bg">
    <div class="container typing">
        <h1>You can search data <span class="auto-typed">
        </span></h1>
    </div>
    </section>


  
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="search">
      <table class="table table-hover">
      <thead>
        <tr>
          <th>State</th>
          <th>District</th>
          <th>2H</th>
          <th>18O</th>
        </tr>
      </thead>
      <tbody id="output">
        
      </tbody>
    </table>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-typed",{
            strings : ["Statewise.", "Districtwise.", "Yearwise."],
            typeSpeed: 120,
            backSpeed: 20,
            smartBackspace: false,
            loop: true
        })
    </script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'search.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });


</script>

</body>
</html>
