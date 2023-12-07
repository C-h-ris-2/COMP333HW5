# COMP333HW5
#3. HOW TO RUN OUR BACKEND TESTS:
  1. First you must clone our repository for the backend of hw3 again, now named comp333-hw3-backend.
  2. Once cloned, code the folder in this repo under the name "test-project", and paste that folder into the same folder which index.php is held.
  3. Make a new database called user_hw2, make two tables using the following queries:
     
  5. In the file for BackendTests, change the id number for the update function to a number that already exists in the table, as well as the login function to a username and password that exists. 
  6. Then, run
  ```zsh
  php vendor/bin/phpunit tests
```





#6. When asking chatgpt to write me a test, all I had to do was be as specific as I could in order to receive exactly what I wanted. Into the open ai chat, I put "write me code that writes a test to see that i get a status code 200 for the backend controller using phpunit testing". In response, it gave me back the following code:
```zsh
<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class BackendControllerTest extends TestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = new Client([
            'base_uri' => 'http://your-backend-url/', // Replace with your actual backend URL
        ]);
    }

    public function testStatusCode()
    {
        $response = $this->client->get('/your-backend-endpoint'); // Replace with your actual backend endpoint

        $statusCode = $response->getStatusCode();

        $this->assertEquals(200, $statusCode, 'Expected status code 200, but received ' . $statusCode);
    }
}

```
This code looks almost identical to many of the tests I wrote, which ran correctly while testing my backend. I believe that if we were to want it to write a more precise line of code that can look almost identical to that which we use to write our tests, we can provide exactly the name of our functions, the url, and every specific detail in order to make it as accurate is possible. This makes sense considering the more information you give it, the better its response will be. 
