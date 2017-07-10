<?php

namespace Malcolmknott\Redirector;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Malcolmknott\Redirector\Redirect;

class RedirectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redirects = Redirect::latest('updated_at')->paginate(50);

        return view('redirector::redirects.list')->with(['redirects' => $redirects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $redirect = new Redirect();

        return view('redirector::redirects.create')->with(['redirect' => $redirect]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'old_url' => 'required',
            'new_url' => 'required',
        ]);

        $redirect = Redirect::create([
                'old_url'   => request('old_url'),
                'new_url'   => request('new_url'),
                'note'      => request('note'),
            ]);

        return redirect()
            ->action('\Malcolmknott\Redirector\RedirectController@index')
            ->with('success', 'New redirect has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Redirect $redirect)
    {
        return view('redirector::redirects.edit')->with(['redirect' => $redirect]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Redirect $redirect)
    {
        $this->validate($request, [
            'old_url' => 'required',
            'new_url' => 'required',
        ]);

        $redirect->update([
                'old_url'   => request('old_url'),
                'new_url'   => request('new_url'),
                'note'      => request('note'),
            ]);

        return redirect()
            ->action('\Malcolmknott\Redirector\RedirectController@index')
            ->with('success', 'New redirect has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Redirect $redirect)
    {
        $redirect->delete();

        return redirect()
            ->action('\Malcolmknott\Redirector\RedirectController@index')
            ->with('success', 'New redirect has been deleted');
    }
}
