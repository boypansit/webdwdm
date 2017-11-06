<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search DWDM</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    <body>

    <script src="https://www.gstatic.com/firebasejs/3.2.1/firebase.js">
    </script>

    <script>
        var config =
        {
            apiKey: "AIzaSyCWBoSd6rFV3-Hvtr0DvStb0je2-BusJ28",
            authDomain: "locationgps-e70a9.firebaseapp.com",
            databaseURL: "https://locationgps-e70a9.firebaseio.com",
            storageBucket: "locationgps-e70a9.appspot.com",
        };
            firebase.initializeApp(config);
        function getimage(index){
            var storage = firebase.storage();
            var storageRef = storage.ref();
            var input= index
            var tangRef = storageRef.child('image/'+input+'.jpg');

            tangRef.getDownloadURL().then(function(url) 
            {
                var test = url
                document.querySelector('img').src = test;
            }).catch(function(error) 
            {
                switch (error.code) 
                {
                    case 'storage/object_not_found':
                        break;

                    case 'storage/unauthorized':
                        break;

                    case 'storage/canceled':
                        break;

                    case 'storage/unknown':
                        break;
                }
            });
            var test = 'firebase_url';
            document.querySelector('img').src = test;
            console.log('Before requesting download URL');
            tangRef.getDownloadURL().then(function(url) {
                console.log('Got download URL');
            });
        }
    </script>
    <div class="row">
      <div class="col-lg-2 col-md-6">
      </div>
    <div class="col-lg-2 col-md-6">
      </div>
            <div class="col-lg-1 col-md-6">
      </div>
      <div class="col-lg-2 col-md-6">
      <center>
        <input class="form-control" type="text" id="search_dwdm" size="50px">
        <button type="button" id="SEARCH" class="btn btn-primary btn-sm">SEARCH</button>
      </center>

      </div>  
            <div class="col-lg-1 col-md-6">
      </div>  
      <div class="col-lg-2 col-md-6">

      </div>
    <div class="col-lg-2 col-md-6">
      </div>
  </div>
    <center>
    <br>
    <img height="80%" width="80%"/>
    </center>
    
    <script type="text/javascript">
    document.getElementById('SEARCH').addEventListener('click', function() {
    // var inputcity = document.getElementById("search_dwdm");
    // var strUser = inputcity.options[inputcity.selectedIndex].value;
    var strUser = document.getElementById("search_dwdm");
    console.log(search_dwdm.value);
    // console.log(strUser);
    console.log("Hello");
    var strUserinput = search_dwdm.value
    getimage(strUserinput)
  });
    // function getimage(index){
    //     console.log("This function")
    //     console.log(index)
    // }
    </script>

    </body>
</html>