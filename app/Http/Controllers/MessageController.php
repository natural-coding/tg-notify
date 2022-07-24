<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    // Get and show all messages
    public function index()
    {

    }

    // Show single message
    public function show()
    {

    }

    // Store Message Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'text' => 'required'
        ]);


        //dd($formFields);
        //dd($request->all());

/*        $apiToken = "5493423840:AAEgupjcK9jZtsNOCS8sUG4W2RGdlFrTF4g";
        $data = [
            'chat_id' => '805133870',
            'text' => 'Hello from PHP!'
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                         http_build_query($data) );

        dd($response);
*/
        Message::create($formFields);

        return redirect('/')->with('message', 'Message created successfully!');
    }

}
