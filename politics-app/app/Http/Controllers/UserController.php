<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  // /**
  //  * Display a listing of the resource.
  //  *
  //  * @return \Illuminate\Http\Response
  //  */
  // public function index()
  // {
  // }

  /**
   * 新規登録
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('user.create');
  }

  /**
   * バリデーション
   *
   * @param UserStoreRequest $request
   * @return void
   */
  public function store(UserStoreRequest $request)
  {
    $user = new User;

    $user->name     = $request->input('name');
    $user->sex      = $request->sex;
    $user->year     = $request->year;
    $user->month    = $request->month;
    $user->day      = $request->day;
    $user->support  = $request->support;
    $user->email    = $request->input('email');
    $user->password = Hash::make($request->input('password'));

    $user->save();

    Auth::login($user);

    return redirect('/');
  }

  // /**
  //  * Display the specified resource.
  //  *
  //  * @param  int  $id
  //  * @return \Illuminate\Http\Response
  //  */
  // public function show($id)
  // {
  //     //
  // }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
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
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }

  /**
   * ログイン
   *
   * @param UserStoreRequest $request
   * @return void
   */
  public function getLogin()
  {
    return view('user.login');
  }

  /**
   * ログイン
   *
   * @param UserStoreRequest $request
   * @return void
   */
  public function postLogin(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect('/');
    }

    return back()->withErrors(array('email' => '入力されたメールアドレスとパスワードに紐づくIDが見つかりません。'));
  }

  /**
   * ログアウト
   *
   * @return void
   */
  public function logout()
  {
    Auth::logout();

    return redirect('/');
  }
}
