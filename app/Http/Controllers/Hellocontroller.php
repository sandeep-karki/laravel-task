<?php 

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Hellocontroller extends Controller{

	public function index()
	{
		return view('test');
	}

	public function form(Request $request)
	{
		$this->validate($request,[
			'name'=>'required',
			'address'=>'required|nullable',
			'nationality'=>'required',
			'dob'=>'required|date',
			'education'=>'required',
			'gender'=>'required',
			'phone'=>'required_if:contact,phone|nullable|numeric',
			'email'=>'required_if:contact,email|nullable|email',
		]);

		$file = public_path(). '/contact_data.csv';
		$file_open = fopen("$file", "a");
		$no_rows = count(file("$file")); 
		if($no_rows > 1)
		{
			$no_rows = ($no_rows - 1) + 1;
		}
		$form_data = array(
			'Sr.No'  => $no_rows,
			'Name'  => $request->name,
			'Phone'  => $request->phone,
			'Email' => $request->email,
			'Address' => $request->address,
			'Nationality' => $request->nationality,
			'Date Of Birth' => $request->dob,
			'Education' => $request->education,
			'Gender' => $request->gender
		);
		fputcsv($file_open, $form_data);
		$name = '';
		$phone = '';
		$email = '';
		$address = '';
		$nationality = '';
		$dob = '';
		$edu = '';
		$optGender = '';

		return redirect(route('list'))->with('status', 'Information stored on contact_data.csv file');
	}

}

?>