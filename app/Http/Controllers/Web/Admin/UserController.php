<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Models\Client;
use App\Services\ClientService;

class UserController extends Controller
{

    public function __construct(private ClientService $clientService)
    {
    }
    public function index()
    {
        $clients = $this->clientService->all();
        $orders = Client::get();
        return view('Web.Admin.User.index', compact('clients','orders'));
    }

    public function show($lan,string $id)
    {
        $clients = $this->clientService->show($id);
        return view('Web.Admin.User.index',compact('clients'));
    }

    public function destroy($lan,string $id)
    {
        $this->clientService->destroy($id);
        return redirect()->route('user.index');
    }

    public function search(SearchRequest $request)
    {
        $clients =  $this->clientService->search($request->validated());
        $search = $request->search;
        return view('Web.Admin.User.index',compact('clients','search'));
    }
}
