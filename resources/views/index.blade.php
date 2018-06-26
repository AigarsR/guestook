<!doctype html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <title>Viesu grāmata</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Viesu grāmata</h1>
    <hr/>
    <form method="POST" id="id-form_messages">

        <div class="form-group">
            <label for="name">Vārds: *</label>
            <input class="form-control"  name="username" type="text" id="username" required>
        </div>

        <div class="form-group">
            <label for="email">Ē-pasts: *</label>
            <input class="form-control"  name="email" type="email" id="email" required>
        </div>

     <div class="form-group">
            <label for="message">Saite uz vietni: </label>
          <input class="form-control"  name="website" type="website" id="website">
        </div>

        <div class="form-group">
            <label for="message">Ziņojuma teksts: *</label>
            <textarea class="form-control" rows="5"  name="message" cols="50 "
                      id="message" required=""></textarea>
        </div>


        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Pievienot">
        </div>

      <input type="hidden" name="_token" value="{{csrf_token()}}">

      

<div class="container">
  <h2 align="cente">Ieraksti</h2>         
  <table class="table table-hover" id="table">
    <thead>
      <tr>
        <th onclick="sortTable(0) style="width:10%">Vārds</th>
        <th style="width:12%">Ē-pasts</th>
        <th style="width:10%">Saite uz vietni</th>
        <th style="width:50%">Ziņojums</th>
        <th onclick="sortTable(1) style="width:18%">Datums</th>
        
      </tr>
       </thead>
        @foreach($guestbook as $guestbooks)
        <tbody>
        <tr>
     <td style="width:10%">{{ $guestbooks->username }}</td>
     <td style="width:12%">{{ $guestbooks->email }}</td>
     <td style="width:10%">{{ $guestbooks->website }}</td>
     <td style="width:50%">{{ $guestbooks->message }}</td>
     <td style="width:18%">{{ $guestbooks->created_at }}</td>

</tr>
    @endforeach
        </tbody>
        </table>
        {{ $guestbook->links() }}
    </div>
    

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</body>
</html>