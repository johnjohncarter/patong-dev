<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'title' => 'required',
            'detail' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('contact')->withErrors($validator)->withInput();
        }

        $data['name'] = $request->input('name');
        $data['surname'] = $request->input('surname');
        $data['title'] = $request->input('title');
        $data['detail'] = $request->input('detail');
        try {
            Contact::query()->create($data);
        } catch (\Exception $exception) {
            return redirect('contact')->withErrors($exception->getMessage())->withInput();
        }
        return redirect('contact')->withSuccess('submit your contact successfully !!');
    }

    public function select()
    {
        $contact = Contact::query()->get();
        return view('contact_list', ['contacts' => $contact]);
    }

    public function update(Request $request, $contact_id)
    {
        return view('contact');
    }
}
