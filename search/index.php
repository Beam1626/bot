<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta value="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta value="author" content="colorlib.com">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
  <link href="css/main.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <meta value="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title> search </title>
  <style>
    .button {
      background-color: #007FFF;
      border: none;
      color: #F0FFFF;
      padding: 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 12px;
      cursor: pointer;
      border-radius: 10px;
      margin: 2px 2px;
    }

    .input-field {
      margin: 3px 2px;
      width: 200px;

    }

    .header {
      background-image: url("/tyre.jpeg");
      padding: 200px;
      background-repeat: no-repeat;

      text-align: center;
    }

    .topnav #myLinks {
      display: none;
    }

    .topnav {
      overflow: hidden;
      background-color: rgb(135, 168, 240);
      position: relative;
    }

    .topnav a.icon {
      background: #e29dd3;
      display: block;
      position: absolute;
      right: 0;
      top: 0;
    }

    /* Change color on hover */
    .topnav a:hover {
      background-color: rgb(253, 253, 253);
      color: rgb(195, 216, 245);
    }


    .active {
      background-color: #f9d8fd;
      color: white;
    }

    .topnav a {
      font-size: 16px;
      display: block;
      color: #f2f2f2;
      text-align: left;
      padding: 12px 14px;
      text-decoration: none;
    }

    .column.middle {
      width: 100%;
    }

    .footer {
      background-color: white;
      padding: 10px;
      text-align: center;
    }

    .desc {
      padding: 20px;
      margin: 10px 0 0 0;
      font-size: 18px;
    }

    .container {
      margin-left: 10%;
    }

    .navbar-collapse {
      margin-right: 10%;
    }

    button.navbar-toggler {
      position: absolute;
      right: 0;
    }
  </style>
</head>

<body>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>


  </nav>
  <div class="header"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <form name="search" id="search" method="POST" action="index.php">
          <div class="advance-search">
            <p class="desc">ค้นหายางจากขนาดยางรถยนต์ </p>
            <div class="row">
              <select class="form-control" id="brand" name="brand">

                <option placeholder="" value="ทุกยี่ห้อ">ทุกยี่ห้อ</option>
                <option type="text" value="Otani">Otani</option>
                <option type="text" value="Bridgestone">Bridgestone</option>
                <option type="text" value="Michelin">Michelin </option>
                <option type="text" value="Yokohama">Yokohama</option>
                <option type="text" value="Maxxis"> Maxxis</option>
                <option type="text" value="Dunlop">Dunlop</option>
                <option type="text" value="Nitto">Nitto</option>
                <option type="text" value="Toyo">Toyo</option>
                <option type="text" value="Continental">Continental</option>
                <option type="text" value="Goodyear">Goodyear</option>
                <option type="text" value="Hankook">Hankook </option>
              </select>


              <select class="form-control" id="width" name="width">
                <option placeholder="">หน้ากว้าง</option>
                <option type="text" value="195">195</option>
              </select>

              <select class="form-control" id="series" name="series">
                <option placeholder="">ซี่รีย์</option>
                <option type="text" value="50">50</option>
              </select>


              <select class="form-control" id="edge" name="edge">
                <option placeholder="">ขอบ</option>
                <option type="text" value="15">15</option>
              </select>

            </div>
            <div class="row second">
              <div class="input-field">
                <div class="group-btn">
                  <div class="result-count">
                    <button class="button" align="right" type="submit" id="submit" name="submit">SEARCH </button>
                    <button class="button" align="right" id="delete">RESET</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <table class="table table-striped table-hover">
          <thead>
            <tr class="bg-primary text-light">
              <th class="text-center">id_tyre</th>
              <th class="text-center">width</th>
              <th class="text-center">series</th>
              <th class="text-center">edge</th>
              <th class="text-center">brand</th>
              <th class="text-center">fullprice</th>
              <th class="text-center">someprice</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="js/extention/choices.js"></script>
  <script>
    const customSelects = document.querySelectorAll("select");
    const deleteBtn = document.getElementById('delete')
    const choices = new Choices('select', 
    {
      searchEnabled: false,
      itemSelectText: '',
      removeItemButton: true,
    });
    deleteBtn.addEventListener("click", function(e) {
      e.preventDefault()
      const deleteAll = document.querySelectorAll('.choices__button')
      for (let i = 0; i < deleteAll.length; i++) {
        deleteAll[i].click();
      }
    });
  </script>
  
</body>

</html>