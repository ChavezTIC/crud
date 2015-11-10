<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Nerd;

//use Auth;

class NerdController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$nerds = Nerd::all();

		return view('nerds.index')->with('nerds', $nerds);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('nerds.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//Validar los campos que recibimos del formulario
		$this->validate($request,[
			'name' => 'required|max:255',
			'email' => 'required|unique:users|email|max:255',
			'nerd_level' => 'required|numeric'
		]);

		$nerd = new Nerd;
		$nerd->name 		= $request->input('name');
		$nerd->email 		= $request->input('email');
		$nerd->nerd_level	= $request->input('nerd_level');
		$nerd->save();

		return redirect()->route('nerds')->with('message','Successfully created nerd!');
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$nerd = Nerd::find($id);

		return view('nerds.show')->with('nerd', $nerd);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$nerd = Nerd::find($id);

		return view('nerds.edit')->with('nerd', $nerd);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//Validar los campos que recibimos del formulario
		$this->validate($request,[
			'name' => 'required|max:255',
			'email' => 'required|unique:users|email|max:255',
			'nerd_level' => 'required|numeric'
		]);

		$nerd = Nerd::find($id);
		$nerd->name 		= $request->input('name');
		$nerd->email 		= $request->input('email');
		$nerd->nerd_level	= $request->input('nerd_level');
		$nerd->save();

		return redirect()->route('nerds')->with('message','Successfully updated nerd!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$nerd = Nerd::find($id);
		$nerd->delete();

		return redirect()->route('nerds')->with('message','Successfully deleted nerd!');
	}
}
