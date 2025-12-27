<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $company_projects = Project::where('project_type', 'company')
            ->Published()
            ->Ordered()
            ->take(3)
            ->get();

        $personal_projects = Project::where('project_type', 'personal')
            ->Published()
            ->Ordered()
            ->take(3)
            ->get();



        return view('welcome', compact('company_projects', 'personal_projects'));
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'user_message' => $validated['message'],
        ];

        Mail::send('email.contact', $data, function ($mail) {
            $mail->to('sandeepamuthumal3@gmail.com')
                ->subject('New Contact Message');
        });

        Mail::send('email.autoreply', $data, function ($mail) use ($data) {
            $mail->to($data['email'])
                ->subject('Thanks for contacting us');
        });

        return response()->json([
            'status' => true,
            'message' => 'Your message has been sent successfully!'
        ]);
    }
}
