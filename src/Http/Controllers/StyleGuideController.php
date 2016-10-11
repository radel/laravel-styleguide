<?php
namespace Radel\StyleGuide\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class StyleGuideController extends Controller
{
	public function index()
	{
		$components = array_diff(scandir(resource_path('/views/components/')), array('.','..'));
		return view('StyleGuide::styleguide',['components' => $components]);
	}

	public function show($componentName)
	{
		$data = array();
		$components = array_diff(scandir(resource_path('/views/components/')), array('.','..'));
		$json = file_get_contents(resource_path('/views/components/'.$componentName.'/data.json'));
		$data = json_decode($json, true);
		return view('StyleGuide::component', ['componentName' => $componentName, 'components' => $components, 'data' => $data[0]]);
	}
}