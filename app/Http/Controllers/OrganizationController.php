<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    
    public function index()
    {
        $data = Organization::latest()->paginate(5);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

  
    public function create()
    {
        return view('create');
    }

    /**

     */
    public function store(Request $request)
    {
        $request->validate([
            'org_name'              =>  'required',
            'org_address'           =>  'required',
            'org_email'             =>  'required|email|unique:organization',
            'org_photo'             =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $file_name = time() . '.' . request()->org_photo->getClientOriginalExtension();

        request()->org_photo->move(public_path('images'), $file_name);

        $organization = new Organization;

        $organization->org_name = $request->org_name;
        $organization->org_address = $request->org_address;
        $organization->org_email = $request->org_email;
        $organization->advocacy = $request->advocacy;
        $organization->org_photo = $file_name;

        $organization->save();

        return redirect()->route('organization.index')->with('success', 'Organization Added successfully.');
    }

    /**
     * Display the specified resource.

     */
    public function show(Organization $organization)
    {
        return view('show', compact('organization'));
    }

    /**
     * Show the form for editing the specified resource.
     *
   
     */
    public function edit(Organization $organization)
    {
        return view('edit', compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(Request $request, Organization $organization)
    {
        $request->validate([
            'org_name'          =>  'required',
            'org_address'       =>  'required',
            'org_email'     =>  'required|email',
            'org_photo'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $org_photo = $request->hidden_org_photo;

        if($request->org_photo != '')
        {
            $org_photo = time() . '.' . request()->org_photo->getClientOriginalExtension();

            request()->org_photo->move(public_path('images'), $org_photo);
        }

        $organization = Organization::find($request->hidden_id);

        $organization->org_name = $request->org_name;
        $organization->org_address = $request->org_address;
        $organization->org_email = $request->org_email;
        $organization->advocacy = $request->advocacy;

        $organization->org_photo = $org_photo;

        $organization->save();

        return redirect()->route('organization.index')->with('success', 'Organization Records Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
      */
    public function destroy(Organization $organization)
    {
        $organization->delete();

        return redirect()->route('organization.index')->with('success', 'Organization as been deleted successfully');
    }
}

