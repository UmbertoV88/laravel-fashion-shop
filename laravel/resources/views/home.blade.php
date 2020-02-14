<!DOCTYPE html>
 <html lang="it" dir="ltr">
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title></title>
     </head>
     <body>
         @foreach ($vestiti as $vestito)
             <p>ID prodotto: {{ $vestito->id }}</p>
             <p>Nome prodotto: {{ $vestito->name }}</p>
             <p>Prezzo prodotto: {{ $vestito->price }}</p>
         @endforeach
     </body>
 </html>
