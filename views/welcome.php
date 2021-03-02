<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>

   <body>
      <!-- dari dua curly  bracket menjadi bertambah & didalamnya -->
      <!-- dari satu curly bracket dan tanda percent menjadi hanya satu saja curly bracket-->
      Hello, {{ name }}! You are {{ age }} years old.<br /><br />

      { if age > 20 }
      You are over the age of 20!<br /><br />
      { endif }

      { for user in users }
      {{ user.name }} is {{ user.age }} years old.<br />
      { endfor }
      <br />
      <br />
      {{ 'string' | md5 }}
   </body>

</html>
