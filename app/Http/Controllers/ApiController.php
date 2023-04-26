<?php
//Desde aquí controlamos el controlador del Whasap api
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function enviarMensaje(Request $request)
    {
        

        // Lógica para enviar un mensaje a través de WhatsApp API
    }

    //Creanis la funcion de obtener datos
    public function obtenerDatos()
    {
        $userToken = 'EAAwgQa2nBQMBABWeAF84F0YjM3qewS4AvWDjn61D2hzChtpZC7MiY0dx9V2NGH8e4g9OLp9us5pXVX82RKLzm9L1ZA7ghohpf0ouoGVLy8XffmZAiVb6qG8JohUf9xQRDKUDNcZBZAJqtqp5UOr9g3ZBuXpfjss8F9vYNSe198XNxzeu3x826SXIoTsj6ZAWqEZD';
        $appToken = '3413166178895107|jtgbS5RSPeC6AeQ6jYQ4reQpUZ8';
        // Inicializar el cliente GuzzleHttp
        $client = new Client();

        $response = $client->request('GET', 'https://api.example.com/datos', [
            'headers' => [
                'Authorization' => 'Bearer ' . $userToken,
                'App-Token' => $appToken
            ]
        ]);

        $datos = json_decode($response->getBody());

        return view('datos', ['datos' => $datos]);
    }

}
