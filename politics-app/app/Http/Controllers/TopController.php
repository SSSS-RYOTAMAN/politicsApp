<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Consts\PrefectureConst;

class TopController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $user = new User();
    $all = User::all();
    $allCount = $all->count();

    // 政党支持率
    for ($i=0; $i <= PrefectureConst::OPTIONS['support']; $i++) {
      $supportCount = $all->where('support', $i)->count();
      if ($supportCount) {
        $supportPercent[$i] = $user->calcPercent($allCount, $supportCount);
      } else {
        $supportPercent[$i] = 0;
      }
    }

    // 性別割合
    $sexCount = $all->pluck('sex', 'support');

    return view('top.index', compact('supportPercent'));
  }
}
