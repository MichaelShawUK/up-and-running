<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Page</title>
  </head>
  <body>
    <p>This server is being served from {{ $_SERVER['DOCUMENT_ROOT'] }}</p>
    <p>Server Software: {{ $_SERVER['SERVER_SOFTWARE'] }}</p>
    <p>Client Machine: {{ $_SERVER['HTTP_USER_AGENT'] }}</p>
    <pre>
      {{ var_dump($GLOBALS) }} 
    </pre>
  </body>
</html>

