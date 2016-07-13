<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AdminRequest;

class AdminsController extends AdminBaseController {

	/**
	 * Return list of all admins
	 *
	 * @return \View
	 */
	public function index() {

		return view('admin.admins.admins')->with([
			'admins'    => Admin::all(),
		]);
	}


	/**
	 * Return one admin page
	 *
	 * @param Admin $admin
	 *
	 * @return \View
	 */
	public function show(Admin $admin) {

		//TODO::change the view after the frontend is done
		return view('admin.admins.admin')->with([
			'admin'     => $admin,
			'articles'  => $admin->articles,
			'positions' => $admin->positions,
			'profiles'  => $admin->profiles,
		]);
	}

	/**
	 * Return create view page
	 *
	 * @return \View
	 */
	public function create() {

		return view('.admin.admins.create')->with([
		    'submitButton'  => 'Добавить'
		]);
	}

	/**
	 * Save new admin to database
	 *
	 * @param AdminRequest $request
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(AdminRequest $request) {
		$data = $this->prepareAdminData($request);

		if ($this->adminEmailIsValid($data['email'])) {
			Admin::create($data);
		} else {

			return redirect()->back()->withErrors('email', 'unique');
		}

		return redirect()->back();
	}

	/**
	 * Return update admin page
	 *
	 * @param Admin $admin
	 *
	 * @return $this
	 */
	public function edit(Admin $admin) {

		return view('admin.admins.update')->with([
		    'admin'         => $admin,
		    'submitButton'  => 'Изменить'
		]);
	}

	/**
	 * Updates admin in DB
	 *
	 * @param AdminRequest $request
	 * @param Admin        $admin
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update(AdminRequest $request, Admin $admin) {
		$data = $this->prepareAdminData($request);

		if ($this->adminEmailIsValidForUpdate($data['email'], $admin->email)) {
			$admin->update($data);
		} else {

			return redirect()->back()->withErrors('email', 'unique');
		}

		return redirect()->back();
	}

	/**
	 * @param Admin $admin
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 * @throws \Exception
	 */
	public function delete(Admin $admin) {
		$this->updateEntitiesOnDelete($admin);
		$admin->delete();

		return redirect()->route('admins');
	}


	/**
	 * Updates created_by attribute for all existing entities(Articles, Profiles, Positions)
	 *
	 * @param Admin $admin
	 */
	private function updateEntitiesOnDelete($admin) {
		$admin->updateArticlesOnDelete();
		$admin->updatePositionsOnDelete();
		$admin->updateProfilesOnDelete();

	}


	/**
	 * Validate if email is valid for create from
	 *
	 * @string $email
	 *
	 * @return bool
	 */
	private function adminEmailIsValid($email) {
		$adminsEmails = Admin::where('id' ,'>' ,0)->pluck('email')->toArray();
		if(in_array($email, $adminsEmails)) {

			return false;
		}

		return true;

	}

	/**
	 * Validate if email is valid for update form
	 *
	 * @string $email
	 * @string $old_email
	 *
	 * @return bool
	 */
	private function adminEmailIsValidForUpdate($email, $old_email) {
		$adminsEmails = Admin::where('id' ,'>' ,0)->pluck('email')->toArray();
		if(in_array($email, $adminsEmails) && $email != $old_email) {

			return false;
		}

		return true;

	}

	/**
	 * Prepare admin data for DB
	 *
	 * @param AdminRequest $request
	 *
	 * @return array
	 */
	private function prepareAdminData($request) {
		$data = $request->all();

		$data['password'] = bcrypt($data['password']);
		unset($data['password_confirmation']);
		if(!array_key_exists('master', $data)) {
			$data['master'] = 0;
		}

		return $data;
	}
}
