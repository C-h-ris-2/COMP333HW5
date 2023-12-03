<?php

use PHPUnit\Framework\TestCase;

require("vendor/autoload.php");

final class BackendTest extends TestCase
{
    protected $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = new GuzzleHttp\Client(["base_uri" => "http://172.21.76.243:8080/comp333-hw3-frontend/index.php"]);
        
    }

    public function testGet_SongList()
    {
        $response = $this->client->get('index.php/user/songlist', []);
        $this->assertEquals(200, $response->getStatusCode());
        echo $response->getBody();
        echo "\n";
    }

    

    public function testPost_CreateUser() {
        $parameters = [
            'username' => 'Lola',
            'password' => 1234,
        ];
        $json_parameters = json_encode($parameters);
        $response = $this->client->request('POST', "index.php/user/create", [
            'body' => $json_parameters,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $data = $response ->getBody();
        echo $data ;
        echo "\n";
    }

    public function testPost_LoginUser() {
        $parameters = [
            'username' => 'Sam',
            'password' => 1234,
        ];
        $json_parameters = json_encode($parameters);
        $response = $this->client->request('POST', "index.php/user/login", [
            'body' => $json_parameters,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $data = $response->getBody();
        echo $data ;
        echo "\n";

    }

    public function testPost_FailedLogin() {
        $parameters =[
            'username' => 'Mathius',
            'password' => 123456,
        ];
        $json_parameters = json_encode($parameters);
        $response = $this->client->request('POST', 'index.php/user/login', [
            'body' => $json_parameters,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $data = $response -> getBody();
        echo $data ;
        echo "\n";
    }

    public function testPost_NewSong() {
        $parameters = [
            'username' => 'Chris',
            'artist' => 'No',
            'song' => "shutup",
            'rating' => 4,
        ];
        $json_parameters = json_encode($parameters);
        $response = $this->client->request('POST', 'index.php/user/songinsert', [
            'body' => $json_parameters,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $data = $response->getBody();
        echo $data;
        echo "\n";
    }

    public function testPost_UpdateSong() {
        $parameters = [
            'artist' => 'Tyler the Creator',
            'song' => 'NEW MAGIC WAND',
            'rating' => 4,
            'id' => 42,
        ];
        $json_parameters = json_encode($parameters);
        $response = $this->client->request('POST', 'index.php/user/updateSong', [
            'body' => $json_parameters,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $data = $response ->getBody();
        echo $data;
        echo "\n";
    }

    public function testPost_DeleteSong() {
        $parameters = [
            'id' => 70,
        ];
        $json_parameters = json_encode($parameters);
        $response = $this->client->request('POST', 'index.php/user/deleteSong', [
            'body' => $json_parameters,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $data = $response -> getBody();
        echo $data;
        echo "\n";
    }

    public function tearDown(): void
    {
        parent::tearDown();
        $this->client = null;
    }
}
?>
