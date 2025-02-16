<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;

class ImportContactController extends Controller
{

    public function importXml(Request $request)
    {
        $filePath = $request->file('xml_file')->getRealPath();
        $xml = simplexml_load_file($filePath);
    
        foreach ($xml->contact as $contact) {
            Contact::create([
                'name' => (string) $contact->name,
                'phone' => isset($contact->phone) ? (string) $contact->phone : null,
            ]);
        }
    
        return redirect()->route('contacts.index')->with('success', 'Contacts imported successfully!');
    }
    

}